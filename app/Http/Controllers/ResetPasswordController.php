<?php

namespace App\Http\Controllers;


use App\Mail\ResetPasswordMail;
use App\PasswordReset;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ResetPasswordController extends Controller
{
    protected $validTo = 30;

    public function forgetPassword(Request $request)
    {
        //  Custom Message Validation.
        $customMessages = [
            'exists' => 'Your search did not return any results. Please try again with other information.'
        ];

        // Validation Check Mail.
        $validator = Validator::make( $request->only('email') ,[
            'email' => 'required|exists:users'
        ], $customMessages);

        //  if $request have error return error message.
        if( $validator->fails() ){
            return response()->json($validator->errors()->toJson(), 400);
        }

        //  get mail from resetPassword table.
        $checkEmail = PasswordReset::where('email',$request->get('email'))->first();

        //  check if mail found.
        if($checkEmail){
            $startTime = Carbon::parse($checkEmail->created_at);

            if($startTime->diffInMinutes(Carbon::now()) > $this->validTo){

                //  delete old token from database;
                PasswordReset::where('email',$request->get('email'))->delete();

                //  random function get token code 6 digits long.
                $token = rand(100000,999999);

                //  create new token and mail.
                $resetPassword = new PasswordReset();
                $resetPassword->email = $request->get('email');
                $resetPassword->token = $token;
                $resetPassword->save();

                //  call method send mail.
                $this->senMail( $request->get('email') , $token);

                return response()->json([
                    'success'   =>  'true',
                    'message'   =>  'Please check your email for a message with your code. Your code is 6 digits long.'
                ]);
            };

            //  call method send mail.
            $this->senMail( $request->get('email') , $checkEmail->token);

            return response()->json([
                'success'   =>  'true',
                'message'   =>  'Please check your email for a message with your code. Your code is 6 digits long.'
            ]);
        }

        //  random function get token code 6 digits long.
        $token = rand(100000,999999);

        $resetPassword = new PasswordReset();
        $resetPassword->email = $request->get('email');
        $resetPassword->token = $token;
        $resetPassword->save();

        //  call method send mail.
        $this->senMail( $request->get('email') , $token);

        return response()->json([
            'success'   =>  'true',
            'message'   =>  'Please check your email for a message with your code. Your code is 6 digits long.'
        ]);
    }

    //  method send mail.
    private function senMail($email , $token)
    {
        Mail::to( $email )->send(new ResetPasswordMail($token));

    }

    public function checkToken(Request $request)
    {
        // Validation Check Mail.
        $validator = Validator::make( $request->only('email','token') ,[
            'email' => 'required|exists:users',
            'token' => 'required|numeric|digits:6'
        ]);

        //  if $request have error return error message.
        if( $validator->fails() ){
            return response()->json($validator->errors()->toJson(), 400);
        }

        //  get mail from resetPassword table.
        $checkToken = PasswordReset::where('email',$request->get('email'))->first();

        if( $request->get('token') !== $checkToken->token ) {
            return response()->json([
                'success' => false,
                'message'   =>  'token invalid.'
            ], 401);
        }

        return response()->json([
            'success'   =>  'true',
        ]);

    }

    public function ResetPassword(Request $request)
    {
        // Validation Check Mail.
        $validator = Validator::make( $request->only('email','token','password' , 'password_confirmation') ,[
            'email'     => 'required|exists:users',
            'token'     => 'required|numeric|digits:6',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6'
        ]);

        //  if $request have error return error message.
        if( $validator->fails() ){
            return response()->json($validator->errors()->toJson(), 400);
        }

        //  get mail from resetPassword table.
        $checkToken = PasswordReset::where('email',$request->get('email'))->first();


        //  check if mail found.
        if( $request->get('token') !== $checkToken->token ){

            return response()->json([
                'success' => false,
                'message' => 'token invalid.'
            ], 401);
        }

        // reset password
        $user = User::where('email' , $request->get('email'))->first();
        $user->password = bcrypt( $request->get('password') );
        $user->update();
        return response()->json([
            'success'   =>  'true',
        ]);

    }


}
