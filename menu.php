<?php
include("elements/header.php");
?>
<style>

    
    /* Remove the jumbotron's default bottom margin */ 
.jumbotron {
  margin-bottom: 0;
	/*background-color: #808080;*/
	color: brown;
	padding: 0;
}
/*Dine In Menu*/
.jumbotron .h1, .jumbotron h1 {
    font-size: 50px;
}
/*Foods and Drinks*/
.jumbotron p {
    margin-bottom: 0px;
    font-size: 25px;
    font-weight: 300;
}

/*Black Background*/ 
body {
    background-color: #1a1a1a;
}

.panel-body {
    padding: 0;
}

/*Border with drinks*/
.panel-primary > .panel-heading{
  color: #4d2600;
  background-image:url("images/wood.png");
  background-size:cover;
  border-color: brown;
  font-weight: 900;
  text-align: center;
  font-size: 100%;
	padding: 10px 15px 5px 15px;
  
}

.panel-primary > .panel-fooding{
    color: black;
    background-image:url("images/wood.png");
   background-size:cover;
    border-color: brown;
    font-weight: 900;
    text-align: right;
    font-size: 80%;
  padding: 5px 15px 0px 15px;
}

.panel:hover{
  opacity:1;
  -webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
}
.panel{
	border: 3px solid brown;
  opacity:0.8;
}
.mycontainer{
	width: 90%;
	margin: auto;
}

.dine_in_color{
  background-color: #1a1a1a;
}
.take_away_color{
   background-color: #808080;
}

#take_away_id{
  background-color: 808080;
  display: none;
}
	

  </style>

  <style>
.menubackground{
	padding: 0.3rem 1rem;
	background-image: url("images/wood.png");
	background-size:cover;
  border-block-color: #584141;
}
.modalbodystyle{
	background-color: #584141;
}
</style>


  <!-- Modal Reservation Choose -->
    <div class="modal fade" id="MenupopupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header menubackground">
           <h5 class="modal-title" id="exampleModalLabel"><b>Name</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body modalbodystyle">
            <div class="container">    
  		<div class="row">
   			<div class="col-sm-6">
				<div class="modal-body-image">
					<img src="images/drink.jpg" class="img-responsive rounded border border-dark" style="width:100%" alt="Image">
				</div>
			</div>
			<div class="col-sm-6">
				<div>
					<p style="font-size: 20px;"> 
						Description <br/> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet accumsan ex. Nulla malesuada vehicula ligula id mattis. Pellentesque interdum ullamcorper metus sit amet tristique. Aliquam at sagittis magna. Praesent finibus dolor id consectetur facilisis. <br/>-xxxx <br/>-xxxxx <br/>-xxxx <br/>-xxxxx
					</p>
				</div>
			</div>
	     	</div>	
		<div class="row">
   			<div class="col-sm-6">	
			</div>
			<div class="col-sm-6">
				<p style="text-align: right;font-size: 40px">$9.99</p>
			</div>
	     	</div>	
           </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Espresso Start-->
    <div class="modal fade" id="EspressoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Espresso</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            <form class="login">

              <div class="form-group">
                <label > Sugar: </label><br>
                <input id="sugaridNS" type="radio" value="No Sugar" name="choosesugar"> No Sugar<br>
    <input id="sugaridSS" type="radio" value="Some Sugar" name="choosesugar"> Some Sugar<br>
    <input id="sugaridM" type="radio" value="Medium" name="choosesugar"> Medium<br>
    <input id="sugaridS" type="radio" value="Sweet" name="choosesugar"> Sweet<br>
              </div>

              <div class="form-group">
                <label ></i> Add Extra Shot: </label><br>
                <input id="extrashotid" type="checkbox" name="extrashot" value="Extrashot"> Extra Espresso Shot +$0.50<br>
              </div>

            </form>

          </div>
          <div class="modal-footer">

            <button type="button" style="width: 100%;" class="btn btn-lg btn-warning">Add to Cart</button>

          </div>
        </div>
      </div>
    </div>
<!-- Modal Espresso End-->


  <div class="jumbotron">
  <div class="text-center">
    <div class="row">
      <div onclick="dine_in_menu()" class="col-sm-6 dine_in_color">
        <h1>Dine In Menu</h1>      
        <p>Foods & Drinks </p>
      </div>
       <div onclick="take_away_menu()" class="col-sm-6 take_away_color">
         <h1>Take-Away - Delivery Menu</h1>      
        <p>Coffees & Snacks</p>
      </div>
    </div>
  </div>
</div>
<br>

<div id="dine_in_id" class="mycontainer">    
  <div class="row">
    <div class="col-sm-3">
      <div onclick="menuModal(0)" class="panel panel-primary">
        <div class="panel-heading">GINGI LEMON</div>
        <div class="panel-body"><img src="images/drink.jpg" class="img-responsive" style="width:100%" alt="Image"></div>

      </div>
    </div>
    <div class="col-sm-3"> 
      <div onclick="menuModal(1)" class="panel panel-primary">
        <div class="panel-heading">SPICED MANDARIN</div>
        <div class="panel-body"><img src="images/drink.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>
    <div class="col-sm-3"> 
       <div onclick="menuModal(2)" class="panel panel-primary">
        <div class="panel-heading">BARISTRO 1st</div>
        <div class="panel-body"><img src="images/drink.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>


<div class="col-sm-3"> 
       <div onclick="menuModal(3)" class="panel panel-primary">
        <div class="panel-heading">BARISTRO 1st</div>
        <div class="panel-body"><img src="images/drink.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>
  </div>
<br>

  
  <div class="row">
    <div class="col-sm-3">
       <div onclick="menuModal(4)" class="panel panel-primary">
        <div class="panel-heading">GINGI LEMON</div>
        <div class="panel-body"><img src="images/drink.jpg" class="img-responsive" style="width:100%" alt="Image"></div>

      </div>
    </div>
    <div class="col-sm-3"> 
       <div onclick="menuModal(5)" class="panel panel-primary">
        <div class="panel-heading">SPICED MANDARIN</div>
        <div class="panel-body"><img src="images/drink.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>
    <div class="col-sm-3"> 
       <div onclick="menuModal(6)" class="panel panel-primary">
        <div class="panel-heading">BARISTRO 1st</div>
        <div class="panel-body"><img src="images/drink.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>


<div class="col-sm-3"> 
       <div onclick="menuModal(7)" class="panel panel-primary">
        <div class="panel-heading">BARISTRO 1st</div>
        <div class="panel-body"><img src="images/drink.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>
  </div>
<br>

   
  <div class="row">
    <div class="col-sm-3">
       <div onclick="menuModal(8)" class="panel panel-primary">
        <div class="panel-heading">GINGI LEMON</div>
        <div class="panel-body"><img src="images/drink.jpg" class="img-responsive" style="width:100%" alt="Image"></div>

      </div>
    </div>
    <div class="col-sm-3"> 
       <div onclick="menuModal(9)" class="panel panel-primary">
        <div class="panel-heading">SPICED MANDARIN</div>
        <div class="panel-body"><img src="images/drink.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>
    <div class="col-sm-3"> 
       <div onclick="menuModal(10)" class="panel panel-primary">
        <div class="panel-heading">BARISTRO 1st</div>
        <div class="panel-body"><img src="images/drink.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>


<div class="col-sm-3"> 
       <div onclick="menuModal(11)" class="panel panel-primary">
        <div class="panel-heading">BARISTRO 1st</div>
        <div class="panel-body"><img src="images/drink.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>
  </div>
<br>

    
  <div class="row">
    <div class="col-sm-3">
       <div onclick="menuModal(12)" class="panel panel-primary">
        <div class="panel-heading">GINGI LEMON</div>
        <div class="panel-body"><img src="images/drink.jpg" class="img-responsive" style="width:100%" alt="Image"></div>

      </div>
    </div>
    <div class="col-sm-3"> 
       <div onclick="menuModal(13)" class="panel panel-primary">
        <div class="panel-heading">SPICED MANDARIN</div>
        <div class="panel-body"><img src="images/drink.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>
    <div class="col-sm-3"> 
       <div onclick="menuModal(14)" class="panel panel-primary">
        <div class="panel-heading">BARISTRO 1st</div>
        <div class="panel-body"><img src="images/drink.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>


<div class="col-sm-3"> 
       <div onclick="menuModal(15)" class="panel panel-primary">
        <div class="panel-heading">BARISTRO 1st</div>
        <div class="panel-body"><img src="images/drink.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>
  </div>
<br>

</div>



<br>

<!-- Take away menu -->


<div id="take_away_id" class="mycontainer">    
  <div class="row">
    <div class="col-sm-3">
      <div onclick="menuModal_delivery(0)" class="panel panel-primary">
        <div class="panel-heading">Espresso</div>
        <div class="panel-body"><img src="images/coffee_menu.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
  <div class="panel-fooding">$2.99</div>
      </div>
    </div>
    <div class="col-sm-3"> 
     <div onclick="menuModal_delivery(1)" class="panel panel-primary">
        <div class="panel-heading">Espresso</div>
        <div class="panel-body"><img src="images/coffee_menu.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-fooding">$2.99</div>
      </div>
    </div>
    <div class="col-sm-3"> 
     <div onclick="menuModal_delivery(2)" class="panel panel-primary">
        <div class="panel-heading">Espresso</div>
        <div class="panel-body"><img src="images/coffee_menu.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-fooding">$2.99</div>
      </div>
    </div>


<div class="col-sm-3"> 
     <div onclick="menuModal_delivery(3)" class="panel panel-primary">
        <div class="panel-heading">Espresso</div>
        <div class="panel-body"><img src="images/coffee_menu.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-fooding">$2.99</div>
      </div>
    </div>
  </div>
<br>

  
  <div class="row">
    <div class="col-sm-3">
     <div onclick="menuModal_delivery(4)" class="panel panel-primary">
        <div class="panel-heading">Espresso</div>
        <div class="panel-body"><img src="images/coffee_menu.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
  <div class="panel-fooding">$2.99</div>
      </div>
    </div>
    <div class="col-sm-3"> 
     <div onclick="menuModal_delivery(5)" class="panel panel-primary">
        <div class="panel-heading">Espresso</div>
        <div class="panel-body"><img src="images/coffee_menu.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-fooding">$2.99</div>
      </div>
    </div>
    <div class="col-sm-3"> 
     <div onclick="menuModal_delivery(6)" class="panel panel-primary">
        <div class="panel-heading">Espresso</div>
        <div class="panel-body"><img src="images/coffee_menu.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-fooding">$2.99</div>
      </div>
    </div>


<div class="col-sm-3"> 
     <div onclick="menuModal_delivery(7)" class="panel panel-primary">
        <div class="panel-heading">Espresso</div>
        <div class="panel-body"><img src="images/coffee_menu.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-fooding">$2.99</div>
      </div>
    </div>
  </div>
<br>

 
  <div class="row">
    <div class="col-sm-3">
     <div onclick="menuModal_delivery(8)" class="panel panel-primary">
        <div class="panel-heading">Espresso</div>
        <div class="panel-body"><img src="images/coffee_menu.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
  <div class="panel-fooding">$2.99</div>
      </div>
    </div>
    <div class="col-sm-3"> 
     <div onclick="menuModal_delivery(9)" class="panel panel-primary">
        <div class="panel-heading">Espresso</div>
        <div class="panel-body"><img src="images/coffee_menu.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-fooding">$2.99</div>
      </div>
    </div>
    <div class="col-sm-3"> 
     <div onclick="menuModal_delivery(10)" class="panel panel-primary">
        <div class="panel-heading">Espresso</div>
        <div class="panel-body"><img src="images/coffee_menu.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-fooding">$2.99</div>
      </div>
    </div>


<div class="col-sm-3"> 
     <div onclick="menuModal_delivery(11)" class="panel panel-primary">
        <div class="panel-heading">Espresso</div>
        <div class="panel-body"><img src="images/coffee_menu.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-fooding">$2.99</div>
      </div>
    </div>
  </div>
<br>

   
  <div class="row">
    <div class="col-sm-3">
     <div onclick="menuModal_delivery(12)" class="panel panel-primary">
        <div class="panel-heading">Espresso</div>
        <div class="panel-body"><img src="images/coffee_menu.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
  <div class="panel-fooding">$2.99</div>
      </div>
    </div>
    <div class="col-sm-3"> 
     <div onclick="menuModal_delivery(13)" class="panel panel-primary">
        <div class="panel-heading">Espresso</div>
        <div class="panel-body"><img src="images/coffee_menu.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-fooding">$2.99</div>
      </div>
    </div>
    <div class="col-sm-3"> 
     <div onclick="menuModal_delivery(14)" class="panel panel-primary">
        <div class="panel-heading">Espresso</div>
        <div class="panel-body"><img src="images/coffee_menu.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-fooding">$2.99</div>
      </div>
    </div>


<div class="col-sm-3"> 
     <div onclick="menuModal_delivery(0)" class="panel panel-primary">
        <div class="panel-heading">Espresso</div>
        <div class="panel-body"><img src="images/coffee_menu.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-fooding">$2.99</div>
      </div>
    </div>
  </div>
  
</div><br>



<br>





<?php

include("elements/footer.php");

?>