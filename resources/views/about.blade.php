<!doctype html>
<html class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Htet Pyae Aung | About Htet</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body>
  <div class="bg-cover bg-stone-300 w-full h-screen flex">
    <div class="flex-auto w-5/6">
      <div class="fixed top-0 right-0 p-4 bg-transparent" id='navContainer'>
        <div class="mainNav space-x-6">
          <a href="#about">About</a>
          <a href="#projects">Services</a>
          <a href="#">Clients</a>
          <a href="#contact">Contact</a>
        </div>
        <!-- The overlay -->
        <div id="myNav" class="overlay">

          <!-- Button to close the overlay navigation -->
          {{-- <a href="javascript:void(0)" id="hamburger-close" class="closebtn" onclick="closeNav()">&times;</a> --}}

          <!-- Overlay content -->
          <div class="overlay-content">
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
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

  <div class="bg-cover bg-stone-300 w-full h-screen">
    <!-- Flex container for content -->
    <div class="container mx-auto text-center flex flex-row justify-center items-center">
      <div class="basis-3/4 h-dvh">
        <h1 class="font-franchise">Hey, I'm Htet </h1>
      </div>
      <div class="basis-1/4 h-dvh">
        <p>Htet's Photo</p>
      </div>
    </div>
  </div>
  


  <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
</body>
</html