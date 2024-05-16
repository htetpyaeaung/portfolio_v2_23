<!doctype html>
<html class="scroll-smooth" lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="{{ asset('storage/images/favicon.ico') }}">
  <title>Projects | SA Water Data Analysis</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chela+One&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body class="bg-cover bg-stone-300 bg-no-repeat font-inter">
    <div class="w-full xxs:h-full flex relative" id="intro">
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
    
    <section class="w-full h-full flex flex-col xxs:mt-24 lg:mt-28" id='project_section'>
        <div class="flex flex-col mx-auto w-full text-center justify-center items-center" id="project_hero" style="height: 50vh;">
            <h1 class="font-scoville xxs:text-4xl md:text-7xl" id="sectionHeader">SA Water Resevoir Data Analysis 2020</h1>
            <h2 class="xxs:text-sm md:text-md font-normal">A detailed analysis of resevoir volume changes in SA between 2019-2020</h2>
        </div>
        <div class="flex flex-col md:flex-row mx-auto w-full h-1/2 text-center justify-center items-center" id="project_hero">
            <img class="px-2 py-2 w-full md:w-1/2 h-1/2" src="{{ asset('storage/images/sawater-main.png') }}">
        </div>

        <div class="flex xxs:flex-wrap md:flex-nowrap mx-auto w-full h-full text-center justify-center items-center xxs:space-y-2 md:space-y-0 xxs:space-x-1 md:space-x-2" id="project_hero">
            <div class="flex flex-col w-full h-1/2 justify-center py-12">
                <h2 class="font-bold text-2xl py-3">Role</h2>
                <h2 class="text-md py-3">Application Developer</h2>
                <h3 class="text-sm">Data Analysis</h3>
            </div>
            <div class="flex flex-col justify-center w-full h-1/2 py-12">
                <h2 class="font-bold text-2xl py-3">Type</h2>
                <h2 class="text-md py-3">Personal Project</h2>
            </div>
            <div class="flex flex-col justify-center text-center w-full h-1/2 py-12">
                <h2 class="font-bold text-2xl py-3">Duration</h2>
                <h2 class="text-md py-3">March - June 2020</h2>
                <h2 class="text-sm">(4 months)</h2>
            </div>
        </div>

        <div class="flex flex-col mx-auto w-full bg-white">
            <div class="flex flex-col mx-auto xxs:w-full md:w-3/4 md:my-5 h-full justify-center items-start" id="project_hero">
                <div class="flex flex-col mx-auto px-7 pt-8 w-full h-auto justify-left items-start">
                    <h1 class="font-scoville text-4xl" id="sectionHeader">Overview</h1>
                    <p class="mt-5">The goal of this project to analyse the water volume changes in each reservoirs of South Australia during the period betwen 2019 to 2020.</p>
                    <p class="mt-2">The data is provided in JSON  by SA Water, the government agency and the analysed data is plotted beautifully through D3 framework to create charts and graphs.</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col mx-auto w-full bg-white text-black">
            <div class="flex flex-col mx-auto xxs:w-full md:w-3/4 h-full justify-center items-start" id="project_hero">
                <div class="flex flex-col mx-auto px-7 pt-8 w-full h-auto justify-left items-start">
                    <h1 class="font-scoville text-4xl" id="sectionHeader">Technologies Used</h1>
                    <ul class="max-w-full space-y-1 mt-7 text-black list-disc list-inside dark:text-gray-400">
                        <li>
                            HTML, CSS for Frontend Components, jQuery and D3 to decorate and make the website alive
                        </li>
                        <li>
                            .Net for all backend components
                        </li>
                    </ul><br/>
                    <p>Learn more about the open-source project <a href="https://github.com/htetpyaeaung/SAWaterReservoirsProject" target="_blank" class="underline">here</a>.</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col mx-auto w-full bg-white text-black">
            <div class="flex flex-col mx-auto xxs:w-full md:w-3/4 h-full justify-center items-start" id="project_process">
                <div class="flex flex-col md:flex-row mx-auto px-7 pt-8 w-full h-auto justify-between items-start">
                    <a href="/nuber">
                        <button type="button" class="text-white bg-rose-900 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0l4 4m-4-4l4-4"/>
                            </svg>
                            &nbsp; Prev: Nuber
                        </button>
                    </a>
                    <a href="/cara-integration">
                        <button type="button" class="text-white bg-rose-900 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Next: Cara Middleware
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </button>
                    </a>
                </div> <br/><br/>
                
            </div>
        </div>
    </section>
    </div>
    

</body>
</html