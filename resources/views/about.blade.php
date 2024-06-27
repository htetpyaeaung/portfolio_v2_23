<!doctype html>
<html class="scroll-smooth" lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="{{ asset('storage/images/favicon.ico') }}">
  <!-- Primary Meta Tags -->
  <title>About Htet Pyae Aung — Full-stack Developer, Solution Architect</title>
  <meta name="title" content="Htet Pyae Aung — Full-stack Developer, Solution Architect" />
  <meta name="description" content="Htet is an Adelaide-based full-stack application developer currently working as an Application Developer at Cara. Htet has an extensive background and experience in leading ERP and software integration projects. " />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://htetpyaeaung.dev/about" />
  <meta property="og:title" content="About Htet Pyae Aung — Full-stack Developer, Solution Architect" />
  <meta property="og:description" content="Htet is an Adelaide-based full-stack application developer currently working as an Application Developer at Cara. Htet has an extensive background and experience in leading ERP and software integration projects. " />
  <meta property="og:image" content="{{ asset('storage/images/fullprof.jpg') }}" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://htetpyaeaung.dev/about" />
  <meta property="twitter:title" content="About Htet Pyae Aung — Full-stack Developer, Solution Architect" />
  <meta property="twitter:description" content="Htet is an Adelaide-based full-stack application developer currently working as an Application Developer at Cara. Htet has an extensive background and experience in leading ERP and software integration projects. " />
  <meta property="twitter:image" content="{{ asset('storage/images/fullprof.jpg') }}" />
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chela+One&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body class="w-full h-auto bg-cover bg-stone-300 bg-no-repeat font-inter">
  <div class="w-full h-28 flex relative" id="intro">
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
    <div class="w-full mx-auto flex flex-wrap h-auto">
      <div class="flex flex-col w-full xl:w-1/2 lg:h-full xxs:h-auto justify-center p-4">
        <div class="profile w-full">
          <img loading="lazy" src="{{ asset('storage/images/fullprof.jpg') }}" class="rounded-full w-full" width="100" style="max-width: 100%; height: auto; z-index: -1;"/>
        </div>
      </div>
      <div class="flex flex-col w-full xl:w-1/2 lg:h-full xxs:h-auto p-4">
        <h1 class="font-montbold text-4xl" id="sectionHeader">Get to Know Me</h1>
        <p class="my-4">Hi there, I am Htet - a Solutions Architect & Developer focus on creating dynamic and user-centric applications.
        I was born & raised in Yangon, Myanmar but currently based in <span class="font-bold">Adelaide, Australia.</span> Graduated with Bachelor's degree in Computer Science from <span class="font-bold">University of South Australia</span>, I am excited to bring my technical and problem-solving skills to the professional world. <br/><br/>
        Currently, I am working as an Application Developer at <span class="font-bold">Cara.</span> Here at Cara, I've led software integration projects, leveraging third-party and internal API integrations. Throughout my studies as well as in my current job, I have gained a strong foundation in programming languages such as Java, Python, and C++, as well as experience in data analysis and machine learning.<br/><br/>
        In addition to my technical expertise, I have also developed strong communication and teamwork skills through various group projects and internships. I have a passion for collaborating with others and finding creative solutions to complex problems.<br/><br/>
        Outside of my academic pursuits, I am an avid reader and enjoy staying up-to-date on the latest trends and technologies in the tech industry. In my free time, you can find me volunteering at local events and organizations, as well as exploring new hobbies and interests.
        </p>
        <h3 class="font-montbold text-xl tracking-wide my-4">Technologies I've worked with</h3>
        <div class="flex flex-col flex-wrap gap-2">
          <div class="gap-3">
            <h3 class="mb-1">Languages</h3>
            <span class="bg-orange-800 text-neutral-50 xxs:text-sm md:text-md font-medium me-2 xxs:px-2.5 md:px-3.5 xxs:py-0.5 md:py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">Python</span>
            <span class="bg-orange-800 text-neutral-50 xxs:text-sm md:text-md font-medium me-2 xxs:px-2.5 md:px-3.5 xxs:py-0.5 md:py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">C++</span>
            <span class="bg-orange-800 text-neutral-50 xxs:text-sm md:text-md font-medium me-2 xxs:px-2.5 md:px-3.5 xxs:py-0.5 md:py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">Php</span>
            <span class="bg-orange-800 text-neutral-50 xxs:text-sm md:text-md font-medium me-2 xxs:px-2.5 md:px-3.5 xxs:py-0.5 md:py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">Java</span>
            <span class="bg-orange-800 text-neutral-50 xxs:text-sm md:text-md font-medium me-2 xxs:px-2.5 md:px-3.5 xxs:py-0.5 md:py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">SQL</span>
            <span class="bg-orange-800 text-neutral-50 xxs:text-sm md:text-md font-medium me-2 xxs:px-2.5 md:px-3.5 xxs:py-0.5 md:py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">Javascript</span>
            <span class="bg-orange-800 text-neutral-50 xxs:text-sm md:text-md font-medium me-2 xxs:px-2.5 md:px-3.5 xxs:py-0.5 md:py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">HTML/CSS</span>
          </div>
          <div>
            <h3 class="mb-1">Libraries & Frameworks</h3>
            <span class="bg-orange-800 text-neutral-50 xxs:text-sm md:text-md font-medium me-2 xxs:px-2.5 md:px-3.5 xxs:py-0.5 md:py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">Laravel</span>
            <span class="bg-orange-800 text-neutral-50 xxs:text-sm md:text-md font-medium me-2 xxs:px-2.5 md:px-3.5 xxs:py-0.5 md:py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">Angular JS</span>
            <span class="bg-orange-800 text-neutral-50 xxs:text-sm md:text-md font-medium me-2 xxs:px-2.5 md:px-3.5 xxs:py-0.5 md:py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">Tailwind</span>
            <span class="bg-orange-800 text-neutral-50 xxs:text-sm md:text-md font-medium me-2 xxs:px-2.5 md:px-3.5 xxs:py-0.5 md:py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">Vue</span>
            <span class="bg-orange-800 text-neutral-50 xxs:text-sm md:text-md font-medium me-2 xxs:px-2.5 md:px-3.5 xxs:py-0.5 md:py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">Postgres</span>
            <span class="bg-orange-800 text-neutral-50 xxs:text-sm md:text-md font-medium me-2 xxs:px-2.5 md:px-3.5 xxs:py-0.5 md:py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">MariaDB</span>
          </div>
          <div>
            <h3 class="mb-1">Tools & Platforms</h3>
            <span class="bg-orange-800 text-neutral-50 xxs:text-sm md:text-md font-medium me-2 xxs:px-2.5 md:px-3.5 xxs:py-0.5 md:py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">Git</span>
            <span class="bg-orange-800 text-neutral-50 xxs:text-sm md:text-md font-medium me-2 xxs:px-2.5 md:px-3.5 xxs:py-0.5 md:py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">JIRA</span>
            <span class="bg-orange-800 text-neutral-50 xxs:text-sm md:text-md font-medium me-2 xxs:px-2.5 md:px-3.5 xxs:py-0.5 md:py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">AWS</span>
            <span class="bg-orange-800 text-neutral-50 xxs:text-sm md:text-md font-medium me-2 xxs:px-2.5 md:px-3.5 xxs:py-0.5 md:py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">WordPress</span>
            <span class="bg-orange-800 text-neutral-50 xxs:text-sm md:text-md font-medium me-2 xxs:px-2.5 md:px-3.5 xxs:py-0.5 md:py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">VSCode</span>
            <span class="bg-orange-800 text-neutral-50 xxs:text-sm md:text-md font-medium me-2 xxs:px-2.5 md:px-3.5 xxs:py-0.5 md:py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">Figma</span>
            <span class="bg-orange-800 text-neutral-50 xxs:text-sm md:text-md font-medium me-2 xxs:px-2.5 md:px-3.5 xxs:py-0.5 md:py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">Docker</span>
            <span class="bg-orange-800 text-neutral-50 xxs:text-sm md:text-md font-medium me-2 xxs:px-2.5 md:px-3.5 xxs:py-0.5 md:py-1.5 rounded dark:bg-gray-700 dark:text-gray-300">VMware</span>
          </div>
        </div>
        <h3 class="font-montbold text-xl tracking-wide my-4">My professional Certifications</h3>
        <div class="flex flex-row flex-wrap gap-4">
          <div>
            <a data-tooltip-target="tooltip-left" data-tooltip-placement="left" href="https://www.credly.com/badges/4ba8c54d-0899-4b75-9ac8-56a21bc2f7dd/linked_in_profile" target="_blank" class="certifications">
              <div class="tooltip-arrow" data-popper-arrow></div>
              <img id="architect" src="{{ asset('storage/images/architect-new.png') }}" width="180" height="180"/>
            </a>
            <div id="tooltip-left" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
              Verify Me
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
          </div>
          <div>
            <a data-tooltip-target="tooltip-animation" href="https://www.credly.com/badges/87c4d954-353d-42b1-8745-9b5116cfe24a/linked_in_profile" target="_blank">
              <div class="tooltip-arrow" data-popper-arrow></div>
            <img src="{{ asset('storage/images/quest.png') }}" width="180" height="180"/>
            </a>
            <div id="tooltip-animation" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
              Verify Me
              <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="w-full h-full flex flex-col lg:flex-row flex-wrap content-center relative">
    <div class="flex flex-col w-full lg:w-1/2 p-4 items-center xxs:justify-start md:justify-end">
      <h1 class="relative font-montbold tracking-wide text-4xl xxs:left-0 md:left-12 lg:left-1/4 xl:left-12" id="aboutMeHeader">Experience</h1>
      <ol class="relative border-s border-gray-200 dark:border-gray-700 mt-8 xxs:ml-8 md:ml-44 lg:ml-0">                  
          <li class="mb-10 ms-4">
            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
            <time class="mb-1 text-sm font-normal leading-none dark:text-gray-500">January 2020 - January 2021</time>
            <h3 class="text-lg font-bold text-gray-900 dark:text-white">Orient Crown Interior Design Studio</h3>
            <p class="text-base font-normal dark:text-gray-400">Web Developer</p>
          </li>
          <li class="mb-10 ms-4">
            <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
            <time class="mb-1 text-sm font-normal leading-none dark:text-gray-500">July - November 2021</time>
            <h3 class="text-lg font-bold text-gray-900 dark:text-white">Thermo Fisher Scientific</h3>
            <p class="text-base font-normal dark:text-gray-400">Analyst Developer</p>
          </li>
          <li class="mb-10 ms-4">
              <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
              <time class="mb-1 text-sm font-normal leading-none dark:text-gray-500">July 2022 - Current</time>
              <h3 class="text-lg font-bold text-gray-900 dark:text-white">Cara Inc.</h3>
              <p class="text-base text-left font-normal dark:text-gray-400">Application Developer</p>
          </li>
      </ol>
    </div>
    <div class="flex w-full lg:w-1/2 p-4 items-center justify-center" id="t-filler">
      <img class="relative" loading="lazy" src="{{ asset('storage/images/timeline_filler_work.png') }}"/>
    </div>
  </div>
  
  <div class="w-full h-auto flex flex-wrap-reverse content-center relative">
    <div class="flex w-full lg:w-1/2 p-4 items-start xxs:justify-center lg:justify-end" id="t-filler">
      <img loading="lazy" src="{{ asset('storage/images/timeline_filler_education.png') }}" class="max-w-full h-auto"/>
    </div>
    <div class="flex flex-col flex-auto items-center w-1/2 flex-wrap" >
      <h1 class="relative font-montbold tracking-wide text-4xl" id="aboutMeHeader">Education</h1>
      
      <ol class="relative border-s mx-0 border-gray-200 dark:border-gray-700 xxs:mt-8 md:mt-20 lg:mt-0 xl:mt-20 xxs:ml-12 md:ml-0">                  
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
    {{-- <a href="https://drive.google.com/uc?export=download&id=1ZSJGmfYQOPThtS6FcTJJHoo8l5hrqjL_" download="MyResume.pdf" class="download-button flex items-center bg-rose-900 hover:bg-red-900 text-white font-bold py-2 px-4 border border-blue-700 rounded transition duration-300 ease-in-out">
      Download My Resume
      <span class="arrow ml-2 inline-block transform transition duration-500 ease-in-out">↓</span>
    </a> --}}

    <a href="{{ asset('storage/Htet Pyae Aung- Resume.pdf') }}" download="Htet's_Resume.pdf" class="download-button flex items-center bg-rose-900 hover:bg-red-900 text-white font-bold py-2 px-4 border border-blue-700 rounded transition duration-300 ease-in-out">
      Download My Resume
      <span class="arrow ml-2 inline-block transform transition duration-500 ease-in-out">↓</span>
    </a>
  </section>

<footer class="bottom-0 left-0 z-20 w-full p-4 font-bold md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
  <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">@php
    echo '&copy; 2024', ($year = gmdate("Y")) !== '2024'? ' - '.$year : '';
  @endphp
   Crafted with <span id="heartIcon" class="contents">&#10084;</span> by Htet Pyae Aung | Illustrations from <a href="https://absurd.design">absurd.design</a>
  </span>
  <ul class="flex flex-wrap items-center mt-3 text-sm gap-3 footer-icons text-gray-500 dark:text-gray-400 sm:mt-0">
      <li>
        <a href="https://x.com/charles_htet" target="_blank">
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