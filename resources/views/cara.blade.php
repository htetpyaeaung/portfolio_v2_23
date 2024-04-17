<!doctype html>
<html class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="{{ asset('storage/images/favicon.ico') }}">
  <title>Cara Integration | Projects</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chela+One&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body class="bg-cover bg-stone-300 bg-no-repeat">
    <div class="w-full xxs:h-full flex relative" id="intro">
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
          <a href="/blog">Blog</a>
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
            <a href="/blog">Blog</a>
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
            <div class="flex flex-col mx-auto xxs:w-full md:w-3/4 h-full justify-center items-start" id="project_process">
                <div class="flex flex-col mx-auto px-7 pt-8 w-full h-auto justify-left items-start">
                    <h1 class="font-scoville text-4xl " id="sectionHeader">Process</h1>
                    <p class="my-4 md:leading-10">
                        Cara hold staff information in both HR Information system and ERP system. Staff have direct access to update their details in ERP system and only HR staff are allowed to enter or update the records in HR Information system. Since ERP allows individual modifications of the profiles, some details are not copied over to HR system and some have been outdated like phone numbers or the address. To avoid data duplication and enhance data consistencies, access to update the profile is restricted and data should only be updated in HR system.<br/>
                    </p>
                </div>
                <div class="flex flex-col mx-auto px-7 pt-8 w-full h-auto justify-left items-start">
                    <h2 class="text-2xl md:text-3xl font-bold" > How do we ensure data in HR system is up to date?</h2>
                    <p class="my-4 md:leading-10">
                        With the amount of data hold in the system, it is impossible to go through individual profiles in two different systems and match up each other.<br/>
                    <ol class="list-decimal ml-4">
                        <li>Staff are notified about the existing personal details hold in the HR system and asking them to update if any of them are changed by the specific due date.</li>
                        <li>By the due date, the details will be used to update the HR system to have the latest information.</li>
                    </ol><br/>
                    Instead of checking two different systems to find the unmatched information, HR staff only need to focus on one system and the replies from the staff.
                    </p><br/>
                </div>
                <div class="flex flex-col mx-auto px-7 pt-8 w-full h-auto justify-left items-start">
                    <h2 class="text-2xl md:text-3xltext-2xl md:text-3xl font-bold" > Requirement Gathering: Is the project feasible?</h2>
                    <p class="my-4 md:leading-10">
                        Before we start doing this integrations, we need to gather data on whether the systems are even connectable.<br/>
                        This required two phases: <br/>
                    <ol class="list-decimal ml-4">
                        <li>We look at the individual systems, meaning diving through their documentation and check whether they have public APIs since we will be using that to integrate through centralized hub.</li>
                        <li>If no, then we have to look at alternatives on how we can integrate differently for that system. </li>
                    </ol><br/>
                    Fortunately, most of the systems at Cara support public APIs so the project is feasible to proceed.
                    </p><br/>
                </div>
                <div class="flex flex-col mx-auto px-7 pt-8 w-full h-auto justify-left items-start">
                    <h2 class="text-2xl md:text-3xltext-2xl md:text-3xl font-bold" > Build or Buy: Middleware</h2>
                    <p class="my-4 md:leading-10">
                        Now that the project is feasible and research is being done on the projected efficiecy of the system, we need to decide on buying a COTS or build a customized solution tailored to the business. A lot of factors are influenced in making a decision on this. However, senior management decided to proceed with building a customized solution rather than buying a COTS, we went ahead with that.
                    </p><br/>
                </div>
                <div class="flex flex-col mx-auto px-7 pt-8 w-full h-auto justify-left items-start">
                    <h2 class="text-2xl md:text-3xltext-2xl md:text-3xl font-bold" > Roadblocks</h2>
                    <p class="my-4 md:leading-10">
                        Some legacy systems do not support the modern REST API methods which is the case for some systems at CARA. Like all the other API endpoints, there is a rate limit imposed on APIs so we need to ensure the system runs efficiently and effectively without hitting the limit for normal tasks.
                    </p><br/>
                </div>
                <div class="flex flex-col mx-auto px-7 pt-8 w-full h-auto justify-left items-start">
                    <h2 class="text-2xl md:text-3xltext-2xl md:text-3xl font-bold" > Results</h2>
                    <p class="my-4 md:leading-10">
                        A scalable customized middleware that digests the data flow from source of truth and spit out the tailored processed data back to the connected system. 
                    </p><br/>
                </div>
                <div class="flex flex-col md:flex-row mx-auto px-7 pt-8 w-full h-auto justify-between items-start">
                    <button type="button" class="text-white bg-rose-900 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0l4 4m-4-4l4-4"/>
                        </svg>
                        &nbsp; Prev: SA Water Resevoir Data Analysis                     
                    </button>
                    <button type="button" class="text-white bg-rose-900 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Next: New System at Thermo Fisher
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </div> <br/><br/>
                
            </div>
        </div>
    </section>
    </div>
    

</body>
</html