@extends('site.layout')
@section('content')
    <main>
        <div class="page_header element_to_stick">
            <div class="container">
                <div class="row"> 
                    <div class="col-4"></div>
                    <div class="col-xl-4 col-lg-4 col-md-4" style="background: white; padding-bottom: 2%;"> 
                        <div class="modal_header">
                            <h3>Sign In</h3>
                        </div>
                        <form action="{{ URL::route('login.verify') }}" method="post">
                            @csrf

                            <p style="color: red;">
                                Wrong Login Credentails!
                            </p>

                            <div class="sign-in-wrapper"> 
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" id="email"> 
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" id="password"> 
                                </div>
                                <div class="clearfix add_bottom_15">
                                    <div class="checkboxes float-left">
                                        <label class="container_check">Remember me
                                          <input type="checkbox">
                                          <span class="checkmark"></span>
                                        </label>
                                    </div> 
                                </div>
                                <div class="text-center">
                                    <input type="submit" value="Log In" class="btn_1 full-width mb_5">
                                    Don’t have an account? <a href="{{ URL::route('register') }}">Sign up</a>
                                </div>
                                <div id="forgot_pw">
                                    <div class="form-group">
                                        <label>Please confirm login email below</label>
                                        <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                                        <i class="icon_mail_alt"></i>
                                    </div>
                                    <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                                    <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
                                </div>
                            </div>
                        </form> 
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
        </div>
    </main>
@endsection