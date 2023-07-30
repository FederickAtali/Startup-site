
/** 
//Moves divs accross the screen. 
var MOVE = document.getElementById("ballID");
var myVar = setInterval(spo);
var margin = 0;

function spostaDiv() {
  margin += 10;
  MOVE.style.marginLeft = margin + "px";
  //hwo to stop the moving divs ones it exit the screen.
}
*/

/**--------OR----------
 * let MOVE = document.getElementById("ballID");
var myVar = setInterval(spostaDiv, 1000);
var margin = 0;
let l = window.screen.width;
let w = 600;
function spostaDiv(){
    console.log(w);
    if (margin == w) {
        margin = 0 + "px";
    } else{
        MOVE.style.marginLeft = margin + "px";

    }
    margin += 5;
}
 * 
 */


//Creating animation counter using javascript.
function animate(obj,initVal, lastVal, duration){

        let startTime = null;

        // assigning the current timestamp to the currentTime variable.
        let currentTime  = Date.now();


        //Sending the current timestamp to the step function
        const step = (currentTime) => {

            //Incase the start time is null, make the current time to the
            //startTime.
            if(!startTime){
                startTime = currentTime ;
            }
            //value to be use in calculating the number to be displayed.
            const baseValue = Math.min((currentTime - startTime)/ duration, 1);

            //From the value gotten above we can calculate what to be displayed.
            obj.innerHTML = Math.floor(baseValue * (lastVal - initVal) + initVal);

            //this check make sure the counter do not exceed the last value.
            if(baseValue < 1){

                window.requestAnimationFrame(step);
            } else{
                window.cancelAnimationFrame(window.requestAnimationFrame(step));
            }

        };
        //Begin animating.
window.requestAnimationFrame(step);
}// end of function.


let animate1  = document.getElementById('0101');
let animate2  = document.getElementById('0102');
let animate3  = document.getElementById('0103');

const load = () =>  {

   animate(animate1, 0,80, 5000);
   animate(animate2, 0,400, 5000);
   animate(animate3,0, 100, 5000);
}

 /**About creaating slide show with play and pause button */
 let slideIndex  = 1;
 showSlides(slideIndex);

 //next/previous control.
 function plusSlides(n){
     showSlides(slideIndex  +=  n);
 }
 
 //Thumbnail image controls.
 function currentSlide(n){
      showSlides (slideIndex = n);
 }

function showSlides(n){
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");

    if(n >  slides.length)
    {slideIndex = 1}

    if(n < 1) {slideIndex = slides.length}
    for(i = 0; i < slides.length; i++){
        slides[i].style.display = "none";
    }

    for ( i = 0; i < dots.length; i++){
        dots[i].className = dots[i].className.replace("active", "");
    }
   slides[slideIndex-1].style.display = "block";
   dots[slideIndex-1].className += " active";
}





 /*** 
<div  class="note-jokin d-flex  " id="allcardallcard">
              <div class="card-group w-400" id="group-car">
                <div class="card" id="allwidth">
                  <a href="http://thedigigarage.in/demo/cms/">
                  <img src="images/page.jpg" class="card-img-top" alt="web design image ">
                </a>
                  <div class="card-body">
                    <h5 id="neuw" class="card-title">NEUPHOTIC</h5>  
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card " id="secCrad">
                  <a href="https://www.thedigigarage.in/demo/amyo/">
                  <img src="images/DEVLOP.jpg" class="card-img-top" alt="some cool web design">
                </a>
                  <div class="card-body">
                    <h5 class="card-title">AMYO</h5>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card" id="thirdCard">
                  <a href="">
                  <img src="images/Fron-page.jpg" class="card-img-top" alt="Some cool front page">
                </a>
                  <div class="card-body">
                    <h5 class="card-title">CattleFurnitureEggypt</h5>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                
              </div>
          </div>
          </div>


*/
