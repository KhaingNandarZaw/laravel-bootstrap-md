@extends('layouts.app')

@section('content')
<div class="container">
    {!! Toastr::render() !!}
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h2>Register</h2>
                
                        <form class="form" action="{{ url('/register') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group label-floating {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label class="control-label" for="name">Name</label>
                                <input type="name" name="name" value="{{ old('name') }}" class="form-control">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group label-floating {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label class="control-label" for="email">E-mail</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group label-floating {{ $errors->has('password') ? 'has-error' : '' }}">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" name="password" class="form-control">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group label-floating {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                                <label class="control-label" for="password_confirmation">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button class="btn btn-raised btn-primary btn-block">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection