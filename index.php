 <!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta name="description" content=" This is our book store if you are looking for any books just click the link and join us "/>
<meta name="keyword" content="Store,Online, Book,Informations,Developers"/>
 <meta name="Book+" content="Online Book Store "/>
    <link rel="stylesheet" href="styles.css">
</head>

 


<body>
<!--this is the carve of header-->
<div class="container">
    <div class="wave"></div>
   </div>
<!--this is the menue of header-->
<nav id="navigation">
<!--this is the logo of our web-->
<a href="index.php" class="logo">SkyBOOKS<span>+</span></a><!--if user click in logo it will transfer him to Home page-->
       <!--this is the list of menu optin-->
       <ul class="links">
          <li><a href="About.php"><sup style="font-size:20px">About</sup></a></li><!--if user click in About it will transfer him to About page-->
          <li><a href="Books.php"><sup style="font-size:20px">Books</sup></a></li><!--if user click in Books it will transfer him to Books page-->
         <!--this is the feedback option -->
         <li><a href="Feedback.php"><sup style="font-size:20px">FeedBack</sup></a></li><!--if user click in Feedback it will transfer him to Feedback page-->
<?php
	session_start();
		if(!empty($_SESSION['username'])){
			print "		<!--this is the drobed list for login/sing in option -->
           <li class=\"dropdown\"><a  class=\"trigger-drop\"><img src=\"images/userIcon.png\" height=\"30\" width=\"30\" alt=\"userIcon\"/><i class=\"arrow\"></i></a>
            <ul class=\"drop\">
            <li><a href=\"Order.php\">My orders</a></li><!--if user click in LogIn it will transfer him to LogIn page-->
		   <li><a href=\"Logout.php\">Log out</a></li><!--if user click in signUp it will transfer him to signUp page-->
		   </ul>
		    <li><a href=\"checkOut.php\"><img src=\"images/cart.png\" height=\"30\" width=\"30\" alt=\"cartIcon\"/></a></li><!--if user click in cart it will transfer him to cart page-->
		 </li>";
		} else {print "<li><a href=\"Log.php\"><sup style=\"font-size:20px\">Log in</sup></a></li>";}
?>		 

       </ul>
    </nav>
<div>
<!--this is the discrptin-->
<h3 class="des">Sky BOOKS</h3><!--here put description about our website-->

 

<pre class="des1">
      <strong>"Books let you travel without moving your feet."</strong><!--here put description about our website-->
   We have established this electronic library in order with these 
      circumstances of this year also to win your satisfaction.</pre><!--here put description about our website-->

 

<!--this is theimage header and search filed -->
<div class="hederImage1"><img src="images/hed14.png" height="300" width="300" alt="hederIcon"/></div><!--here put images-->

 </div>

 

    <!--this is the list of all new books-->
      <div class="row">
   
      <div class="card3 card-1">
     <!--this is the image of new relase books-->
     <img src="images/hed34.png" alt="hederIcon2" />
      <h3>New book releases</h3>
      </div>

  </div>

  <div class="row">
      <!--this is the first  book in the list of new books-->
      <div class="card1 card-1">
   
  <img src="https://secure-ecsd.elsevier.com/covers/80/Tango2/large/9780128033043.jpg" alt="NewBook1"/><!--here put images of books-->
      <h3>Thermodynamics and Statistical Mechanics </h3><!--here put title of books-->
    <p> Thermodynamics and Statistical Mechanics for Scientists and
     Engineers.</p><!--here put description of books-->
      <form action=""><!--here put link if user click buy now button -->
      <div class="BooksdesHeder"><!--div (style)-->
      </form><!--end form-->
        
      </div><!--end div-->

 


  </div>
  
   <div class="row">
   
      <div class="card1 card-1">
   
  <img src="https://secure-ecsd.elsevier.com/covers/80/Tango2/large/9780125033503.jpg" alt="NewBook"/><!--here put images of books-->
     <!--this is the descrption of each books-->
      <h3>Inorganic Qualitative Analysis</h3><!--here put images of books-->
    <p> The chemistry of inorganic substances as the science 
    of atomic structure.</p><!--here put description of books-->
      <form action=""><!--here put link if user click buy now button -->
      <div class="BooksdesHeder"><!--div (style)-->
      </form><!--end form-->
      </div><!--end div-->

 


  </div>
  
     <div class="row">
   
      <div class="card1 card-1">
   
  <img src="https://secure-ecsd.elsevier.com/covers/80/Tango2/large/9780123742643.jpg" alt="NewBook2"/><!--here put images of books-->
      <h3>Optimal Sports Math</h3><!--here put images of books-->
    <p>  essential mathematics and statistics required to objectively analyze sports teams.</p><!--here put description of books-->
      <form action=""><!--here put link if user click buy now button -->
      <div class="BooksdesHeder"><!--div (style)-->
      </form><!--end form-->
      </div><!--end div-->

 


  </div>
  
  
   <div class="row">
   
      <div class="card1 card-1">
   
      <img src="https://secure-ecsd.elsevier.com/covers/80/Tango2/large/9780123820921.jpg" alt="NewBook3"/><!--here put images of books-->
      <h3>Wire Technology Engineering </h3><!--here put images of books-->
      <p> Provides information to the fundamental aspects of quantum mechanics.</p><!--here put description of books-->
      <form action=""><!--here put link if user click buy now button -->
      <div class="BooksdesHeder"><!--div (style)-->
      </form>
      </div>

 


  </div>
     <!--this is the footer of the page that contin all needed information-->
 <div class="footer">
    
 <a href="index.php">Home</a> | <a href="About.php">About</a> |<a href="Books.php">Books</a> |<a href="Log.php">Log In</a> |<a href="FeedBack.php">FeedBack</a><br />
        Copyright  2021 |Sky Books| Designed/Coded by Team 1 
</div> 

 

</body>
</html>