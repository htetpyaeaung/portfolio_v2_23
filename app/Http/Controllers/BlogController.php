<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dbfx\LaravelStrapi\LaravelStrapi;

class BlogController extends Controller
{
    private $strapi;
    public function __construct()
    {
        $this->strapi = new LaravelStrapi();
    }
    public function blog()
    {
        $type = 'blogs';
        $blogs= $this->strapi->collection($type,populate:['authors','cover']);
        $blogs =  $blogs['data'];

        $sitesInfo = $this->strapi->single('global');
        $sitesInfo = $sitesInfo['data'];

        return view('blogs', compact(['blogs'],['sitesInfo']));
    }

    public function post(int $postID)
    {
        return $blogs = $this->strapi->entry('blogs', $postID,populate:['authors']);
    }
}
