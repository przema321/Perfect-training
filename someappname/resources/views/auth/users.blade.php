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

<div class="container">
    <div class="content">
        <div class="card" style="padding-top: 150px">
            <div class="card-body pt-4 pb-4">
                <h3 class="text-center">Users to edit</h3>
                @foreach($users as $user)
                    <ul class="text-center">
                        <a href="/users/{{$user->id}}">
                            @if($user->is_admin == 0)
                                {{$user->name}}

                            @endif
                        </a>
                    </ul>
                @endforeach
            </div>
        </div>

    </div>
</div>
</body>

</html>


@endsection
