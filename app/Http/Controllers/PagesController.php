<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{

    public function getIndex()
    {
        return view('welcome');
    }

    public function getAbout()
    {
        $first = 'Wes';
        $email = 'WesOn@mysite.com';

        $firstname = $first;
        $fullemail = $email;
        $data = [];
        $data['email'] = $email;
        $data['firstname'] = $firstname;
        return view('sites.about')->withData($data);
    }

    public function getContact()
    {
        return view('sites.contact');
    }


}