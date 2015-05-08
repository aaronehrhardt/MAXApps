@extends('login')

@section('content')

    <div class="vertical-center">
        <div class="container text-center">
            <div class="col-md-4 col-md-offset-4">
                <div class="card-panel card-container"> <img class="img-responsive center-block" src="{{ asset('images/REMAX_logo.png') }}" alt="my avatar" />
                    <p id="profile-name" class="profile-name-card"></p>
                    <form class="form-signin">
                        <span id="reauth-email" class="reauth-email"></span>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        <div id="remember" class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me">
                                Remember me </label>
                        </div>
                        <a href="/dashboard" class="btn btn-block" type="submit" name="action">Submit </a>
                    </form>
                    <a href="/change_password" class="forgot-password text-center"> Forgot password? </a> </div>
            </div>
        </div>

@stop