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
    const targetElementHome = document.getElementById("svg-parent");
    const targetElementproject = document.getElementById("sectionHeader");
    const targetprojectItems = document.getElementsByClassName("project-item");
    if(targetElementHome != null){
      document.getElementById("svg-parent").style.zIndex = "-10";
    }
    if(targetElementproject != null){
      document.getElementById("sectionHeader").style.zIndex = "-1";
    }
    if(targetprojectItems != null){
      [...document.getElementsByClassName("project-item")].forEach(element => {
        element.style.zIndex = "-1";
      });
    }
}

  
/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
    const targetElementHome = document.getElementById("svg-parent");
    if(targetElementHome != null){
      document.getElementById("svg-parent").style.zIndex = "1";
    }
    // document.getElementById("footer_name").style.zIndex = "1s";
}

let lastKnownScrollPosition = 0;
let ticking = false;
let targetPosition = 0;
let targetHeight = 0;
const logoDiv = document.getElementById('logoDiv');
const navmain = document.getElementById('navmain');

function setup() {
  const target = document.getElementById('sectionHeader');
  if (target) {
    targetPosition = target.offsetTop;
    targetHeight = target.offsetHeight;
  }
}

function onScroll(scrollPos) {
  if (scrollPos > targetPosition + targetHeight) {
    logoDiv.style.display = 'none';
    navmain.style.display = 'none';
  } else {
    logoDiv.style.display = 'block';
    navmain.style.display = 'block';
  }
}

window.addEventListener('scroll', function(e) {
  lastKnownScrollPosition = window.scrollY;

  if (!ticking) {
    window.requestAnimationFrame(function() {
      onScroll(lastKnownScrollPosition);
      ticking = false;
    });

    ticking = true;
  }
});

// Call setup to initialize targetPosition and targetHeight
setup();
