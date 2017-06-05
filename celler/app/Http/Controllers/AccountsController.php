<?php

namespace App\Http\Controllers;

use App\Model\Accounts;

class AccountsController extends Controller
{
    public function index()
    {
        $accounts = Accounts::all();
        return view('accounts.list',compact('accounts'));
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
