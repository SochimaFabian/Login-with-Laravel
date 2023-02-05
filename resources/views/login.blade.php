

@extends('auth')

@section('title')
Login Page
@endsection

@section('main')
    <div class="col-md-6 contents">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-4">
                    <h3>Sign In</h3>
                    <p class="mb-4">Welcome back login into your account.</p>
                </div>


                <form action="/auth" method="post">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username">

                    </div>
                    <div class="form-group mb-2">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password">

                    </div>

                    <div class="d-flex mb-5 align-items-center">
                        <label class="control control--checkbox mb-0"><span class="caption">Remember
                                me</span>
                            <input type="checkbox" checked="checked" />
                            <div class="control__indicator"></div>
                        </label>
                        <span class="ml-auto"><a href="{{ route('signup') }}" class="forgot-pass">Sign Up</a></span>
                    </div>

                    <input type="submit" value="Log In" class="btn btn-block btn-primary">
{{-- 
                    <span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span>

                    <div class="social-login">
                        <a href="#" class="facebook">
                            <span class="icon-facebook mr-3"></span>
                        </a>
                        <a href="#" class="twitter">
                            <span class="icon-twitter mr-3"></span>
                        </a>
                        <a href="#" class="google">
                            <span class="icon-google mr-3"></span>
                        </a>
                    </div> --}}
                </form>

            </div>
        </div>

    </div>
@endsection
