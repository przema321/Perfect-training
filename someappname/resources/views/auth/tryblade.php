@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-inline">
                            <div class="form-group">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="second_name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                                <div class="col-md-6">
                                    <input id="second_name" type="text"
                                           class="form-control @error('second_name') is-invalid @enderror"
                                           name="second_name" value="{{ old('second_name') }}" required
                                           autocomplete="second_name" autofocus>

                                    @error('second_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-horizontal">
                            <div class="form-group row">

                                <label for="email"
                                       class="col-md-2 col-form-label text-md-left">{{ __('E-Mail') }}</label>

                                <div class="col-md-10">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-inline">
                            <div class="form-group row col-md-6">
                                <label for="birth_date"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Birth Date') }}</label>

                                <div class="col-md-6">
                                    <input id="birth_date" type="date"
                                           class="form-control @error('birth_date') is-invalid @enderror"
                                           name="birth_date" value="{{ old('birth_date') }}" required
                                           autocomplete="birth_date" autofocus>

                                    @error('birth_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="sex"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Sex') }}</label>
                                    <div class="col-md-6">
                                        <select name="sex">
                                            <option>male</option>
                                            <option>female</option>
                                        </select>
                                        @error('sex')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exp"
                                           class="col-md-4 col-form-label text-md-right">{{ __('exp') }}</label>

                                    <div class="col-md-6">
                                        <select name="exp">
                                            <option>easy</option>
                                            <option>mid</option>
                                            <option>advanced</option>
                                        </select>
                                        @error('exp')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-inline">
                            <div class="form-group row col-md-6">
                                <label for="weight"
                                       class="col-md-4 col-form-label text-md-right">{{ __('weight (kg)') }}</label>

                                <div class="col-md-6">
                                    <input id="weight" type="text"
                                           class="form-control @error('weight') is-invalid @enderror" name="weight"
                                           value="{{ old('weight') }}" required autocomplete="weight">

                                    @error('weight')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row col-md-6">
                                <label for="height"
                                       class="col-md-4 col-form-label text-md-right">{{ __('height (cm)') }}</label>

                                <div class="col-md-6">
                                    <input id="height" type="text"
                                           class="form-control @error('height') is-invalid @enderror" name="height"
                                           value="{{ old('height') }}" required autocomplete="height">

                                    @error('height')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-inline">
                            <div class='col-md-6'>
                                <div class="form-group row ">
                                    <label for="password"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password"
                                               required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-6'>
                                <div class="form-group row">
                                    <label for="password-confirm"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row md-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection




