@extends('layouts.app')

@section('content')
    <link href="https://fonts.googleapis.com/css?family=Courier+Prime:400,700,700i&display=swap" rel="stylesheet">

    <div class="container" style="margin-bottom: 30px">
        <h2 style="margin-top: 30px; font-family: Nunito, sans-serif" class="text-center">NEWS</h2>
        @if(Auth::user()->is_admin===1)
        <p style="margin-top: 30px; font-family: Nunito, sans-serif" class="text-center"><a href="/posts/create" >Add Post</a></p>
        @endif
            @foreach($posts as $post)
            <div style="font-family: 'Courier Prime', monospace;
" class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card pt-5">


                        <div class="card-body">

                            <div class="content">
                                <div class="title m-b-md">


                                    <div>
                                        <div style="font-size: 13px">
                                            <i>{{\Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}} {{\Carbon\Carbon::parse($post->created_at)->format('H:i')}}
                                                &nbsp;/&nbsp;
                                                @if(Auth::user()->is_admin===1)
                                                    {{$post->title}}
                                                    <a href="/posts/{{$post->id}}/edit">Edit Post</a>
                                                @else
                                                    {{$post->title}}
                                                @endif

                                            </i></div>
                                        <hr>
                                        <p>{{$post->post}}</p>
                                    </div>


                                    <hr>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

            </div>
        @endforeach
    </div>
@endsection
