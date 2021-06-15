@include('layouts.header')

<section class="category-header-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('login') }}">
                                Login
                            </a>
                        </li>
                    </ol>
                </nav>
                <h1 class="category-name">
                    Registered User
                </h1>
            </div>
        </div>
    </div>
</section>
<section class="category-course-list-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
              <div class="user-dashboard-box mt-3">
                  <div class="user-dashboard-content w-100 login-form">
                      <div class="content-title-box">
                          <div class="title">Login</div>
                          <div class="subtitle">Provide Your Valid Login Credentials.</div>
                      </div>
                      <form method="POST" action="{{ route('login') }}">
                      @csrf
                          <div class="content-box">
                              <div class="basic-group">
                                  <div class="form-group">
                                      <label for="email"><span class="input-field-icon"><i class="fas fa-envelope"></i></span>{{ __(' E-Mail Address') }}</label>
                                      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="login-email" placeholder="Email" value="" required="">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                  </div>
                                  <div class="form-group">
                                      <label for="password"><span class="input-field-icon"><i class="fas fa-lock"></i></span>{{ __(' Password') }}</label>
                                      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" value="" required="">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                  </div>
                              </div>
                          </div>
                          <div class="content-update-box">
                              <button type="submit" class="btn">{{ __('Login') }}</button>
                          </div>
                          <div class="forgot-pass text-center">
                              <span>or</span>
                              <a href="{{ route('password.request') }}" class="">Forgot Password</a>
                          </div>
                          <div class="account-have text-center">
                              Do Not Have An Account? <a href="{{ route('register') }}" class="">Sign Up</a>
                          </div>
                      </form>
                  </div>
              </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')