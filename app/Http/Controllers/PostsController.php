<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    // Index
    public function index() {
        return view('index');
    }

    // Portal
    public function portal() {
        return view('portal');
    }

    // Admin Accounts Table
    public function accountsTable() {
        return view('accounts');
    }

}
