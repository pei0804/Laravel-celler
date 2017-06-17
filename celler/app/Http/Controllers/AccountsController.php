<?php

namespace App\Http\Controllers;

use App\Model\Accounts;

class AccountsController extends Controller
{
    public function index()
    {
        // getメソッドで送信されたemailというキーのパラメータを取得する
        $searchEmail = \Request::get('email');
        // クエリを作成開始する
        $query = Accounts::query();
        if(!empty($searchEmail)) {
            // 検索をする場合は、queryを追加する
            $query->where('email', 'like', '%'.$searchEmail.'%');
        }
        // 出来上がったqueryを実行する
        $accounts = $query->get();
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
