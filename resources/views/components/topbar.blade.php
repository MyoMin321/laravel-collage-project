<!-- TOP BAR -->
<div class="ed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ed-com-t1-left">
                    <ul>
                        <li><a href="#">Contact: Lake Road, Suite 180 Farmington Hills, U.S.A.</a>
                        </li>
                        <li><a href="#">Phone: +101-1231-1231</a>
                        </li>
                    </ul>
                </div>
                @if (!auth()->user())
                    
                <div class="ed-com-t1-right">
                    <ul>
                        <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a>
                        </li>
                        <li><a href="#!" data-toggle="modal" data-target="#modal2">Sign Up</a>
                        </li>
                    </ul>
                </div>
                
                @else

                <div class="ed-com-t1-right">
                    <ul>
                        <form action="/logout" method="POST">
                            @csrf
                            <li>
                                {{-- <a href="/logout" data-toggle="modal" data-target="#modal2">Logout</a> --}}
                                <button type="submit" class="btn btn-link">Logout</button>
                            </li>
                        </form>
                    </ul>
                </div>
                @endif
                <div class="ed-com-t1-social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
<section>
    <!-- LOGIN SECTION -->
    <div id="modal1" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Hello...</h1>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <h4>Login with social media</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                    </li>
                    <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                </a>
                <h4>Login</h4>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <form action="/login" method="POST" class="s12">
                    @csrf
                    <div>
                        <div class="input-field s12">
                            <input type="email" name="email" data-ng-model="name" class="validate" required>
                            <label>Email</label>
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="password" name="password" class="validate" required>
                            <label>Password</label>
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>
                    <div>
                        <div class="s12 log-ch-bx">
                            <p>
                                <input type="checkbox" id="test5" />
                                <label for="test5">Remember me</label>
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Login" class="waves-effect waves-light log-in-btn">
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal"
                                data-target="#modal3">Forgot password</a> | <a href="#" data-dismiss="modal"
                                data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- REGISTER SECTION -->
    <div id="modal2" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Hello...</h1>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <h4>Login with social media</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                    </li>
                    <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                </a>
                <h4>Create an Account</h4>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <form class="s12" action="/registration" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <div class="input-field s12">
                            <input type="text" name="name" value="{{ old('name') }}" data-ng-model="name1"
                                class="validate" required>
                            <label>Name</label>
                        </div>
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="text" name="username" value="{{ old('username') }}" data-ng-model="name1"
                                class="validate" required>
                            <label>Username</label>
                        </div>
                        @error('username')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="email" name="email" value="{{ old('email') }}" class="validate"
                                required>
                            <label>Email address</label>
                        </div>
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="password" name="password" class="validate" required>
                            <label>Password</label>
                        </div>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <div class="input-field s12">
                            <input type="password" name="password_confirmation" class="validate" required>
                            <label>Confirm password</label>
                        </div>
                        @error('password_confirmation')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Register" class="waves-effect waves-light log-in-btn">
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal"
                                data-target="#modal1">Are you a already member ? Login</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- FORGOT SECTION -->
    <div id="modal3" class="modal fade" role="dialog">
        <div class="log-in-pop">
            <div class="log-in-pop-left">
                <h1>Hello... </h1>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <h4>Login with social media</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                    </li>
                    <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                    </li>
                </ul>
            </div>
            <div class="log-in-pop-right">
                <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png"
                        alt="" />
                </a>
                <h4>Forgot password</h4>
                <p>Don't have an account? Create your account. It's take less then a minutes</p>
                <form class="s12">
                    <div>
                        <div class="input-field s12">
                            <input type="text" data-ng-model="name3" class="validate">
                            <label>User name or email id</label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field s4">
                            <input type="submit" value="Submit" class="waves-effect waves-light log-in-btn">
                        </div>
                    </div>
                    <div>
                        <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal"
                                data-target="#modal1">Are you a already member ? Login</a> | <a href="#"
                                data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new
                                account</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
