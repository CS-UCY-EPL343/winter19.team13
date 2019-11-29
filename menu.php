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
  background-color: #808080;
  display: none;
}

.mycontainer img{
	width: 100%;
    height: 300px;
    object-fit: cover;
}

  </style>

  <style>
.menubackground{
	padding: 0.3rem 1rem;
	background-image: url("images/wood.png");
	background-size:cover;
  border-block-color: #bfbfbf;
}
.modalbodystyle{
	background-color: #bfbfbf;
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

<!-- Modal Reservation Choose -->
    <div class="modal fade" id="FoodPopupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Name</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
             <form class="Food">
 		<div class="form-group">
			<p> 
				Description:<br/>
				xxx xxxxxx xxxxx xx x x x x <br/>-xxxx <br/>-xxxxx
			</p>
		</div>
              <div class="form-group">
                <label ><i></i>Comments:</label><br/>
                <input id="CommentsOnDelivery" type="text" name="" class="form-control" >
              </div>

            </form>

          </div>
          <div class="modal-footer">

            <button type="button" style="width: 100%;" class="btn btn-lg btn-warning">Add to Cart</button>

          </div>
        </div>
      </div>
    </div>



  <div class="jumbotron">
  <div class="text-center">
    <div class="row">
      <div onclick="dine_in_menu()" class="col-sm-6 dine_in_color border-top border-left border-right border-danger">
        <h1>Dine In Menu</h1>      
        <p>Foods & Drinks </p>
      </div>
       <div onclick="take_away_menu()" class="col-sm-6 take_away_color border-top border-left border-right border-danger">
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
        <div class="panel-heading">Cucumber Mojito</div>
        <div class="panel-body"><img src="images/dine_in_1.jpg" class="img-responsive" alt="Image"></div>

      </div>
    </div>
    <div class="col-sm-3"> 
      <div onclick="menuModal(1)" class="panel panel-primary">
        <div class="panel-heading">Zombie</div>
        <div class="panel-body"><img src="images/dine_in_2.png" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>
    <div class="col-sm-3"> 
       <div onclick="menuModal(2)" class="panel panel-primary">
        <div class="panel-heading">Strawberry Margarita</div>
        <div class="panel-body"><img src="images/dine_in_3.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>


<div class="col-sm-3"> 
       <div onclick="menuModal(3)" class="panel panel-primary">
        <div class="panel-heading">Lime Margarita</div>
        <div class="panel-body"><img src="images/dine_in_4.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>
  </div>
<br>

  
  <div class="row">
    <div class="col-sm-3">
       <div onclick="menuModal(4)" class="panel panel-primary">
        <div class="panel-heading">Gingi Lemon</div>
        <div class="panel-body"><img src="images/dine_in_5.jpg" class="img-responsive" style="width:100%" alt="Image"></div>

      </div>
    </div>
    <div class="col-sm-3"> 
       <div onclick="menuModal(5)" class="panel panel-primary">
        <div class="panel-heading">Baristro 1st</div>
        <div class="panel-body"><img src="images/dine_in_6.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>
    <div class="col-sm-3"> 
       <div onclick="menuModal(6)" class="panel panel-primary">
        <div class="panel-heading">Cunjun Lemonade</div>
        <div class="panel-body"><img src="images/dine_in_7.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>


<div class="col-sm-3"> 
       <div onclick="menuModal(7)" class="panel panel-primary">
        <div class="panel-heading">Cuba Libre</div>
        <div class="panel-body"><img src="images/dine_in_8.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>
  </div>
<br>

   
  <div class="row">
    <div class="col-sm-3">
       <div onclick="menuModal(8)" class="panel panel-primary">
        <div class="panel-heading">Mai Tai</div>
        <div class="panel-body"><img src="images/dine_in_9.jpg" class="img-responsive" style="width:100%" alt="Image"></div>

      </div>
    </div>
    <div class="col-sm-3"> 
       <div onclick="menuModal(9)" class="panel panel-primary">
        <div class="panel-heading">Purple Haze</div>
        <div class="panel-body"><img src="images/dine_in_10.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>
    <div class="col-sm-3"> 
       <div onclick="menuModal(10)" class="panel panel-primary">
        <div class="panel-heading">Hugo</div>
        <div class="panel-body"><img src="images/dine_in_11.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>


<div class="col-sm-3"> 
       <div onclick="menuModal(11)" class="panel panel-primary">
        <div class="panel-heading">Mojito</div>
        <div class="panel-body"><img src="images/dine_in_12.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>
  </div>
<br>

    
  <div class="row">
    <div class="col-sm-3">
       <div onclick="menuModal(12)" class="panel panel-primary">
        <div class="panel-heading">Amaretto Spritz</div>
        <div class="panel-body"><img src="images/dine_in_13.jpg" class="img-responsive" style="width:100%" alt="Image"></div>

      </div>
    </div>
    <div class="col-sm-3"> 
       <div onclick="menuModal(13)" class="panel panel-primary">
        <div class="panel-heading">Caipirinha</div>
        <div class="panel-body"><img src="images/dine_in_14.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>
    <div class="col-sm-3"> 
       <div onclick="menuModal(14)" class="panel panel-primary">
        <div class="panel-heading">Sex On The Beach</div>
        <div class="panel-body"><img src="images/dine_in_15.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
      </div>
    </div>


<div class="col-sm-3"> 
       <div onclick="menuModal(15)" class="panel panel-primary">
        <div class="panel-heading">Bloody Mary</div>
        <div class="panel-body"><img src="images/dine_in_16.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       
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
      <div onclick="take_away_foot_menu(0)" class="panel panel-primary">
        <div class="panel-heading">Mpougatsa</div>
        <div class="panel-body"><img src="images/delivery_food_1.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
  <div class="panel-fooding">$2.99</div>
      </div>
    </div>
    <div class="col-sm-3"> 
     <div onclick="take_away_foot_menu(1)" class="panel panel-primary">
        <div class="panel-heading">Sandwich</div>
        <div class="panel-body"><img src="images/delivery_food_2.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-fooding">$2.99</div>
      </div>
    </div>
    <div class="col-sm-3"> 
     <div onclick="take_away_foot_menu(2)" class="panel panel-primary">
        <div class="panel-heading">Fry Eggs</div>
        <div class="panel-body"><img src="images/delivery_food_3.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-fooding">$2.99</div>
      </div>
    </div>


<div class="col-sm-3"> 
     <div onclick="take_away_foot_menu(3)" class="panel panel-primary">
        <div class="panel-heading">Lasagne</div>
        <div class="panel-body"><img src="images/delivery_food_4.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-fooding">$2.99</div>
      </div>
    </div>
  </div>
<br>

  
  <div class="row">
    <div class="col-sm-3">
     <div onclick="take_away_foot_menu(4)" class="panel panel-primary">
        <div class="panel-heading">omelette</div>
        <div class="panel-body"><img src="images/delivery_food_5.webp" class="img-responsive" style="width:100%" alt="Image"></div>
  <div class="panel-fooding">$2.99</div>
      </div>
    </div>
    <div class="col-sm-3"> 
     <div onclick="take_away_foot_menu(5)" class="panel panel-primary">
        <div class="panel-heading">Toast</div>
        <div class="panel-body"><img src="images/delivery_food_6.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-fooding">$2.99</div>
      </div>
    </div>
    <div class="col-sm-3"> 
     <div onclick="take_away_foot_menu(6)" class="panel panel-primary">
        <div class="panel-heading">Pastichio</div>
        <div class="panel-body"><img src="images/delivery_food_7.webp" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-fooding">$2.99</div>
      </div>
    </div>


<div class="col-sm-3"> 
     <div onclick="take_away_foot_menu(7)" class="panel panel-primary">
        <div class="panel-heading">Cheese Pie</div>
        <div class="panel-body"><img src="images/delivery_food_8.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-fooding">$2.99</div>
      </div>
    </div>
  </div>
<br>

 
  <div class="row">
    <div class="col-sm-3">
     <div onclick="menuModal_delivery(8)" class="panel panel-primary">
        <div class="panel-heading">Ice Latte</div>
        <div class="panel-body"><img src="images/delivery_drink_1.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
  <div class="panel-fooding">$2.99</div>
      </div>
    </div>
    <div class="col-sm-3"> 
     <div onclick="menuModal_delivery(9)" class="panel panel-primary">
        <div class="panel-heading">Frappe</div>
        <div class="panel-body"><img src="images/delivery_drink_2.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-fooding">$2.99</div>
      </div>
    </div>
    <div class="col-sm-3"> 
     <div onclick="menuModal_delivery(10)" class="panel panel-primary">
        <div class="panel-heading">Cappuccino</div>
        <div class="panel-body"><img src="images/delivery_drink_3.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-fooding">$2.99</div>
      </div>
    </div>


<div class="col-sm-3"> 
     <div onclick="menuModal_delivery(11)" class="panel panel-primary">
        <div class="panel-heading">Americano</div>
        <div class="panel-body"><img src="images/delivery_drink_4.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-fooding">$2.99</div>
      </div>
    </div>
  </div>
<br>

   
  <div class="row">
    <div class="col-sm-3">
     <div onclick="menuModal_delivery(12)" class="panel panel-primary">
        <div class="panel-heading">Freddo Cappuccino</div>
        <div class="panel-body"><img src="images/delivery_drink_5.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
  <div class="panel-fooding">$2.99</div>
      </div>
    </div>
    <div class="col-sm-3"> 
     <div onclick="take_away_foot_menu(13)" class="panel panel-primary">
        <div class="panel-heading">Lemonade</div>
        <div class="panel-body"><img src="images/delivery_drink_6.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-fooding">$2.99</div>
      </div>
    </div>
    <div class="col-sm-3"> 
     <div onclick="take_away_foot_menu(14)" class="panel panel-primary">
        <div class="panel-heading">Smoothie</div>
        <div class="panel-body"><img src="images/delivery_drink_7.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-fooding">$2.99</div>
      </div>
    </div>


<div class="col-sm-3"> 
     <div onclick="take_away_foot_menu(15)" class="panel panel-primary">
        <div class="panel-heading">Orange Juice</div>
        <div class="panel-body"><img src="images/delivery_drink_8.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
       <div class="panel-fooding">$2.99</div>
      </div>
    </div>
  </div>
  
</div><br>



<br>





<?php

include("elements/footer.php");

?>