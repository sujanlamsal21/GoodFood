@extends('footer.footer')
@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="sign-in-page">
        <div class="sign-in-popup">
            <div class="sign-in-pop">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cmp-info">
                            <div class="cm-logo">
                                <img src="{{url('image/login-img.JPG')}}" alt="logo">
                                <p>Food Good, is a global freelancing platform and social networking where
                                    businesses and independent professionals connect and collaborate remotely</p>
                            </div>
                            <!--cm-logo end-->
                            <img src="{{url('image/power.JPG')}}" alt="logo">
                        </div>
                        <!--cmp-info end-->
                    </div>
                    <div class="col-lg-6">
                        <div class="wrapper-btn">
                            <div class="title-text">
                                <div class="title login">
                                    Login</div>
                                <div class="title signup">
                                    Signup</div>
                            </div>
                            <div class="form-container">
                                <div class="slide-controls">
                                    <input type="radio" name="slide" id="login" checked>
                                    <input type="radio" name="slide" id="signup">
                                    <label for="login" class="slide login">Login</label>
                                    <label for="signup" class="slide signup">Signup</label>
                                    <div class="slider-tab">
                                    </div>
                                </div>
                                <div class="form-inner">
                                    <form action="/loginSubmit" method="POSt" class="login">
                                        @csrf
                                        <div class="field">
                                            <input type="text" placeholder="Username" name="name" id="name" class="@error('name') is-invalid @enderror" value="{{old('name')}}" required autocomplete="name" autofocus>
                                            @error('name')
                                              <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                           </span>
                                            @enderror
                                        </div>
                                        <div class="field">
                                            <input type="password" placeholder="Password" name="password" required>
                                        </div>
                                        <div class="pass-link">
                                            <a href="#">Forgot password?</a>
                                        </div>
                                        <div class="field btn">
                                            <div class="btn-layer">
                                            </div>
                                            <input type="submit" value="Login">
                                        </div>
                                        <div class="signup-link">
                                            Not a member? <a href="">Signup now</a>
                                        </div>
                                        <div class="login-social">
                                            <h4>Or Login/Signup With</h4>
                                            <ul>
                                                <li><a href="#" title="" class="fb"><i
                                                            class="fab fa-facebook-square"></i>Login
                                                        Via Facebook</a></li>
                                                <li><a href="#" title="" class="tw"><i class="fab fa-twitter"></i>Login
                                                        Via Twitter</a></li>
                                            </ul>
                                        </div>
                                    </form>
                                    <form action="{{ route('register') }}" class="signup" method="post">
                                        @csrf
                                        <div class="field">
                                            <input type="text" placeholder="Full Name"  id="name" class="@error('name') is-invalid @enderror" value="{{old('name')}}" required autocomplete="name" autofocus>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                         </span>
                                          @enderror
                                        </div>
                                        <div class="field">
                                            <input type="email" id="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="field">
                                            <input type="password" placeholder="Password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        </div>
                                        <div class="field">
                                            <input type="password" placeholder="Confirm password" id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                        <div class="field btn">
                                            <div class="btn-layer">
                                            </div>
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--sign-in-pop end-->
    </div>
    <!--sign-in-page end-->
</div>

<script>
const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");
signupBtn.onclick = (() => {
    loginForm.style.marginLeft = "-50%";
    loginText.style.marginLeft = "-50%";
});
loginBtn.onclick = (() => {
    loginForm.style.marginLeft = "0%";
    loginText.style.marginLeft = "0%";
});
signupLink.onclick = (() => {
    signupBtn.click();
    return false;
});
</script>

@endSection