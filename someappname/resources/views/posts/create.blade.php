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
<h1>Add post</h1>
<form method="POST" action="/posts">
    @csrf
    <div>
        <div>
            <p>Topic</p>
            <input type="text" name="title">
        </div>
        <div>
            <p>Text</p>
            <textarea name="post"></textarea>
        </div>
        <button type="submit">ADD</button>
    </div>
</form>
</body>
</html>

@endsection
