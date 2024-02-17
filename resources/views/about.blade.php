<!doctype html>
<html class="scroll-smooth">
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
<body class="bg-cover bg-stone-300 bg-no-repeat">
  <div class="w-full h-screen flex relative" id="intro">
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
    <div class="w-full h-3/4 mx-auto flex flex-wrap flex-row absolute content-center lg:top-28">
      <div class="flex-auto w-1/2 h-full">
        <div class="profile">
          <img loading="lazy" src="{{ asset('storage/images/fullprof.jpg') }}"/>
        </div>
      </div>
      <div class="flex-auto w-1/2 h-full">
        <h1 class="section-headers text-4xl" id="aboutMeHeader">Get to Know Me</h1>
        <p class="my-4">As a recent graduate with a Bachelor's degree in Computer Science, I am excited to bring my technical skills and passion for problem-solving to the professional world. <br/><br/>
          Throughout my studies, I have gained a strong foundation in programming languages such as Java, Python, and C++, as well as experience in data analysis and machine learning.<br/><br/>
          In addition to my technical expertise, I have also developed strong communication and teamwork skills through various group projects and internships. I have a passion for collaborating with others and finding creative solutions to complex problems.<br/><br/>
          Outside of my academic pursuits, I am an avid reader and enjoy staying up-to-date on the latest trends and technologies in the tech industry. In my free time, you can find me volunteering at local events and organizations, as well as exploring new hobbies and interests.<br/><br/>
          I am eager to leverage my skills and experience to make a positive impact in a dynamic and innovative company.</p>
          <h3 class="font-bold my-4">My professional Certifications</h3>
          <div class="flex flex-row">
            <a data-tooltip-target="tooltip-left" data-tooltip-placement="left" href="https://www.credly.com/badges/4ba8c54d-0899-4b75-9ac8-56a21bc2f7dd/linked_in_profile" class="certifications">
              <div class="tooltip-arrow" data-popper-arrow></div>
              <img src="{{ asset('storage/images/architect.png') }}" width="180" height="180"/>
            </a>
            <a data-tooltip-target="tooltip-animation" href="https://www.credly.com/badges/87c4d954-353d-42b1-8745-9b5116cfe24a/linked_in_profile">
                <div class="tooltip-arrow" data-popper-arrow></div>
              <img src="{{ asset('storage/images/quest.png') }}" width="180" height="180"/>
            </a>

            <div id="tooltip-animation" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
              Verify Me
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <div id="tooltip-left" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
              Verify Me
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
          </div>
          
      </div>
    </div>
  </div>

  <div class="w-full flex flex-row relative flex-wrap" style="height: 90vh; margin-top: -1%;">
    <div class="flex flex-auto w-1/2 flex-wrap relative">
      <h1 class="absolute section-headers text-4xl left-1/2" id="aboutMeHeader">My Work Timeline So Far</h1>
      
      <ol class="relative border-s mx-11 border-gray-200 dark:border-gray-700 mt-auto">                  
          <li class="mb-10 ms-4">
            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
            <time class="mb-1 text-sm font-normal leading-none dark:text-gray-500">January 2020 - January 2021</time>
            <h3 class="text-lg font-bold text-gray-900 dark:text-white">Web Developer @ Orient Crown Interior Design Studio</h3>
            <p class="text-base font-normal dark:text-gray-400">- Designed and implemented website front and backend utilizing WordPress, SEO, andGoogle Analytics, raising customer engagement rate by 45%. <br/>
              - Engaged closely with management team and other departments in quarterly designreviews and feedback. <br/>
              - Diagnosed and implemented solutions for bugs and performance issues, increasingwebsite performances by 65%. <br/></p>
          </li>
          <li class="mb-10 ms-4">
            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
            <time class="mb-1 text-sm font-normal leading-none dark:text-gray-500">July - November 2021</time>
            <h3 class="text-lg font-bold text-gray-900 dark:text-white">Analyst Developer @ Thermo Fisher Scientific</h3>
            <p class="text-base font-normal dark:text-gray-400">- Conducted time study of all the manufacturing processes of different products from the company. <br/>
              - Analyzed and presented analysis of collected data to management team, resulted in theirmanual scheduling process and labor usage being optimized.<br/>
              - Developed Maintenance Information System and documentation which increased thebusiness workflow by 60%.<br/>
              - Researched and recommended better scheduling solutions that can adapt and enhancetheir manual scheduling process.<br/>
              - Prepared technical documentation for the maintenance information system.</p>
          </li>
          <li class="mb-10 ms-4">
              <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
              <time class="mb-1 text-sm font-normal leading-none dark:text-gray-500">July 2022 - Current</time>
              <h3 class="text-lg font-bold text-gray-900 dark:text-white">Application Developer @ Cara Inc.</h3>
              <p class="text-base text-left font-normal dark:text-gray-400">- Led an integration project, architecting an Enterprise Service Bus system for seamless connectivity between critical business systems leveraging third-party and internal API integrations.<br/>
                - Implemented a web application to manage the Integration System enhancing user access andsecurity through SSO while streamlining system administration tasks.<br/>
                - Maintained and developed features for in-house ERP system according to stakeholder businessrequirements.<br/>
                - Collaborate with business analysts, project managers, cross-functional teams, and other externalstakeholders to transform business concepts into production-ready software for stakeholders.<br/>
                - Demonstrated adept problem-solving skills by proactively resolving user-reported system bugs.</p>
          </li>
      </ol>


    </div>
    <div class="flex flex-auto w-1/2 flex-wrap content-center" id="t-filler">
      <img class="relative left-1/4" loading="lazy" src="{{ asset('storage/images/timeline_filler_work.png') }}"/>
    </div>
  </div>
  
  <div class="w-full flex flex-row relative flex-wrap">
    <div class="flex flex-auto w-1/2 flex-wrap relative content-center" id="t-filler">
      <img class="relative left-1/4" loading="lazy" src="{{ asset('storage/images/timeline_filler_education.png') }}"/>
    </div>
    <div class="flex flex-auto w-1/2 flex-wrap content-center" >
      <h1 class="absolute section-headers text-4xl left-1/2 text-center" id="aboutMeHeader">Education History</h1>
      
      <ol class="relative border-s border-gray-200 dark:border-gray-700 mt-20">                  
          <li class="mb-10 ms-4">
            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
            <time class="mb-1 text-sm font-normal leading-none dark:text-gray-500">February 2019</time>
            <h3 class="text-lg font-bold text-gray-900 dark:text-white">Diploma of Higher Education (Information Technology)</h3>
            <p class="text-base font-normal dark:text-gray-400">James Cook University<br/></p>
          </li>
          <li class="mb-10 ms-4">
            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
            <time class="mb-1 text-sm font-normal leading-none dark:text-gray-500">December 2021</time>
            <h3 class="text-lg font-bold text-gray-900 dark:text-white">Bachelor of Information Technology (Software Development)</h3>
            <p class="text-base font-normal dark:text-gray-400">University of South Australia</p>
          </li>
      </ol>
    </div>
  </div>

  <section class="flex justify-center items-center h-48">
    <a href="https://drive.google.com/uc?export=download&id=1ZSJGmfYQOPThtS6FcTJJHoo8l5hrqjL_" download="MyResume.pdf" class="download-button flex items-center bg-rose-900 hover:bg-red-900 text-white font-bold py-2 px-4 border border-blue-700 rounded transition duration-300 ease-in-out">
      Download My Resume
      <span class="arrow ml-2 inline-block transform transition duration-500 ease-in-out">↓</span>
    </a>
  </section>
  
  


  

<footer class="bottom-0 left-0 z-20 w-full p-4 font-bold bg-stone-300 md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
  <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">@php
    echo '&copy; 2024', ($year = gmdate("Y")) !== '2024'? ' - '.$year : '';
  @endphp
   Crafted with &#10084; by Htet Pyae Aung
  </span>
  <ul class="flex flex-wrap items-center mt-3 text-sm  text-gray-500 dark:text-gray-400 sm:mt-0">
      <li>
          <a href="/about" class="hover:underline me-4 md:me-6">About</a>
      </li>
      <li>
          <a href="/projects" class="hover:underline me-4 md:me-6">Projects</a>
      </li>
      <li>
          <a href="/blog" class="hover:underline me-4 md:me-6">Blog</a>
      </li>
      <li>
          <a href="/contact" class="hover:underline">Contact</a>
      </li>
  </ul>
</footer>



    {{-- <h1 class="flex absolute footer-name mx-auto text-center content-center xxs:text-xs xs:text-sm md:text-base">
      @php
        echo '&copy; 2024', ($year = gmdate("Y")) !== '2024'? ' - '.$year : '';
      @endphp
       Crafted with &#10084; by Htet Pyae Aung
    </h1> --}}
</body>
</html