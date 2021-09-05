@extends('web.layout')
@section('title')
Sign in
@endsection

@section('content')


<div class="hero-area section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(asset{{('web/img/page-background.jpg')}})"></div>
    <!-- /Backgound Image -->

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <ul class="hero-area-tree">
                    <li><a href="{{url("/")}}">Home</a></li>
                    <li>Sign In</li>
                </ul>
                <h1 class="white-text">Sign In to start exam</h1>

            </div>
        </div>
    </div>

</div>
<!-- /Hero-area -->

<!-- Contact -->
<div id="contact" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <!-- login form -->
            <div class="col-md-6 col-md-offset-3">
                <div class="contact-form">
                    <h4>{{__('web.signin')}}</h4>
                    @include('web.inc.messages')
                    <form method="POST" action="{{url('login')}}">
                        @csrf
                        <input class="input" type="email" name="email" placeholder="{{__('web.email')}}">
                        <input class="input" type="password" name="password" placeholder="{{__('web.password')}}">
                        <input type="checkbox"  name="remember" id="">Remember Me
                        <button type="submit" class="main-button icon-button pull-right">Sign In</button>

                        <a href="{{url('forgot-password')}}">{{__('web.forgot-password')}}</a>
                    </form>
                </div>
            </div>
            <!-- /login form -->

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
@endsection


