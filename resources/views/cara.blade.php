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
        <div class="flex flex-col mx-auto w-full bg-orange-950 text-white">
            <div class="flex flex-col mx-auto xxs:w-full md:w-3/4 h-full justify-center items-start" id="project_hero">
                <div class="flex flex-col mx-auto px-7 pt-8 w-full h-auto justify-left items-start">
                    <h1 class="font-scoville text-4xl" id="sectionHeader">Problem</h1>
                    <blockquote class="p-4 my-4 border-s-4 border-gray-300 bg-orange-950 dark:border-gray-500 dark:bg-gray-800">
                        <p class="text-xl italic font-bold leading-relaxed text-white">"15 Minutes"</p>
                    </blockquote>
                    <p class="text-white">
                    That is how long it takes for a HR staff to onboard or offboard an employee. HR manages a massive information of staff and it takes a significant time for them to manually enter or update the information across the different systems.<br/><br/>
                    Data are scattered across and there are multiple source of truth for the similar data type and the risk of data duplication in various areas. <br/><br/>
                    Cara need to streamline this processes to reduce this time-consuming, repetitive task and efficiently manage their scattered data. <br/><br/>
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-col mx-auto w-full bg-yellow-600 text-white">
            <div class="flex flex-col mx-auto xxs:w-full md:w-3/4 h-full justify-center items-start" id="project_hero">
                <div class="flex flex-col mx-auto px-7 pt-8 w-full h-auto justify-left items-start">
                    <h1 class="font-scoville text-4xl" id="sectionHeader">Solution</h1>
                    <blockquote class="p-4 my-4 border-s-4 border-gray-300 bg-yellow-600 dark:border-gray-500 dark:bg-gray-800">
                        <p class="xxs:text-sm md:text-xl italic font-bold leading-relaxed text-white">"Establish a source of truth for all staff information and integrate different systems through centralized integration hub"</p>
                    </blockquote>
                    <p class="my-4">
                        The goal is to design and develop a scalable customized middleware system that allows the data flows from source of truth to all other systems.<br/><br/>
                        Staff will make changes to one and only one system and the data will be replicated across all different systems that are connected to the middleware. <br/><br/>
                        This ensures data consistency, reduce the workload and increase efficiency of the staff.<br/></p>
                </div>
            </div>
        </div>
        <div class="flex flex-col mx-auto w-full bg-indigo-900 text-white">
            <div class="flex flex-col mx-auto xxs:w-full md:w-3/4 h-full justify-center items-start" id="project_process">
                <div class="flex flex-col mx-auto px-7 pt-8 w-full h-auto justify-left items-start">
                    <h1 class="font-scoville text-4xl" id="sectionHeader">Process</h1>
                    <p class="my-4 md:leading-10">
                        Cara hold staff information in both HR Information system and ERP system. Staff have direct access to update their details in ERP system and only HR staff are allowed to enter or update the records in HR Information system. Since ERP allows individual modifications of the profiles, some details are not copied over to HR system and some have been outdated like phone numbers or the address. To avoid data duplication and enhance data consistencies, access to update the profile is restricted and data should only be updated in HR system.<br/>
                    </p>
                </div>
                <div class="flex flex-col mx-auto px-7 pt-8 w-full h-auto justify-left items-start">
                    <h2 class="text-2xl md:text-3xl" > How do we ensure data in HR system is up to date?</h2>
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
                    <h2 class="text-2xl md:text-3xltext-2xl md:text-3xl" > Requirement Gathering: Is the project feasible?</h2>
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
                    <h2 class="text-2xl md:text-3xltext-2xl md:text-3xl" > Build or Buy: Middleware</h2>
                    <p class="my-4 md:leading-10">
                        Now that the project is feasible and research is being done on the projected efficiecy of the system, we need to decide on buying a COTS or build a customized solution tailored to the business. A lot of factors are influenced in making a decision on this. However, senior management decided to proceed with building a customized solution rather than buying a COTS, we went ahead with that.
                    </p><br/>
                </div>
                <div class="flex flex-col mx-auto px-7 pt-8 w-full h-auto justify-left items-start">
                    <h2 class="text-2xl md:text-3xltext-2xl md:text-3xl" > Roadblocks</h2>
                    <p class="my-4 md:leading-10">
                        Some legacy systems do not support the modern REST API methods which is the case for some systems at CARA. Like all the other API endpoints, there is a rate limit imposed on APIs so we need to ensure the system runs efficiently and effectively without hitting the limit for normal tasks.
                    </p><br/>
                </div>
                <div class="flex flex-col mx-auto px-7 pt-8 w-full h-auto justify-left items-start">
                    <h2 class="text-2xl md:text-3xltext-2xl md:text-3xl" > Results</h2>
                    <p class="my-4 md:leading-10">
                        A scalable customized middleware that digests the data flow from source of truth and spit out the tailored processed data back to the connected system. 
                    </p><br/>
                </div>
            </div>
        </div>
    </section>
    </div>
    <footer class="bottom-0 left-0 z-20 w-full p-4 font-bold bg-stone-300 md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
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