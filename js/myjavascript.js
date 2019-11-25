var prices_array = new Array(2.50, 1.50, 2.0, 3.5);

function dine_in_menu(){

	let take_away_menu = document.querySelector("#take_away_id");
	let dine_in_menu = document.querySelector("#dine_in_id");
	document.body.style.backgroundColor = "#1a1a1a";
	take_away_menu.style.display="none";
	dine_in_menu.style.display="block";
}

function take_away_menu(){

	let take_away_menu = document.querySelector("#take_away_id");
	let dine_in_menu = document.querySelector("#dine_in_id");
	document.body.style.backgroundColor = "#808080";
	take_away_menu.style.display="block";
	dine_in_menu.style.display="none";


}

function menuModal_delivery(x){

$("#EspressoModal").modal("toggle");

var matches_menu = document.querySelectorAll("#take_away_id div.panel-heading");
// matches_menu_image = document.querySelectorAll("#take_away_id div.panel-body img");


var modal_menu = document.querySelector("#EspressoModal h5.modal-title");
//var modal_menu_image = document.querySelector("#EspressoModal div.modal-body-image img");

//console.log(matches_menu_image[x]);

modal_menu.innerHTML = matches_menu[x].innerHTML;
//modal_menu_image.src= matches_menu_image[x].src;


}

function menuModal(x){

$("#MenupopupModal").modal("toggle");

var matches_menu = document.querySelectorAll("#dine_in_id div.panel-heading");
var matches_menu_image = document.querySelectorAll("#dine_in_id div.panel-body img");


var modal_menu = document.querySelector("#MenupopupModal h5.modal-title");
var modal_menu_image = document.querySelector("#MenupopupModal div.modal-body-image img");

//console.log(matches_menu_image[x]);

modal_menu.innerHTML = matches_menu[x].innerHTML;
modal_menu_image.src= matches_menu_image[x].src;


}




function cart_plus(x){



var matches = document.querySelectorAll("#Basket .modal-body .item div span.quantity");
console.log(matches);



var matches_price = document.querySelectorAll("#Basket .modal-body .item div span.item-price");
console.log(matches_price);


let quant = matches[x].innerHTML;

matches[x].innerHTML= parseInt(quant, 10) + 1;

let new_price = prices_array[x] * parseInt(matches[x].innerHTML, 10);

matches_price[x].innerHTML = "€" + new_price;



var total_price = document.querySelector("span.total_price");

total = total_price.innerHTML.replace("€", "");
total = total.replace("Total: ", "");
let total_pre_price = parseFloat(total) + prices_array[x];

total_price.innerHTML = "Total: "+total_pre_price+"€"



}

function cart_minus(x){

var matches = document.querySelectorAll("#Basket .modal-body .item div span.quantity");
console.log(matches);



var matches_price = document.querySelectorAll("#Basket .modal-body .item div span.item-price");
console.log(matches_price);


let quant = matches[x].innerHTML;

matches[x].innerHTML= parseInt(quant, 10) - 1;

let new_price = prices_array[x] * parseInt(matches[x].innerHTML, 10);

matches_price[x].innerHTML = "€" + new_price;



var total_price = document.querySelector("span.total_price");

total = total_price.innerHTML.replace("€", "");
total = total.replace("Total: ", "");
let total_pre_price = parseFloat(total) - prices_array[x];

total_price.innerHTML = "Total: "+total_pre_price+"€"

}


function navSlide(){

	//console.log('hi');

	let burger = document.querySelector('.burger');
	let nav = document.querySelector('.nav-links');
	


	nav.classList.toggle('nav-active');

	burger.classList.toggle('toggle');

}

function createAccount(){

	clearRegister();

	$("#LogInModal").modal("toggle");
	$("#RegisterModal").modal("toggle");
}


function createAccountFooter(){

	clearRegister();

	$("#RegisterModal").modal("toggle");
}

function clearRegister(){
	document.querySelector('#RegisterEmail').value="";
	document.querySelector('#RegisterFirst').value="";
	document.querySelector('#RegisterLast').value="";
	document.querySelector('#RegisterPhone').value="";
	document.querySelector('#RegisterPassword').value="";
	document.querySelector('#RegisterRePassword').value="";

}


function AccountLogIn(){

	clearLogIn();
	$("#LogInModal").modal("toggle");
	$("#RegisterModal").modal("hide");
}

function clearLogIn(){
	document.querySelector('#LogInEmail').value="";
	document.querySelector('#LogInPassword').value="";
	//console.log("clear");
}





// let navLinks = document.querySelectorAll('.nav-links li');

// navLinks.forEach((link, index)=>{

// 		link.style.animation = 'navLinkFade 0.5s ease forwards ${index / 7 + 2}s';

// 		console.log(link+" --- "+index);

// 	});