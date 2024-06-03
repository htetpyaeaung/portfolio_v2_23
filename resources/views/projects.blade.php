<!doctype html>
<html class="scroll-smooth" lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="{{ asset('storage/images/favicon.ico') }}">
  <title>Projects</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chela+One&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
  <style>
      @foreach ($projectItems as $item)
      #{{ $item['id'] }}:before {
            /* background-image: url('{{ asset('storage/images/'.$item['image']) }}'); */
            background: white url('{{ asset('storage/images/'.$item['image']) }}') no-repeat center / 50%;
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            filter: brightness(60%);
            z-index: 1;
        }
      @endforeach
  </style>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body class="bg-cover bg-stone-300 bg-no-repeat">
  <div class="w-full h-full flex relative" id="intro">
    <div class="container fixed left-0 top-0 p-4" id="logoDiv">
      <a href="/">
        <img src="{{ asset('storage/images/logo-bg.png') }}" class="logo"/>
        {{-- <p>Text</p> --}}
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

          <!-- Button to close the overlay navigation -->
          {{-- <a href="javascript:void(0)" id="hamburger-close" class="closebtn" onclick="closeNav()">&times;</a> --}}

          <!-- Overlay content -->
          <div class="overlay-content">
            <a href="/about">About</a>
            <a href="/projects">Projects</a>
            <a href="/blogs">Blog</a>
            <a href="/contact">Contact</a>
          </div>

        </div>

        {{-- <button id="hamburger" onclick="setTextAnimation()">open</button> --}}
        <button class="hamburger" id="hamburger" aria-label="Toggle menu" aria-expanded="false">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
    </div>
  </div>

<div class="w-full h-full flex flex-col xxs:mt-24 lg:mt-28" id="projects">
  <div class="mx-auto xxs:w-11/12 lg:w-10/12">
    <h1 class="xxs:w-full xs:w-3/4 md:w-72 lg:w-2/5 xl:w-80 font-scoville relative section-headers projectHead text-4xl" id="sectionHeader">Featured Projects</h1>
  </div>

  @foreach ($projectItems as $item)
    <div class="flex mx-auto xxs:w-11/12 lg:w-10/12 p-4 text-center xxs:justify-center items-center lg:justify-end bg-white shadow-2xl mt-9 project-item" id="{{ $item['id'] }}">
      <div class="flex text-white items-center z-10 text-center flex-col xxs:justify-end lg:justify-center xxs:w-3/4 xxs:h-4/5 lg:w-2/5 lg:h-2/4">
        <h2 class="xxs:text-2xl lg:text-3xl font-extrabold">{{ $item['title'] }}</h2>
        <p>{{ $item['description'] }}</p>
        <div class="w-full h-auto mx-auto flex items-center justify-center mt-2">
          @foreach ($item['tags'] as $tag)
            <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">{{ $tag }}</span>
          @endforeach
        </div>
        <br/>
        <a href='{{ '/'.$item['id'] }}' target="_blank">
          <button class="relative mt-2 z-10 inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400">
            <span class="relative px-5 py-2.5 transition-all ease-in duration-500 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
              Read Case Study
            </span>
          </button>
        </a>
      </div>
    </div>
  @endforeach

  <div class="flex mx-auto w-10/12 p-4 text-center justify-center items-center mt-9">
    <a href="https://github.com/htetpyaeaung" target="_blank">
      <button type="button" class="text-white bg-[#24292F] hover:bg-[#24292F]/90 focus:ring-4 focus:outline-none focus:ring-[#24292F]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 dark:hover:bg-[#050708]/30 me-2 mb-2">
        <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
        </svg>
        See more on Github
        </button>
    </a>
    
  </div>
  
</div>
  

<footer class="bottom-0 left-0 z-20 w-full p-4 font-bold bg-stone-300 md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
  <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">@php
    echo '&copy; '.date('Y');
  @endphp
   Crafted with &#10084; by Htet Pyae Aung | Resevoir Photo by <a href="https://unsplash.com/@vladizlo?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Vlad Zaytsev</a> on <a href="https://unsplash.com/photos/boat-on-lake-near-green-trees-during-daytime-ipKxS3liiiA?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a>
  </span>
  <ul class="flex flex-wrap items-center mt-3 text-sm gap-3  text-gray-500 dark:text-gray-400 sm:mt-0">
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