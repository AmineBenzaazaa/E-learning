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
                      <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="content-box">
                              <div class="basic-group">
                                  <div class="form-group">
                                      <label for="name"><span class="input-field-icon"><i class="fas fa-user"></i></span>{{ __(' Name') }}</label>
                                      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" value="" required="">
                                      @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                  </div>
                                  <div class="form-group">
                                    <label for="role"><span class="input-field-icon"><i class="fas fa-user-friends"></i></span>{{ __(' Role') }}</label>
                                    <div class="form-control col-12">
                                        <input type="radio" name="role_id" value="2">
                                        <label for="Instructeur">Instructeur</label>
                                        <input class="ml-3" type="radio" name="role_id" value="3">
                                        <label for="Etudiant">Etudiant</label>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="email"><span class="input-field-icon"><i class="fas fa-envelope"></i></span>{{ __(' E-Mail') }}</label>
                                      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="registration-email" placeholder="Email" value="" required="">
                                      @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                  </div>
                                  <div class="form-group">
                                      <label for="password"><span class="input-field-icon"><i class="fas fa-lock"></i></span>{{ __(' Password') }}</label>
                                      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="registration-password" placeholder="Password" value="" required="">
                                  </div>
                              </div>
                          </div>
                          <div class="content-update-box">
                              <button type="submit" class="btn">{{ __('Register') }}</button>
                          </div>
                          <div class="account-have text-center">
                              Already Have An Account? <a href="{{ route('login') }}">Login</a>
                          </div>
                      </form>
                  </div>
                  <div class="user-dashboard-content w-100 register-form hidden">
                      <div class="content-title-box">
                          <div class="title">Registration Form</div>
                          <div class="subtitle">Sign Up And Start Learning.</div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')