@extends('auth')


@section('title')
SignUp Page
@endsection


@section('main')
    <div class="col-md-6 contents">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-4">
                    <h3>Sign Up</h3>
                    <p class="mb-4">Create an account to promote your business, all you have to do is Get Started.</p>
                </div>


                <form action="createuser" method="post">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="username">Username</label>
                        <input type="text" name='username' class="form-control" id="username">
                    </div>
                    <div class="form-group mb-2">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group mb-4">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>

                    <div class="d-flex mb-5 align-items-center">
                        <label class="control control--checkbox mb-0"><span class="caption">Remember
                                me</span>
                            <input type="checkbox" checked="checked" />
                            <div class="control__indicator"></div>
                        </label>
                        <span class="ml-auto"><a href="{{ route('login') }}" class="forgot-pass">Log In</a></span>
                    </div>

                    <input type="submit" value="Sign Up" class="btn btn-block btn-primary">
{{-- 
                    <span class="d-block text-left my-4 text-muted">&mdash; or signup with &mdash;</span>

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
