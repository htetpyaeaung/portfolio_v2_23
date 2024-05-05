<!doctype html>
<html class="scroll-smooth" lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="{{ asset('storage/images/favicon.ico') }}">
  <title>Projects | Orient Crown Studio Portfolio</title>
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
          <a href="/blog">Blog</a>
          <a href="/contact">Contact</a>
        </div>
        <!-- The overlay -->
        <div id="myNav" class="overlay">
          <!-- Overlay content -->
          <div class="overlay-content">
            <a href="/about">About</a>
            <a href="/projects">Projects</a>
            <a href="/blog">Blog</a>
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
            <h1 class="font-scoville xxs:text-4xl md:text-7xl" id="sectionHeader">Cara Middleware</h1>
            <h2 class="xxs:text-sm md:text-md font-normal">A scalable cloud-based custom integration middleware</h2>
        </div>
        <div class="flex flex-col md:flex-row mx-auto w-full h-1/2 text-center justify-center items-center" id="project_hero">
            <img class="px-2 py-2 w-full md:w-1/2 h-1/2" src="{{ asset('storage/images/cara_mw.png') }}">
            <img class="px-2 py-2 w-full md:w-1/2 h-1/2" src="{{ asset('storage/images/cara_mw.png') }}">
        </div>

        <div class="flex xxs:flex-wrap md:flex-nowrap mx-auto w-full h-full text-center justify-center items-center xxs:space-y-2 md:space-y-0 xxs:space-x-1 md:space-x-2" id="project_hero">
            <div class="flex flex-col w-full h-1/2 justify-center py-12">
                <h2 class="font-bold text-2xl py-3">Role</h2>
                <h2 class="text-md py-3">Application Developer</h2>
                <h3 class="text-sm">Custom Integration, Testing, APIs, Salesforce, Laravel, MariaDB, Redis, AWS</h3>
            </div>
            <div class="flex flex-col justify-center w-full h-1/2 py-12">
                <h2 class="font-bold text-2xl py-3">Team</h2>
                <h2 class="text-md py-3">Development team, Business Analysts & Project Manager</h2>
                <h3 class="text-sm">Managed by Head of IT</h3>
            </div>
            <div class="flex flex-col justify-center text-center w-full h-1/2 py-12">
                <h2 class="font-bold text-2xl py-3">Duration</h2>
                <h2 class="text-md py-3">February - September 2023</h2>
                <h2 class="text-sm">(8 months)</h2>
            </div>
        </div>

        <div class="flex flex-col mx-auto w-full bg-white">
            <div class="flex flex-col mx-auto xxs:w-full md:w-3/4 md:my-5 h-full justify-center items-start" id="project_hero">
                <div class="flex flex-col mx-auto px-7 pt-8 w-full h-auto justify-left items-start">
                    <h1 class="font-scoville text-4xl" id="sectionHeader">Background</h1>
                    <p class="mt-2">Cara is a leading NDIS disability service provider working alongside people with disability across metropolitan Adelaide and regional South Australia. <a href="https://www.cara.org.au" class="underline">Learn More about what CARA does.</a></p>
                    <p class="my-5">The goal of this project to identify the potential integration points between the critical business systems use across the business and to drastically reduce manual work by Staff.</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col mx-auto w-full bg-white text-black">
            <div class="flex flex-col mx-auto xxs:w-full md:w-3/4 h-full justify-center items-start" id="project_hero">
                <div class="flex flex-col mx-auto px-7 pt-8 w-full h-auto justify-left items-start">
                    <h1 class="font-scoville text-4xl" id="sectionHeader">Problem</h1>
                    <blockquote class="p-4 my-4 border-s-4 border-gray-300  dark:border-gray-500 dark:bg-gray-800">
                        <p class="text-xl italic font-bold leading-relaxed ">"15 Minutes"</p>
                    </blockquote>
                    <p>
                    That is how long it takes for a HR staff to onboard or offboard an employee. HR manages a massive information of staff and it takes a significant time for them to manually enter or update the information across the different systems.<br/><br/>
                    Data are scattered across and there are multiple source of truth for the similar data type and the risk of data duplication in various areas. <br/><br/>
                    Cara need to streamline this processes to reduce this time-consuming, repetitive task and efficiently manage their scattered data. <br/><br/>
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-col mx-auto w-full bg-white text-black">
            <div class="flex flex-col mx-auto xxs:w-full md:w-3/4 h-full justify-center items-start" id="project_hero">
                <div class="flex flex-col mx-auto px-7 pt-8 w-full h-auto justify-left items-start">
                    <h1 class="font-scoville text-4xl" id="sectionHeader">Solution</h1>
                    <blockquote class="p-4 my-4 border-s-4 border-gray-300  dark:border-gray-500 dark:bg-gray-800">
                        <p class="xxs:text-sm md:text-xl italic font-bold leading-relaxed">"Establish a source of truth for all staff information and integrate different systems through centralized integration hub"</p>
                    </blockquote>
                    <p class="my-4">
                        The goal is to design and develop a scalable customized middleware system that allows the data flows from source of truth to all other systems.<br/><br/>
                        Staff will make changes to one and only one system and the data will be replicated across all different systems that are connected to the middleware. <br/><br/>
                        This ensures data consistency, reduce the workload and increase efficiency of the staff.<br/></p>
                </div>
            </div>
        </div>
        <div class="flex flex-col mx-auto w-full bg-white text-black">
            <div class="flex flex-col mx-auto xxs:w-full md:w-3/4 h-full justify-center items-start" id="project_hero">
                <div class="flex flex-col mx-auto px-7 pt-8 w-full h-auto justify-left items-start">
                    <h1 class="font-scoville text-4xl" id="sectionHeader">Technologies Used</h1>
                    <ul class="max-w-lg space-y-1 text-black list-disc list-inside dark:text-gray-400">
                        <li>
                            Vue for Frontend Components
                        </li>
                        <li>
                            Laravel for all backend components
                        </li>
                        <li>
                            Supported by MariaDB
                        </li>
                        <li>
                            Hosted on AWS
                        </li>
                    </ul><br/>
                    <p>Learn more about the whole process of the project and detailed technologies used in <a href="https://www.google.com" target="_blank" class="underline">Here</a>.</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col mx-auto w-full bg-white text-black">
            <div class="flex flex-col mx-auto xxs:w-full md:w-3/4 h-full justify-center items-start" id="project_process">
                <div class="flex flex-col md:flex-row mx-auto px-7 pt-8 w-full h-auto justify-between items-start">
                    <a href="/thermofisher">
                        <button type="button" class="text-white bg-rose-900 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0l4 4m-4-4l4-4"/>
                            </svg>
                            &nbsp; Prev: New System at Thermo Fisher
                        </button>
                    </a>
                    <a href="/nuber">
                        <button type="button" class="text-white bg-rose-900 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Next: Nuber
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