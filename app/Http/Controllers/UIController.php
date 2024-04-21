<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UIController extends Controller
{
    public function home(){
        $response = Http::get('http://myc2i-env.eba-2iwp3uqc.us-east-1.elasticbeanstalk.com/public/api/v1/resource/videos');
        $data = $response->json();
        $videos = $data['response'];
        return view('pages.home',compact('videos'));
    }
    public function about(){
        return view('pages.about');
    }
    public function mentorProfile(){
        $response = Http::get('http://myc2i-env.eba-2iwp3uqc.us-east-1.elasticbeanstalk.com/public/api/v1/user/mentors');
        $data = $response->json();
        $mentors = $data['response'];
        return view('pages.mentorProfile',compact('mentors'));
    }
    public function contact(){
        return view('pages.contact');
    }
    public function termsofservice(){
        return view('pages.termsofservice');
    }
    public function privacyandpolicy(){
        return view('pages.privacyandpolicy');
    }
    public function faq(){
        return view('pages.faq');
    }
    public function marketing(){
        return view('pages.marketing');
    }
    public function support(){
        return view('pages.support');
    }
}
