/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

         // Skills button 
         filterSelection("all")
         function filterSelection(c) {
         var x, i;
         x = document.getElementsByClassName("column");
         if (c == "all") c = "";
         for (i = 0; i < x.length; i++) {
             w3RemoveClass(x[i], "show");
             if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
         }
         }
 
         function w3AddClass(element, name) {
         var i, arr1, arr2;
         arr1 = element.className.split(" ");
         arr2 = name.split(" ");
         for (i = 0; i < arr2.length; i++) {
             if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
         }
         }
 
         function w3RemoveClass(element, name) {
         var i, arr1, arr2;
         arr1 = element.className.split(" ");
         arr2 = name.split(" ");
         for (i = 0; i < arr2.length; i++) {
             while (arr1.indexOf(arr2[i]) > -1) {
             arr1.splice(arr1.indexOf(arr2[i]), 1);     
             }
         }
         element.className = arr1.join(" ");
         }
 
 
         // Add active class to the current button (highlight it)
         var btnContainer = document.getElementById("myBtnContainer");
         var btns = btnContainer.getElementsByClassName("btn");
         for (var i = 0; i < btns.length; i++) {
         btns[i].addEventListener("click", function(){
             var current = document.getElementsByClassName("active");
             current[0].className = current[0].className.replace(" active", "");
             this.className += " active";
         });
         }
 
 /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
         // name animation heading
         // Wrap every letter in a span
         var textWrapper = document.querySelector('.ml10 .letters');
         textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
 
         anime.timeline()
         .add({
             targets: '.ml10 .letter',
             rotateY: [-90, 0],
             duration: 1300,
             delay: (el, i) => 45 * i
         }).add({
             targets: '.ml10',
             opacity: 1,
             duration: 2000,
             easing: "easeOutExpo",
             delay: 2000
         });
    
 /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
 

    
 /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Open the navbar
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.addEventListener('click', closeNavOutside);
}

// Close the navbar
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.removeEventListener('click', closeNavOutside);
}

// Function to close the navbar when clicking outside
function closeNavOutside(event) {
  var sidenav = document.getElementById("mySidenav");
  var navbutton = document.getElementsByClassName("navbutton")[0];
  if (!sidenav.contains(event.target) && !navbutton.contains(event.target)) {
    document.getElementById("mySidenav").style.width = "0";
    document.removeEventListener('click', closeNavOutside);
  }
}
