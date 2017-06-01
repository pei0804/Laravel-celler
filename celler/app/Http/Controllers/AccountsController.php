<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function index()
    {
        $user['id']           = 1;
        $user['name']         = 'pei';
        $user['email']        = 'example@gmail.com';
        $user['updated_at']   = '2016-02-02 10:10:10';
        $user['created_at']   = '2016-02-02 10:10:10';
        $users[] = $user;

        $user['id']           = 2;
        $user['name']         = 'pei2';
        $user['email']        = 'example2@gmail.com';
        $user['updated_at']   = '2017-02-02 10:10:10';
        $user['created_at']   = '2017-02-02 10:10:10';
        $users[] = $user;
        return view('accounts.list',compact('users'));
    }

    public function create()
    {
        //
    }
    public function store()
    {
        //
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
