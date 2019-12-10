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
<h1>POSTS</h1>
<a href="/posts/create">DODAJ POSTA</a>
@foreach($posts as $post)
    <div>
        <div>{{\Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}}</div>
        <div>{{\Carbon\Carbon::parse($post->created_at)->format('H:i')}}</div>
        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
        <div>{{$post->post}}</div>
    </div>
@endforeach
</body>
</html>

@endsection
