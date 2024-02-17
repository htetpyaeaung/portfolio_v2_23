import { doc } from 'prettier';
import './bootstrap';
import 'flowbite';

function setTextAnimation(delay, duration, strokeWidth, timingFunction, strokeColor,repeat) {
    let paths = document.querySelectorAll("#svgGroup path");
    let mode=repeat?'infinite':'forwards'
    for (let i = 0; i < paths.length; i++) {
        const path = paths[i];
        const length = path.getTotalLength();
        path.style["stroke-dashoffset"] = `${length}px`;
        path.style["stroke-dasharray"] = `${length}px`;
        path.style["stroke-width"] = `${strokeWidth}px`;
        path.style["stroke"] = `${strokeColor}`;
        path.style["animation"] = `${duration}s svg-text-anim ${mode} ${timingFunction}`;
        path.style["animation-delay"] = `${i * delay}s`;
    }
}
setTextAnimation(0.2,6,1.5,'ease','#080808',false);

// document.getElementById("hamburger").addEventListener("click",openNav);
// document.getElementById("hamburger-close").addEventListener("click",closeNav);

document.getElementById("hamburger").addEventListener("click", function() {
    var overlay = document.getElementById("myNav");
    var isExpanded = this.getAttribute("aria-expanded") === "true";
    
    if (isExpanded) {
        // Close overlay
        overlay.style.width = "0%";
        closeNav();
        this.setAttribute("aria-expanded", "false");
    } else {
        // Open overlay
        openNav();
        this.setAttribute("aria-expanded", "true");
    }
});

/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
    document.getElementById("svg-parent").style.display = "none";
}

  
/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
    document.getElementById("svg-parent").style.display = "block";
}

// Debounce function to limit how often a function is executed
function debounce(func, wait, immediate) {
    var timeout;
    return function() {
      var context = this, args = arguments;
      var later = function() {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };
      var callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  }
  
  // Function to handle the scroll event
  function onScroll() {
    // Get the current scroll position
    const scrollPosition = window.scrollY || window.pageYOffset;
    
    // Get the target element's top position relative to the document
    const target = document.getElementById('aboutMeHeader');
    const targetPosition = target.offsetTop;
    const targetHeight = target.offsetHeight; // Height of the element
    
    // Check if we have scrolled past the target element
    if (scrollPosition > targetPosition + targetHeight) {
      console.log('Scrolled past the About Me section!');
      // Perform any action after scrolling past the target element
      document.getElementById('logoDiv').style.display = 'none';
      document.getElementById('navmain').style.display = 'none';
    } else {
      // If scrolled back up before the target element, revert the action
      document.getElementById('logoDiv').style.display = 'block';
      document.getElementById('navmain').style.display = 'block';
    }
  }
  
  // Attach the scroll event listener to the window with debounce
  window.addEventListener('scroll', debounce(onScroll, 100));