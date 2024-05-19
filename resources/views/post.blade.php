<!doctype html>
<html class="scroll-smooth" lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="{{ asset('storage/images/favicon.ico') }}">
  <title>Htet Pyae Aung | Blog</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chela+One&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body class="w-full h-dvh bg-cover flex flex-col bg-stone-300 bg-no-repeat font-inter">
    <div class="w-full h-32 shrink-0 relative" id="intro">
        <div class="container fixed left-0 top-0 p-4" id="logoDiv">
            <a href="/">
                <img src="{{ asset('storage/images/logo-bg.png') }}" class="logo"/>
            </a>
        </div>
        <div id="navmain">
            <div class="fixed top-0 right-0 p-4 bg-transparent" id='navContainer'>
                <div class="mainNav space-x-6">
                    <a href="/about">About</a>
                    <a href="/projects">Projects</a>
                    <a href="/blogs">Blog</a>
                    <a href="/contact">Contact</a>
                </div>
                <!-- The overlay -->
                <div id="myNav" class="overlay">
                    <!-- Overlay content -->
                    <div class="overlay-content">
                        <a href="/about">About</a>
                        <a href="/projects">Projects</a>
                        <a href="/blogs">Blog</a>
                        <a href="/contact">Contact</a>
                    </div>
                </div>
                <button class="hamburger" id="hamburger" aria-label="Toggle menu" aria-expanded="false">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="w-full h-80 flex-auto grow-0 content-center" id="postCover">
        <img class="rounded-t-lg h-full w-full object-cover" src="{{ asset('storage/images/fullprof.jpg') }}" alt="Random Unsplash Image containing cat" />
    </div>
    {{-- <div class="w-full h-auto m-0 p-0 flex-grow">
        <div class="w-full h-auto m-0 p-5 md:p-0">
            <div class="w-full h-auto flex flex-wrap items-center justify-center place-content-evenly space-x-0 md:space-x-2 flex-col md:flex-row space-y-5 md:space-y-0">
                
            </div>
        </div>        
    </div> --}}
    <div class="w-full h-auto m-0 p-0 flex-grow">
        <div class="w-full h-auto m-0 md:p-0">
            <div class="w-full h-auto flex flex-row flex-wrap items-center justify-center place-content-evenly">
                <div class="w-full md:w-3/4 h-auto bg-gray-200 p-4">
                    First div content
                </div>
                <div class="w-full md:w-1/4 h-auto bg-gray-300 p-4">  
                    <div class="text-left">
                        <p>By <span id="author">Someone</span></p>
                        <p>Date: <span id="date">date</span></p>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    <footer class="w-full p-4 font-bold content-end flex-nowrap md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">@php
            echo '&copy; 2024', ($year = gmdate("Y")) !== '2024'? ' - '.$year : '';
          @endphp
           Crafted with &#10084; by Htet Pyae Aung
          </span>
          <ul class="flex flex-wrap items-center mt-3 text-sm gap-3 footer-icons text-gray-500 dark:text-gray-400 sm:mt-0">
              <li>
                <a href="https://www.twitter.com" target="_blank">
                  <svg class="w-7 h-7 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M13.8 10.5 20.7 2h-3l-5.3 6.5L7.7 2H1l7.8 11-7.3 9h3l5.7-7 5.1 7H22l-8.2-11.5Zm-2.4 3-1.4-2-5.6-7.9h2.3l4.5 6.3 1.4 2 6 8.5h-2.3l-4.9-7Z"/>
                  </svg>
                </a>
              </li>
              <li>
                <a href="https://github.com/htetpyaeaung" target="_blank">
                  <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 2c-2.4 0-4.7.9-6.5 2.4a10.5 10.5 0 0 0-2 13.1A10 10 0 0 0 8.7 22c.5 0 .7-.2.7-.5v-2c-2.8.7-3.4-1.1-3.4-1.1-.1-.6-.5-1.2-1-1.5-1-.7 0-.7 0-.7a2 2 0 0 1 1.5 1.1 2.2 2.2 0 0 0 1.3 1 2 2 0 0 0 1.6-.1c0-.6.3-1 .7-1.4-2.2-.3-4.6-1.2-4.6-5 0-1.1.4-2 1-2.8a4 4 0 0 1 .2-2.7s.8-.3 2.7 1c1.6-.5 3.4-.5 5 0 2-1.3 2.8-1 2.8-1 .3.8.4 1.8 0 2.7a4 4 0 0 1 1 2.7c0 4-2.3 4.8-4.5 5a2.5 2.5 0 0 1 .7 2v2.8c0 .3.2.6.7.5a10 10 0 0 0 5.4-4.4 10.5 10.5 0 0 0-2.1-13.2A9.8 9.8 0 0 0 12 2Z" clip-rule="evenodd"/>
                  </svg>    
                </a>  
              </li>
              <li>
                <a href="https://www.linkedin.com/in/htetpyaeaung-charles/" target="_blank">
                  <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12.5 8.8v1.7a3.7 3.7 0 0 1 3.3-1.7c3.5 0 4.2 2.2 4.2 5v5.7h-3.2v-5c0-1.3-.2-2.8-2.1-2.8-1.9 0-2.2 1.3-2.2 2.6v5.2H9.3V8.8h3.2ZM7.2 6.1a1.6 1.6 0 0 1-2 1.6 1.6 1.6 0 0 1-1-2.2A1.6 1.6 0 0 1 6.6 5c.3.3.5.7.5 1.1Z" clip-rule="evenodd"/>
                    <path d="M7.2 8.8H4v10.7h3.2V8.8Z"/>
                  </svg>
                </a> 
              </li>
          </ul>
    </footer>
</body>
</html