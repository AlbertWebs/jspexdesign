<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use DB;

class HomeController extends Controller
{
    public function index(){
        SEOMeta::setTitle('Interior Design  | Landscaping |  Set Design | JSpex Design');
        SEOMeta::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        SEOMeta::setCanonical(''.url('/').'');

        OpenGraph::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        OpenGraph::setTitle('Interior Design  | Landscaping |  Set Design | JSpex Design');
        OpenGraph::setUrl(''.url('/').'');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Interior Design  | Landscaping |  Set Design | JSpex Design');
        TwitterCard::setSite('@jspexdesign');

        JsonLd::setTitle('Interior Design  | Landscaping |  Set Design | JSpex Design');
        JsonLd::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        JsonLd::addImage('https://localhost:8000/img/logo.jpg');

        return view('front.index');
    }

    public function about(){
        SEOMeta::setTitle('About Us | JSpex Design');
        SEOMeta::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        SEOMeta::setCanonical(''.url('/').'');

        OpenGraph::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        OpenGraph::setTitle('About Us | JSpex Design');
        OpenGraph::setUrl(''.url('/').'');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('About Us | JSpex Design');
        TwitterCard::setSite('@jspexdesign');

        JsonLd::setTitle('About Us | JSpex Design');
        JsonLd::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        JsonLd::addImage('https://localhost:8000/img/logo.jpg');

        return view('front.about');
    }

    public function landscaping(){
        $Title = "Landscaping";
        SEOMeta::setTitle('Landscaping | JSpex Design');
        SEOMeta::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        SEOMeta::setCanonical(''.url('/').'');

        OpenGraph::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        OpenGraph::setTitle('Landscaping | JSpex Design');
        OpenGraph::setUrl(''.url('/').'');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Landscaping | JSpex Design');
        TwitterCard::setSite('@jspexdesign');

        JsonLd::setTitle('Landscaping | JSpex Design');
        JsonLd::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        JsonLd::addImage('https://localhost:8000/img/logo.jpg');

        $description = "Our landscaping design team offer professional and quality hard and soft landscape services for both residential and commercial spaces.";

        return view('front.services', compact('Title','description'));
    }

    public function interior_design(){
        $Title = "Interior Design";
        SEOMeta::setTitle('Interior Design | JSpex Design');
        SEOMeta::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        SEOMeta::setCanonical(''.url('/').'');

        OpenGraph::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        OpenGraph::setTitle('Interior Design | JSpex Design');
        OpenGraph::setUrl(''.url('/').'');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Interior Design | JSpex Design');
        TwitterCard::setSite('@jspexdesign');

        JsonLd::setTitle('Interior Design | JSpex Design');
        JsonLd::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        JsonLd::addImage('https://localhost:8000/img/logo.jpg');

        $description = "Our interior design team specializes in providing superb and outstanding interior design services. <br><br> These includes:- space planning, designing and project management for both residential and elegant commercial projects in Kenya.";

        return view('front.services', compact('Title','description'));
    }

    public function set_design(){
        $Title = "Set Design";
        SEOMeta::setTitle('Set Design | JSpex Design');
        SEOMeta::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        SEOMeta::setCanonical(''.url('/').'');

        OpenGraph::setDescription('Set Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        OpenGraph::setTitle('Interior Design | JSpex Design');
        OpenGraph::setUrl(''.url('/').'');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Set Design | JSpex Design');
        TwitterCard::setSite('@jspexdesign');

        JsonLd::setTitle('Set Design | JSpex Design');
        JsonLd::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        JsonLd::addImage('https://localhost:8000/img/logo.jpg');

        $description = "Our set design team specializes in providing stage design for corporate events and exhibition booths for exhibition spaces. We work hard to ensure that your set is memorable to your guests as much as possible.";

        return view('front.services', compact('Title','description'));
    }

    public function furniture_design(){
        $Title = "Furniture Design";
        SEOMeta::setTitle('Furniture Design | JSpex Design');
        SEOMeta::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        SEOMeta::setCanonical(''.url('/').'');

        OpenGraph::setDescription('Furniture Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        OpenGraph::setTitle('Interior Design | JSpex Design');
        OpenGraph::setUrl(''.url('/').'');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Furniture Design | JSpex Design');
        TwitterCard::setSite('@jspexdesign');

        JsonLd::setTitle('Furniture Design | JSpex Design');
        JsonLd::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        JsonLd::addImage('https://localhost:8000/img/logo.jpg');

        $description = "";

        return view('front.services', compact('Title'));
    }


    public function contact(){
        SEOMeta::setTitle('Contact Us | JSpex Design');
        SEOMeta::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        SEOMeta::setCanonical(''.url('/').'');

        OpenGraph::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        OpenGraph::setTitle('Contact Us | JSpex Design');
        OpenGraph::setUrl(''.url('/').'');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Contact Us | JSpex Design');
        TwitterCard::setSite('@jspexdesign');

        JsonLd::setTitle('Contact Us | JSpex Design');
        JsonLd::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        JsonLd::addImage('https://localhost:8000/img/logo.jpg');

        return view('front.contact');
    }

    public function news(){
        SEOMeta::setTitle('Latest News | JSpex Design');
        SEOMeta::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        SEOMeta::setCanonical(''.url('/').'/latest-news');

        OpenGraph::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        OpenGraph::setTitle('Latest News | JSpex Design');
        OpenGraph::setUrl(''.url('/').'/latest-news');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Latest News | JSpex Design');
        TwitterCard::setSite('@jspexdesign');

        JsonLd::setTitle('Latest News | JSpex Design');
        JsonLd::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        JsonLd::addImage('https://localhost:8000/img/logo.jpg');

        return view('front.news');
    }

    public function new_single(){
        SEOMeta::setTitle('Latest News | JSpex Design');
        SEOMeta::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        SEOMeta::setCanonical(''.url('/').'/latest-news');

        OpenGraph::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        OpenGraph::setTitle('Latest News | JSpex Design');
        OpenGraph::setUrl(''.url('/').'/latest-news');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Latest News | JSpex Design');
        TwitterCard::setSite('@jspexdesign');

        JsonLd::setTitle('Latest News | JSpex Design');
        JsonLd::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        JsonLd::addImage('https://localhost:8000/img/logo.jpg');

        return view('front.new_single');
    }

    public function portfolio(){
        SEOMeta::setTitle('Our Projects| JSpex Design');
        SEOMeta::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        SEOMeta::setCanonical(''.url('/').'/latest-news');

        OpenGraph::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        OpenGraph::setTitle('Latest News | JSpex Design');
        OpenGraph::setUrl(''.url('/').'/latest-news');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Latest News | JSpex Design');
        TwitterCard::setSite('@jspexdesign');

        JsonLd::setTitle('Latest News | JSpex Design');
        JsonLd::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        JsonLd::addImage('https://localhost:8000/img/logo.jpg');

        return view('front.portfolio');
    }

    public function folio($slung){
        SEOMeta::setTitle('Our Projects| JSpex Design');
        SEOMeta::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        SEOMeta::setCanonical(''.url('/').'/latest-news');

        OpenGraph::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        OpenGraph::setTitle('Latest News | JSpex Design');
        OpenGraph::setUrl(''.url('/').'/latest-news');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Latest News | JSpex Design');
        TwitterCard::setSite('@jspexdesign');

        JsonLd::setTitle('Latest News | JSpex Design');
        JsonLd::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        JsonLd::addImage('https://localhost:8000/img/logo.jpg');

        $Portfolio = DB::table('portfolio')->where('slug',$slung)->get();

        return view('front.folio', compact('Portfolio'));
    }

    public function terms(){
        SEOMeta::setTitle('Terms and Conditions | JSpex Design');
        SEOMeta::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        SEOMeta::setCanonical(''.url('/').'/terms-and-conditions');

        OpenGraph::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        OpenGraph::setTitle('Terms and Conditions | JSpex Design');
        OpenGraph::setUrl(''.url('/').'terms-and-conditions');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Terms and Conditions | JSpex Design');
        TwitterCard::setSite('@jspexdesign');

        JsonLd::setTitle('Terms and Conditions | JSpex Design');
        JsonLd::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        JsonLd::addImage('https://localhost:8000/img/logo.jpg');

        return view('front.terms');
    }

    public function privacy(){
        SEOMeta::setTitle('Privacy Policy | JSpex Design');
        SEOMeta::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        SEOMeta::setCanonical(''.url('/').'/terms-and-conditions');

        OpenGraph::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        OpenGraph::setTitle('Privacy Policy | JSpex Design');
        OpenGraph::setUrl(''.url('/').'terms-and-conditions');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Privacy Policy | JSpex Design');
        TwitterCard::setSite('@jspexdesign');

        JsonLd::setTitle('Privacy Policy | JSpex Design');
        JsonLd::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        JsonLd::addImage('https://localhost:8000/img/logo.jpg');

        return view('front.privacy');
    }

    public function copyright(){
        SEOMeta::setTitle('Copyright Statement | JSpex Design');
        SEOMeta::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        SEOMeta::setCanonical(''.url('/').'/copyright');

        OpenGraph::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        OpenGraph::setTitle('Copyright Statement | JSpex Design');
        OpenGraph::setUrl(''.url('/').'copyright');
        OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('Copyright Statement | JSpex Design');
        TwitterCard::setSite('@jspexdesign');

        JsonLd::setTitle('Copyright Statement | JSpex Design');
        JsonLd::setDescription('Interior Design • Landscaping • Furniture Design •  Set Design Hub. To speak for your unbuilt project');
        JsonLd::addImage('https://localhost:8000/img/logo.jpg');

        return view('front.copyright');
    }







}
