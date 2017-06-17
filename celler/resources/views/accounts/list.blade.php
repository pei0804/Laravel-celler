<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <title>Document</title>
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <!-- 吐き出されれるHTMLを確認してください -->
    {!! Form::open(['method' => 'get']) !!}
    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('検索', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    <hr>
    <h1>accounts</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>email</th>
            <th>updated_at</th>
            <th>created_at</th>
        </tr>
        @forelse ($accounts as $account)
            <tr>
                <td>{{$account->id}}</td>
                <td>{{$account->name}}</td>
                <td>{{$account->email}}</td>
                <td>{{$account->updated_at}}</td>
                <td>{{$account->created_at}}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">no tasks</td>
            </tr>
        @endforelse
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
</body>
</html>