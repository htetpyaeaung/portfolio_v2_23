<!doctype html>
<html class="scroll-smooth" lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="{{ asset('storage/images/favicon.ico') }}">
  <title>Projects | Thermo Fisher</title>
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
            <h1 class="font-scoville xxs:text-4xl md:text-7xl" id="sectionHeader">Maintenance Information System</h1>
            <h2 class="xxs:text-sm md:text-md font-normal">An accessible, centralized maintenance data managmeent system tailored towards the requirements of Thermo Fisher Scientific</h2>
        </div>
        <div class="flex flex-col md:flex-row mx-auto w-full h-1/2 text-center justify-center items-center" id="project_hero">
            <img class="px-2 py-2 w-full md:w-1/2 h-1/2" src="{{ asset('storage/images/thermo-fisher-portal.png') }}">
        </div>

        <div class="flex xxs:flex-wrap md:flex-nowrap mx-auto w-full h-full text-center justify-center items-center xxs:space-y-2 md:space-y-0 xxs:space-x-1 md:space-x-2" id="project_hero">
            <div class="flex flex-col w-full h-1/2 justify-center py-12">
                <h2 class="font-bold text-2xl py-3">Role</h2>
                <h2 class="text-md py-3">Analyst Developer</h2>
                <h3 class="text-sm">Custom Integration, Testing, APIs, WordPress, Php</h3>
            </div>
            <div class="flex flex-col justify-center w-full h-1/2 py-12">
                <h2 class="font-bold text-2xl py-3">Team</h2>
                <h2 class="text-md py-3">Development team, Clients & Project Manager</h2>
                <h3 class="text-sm">Managed by Production Manager, Thermo Fisher Adelaide</h3>
            </div>
            <div class="flex flex-col justify-center text-center w-full h-1/2 py-12">
                <h2 class="font-bold text-2xl py-3">Duration</h2>
                <h2 class="text-md py-3">August - December 2021</h2>
                <h2 class="text-sm">(4 months)</h2>
            </div>
        </div>

        <div class="flex flex-col mx-auto w-full bg-white">
            <div class="flex flex-col mx-auto xxs:w-full md:w-3/4 md:my-5 h-full justify-center items-start" id="project_hero">
                <div class="flex flex-col mx-auto px-7 pt-8 w-full h-auto justify-left items-start">
                    <h1 class="font-scoville text-4xl" id="sectionHeader">Background</h1>
                    <p class="mt-2">Thermo Fisher Scientific is a leading global supplier of analytical instruments, life sciences solutions, specialty diagnostics, laboratory, pharmaceutical and biotechnology services. <a href="https://www.thermofisher.com" class="underline">Learn More about what Thermo Fisher does.</a></p>
                    <p class="my-5">This project was done in a collaboration with Thermo Fisher's Australian Division with the goal of improving efficiencies and modernizing the business. The aim of the project 
                         is to improve their machine maintenance process by digitalizing and creating a web portal for storing current and archived maintenance forms.</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col mx-auto w-full bg-white text-black">
            <div class="flex flex-col mx-auto xxs:w-full md:w-3/4 h-full justify-center items-start" id="project_hero">
                <div class="flex flex-col mx-auto px-7 pt-8 w-full h-auto justify-left items-start">
                    <h1 class="font-scoville text-4xl" id="sectionHeader">Problem</h1>
                    <blockquote class="p-4 my-4 border-s-4 border-gray-300  dark:border-gray-500 dark:bg-gray-800">
                        <p class="text-xl italic font-bold leading-relaxed ">"Maintenance Manager has to dive through a stack of folders to find archived forms and staff has to keep track of multiple paper forms for individual machines manually"</p>
                    </blockquote>
                    <p>
                        Currently, the maintenance department use paper forms and the supervisor has to print out and distribute to other employees manually to get the work update.
                        This becomes extra steps for every maintenace process as staff has to fill in multiple paper forms manually and submit them to the manager. It becomes a risk to the business as the paper forms and data could be lost, confidential data can be outside of business and no real-time tracking for management to see which machine is behind in the maintenance process.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-col mx-auto w-full bg-white text-black">
            <div class="flex flex-col mx-auto xxs:w-full md:w-3/4 h-full justify-center items-start" id="project_hero">
                <div class="flex flex-col mx-auto px-7 pt-8 w-full h-auto justify-left items-start">
                    <h1 class="font-scoville text-4xl" id="sectionHeader">Solution</h1>
                    <ul class="space-y-1 text-black list-disc list-inside dark:text-gray-400">
                        <li>
                            Firstly, we need to digitalize all paper forms to tackle the issue with storing physical papers in multiple folders for each machine.
                        </li><br/>
                        <span class="md:pl-5">To do that, We created a form with Microsoft solution called Microsoft forms. As the business is already in the process of rolling out individual tablet for each maintenance staff, the project was rolled out at the right time.<br/><br/></span>
                        <li>
                            Secondly, We need a place to store all those forms and manager to track of which machine has completed the process or which staff has not finished their tasks. Moreover, the manager also need to keep track of parts that are consumed as part of the maintenance process.
                        </li><br/>
                        <span class="md:pl-5">To do that, We created a user-friendly web portal with WordPress and linked directly with Microsoft Forms. As soon as the staff submit their forms, the manager is notified and can review those forms. The forms can be searched, sorted alphabetically and stored by the machine name.
                            We also created a dedicated function for the business to upload the archived forms to the portal for the easier search but this was not included in the project due to the tight deadline.<br/><br/></span>
                        <li>
                            In addition, the supervisor can easily view the details of spare parts and equipments stock level in the system. Data to these details are fed through customized APIs.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-col mx-auto w-full bg-white text-black">
            <div class="flex flex-col mx-auto xxs:w-full md:w-3/4 h-full justify-center items-start" id="project_hero">
                <div class="flex flex-col mx-auto xxs:space-y-5 md:space-y-0 px-7 pt-8 w-full h-auto justify-left items-start">
                    <h1 class="font-scoville text-4xl" id="sectionHeader">Technologies Used</h1>
                    <ul class="max-w-lg space-y-1 text-black list-disc list-inside dark:text-gray-400">
                        <li>
                            HTML, CSS for Frontend Components
                        </li>
                        <li>
                            WordPress (PHP) for all backend components
                        </li>
                        <li>
                            Supported by MySQL
                        </li>
                        <li>
                            Hosted on Company's Server
                        </li>
                    </ul><br/>
                </div>
            </div>
        </div>
        <div class="flex flex-col mx-auto w-full bg-white text-black">
            <div class="flex flex-col mx-auto xxs:w-full md:w-3/4 h-full justify-center items-start" id="project_process">
                <div class="flex flex-col md:flex-row mx-auto xxs:space-y-5 md:space-y-0 px-7 pt-8 w-full h-auto justify-between items-start">
                    <a href="/cara-integration" class="xxs:w-full md:w-auto">
                        <button type="button" class="text-white bg-rose-900 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center xxs:w-full md:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0l4 4m-4-4l4-4"/>
                            </svg>
                            &nbsp; Prev: Cara Middleware
                        </button>
                    </a>
                    <a href="/ocstudio" class="xxs:w-full md:w-auto">
                        <button type="button" class="text-white bg-rose-900 hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-5 py-2.5 text-center inline-flex items-center xxs:w-full md:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Next: Orient Crown Studio Portfolio
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