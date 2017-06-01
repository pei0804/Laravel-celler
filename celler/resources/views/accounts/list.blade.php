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
    <h1>accounts</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>email</th>
            <th>updated_at</th>
            <th>created_at</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['updated_at']}}</td>
                <td>{{$user['created_at']}}</td>
            </tr>
        @endforeach
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
</body>
</html>