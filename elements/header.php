<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Baristro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

    <script src="js/myjavascript.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  </head>
  <body>

    <nav>
       <div class="logo">
           <!-- <h4>The Nav</h4> -->
          <a href="#">
            <img src="images/logo.png"  />
          </a>
       </div>

       <ul class="nav-links">
           <li>
               <a href="menu.php">Menu</a>
           </li>
            <li>
               <a href="#">Events</a>
           </li>
            <li>
               <a href="contact_us.php">Contact Us</a>
           </li>
            <li>
               <a href="about_us.php">About Us</a>
           </li>

           <li>
              <button  class="btn" data-toggle="modal" data-target="#Basket">
                <img src="images/cart_icon.svg"   />
              </button>
           </li>
            <li>
              <button id="login" onclick="AccountLogIn()" type="button" class="btn btn-outline-warning" >Log in</button> <!-- data-toggle="modal" data-target="#LogInModal" -->
           </li>


       </ul>


       <dir class="burger" onclick="navSlide()">
           <div class="line1"></div>
           <div class="line2"></div>
           <div class="line3"></div>
       </dir>

    </nav>

    <!-- Modal Log in -->
    <div class="modal fade" id="LogInModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

            <div class="signup">
              <a onclick="createAccount()">Create Account</a> <!-- data-dismiss="modal"  -->
            </div>

            <button type="button" style="width: 40%;" class="btn btn-lg btn-warning">Login</button>

          </div>
        </div>
      </div>
    </div>


    <div class="main_body"></div>

<!-- Modal Create Account -->
    <div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
            <form class="login">

              <div class="form-group">
                <label ><i class="fa fa-envelope fa-2x"></i> Email: </label>
                <input id="RegisterEmail" type="text" name="" class="form-control" >
              </div>

               <div class="form-group">
                <label ><i class="fa fa-envelope fa-2x"></i> First Name: </label>
                <input id="RegisterFirst" type="text" name="" class="form-control" >
              </div>

               <div class="form-group">
                <label ><i class="fa fa-envelope fa-2x"></i> Last Name: </label>
                <input id="RegisterLast" type="text" name="" class="form-control" >
              </div>

               <div class="form-group">
                <label ><i class="fa fa-envelope fa-2x"></i> Phone: </label>
                <input id="RegisterPhone" type="text" name="" class="form-control" >
              </div>



              <div class="form-group">
                <label ><i class="fa fa-lock fa-2x"></i> Password: </label>
                <input id="RegisterPassword" type="password" name="" class="form-control" >
              </div>

              <div class="form-group">
                <label ><i class="fa fa-lock fa-2x"></i>Repeat Password: </label>
                <input id="RegisterRePassword" type="password" name="" class="form-control" >
              </div>

            </form>

          </div>
          <div class="modal-footer">

            <div class="signup">
              <a onclick="AccountLogIn()">I have already Account</a>
            </div>

            <button type="button" style="width: 40%;" class="btn btn-lg btn-warning">Create Account</button>

          </div>
        </div>
      </div>
    </div>


    <!-- Modal Cart -->
    <div class="modal fade" id="Basket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Basket</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="cart container_fluid">
              
              <div class="row item">
                <div class="col-md-1">
                  <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="col-md-3">
                  <img src="images/coffee.jpg" />
                </div>
                <div class="col-md-3">
                  <ul >
                    <li class="product_title"> Capuchino</li>
                    <li> milk,sugar</li>
                    
                  </ul>
                </div>
                <div class="col-md-1">
                  <input class="plus-minus" type="button" onclick="cart_minus(0)" value="-">
                </div>
                <div class="col-md-1">
                  <span class="quantity">1</span>
                </div>
                <div class="col-md-1">
                   <input class="plus-minus" type="button" onclick="cart_plus(0)" value="+" >
                </div>
                
                <div class="col-md-2">
                  <span class="item-price" >&euro;2.5</span>
                </div>
              </div>
              <hr>

              <div class="row item">
                <div class="col-md-1">
                  <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="col-md-3">
                  <img src="images/coffee.jpg" />
                </div>
                <div class="col-md-3">
                  <ul >
                    <li class="product_title"> Capuchino</li>
                    <li> milk,sugar</li>
                    
                  </ul>
                </div>
                <div class="col-md-1">
                  <input class="plus-minus" onclick="cart_minus(1)" type="button" value="-">
                </div>
                <div class="col-md-1">
                  <span class="quantity">1</span>
                </div>
                <div class="col-md-1">
                   <input class="plus-minus" onclick="cart_plus(1)" type="button" value="+" >
                </div>
                
                <div class="col-md-2">
                  <span class="item-price">&euro;1.5</span>
                </div>
              </div>
              <hr>

              <div class="row item">
                <div class="col-md-1">
                  <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="col-md-3">
                  <img src="images/coffee.jpg" />
                </div>
                <div class="col-md-3">
                  <ul >
                    <li class="product_title"> Capuchino</li>
                    <li> milk,sugar</li>
                    
                  </ul>
                </div>
                <div class="col-md-1">
                  <input class="plus-minus" type="button" onclick="cart_minus(2)" value="-">
                </div>
                <div class="col-md-1">
                  <span class="quantity">1</span>
                </div>
                <div class="col-md-1">
                   <input class="plus-minus" onclick="cart_plus(2)" type="button" value="+" >
                </div>
                
                <div class="col-md-2">
                  <span class="item-price">&euro;2</span>
                </div>
              </div>
              <hr>

              <div class="row item">
                <div class="col-md-1">
                  <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="col-md-3">
                  <img src="images/coffee.jpg" />
                </div>
                <div class="col-md-3">
                  <ul >
                    <li class="product_title"> Capuchino</li>
                    <li> milk,sugar</li>
                    
                  </ul>
                </div>
                <div class="col-md-1">
                  <input class="plus-minus" type="button" onclick="cart_minus(3)" value="-">
                </div>
                <div class="col-md-1">
                  <span class="quantity">1</span>
                </div>
                <div class="col-md-1">
                   <input class="plus-minus" onclick="cart_plus(3)" type="button" value="+" >
                </div>
                
                <div class="col-md-2">
                  <span class="item-price">&euro;3.5</span>
                </div>
              </div>
              <hr>
            </div>
          </div>

          <div class="modal-footer">
            <div class="signup">
              <span class="total_price">Total: 9.5&euro;</span> <!-- data-dismiss="modal"  -->
            </div>

            <button type="button" style="width: 40%;" class="btn btn-lg btn-warning">Check Out</button>
          </div>
        </div>
      </div>
    </div>










  	<!-- <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		      <a class="navbar-brand" href="index.html"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Delicous</small></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="menu.html" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav> -->
    <!-- END nav -->


