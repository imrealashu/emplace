@extends('web.layout.app')

@section('content')
    <section class="sign-up section-padding text-center" id="contact" style="background:#f1f1f1;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2> Login To Your Dashboard </h2>
                    <p> If you are not registered then please <a href="{{URL::to('/#contact')}}"> Contact Us </a></p>
                    <form class="signup-form" method="POST" role="form" action="{{ url('/login') }}">
                        {!! csrf_field() !!}
                        <div class="form-input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <i class="fa fa-envelope"></i><input type="email" class="" placeholder="Your Email id"  name="email" value="{{ old('email') }}" />
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <i class="fa fa-phone"></i><input type="password" name="password" class="" placeholder="Password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-fill sign-up-btn">LOGIN</button>
                    </form>
                    <p><a href="{{ url('/password/reset') }}"> Forgot Your Password ? </a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
