<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplicationSetting;
use App\Models\TenSegment;
use App\Models\BestPartner;
use App\Models\WhatYouWillGet;
use App\Models\WhyAn;
use App\Models\Advisor;
use App\Models\OurTeam;
use App\Models\Gallery;
use App\Models\AboutKeyObjective;
use App\Models\Faq;
use App\Models\Home;
use App\Models\SectionTitle;

class FrontEndController extends Controller
{
    //index
    public function index()
    {   
        $home = Home::all();
        
        $registrationTitle = SectionTitle::where('section','registration')->first();
        $categoryTitle = SectionTitle::where('section','six categories')->first();
        $segmentsTitle = SectionTitle::where('section','segments')->first();
        $teacherListTitle = SectionTitle::where('section','teacher list')->first();

        $best_partners = BestPartner::all();
        $gallerys_items = Gallery::take(6)->latest()->get();
        $what_you_gets = WhatYouWillGet::all();
        $ten_segments = TenSegment::latest()->get();
        $advisors = Advisor::take(10)->latest()->get(); 
        $why_ans = WhyAn::all(); 
        return view('frontend.index', compact('best_partners', 'what_you_gets', 'ten_segments', 'why_ans', 'advisors', 'gallerys_items','home','registrationTitle','categoryTitle','segmentsTitle','teacherListTitle'));

    }

    // About
    public function about(){
        $best_partners = BestPartner::all();
        $gallerys_items = Gallery::take(6)->latest()->get();
        $key_objectives = AboutKeyObjective::all();
        return view('frontend.about', compact('best_partners', 'key_objectives', 'gallerys_items'));

    }

    // advisore
    public function advisore(){
        $best_partners = BestPartner::all();
        $gallerys_items = Gallery::take(6)->latest()->get();
        $advisors = Advisor::all();
        return view('frontend.advisore', compact('best_partners', 'advisors', 'gallerys_items'));

    }


    // contact
    public function contact(){
        $best_partners = BestPartner::all();
        $gallerys_items = Gallery::take(6)->latest()->get();
        return view('frontend.contact', compact('best_partners', 'gallerys_items'));

    }

    // faq
    public function faq(){
        $best_partners = BestPartner::all();
        $gallerys_items = Gallery::take(6)->latest()->get();
        $faqs = Faq::all();
        return view('frontend.faq', compact('best_partners', 'faqs', 'gallerys_items'));

    }


    // gallery
    public function gallery(){
        $best_partners = BestPartner::all();
        $gallerys_items = Gallery::take(6)->latest()->get();
        $gallerys = Gallery::latest()->get();
    
        return view('frontend.gallery', compact('best_partners', 'gallerys', 'gallerys_items'));

    }


    // news
    public function news(){
        $best_partners = BestPartner::all();
        $gallerys_items = Gallery::take(6)->latest()->get();
        return view('frontend.news_event', compact('best_partners', 'gallerys_items'));

    }

    // team
    public function team(){
        $best_partners = BestPartner::all();
        $gallerys_items = Gallery::take(6)->latest()->get();
        $our_teams = OurTeam::all();
        return view('frontend.team', compact('best_partners', 'our_teams', 'gallerys_items'));

    }


}
