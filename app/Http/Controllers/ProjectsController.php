<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __construct(){
    }

    public function processProjects(): View{
        $project_items = [
            [
                "id" => "cara-integration",
                "title" => "Cara Middleware",
                "description" => "Seamless Integration Solutions Tailored for Cara",
                "tags" => ["Custom Integration", "Full-stack"],
                "image" => "cara.png"
            ],
            [
                "id" => "mis-thermofisher",
                "title" => "New System at Thermo Fisher",
                "description" => "Improving the efficiencies of machine maintenance",
                "tags" => ["Product Design", "Full-stack"],
                "image" => "thermo-fisher-scientific.svg"
            ],
            [
                "id" => "portfolio-ocstudio",
                "title" => "Orient Crown Studio Portfolio",
                "description" => "Showcasing Elegance: The Orient Crown Design Portfolio",
                "tags" => ["Web Design", "Full Stack"],
                "image" => "orient.png"
            ],
            [
                "id" => "nuber",
                "title" => "Nuber",
                "description" => "Building the system that transform the future of urban transport scene",
                "tags" => ["System Development"],
                "image" => "nuber.jpg"
            ],
            [
                "id" => "sawater-analysis",
                "title" => "SA Water Resevoir Data Analysis ",
                "description" => "Understanding how SA water's Reservoirs changes",
                "tags" => ["Data Analysis"],
                "image" => "sawater-analysis.jpg"
            ],
        ];
    
        // Pass the array to the view
        return view('projects', ['projectItems' => $project_items]);
    }
}
