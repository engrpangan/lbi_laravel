<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Bridge International</title>
    <link rel="icon" href="{{ asset('img/logo/lbi.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- MDBOOTSTRAP -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet"/>
    
</head>
<body>

    <div class="portal_page">
        <!-- Portal Navigation -->
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="../">
                    <img
                        src="{{ asset('img/logo/lbi.png') }}"
                        class="me-2"
                        height="20"
                        alt="MDB Logo"
                        loading="lazy"
                    />
                    <small>Language Bridge International</small>
                </a>
            </div>
        </nav>

        <div class="login_sign-up">
            <div class="container">
                <div class="login_signup_container shadow-5-strong">
                    <!-- Pills navs -->
                    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a
                            class="nav-link active"
                            id="login-btn"
                            data-mdb-toggle="pill"
                            href="#login-pills"
                            role="tab"
                            aria-controls="login-pills"
                            aria-selected="true"
                            >Login</a
                            >
                        </li>
                        <li class="nav-item" role="presentation">
                            <a
                            class="nav-link"
                            id="sig-up-btn"
                            data-mdb-toggle="pill"
                            href="#sign-up-pills"
                            role="tab"
                            aria-controls="sign-up-pills"
                            aria-selected="false"
                            >Sign Up</a
                            >
                        </li>
                    </ul>

                    <!-- Pills content -->
                    <div class="tab-content" id="ex2-content">
                        <div
                            class="tab-pane fade show active"
                            id="login-pills"
                            role="tabpanel"
                            aria-labelledby="login-btn"
                        >
                            <!-- Content -->
                            <div class="form_container">
                                <form action="{{route('user-login')}}" method="post" >
                                    @csrf
                                    @if(Session::has('id_num'))
                                    <h3 class="text-center">You are already signed In</h3>
                                    <a href="continue" class="btn btn-success">Continue</a>
                                    <a href="logout" class="btn btn-danger">Logout</a><br><br>
                                    @endif
                                    
                                    @if(!Session::has('id_num'))
                                    <h3 class="text-center">Welcome back!</h3>
                                    @if(Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                    @if(Session::has('fail'))
                                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                    @endif
                                    
                                    <div class="input_container">
                                        <div class="form-outline">
                                            <input type="text" id="email_add" name="email_add" class="form-control" value="{{old('email_add')}}" />
                                            <label class="form-label" for="email_add">Enter Email Address</label>
                                        </div>
                                        <span class="text-danger">@error('email_add') {{$message}} @enderror</span>
                                    </div>
                                    
                                    <div class="input_container">
                                        <div class="form-outline">
                                            <input type="password" id="user_pass" name="user_pass" class="form-control" value="{{old('user_pass')}}" />
                                            <label class="form-label" for="user_pass">Enter Password</label>
                                        </div>
                                        <span class="text-danger">@error('user_pass') {{$message}} @enderror</span>
                                    </div>

                                    <div class="input_container">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </form>

                                <div class="forgot_pass">
                                    <a href="#" class="forgot_pass_btn">Forgot Password?</a>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="sign-up-pills"
                            role="tabpanel"
                            aria-labelledby="sig-up-btn"
                        >
                            <!-- Content -->
                            <div class="form_container">
                                <h3 class="text-center">Register Now!</h3>

                                <div class="input_container">
                                    <div class="form-outline">
                                        <input type="text" id="firstname" class="form-control" />
                                        <label class="form-label" for="firstname">First Name</label>
                                    </div>
                                </div>

                                <div class="input_container">
                                    <div class="form-outline">
                                        <input type="text" id="familyname" class="form-control" />
                                        <label class="form-label" for="familyname">Family Name</label>
                                    </div>
                                </div>
                                
                                <div class="input_container">
                                    <div class="form-outline">
                                        <input type="email" id="email" class="form-control" />
                                        <label class="form-label" for="email">Email Address</label>
                                    </div>
                                </div>

                                <div class="input_container">
                                    <div class="form-outline">
                                        <input type="password" id="pass" class="form-control" />
                                        <label class="form-label" for="pass">Password</label>
                                    </div>
                                </div>

                                <div class="input_container">
                                    <button class="btn btn-primary">Register</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
</body>
</html>