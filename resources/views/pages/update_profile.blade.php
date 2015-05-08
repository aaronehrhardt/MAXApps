@extends('common')

@section('content')

    <div class="container top-padding">
        <div class="page-header">
            <h3>Update Profile</h3>
        </div>
        <div class="row">
            <form class="col-md-6 col-md-offset-3">
                <div class="row">
                    <div class="input-field col-md-12"> <i class="mdi-action-account-circle prefix"></i>
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col-md-12"> <i class="mdi-action-account-circle prefix"></i>
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col-md-12"> <i class="mdi-action-lock prefix"></i>
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col-sm-12"> <i class="mdi-communication-email prefix"></i>
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <button class="btn btn-success btn-lg pull-right hidden-xs" type="submit" name="action">Submit <i class="fa fa-send"></i> </button>
                <button class="btn btn-block btn-success btn-lg pull-right visible-xs" type="submit" name="action">Submit <i class="fa fa-send"></i> </button>
            </form>
        </div>
    </div>

@stop