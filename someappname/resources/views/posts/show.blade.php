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
{{dd($post)}}
<div>{{\Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}}</div>
<div>{{\Carbon\Carbon::parse($post->created_at)->format('H:i')}}</div>
<div>{{$post->title}}</div>
<div>{{$post->post}}</div>
<a href="/posts/{{$post->id}}/edit">EDIT</a>
</body>
</html>


@endsection
