<!doctype html>
<html class="scroll-smooth" lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="{{ asset('storage/images/favicon.ico') }}">
  <title>Htet Pyae Aung | Developer</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chela+One&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body class="w-full h-dvh bg-cover bg-stone-300 bg-no-repeat font-inter">
    <div class="w-full flex relative" id="intro">
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
    <div class="w-full h-32 mt-28 flex content-center items-center justify-center">
        <h1>Something something</h1>
    </div>
    <div class="w-full h-full m-0 p-0">
        <div class="w-full h-auto flex flex-wrap items-center content-evenly justify-center space-x-1">
            @foreach ($blogs as $blog)
                <div class="max-w-sm h-2/6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="/blogs/{{ $blog['id'] }}">
                        <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="/blogs/{{ $blog['id'] }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $blog['attributes']['Title'] }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $blog['attributes']['Subheading'] }}</p>
                        <a href="/blogs/{{ $blog['id'] }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</body>
</html