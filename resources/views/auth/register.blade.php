@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">

      <div class="col-sm-6 col-md-8 col-md-offset-2">
            <h1 class="text-center login-title"><b><i>Sign Up Informational Website</i></b></h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input value="{{ old('name') }}" type="text" class="form-control" placeholder="Username" required name="name">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input value="{{ old('email') }}" type="text" class="form-control" placeholder="Email" required name="email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <input id="password" type="password" class="form-control" name="password" placeholder="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirm password">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                        </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign Up</button>
                </form>
            </div>
            <a href="{{url('login')}}" class="text-center new-account">Log in </a>
        </div>
</div>
</div>











@endsection
