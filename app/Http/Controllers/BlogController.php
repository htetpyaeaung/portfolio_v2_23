<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
        $maxData = $this->strapi->entry('blogs', $postID,populate:['authors','cover','authors.avatar']);
        $maxData = $maxData['data'];
        $publishedDate = Carbon::parse($maxData['attributes']['publishedAt'])->format('M d, Y');
        // dd($maxData);

        return view('post',compact('maxData','publishedDate'));
    }
}
