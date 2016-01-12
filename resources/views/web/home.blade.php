@extends('web.layout.app')
@section('content')
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<section class="hero">
    <section class="navigation">
        <header>
            <div class="header-content">
                <div class="logo"><a href="#"><img src="{{URL::asset('web/img/logo-wh.png')}}"></a></div>
                <div class="header-nav">
                    <nav>

                        <ul class="member-actions">
                            <li><a href="{{URL::to('/#contact')}}" class="login">Contact US</a></li>
                            <li><a href="{{URL::to('/login')}}" class="btn-white btn-small">Login</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="navicon">
                    <a class="nav-toggle" href="#"><span></span></a>
                </div>
            </div>
        </header>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="hero-content text-center">
                    <h1>Retain Your Customers !</h1>
                    <p class="intro"> It costs an average of 7 times more to acquire a new customer than it does to retain a current one. (source: Kissmetrics)</p>
                    <a href="#" class="btn btn-fill btn-large btn-margin-right">Get Started</a>
                    <a href="#" class="btn btn-accent btn-large">Learn more</a>
                </div>
            </div>
        </div>
    </div>
    <div class="down-arrow floating-arrow"><a href="#"><i class="fa fa-angle-down"></i></a></div>
</section>

<section class="hero-strip section-padding">
    <div class="container">
        <div class="col-md-12 text-center">
            <h2> Every customer has an opinion. </h2>
            <h3 class="text-white"> Can you respond directly before they post online ? </h3>
            <p>Diners who received a response to their comments revisited that restaurant 20% more often than they had previously to the response;
                they also spent 16% more money at that restaurant than they did before they received the response. (Source: Rewards Network)</p>
            <a href="#" class="btn btn-ghost btn-fill btn-large">Get Started</a>
            <div class="logo-placeholder floating-logo"><img src="{{URL::asset('web/img/vip.png')}}"></div>
        </div>
    </div>
</section>
<section class="features section-padding" id="features">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-7">
                <div class="feature-list">
                    <h2 class="main-title"> Every business has VIP's </h2>
                    <ul class="features-stack">
                        <li class="feature-item">
                            <div class="feature-icon">
                                <span data-icon="&#xe023;" class="icon"></span>
                            </div>
                            <div class="feature-content">
                                <h5>Identify your customers</h5>
                                <p> Retain your loyal customers by giving them exclusive offers on the days they deserve the most.</p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <img src="{{URL::asset('web/img/vip.png')}}">
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="device-showcase">
        <div class="devices">
            <div class="ipad-wrap"></div>
        </div>
    </div>
    <div class="responsive-feature-img"><img src="{{URL::asset('web/img/vip.png')}}" alt="responsive devices"></div>
</section>
<section class="features-extra section-padding" id="assets">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="feature-list">
                    <h2> Customers Feedback </h2>
                    <p> We provide you with complete analytics of customer's feedback. So that you can analyze and improve your services accordingily. </p>
                    <p>
                        <img src="{{URL::asset('web/img/feedback2.png')}}">
                    </p>
                    <a href="#" class="btn btn-ghost btn-fill btn-small">Get Started</a>
                </div>
            </div>
        </div>
    </div>
    <div class="macbook-wrap wp3"></div>
    <div class="responsive-feature-img"><img src="{{URL::asset('web/img/macbook-pro.png')}}" alt="responsive devices"></div>
</section>
<section class="features section-padding" id="features" style="background:url('{{URL::asset('web/img/marketing.jpg')}}'); background-size:cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-7">
                <div class="feature-list">
                    <h2 class="main-title">Promote your offers</h2>
                    <ul class="features-stack">
                        <li class="feature-item">
                            <div class="feature-icon">
                                <span data-icon="&#xe021;" class="icon"></span>
                            </div>
                            <div class="feature-content">
                                <h5>Reach out to every customer</h5>
                                <p>Promote your offers among your existing customers through SMS or Email Marketing. </p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="feature-icon">
                                <span data-icon="&#xe04a;" class="icon"></span>
                            </div>
                            <div class="feature-content">
                                <h5>Spread the word-of-mouth marketing</h5>
                                <p>Make your customers happy they will automatically
                                    spread your brand across their friends and family .
                                </p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="feature-icon">
                                <span data-icon="&#xe028;" class="icon"></span>
                            </div>
                            <div class="feature-content">
                                <h5>1-Click Marketing Campaigns</h5>
                                <p>
                                    Your marketing campaigns will leverage more customers.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="responsive-feature-img"><img src="{{URL::asset('web/img/marketing.png')}}" alt="responsive devices"></div>
</section>

<section class="sign-up section-padding text-center" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2>Get Started by contacting us</h2>
                <p>You can simply request a callback and we will respond in next 24 hr</p>
                <form class="signup-form" method="POST" role="form" action="{{URL::to('/contact-us')}}">
                    {!! csrf_field() !!}
                    <div class="form-input-group">
                        <i class="fa fa-envelope"></i><input type="email" name="email" placeholder="Your Email id" />
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <div class="form-input-group">
                        <i class="fa fa-phone"></i><input type="text" name="phone_no" placeholder="Your Phone Number" />
                    </div>
                    <button type="submit" class="btn-fill sign-up-btn">REQUEST CALLBACK</button>
                </form>
                @if(Session::has('success_message'))
                    <p style="color: green">{{Session::get('success_message')}}</p>
                @endif
            </div>
        </div>
    </div>
</section>
<section class="to-top">
    <div class="container">
        <div class="row">
            <div class="to-top-wrap">
                <a href="#top" class="top"><i class="fa fa-angle-up"></i></a>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="footer-links">
                    <ul class="footer-group">

                    </ul>
                    <p>Copyright © 2015 <a href="#"></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection