﻿<?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
 }  
 else  
 {  
      header("location:login.html");  
 }  
 ?> 
<html>
<head>
	<title>Borrow - fundd</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/signup.css" />
</head>
<body class="is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header">
            <img src="images/logow2.png" height="125%">
            <nav id="nav">
                <ul>
                    <li>
                        <a href="#" class="icon solid fa-angle-down">More</a>
                        <ul>
                            <li><a href="member_home.php">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </li>
                    <li><a href="logout.php" class="button">Sign Out</a></li>
                </ul>
            </nav>
        </header>

        <!-- Main -->

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->


        <section id="main" class="container">
            <header>
                <h2>Borrowing Estimate</h2>
            </header>
            <form method="POST" action="calc.php">
                <input type="hidden" name="action" value="register" />
                <div class="row gtr-50 gtr-uniform">
                    <div class="col-6 col-12-mobilep">
                        <input type="text" name="firstname" pattern="[a-zA-Z]+" title="First name should only contain letters e.g. John" id="firstname" value="" placeholder=" First Name" required/>
                    </div>
                    <div class="col-6 col-12-mobilep">
                        <input type="text" name="lastname" pattern="[a-zA-Z]+" title="Last name should only contain letters e.g. Smith" id="lastname" value="" placeholder=" Last Name" required/>
                    </div>
                    <div class="col-6 col-12-mobilep">
                        <input type="text" name="loantype" pattern="[a-zA-Z]+" title="Loan type should only contain letters e.g. Smith" id="loantype" value="" placeholder=" Loan Type" required/>
                    </div>
                    <div class="col-6 col-12-mobilep">
                        <input type="text" name="loanamount" pattern="[0-9]+" title="Loan amount should be in dollars." id="loanamount" value="" placeholder="Loan Amount"/>
                    </div>
                    <div class="col-6 col-12-mobilep">
                        <input type="text" name="creditscore" pattern="[0-9]+" title="Credit score should be between 300 and 850." id="creditscore" value="" placeholder="Credit Score" min='300' max= '850'/>
                    </div>
                    <div class="col-6 col-12-mobilep">
                        <input type="text" name="collateral" pattern="[0-9]+" title="Collateral value should be in dollars." id="collateral" value="" placeholder="Collateral (optional)"/>
                    </div>
                    <div class="col-12">
                        <ul class="actions special">
                            <li><input type="Submit" value="View Quote" /></li>
                        </ul>
                    </div>
                </div>
            </form>
        </section>
        <!-- Footer -->
        <footer id="footer">
            <ul class="icons">
                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
                <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
                <li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; Untitled. All rights reserved.</li>
                <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </footer>

    </div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>