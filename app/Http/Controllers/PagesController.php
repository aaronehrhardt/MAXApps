<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function index()
    {
        return view('pages.index');
    }

    public function update_profile()
    {
        return view('pages.update_profile');
    }

    public function change_password()
    {
        return view('pages.change_password');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function dashboard()
    {
        return view('pages.dashboard');
    }

    public function leads()
{
    return view('pages.leads');
}

    public function referrals()
{
    return view('pages.referrals');
}

}
