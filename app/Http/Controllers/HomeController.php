<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebsiteTitle;
use App\WebsiteText;
use App\Partner;
use App\Backer;
use App\Slide;
use App\Testimonial;
use App\Tile;
use App\Article;

class HomeController extends Controller
{
    public function index(){
        $titles = WebsiteTitle::get();
        $text = WebsiteText::get();
        $tiles = Tile::get();
        $partners = Partner::get();
        $backers = Backer::get();
        $slides = Slide::get();
        $testimonials = Testimonial::get();
        $articles = Article::orderBy('ID', 'DESC')->limit(9)->get();
        return view("home", compact('titles', 'text', 'partners', 'backers', 'slides', 'testimonials', 'tiles', 'articles'));
    }
}
