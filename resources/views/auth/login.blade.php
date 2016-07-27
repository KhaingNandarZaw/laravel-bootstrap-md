@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                        <h2>Login</h2>
                        <form class="form" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <div class="form-group label-floating {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label for="email" class="control-label">E-mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group label-floating {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label for="password" class="control-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-raised btn-block">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <!-- <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
