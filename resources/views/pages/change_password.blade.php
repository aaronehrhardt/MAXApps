@extends('common')

@section('content')

    <div class="container top-padding">
        <div class="page-header">
            <h3>Change Password</h3>
        </div>
        <div class="row">
            <form class="col-md-6 col-md-offset-3">
                <div class="row">
                    <div class="input-field col-md-12"> <i class="mdi-action-lock prefix"></i>
                        <input id="password" type="password" class="validate">
                        <label for="password">Current Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col-md-12"> <i class="mdi-action-lock prefix"></i>
                        <input id="password" type="password" class="validate">
                        <label for="password">New Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col-md-12"> <i class="mdi-action-lock prefix"></i>
                        <input id="password" type="password" class="validate">
                        <label for="password">Confirm New Password</label>
                    </div>
                </div>
                <button class="btn btn-success btn-lg pull-right hidden-xs" type="submit" name="action">Update <i class="fa fa-send"></i> </button>
                <button class="btn btn-block btn-success btn-lg pull-right visible-xs" type="submit" name="action">Update <i class="fa fa-send"></i> </button>
            </form>
        </div>
    </div>

@stop