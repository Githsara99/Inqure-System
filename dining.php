<?php
    include_once "config.php";

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $firstName = $_POST['firstName']; // Corrected capitalization
        $lastName = $_POST['lastName']; // Corrected capitalization
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $country = $_POST['country'];
        $restaurant = $_POST['restaurant'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $message = $_POST['message'];

        $q = "INSERT INTO inquire (id, title, firstName, lastName, email, phone, country, restaurant, date, time, message) VALUES ('', '$title', '$firstName', '$lastName', '$email', '$phone', '$country', '$restaurant', '$date', '$time', '$message')";

        $query = mysqli_query($conn, $q);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <script src="dining2.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ROYAL OAK: DINING</title>

    <link rel="icon" type="img/png" href="images/icons/logo-removebg.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@200;300;700&family=Inconsolata:wght@300;400;600;700;800&family=
    Poppins:wght@100;200;300;400;600;700&family=Titillium+Web:ital,wght@0,300;0,400;0,600;0,700;1,200&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/471c4e19ff.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/dining.css">

</head>
<body>
	<!-- header section begin -->
	<!---Header-->
        <header>
        <div class="nav-position" style="position: sticky; top: 0;">
            <div>
                <img class="logoimg" src="images/icons/logo-removebg.png" alt="logo" ></img>
            </div>

            <div class="nav" style="background: linear-gradient(to right, #00093c, #2d0b00) ; height: 76.5px;">
                <ul>
                    <div class="topnav">
                        <li><a class="active" href="home.html"> HOME </a></li>
                        <li><a href="moneytransfer.html"> ABOUT </a></li>
                        <li><a href="loan.html"> DINING </a></li>
                        <li><a href="paybills.html"> EVENTS </a></li>
                        <li><a href="about.html"> BOOK NOW </a></li>
                        <li><a href="help.html">CONTACT</a></li>
                    </div>
                    
                    <div id="log_sign"> 
                        <li class="log">
                            <button class="login-button">
                                <a href="login.html" style="text-decoration: none;">Login
                                </a>
                            </button>
                        </li>
                        <li class="sign">
                            <button class="signup">
                                <a href="signup.html">
                                    Sign Up
                                </a>
                            </button>
                        </li>
                    </div> 
                </ul>
            </div>
        </div>
    </header>
    <!----Header End-->

	<br><br><br><br><br>

	<div id="part1_container">
		<h2>DINING AT ROYAL OAK</h2>
		<p id="part2_para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, </p>
	</div>

	<br><br>

	<div id="part2_container">

		<div id="_1st_dection_of_part2">

			<div id="restaurant1">
				<img class="part2_section1_imgs" src="images/dining/dining2.jpg" alt="image of restaurant1">
                <button class="btn1" onclick="rest()">Epicurean Bistro</button>
				

			</div>
			<div id="restaurant2">
				<img class="part2_section1_imgs" src="images/resturant/bar2.jpg" alt="image of restaurant2">
				<h4>Tonic Tavern</h4>
			</div>
		</div>

		<div id="_2nd_dection_of_part2">

			<div id="restaurant3" style="margin-bottom: 20px;">
				<img class="part2_section2_imgs" src="images/resturant/italian1.jpg" alt="image of restaurant3">
				<h4>Trattoria Gastronomia</h4>
			</div>
			<div id="restaurant4"> 
				<img class="part2_section2_imgs" src="images/cafe/cafe1.jpg" alt="image of restaurant4">
				<h4>Coffee Shop</h4>
			</div>
		</div>
	</div>


    

    <br><br>

    <h2>I N Q U I R E    N O W</h2>
    <div id="part3_main_container" >
    
        <div class="name">
        <form  method="POST" >
        
        <label style="margin-left:50px;">ID*</label>
                    <input type="text" name="id">
                    <br>
                    <label style="margin-left:50px;">TITLE*</label>
                    <input type="text" name="title">
                    <label style="margin-left:40px;">FIRST NAME*</label>
                    <input type="text" name="firstName">
                    <label style="margin-left:40px;">LAST NAME*</label>
                    <input type="text" name="lastName">
                    <br>
                    <label style="margin-left:50px;">EMAIL*</label>
                    <input type="email" name="email">
                    <label style="margin-left:40px;">PHONE*</label>
                    <input type="text" name="phone">
                    <label style="margin-left:75px;">COUNTRY*</label>
                    <input type="text" name="country">
                    <br>
                    <label style="margin-left:50px;">RESTAURANT*</label>
                    <input type="text" name="restaurant"> <!-- Fixed typo in the input field name -->
                    <label style="margin-left:50px;">DATE*</label>
                    <input type="text" name="date"> <!-- Fixed typo in the input field name -->
                    <label style="margin-left:50px;">TIME*</label>
                    <input type="text" name="time"> <!-- Fixed typo in the input field name -->
                    <br>
                    <label style="margin-left:50px;">MESSAGE*</label>
                    <br>
                    <textarea rows="15" cols="108" style="margin-left:70px;" name="message"></textarea>

                      <br>
               <br>
               <p>By giving your confirmation you explicitly give consent for us to store and use this information to service your requests.<br><br>

                If you do not consent we will not store any personal information and will only send an email with the relevant details in order to service your requests.</p>
        
                <br>
              
             <input style="margin-left:50px; "  type="checkbox" id="abc" onclick="checkme()" name="confirm"><b style="font-size: 15px; text-transform:none;" >  I confirm I have read and given consent for the above</b><br>
                <p style="color:red; margin-left:70px; font-size: 10px; text-transform:none; display:blocked " id="msg">Please accept the button before submit</p>
             
                <br>
              
              <button type="submit" style="margin-left:50px; margin-bottom: 50px; " class="bttn" id="btn"  onclick="display();" >SUBMIT</button>
    
            </strong>
            
    
           </form>
        </div>
    </div> 

    <br><br>
    <button class="btn" onclick="book()">NEXT>></button>
    <br><br><br>
    <button onclick="displayText()">Click Me!</button>

    <div>

    <!---Footer-->
    <footer>

        <div class="row" >
            <div class="col">
                <img src="images/icons/logo.png" style="width: 70px;height: 70px; " class="logoFooter">
                <br><br>
                <p><i>"Your ideal location for <br> memorable occasions."</i></p>
            </div>
            <div class="col">
                    <h3>Office</h3>
                    <p>THE ROYAL OAK</p>
                    <br>
                    <p>21, HIKKADUWA RD</p>
                    <br>
                    <p>COLOMBO 07</p>
                    <p class="email-id">royaloak@gmail.com</p>
                    <h4>+97 - 112458974</h4>
            </div>
            <div class="col">
                    <h3>Links</h3>
                    <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">ABOUT</a></li>
                    <li><a href="">ACCOMODATION</a></li>
                    <li><a href= "">EVENTS</a></li>
                    <li><a href="">BOOK NOW</a></li>
                    <li><a href="">CONTACT</a></li>
                    </ul>
            </div>
            <div class="col">
                    <h3>Follow us on Social Media</h3>
                    <div class="social-icons">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-square-x-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
            </div>
        </div>
    </footer>
    <!---Footer End-->

    </div>

<div id="textField" style="display: none;">
  This is the text that appears when you click the button.

    

</div>
    
</div>

	

</body>
</html>