@extends('layouts.app')
@section('content')
<style> footer{
        margin-top: 250px;
    }
</style>
<body>
<div class="container">
    <div class="content text-center">
        <h3>POSTS</h3>
        <a href="/posts/create">DODAJ POSTA</a>
        @foreach($posts as $post)
            <div>
                <div
                    style="font-size: 15px">{{\Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}} {{\Carbon\Carbon::parse($post->created_at)->format('H:i')}}
                    &nbsp;/&nbsp; <a href="/posts/{{$post->id}}">{{$post->title}}</a></div>


            </div>
        @endforeach
    </div>
</div>
</body>


@endsection
