﻿<?php
include("elements/header.php");
?>

<style>
body {
  background-image: url(back2.jpg);
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
    width :50%;
    margin: auto
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

   
    
    
/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

/**/


</style>



<h2 style="text-align:center"></h2>

<div class="container">
    
  <div class="mySlides" data-toggle="modal" data-target="#ReservationChooseModal">
    <div class="numbertext">1 / 6</div>
    <img src="1.jpg" style="width:100%">
  </div>

  <div class="mySlides" data-toggle="modal" data-target="#ReservationChooseModal">
    <div class="numbertext">2 / 6</div>
    <img src="2.jpg" style="width:100%">
  </div>

  <div class="mySlides" data-toggle="modal" data-target="#ReservationChooseModal">
    <div class="numbertext">3 / 6</div>
    <img src="3.jpg" style="width:100%">
  </div>
    
  <div class="mySlides" data-toggle="modal" data-target="#ReservationChooseModal">
    <div class="numbertext">4 / 6</div>
    <img src="4.jpg" style="width:100%">
  </div>

  <div class="mySlides" data-toggle="modal" data-target="#ReservationChooseModal">
    <div class="numbertext">5 / 6</div>
    <img src="5.jpg" style="width:100%">
  </div>
    
  <div class="mySlides" data-toggle="modal" data-target="#ReservationChooseModal">
    <div class="numbertext">6 / 6</div>
    <img src="6.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="1.jpg" style="width:100%" onclick="currentSlide(1)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="2.jpg" style="width:100%" onclick="currentSlide(2)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="3.jpg" style="width:100%" onclick="currentSlide(3)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="4.jpg" style="width:100%" onclick="currentSlide(4)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="5.jpg" style="width:100%" onclick="currentSlide(5)" >
    </div>    
    <div class="column">
      <img class="demo cursor" src="6.jpg" style="width:100%" onclick="currentSlide(6)" >
    </div>
  </div>
</div>



<!--  Create Reservation Start   -->

    <!-- Modal Reservation Choose -->
    <div class="modal fade" id="ReservationChooseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Make A Reservation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            <form class="Reservation">
	<button type="button" style="width: 100%;" class="btn btn-lg btn-warning" data-toggle="modal" data-target="#ReservationGuestModal">As a Guest</button>
              
            </form>

          </div>
          <div class="modal-footer">

            <button type="button" style="width: 100%;" class="btn btn-lg btn-warning" data-toggle="modal" data-target="#ReservationLogInModal">As a User (Log In)</button>

          </div>
        </div>
      </div>
    </div>


<!-- Modal Reservation User -->
    <div class="modal fade" id="ReservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Make A Reservation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            <form class="Login">

              <div class="form-group">
                <label ><i class="fa fa-male fa-2x"></i> Name: </label>
                <input id="ReservationName" type="text" name="" class="form-control" value="Antreas Antreou"   readonly="readonly">
              </div>

	      <div class="form-group">
                <label ><i class="fa fa-clock-o fa-2x"></i> Time: </label>
                <input id="ReservationTime" type="time" name="" class="form-control" >
              </div>

	     <div class="form-group">
                <label ><i class="fa fa-mobile-phone fa-2x"></i> Telephone Number: </label>
                <input id="ReservationPhone" type="text" name="" class="form-control" value="99999999"   readonly="readonly">
              </div>

              <div class="form-group">
                <label ><i class="fa fa-group fa-2x"></i> Number of People: </label>
                <input id="ReservationPeiple" type="number" name="" class="form-control" >
              </div>

            </form>

          </div>
          <div class="modal-footer">

            <button type="button" style="width: 100%;" class="btn btn-lg btn-warning">Confirm Reservation</button>

          </div>
        </div>
      </div>
    </div>



<!-- Modal Reservation Guest -->
    <div class="modal fade" id="ReservationGuestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Make A Reservation as Guest</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            <form class="Login">

              <div class="form-group">
                <label ><i class="fa fa-male fa-2x"></i> Name: </label>
                <input id="ReservationName" type="text" name="" class="form-control" >
              </div>

	      <div class="form-group">
                <label ><i class="fa fa-clock-o fa-2x"></i> Time: </label>
                <input id="ReservationTime" type="time" name="" class="form-control" >
              </div>

	     <div class="form-group">
                <label ><i class="fa fa-mobile-phone fa-2x"></i> Telephone Number: </label>
                <input id="ReservationPhone" type="text" name="" class="form-control">
              </div>

              <div class="form-group">
                <label ><i class="fa fa-group fa-2x"></i> Number of People: </label>
                <input id="ReservationPeiple" type="number" name="" class="form-control" >
              </div>

            </form>

          </div>
          <div class="modal-footer">

            <button type="button" style="width: 100%;" class="btn btn-lg btn-warning">Confirm Reservation</button>

          </div>
        </div>
      </div>
    </div>

 <!-- Modal Log in Reservation-->
    <div class="modal fade" id="ReservationLogInModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Log in</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            <form class="login">

              <div class="form-group">
                <label ><i class="fa fa-envelope fa-2x"></i> Email: </label>
                <input id="LogInEmail" type="text" name="" class="form-control" >
              </div>

              <div class="form-group">
                <label ><i class="fa fa-lock fa-2x"></i> Password: </label>
                <input id="LogInPassword" type="password" name="" class="form-control" >
              </div>

            </form>

          </div>
          <div class="modal-footer">

            <button type="button" style="width: 100%;" class="btn btn-lg btn-warning" data-toggle="modal" data-target="#ReservationModal" data-dismiss="modal">Login and procced to Reservation</button>

          </div>
        </div>
      </div>
    </div>





<!--  Create Reservation End -->








<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>



<?php

include("elements/footer.php");

?>