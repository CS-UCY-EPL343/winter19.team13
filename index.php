<?php

include("elements/header.php");

?>

<style>
.Home_headerimage {
	margin-bottom: 20px;
}
.Morning_image {
	margin-bottom: 20px;
}
.Evening_image{
	margin-bottom: 20px;
}

body {
	background-color: #1a1a1a ;
}

.maincolor{
	color: #1a1a1a;
}
.Home_headerimage img{
	width:100%;
	height:auto;
}
.container{
	max-width: 80%;
}
.Morning_image img{
	width: 100%; 
	height: auto;
}
.Evening_image img{
	width: 100%; 
	height: auto;
}
.goodmorning img{
	width: 100%; 
	height: auto;
}


.beer img{
	width: 100%; 
	height: auto;
}
.Header1 {
	text-align: center; 
	color: #b32400;
	font-family: 'Pacifico', cursive;
}
.Par1 {
	text-align: center; 
	color: green;
}
.Events img{
	width:100%; 
	height:auto;
}
.Events {
	margin-bottom: 20px;}
.P1 { 
	color: red; 
	text-align:center;
}
.P2 {
	text-align:center; 
	color: red;
}
.P3 {
	text-align:center; 
	color: pink;
}
.Boarder{
	width:100%; 
	height:auto; 
	padding:20px; 
	border: 1px solid white; 
	box-sizing: borded-box
}
.Vertical_line{
	border-left: 2px solid white; 
	height: 100%;
}
.goodfont{
	font-size:100px;
}
.mornignfond{
	font-size:20px;
	text-align:center; 
	color: red;
}

</style>


<div class="Home_headerimage">
	<img src = "Homepage2.jpg">
	</div>

<div class = "container">
	<div class = "row">
		<div class = "col-6" >
			<h1 style="font-size:3vw;" class = "Header1">
				START YOUR DAY
			</h1>
<!--
			<div class= "Boarder">
				<div class = "row">
					<div class = "col-7">
						<p class = "P1">				
							<b class="goodfont">
								Good
							</b>				
						</p>
					</div>
					<div class = "col-1">
						<div class = "Vertical_line" >
						</div>
					</div>
					<div class = "col-4">
						<p class = "P2">
							<div class="mornignfond">				
								Food<br><br>
								Coffee<br><br>
								Morning <br><br>				
							</div>
						</p>
					</div>
				</div>
			</div>
-->
			<div class= "goodmorning">
				<img src = "goodmorning.png">
				
			</div>

		</div>
		<div class = "col-6">
			<h1 style="font-size:2.5vw;" class= "maincolor">
						   a
			</h1>
			<div class= "Morning_image">
				<img src = "Evening3.jpg">
			</div>
		</div>
	</div>






	<div class = "row">
		<div class = "col-7">
				<h1 style="font-size:2.5vw;" class= "maincolor">
						   a
				</h1>
			<div class= "Evening_image">
				<img src = "Evening2.jpg">
			</div>
		</div>
				<div class = "col-5">
					<h1 style="font-size:2.5vw;" class= "Header1">
						AFTER THE SUNSET
					</h1>
<!--
						<div class = "Boarder">
							<p class = "P3">
							<font size = "5">
								<br>The BEST beers are the <br>ONES <br>we drink with FRIENDS
							</font>
							</p>
						</div>
-->
			<div class= "beer">
				<img src = "beer.png">
				
			</div>
					
	</div>
</div>
	<h1 style="font-size:3vw;" class= "Header1">
		EVENTS
	</h1>
<div class = "Events">
	<img src = "Events.jpg">
</div>


</div>
 

<?php

include("elements/footer.php");

?>