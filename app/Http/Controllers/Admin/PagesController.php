<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function admin()
    {
        return view('admin.home');
    }

    public function readNotification()
    {

    }
}
