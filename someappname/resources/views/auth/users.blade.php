@extends('layouts.app')
@section('content')

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Users</h1>
@foreach($users as $user)
    <ul>
    <a href="/users/{{$user->id}}">
        @if($user->is_admin == 0)
            {{$user->name}}

        @endif
    </a>
    </ul>
@endforeach
</body>
</html>


@endsection
