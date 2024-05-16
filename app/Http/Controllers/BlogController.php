<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dbfx\LaravelStrapi\LaravelStrapi;

class BlogController extends Controller
{
    public function blog()
    {
        $strapi = new LaravelStrapi();
        $type = 'blogs';
        $blogs= $strapi->collection($type,populate:['authors','cover']);

        $blogs =  $blogs['data'];
        // return $blogs;
        
        return view('blogs', compact(['blogs']));
    }
}
