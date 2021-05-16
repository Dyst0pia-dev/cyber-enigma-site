<!DOCTYPE html>
<html lang="en">

<style>
.button2 {
  background-color: #ffffff00;
  border: none;
  color: white;
  padding: 960px 170px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 2000px;
}

@import url('https://fonts.googleapis.com/css?family=Exo:400,700');

*{
    margin: 0px;
    padding: 0px;
}

.circles{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.circles li{
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: rgba(212, 212, 212, 0.2);
    animation: animate 25s linear infinite;
    bottom: -150px;
    
}

.circles li:nth-child(1){
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}


.circles li:nth-child(2){
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}

.circles li:nth-child(3){
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}

.circles li:nth-child(4){
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.circles li:nth-child(5){
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}

.circles li:nth-child(6){
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}

.circles li:nth-child(7){
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}

.circles li:nth-child(8){
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}

.circles li:nth-child(9){
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}

.circles li:nth-child(10){
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}



@keyframes animate {

    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }

    100%{
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }

}

h3 {
  position: absolute;
  left: 490px;
  top: 310px;
  transition-delay: 20s;
  animation-delay: 2s;
}	

h2 img {
    margin-top: -4px;
    vertical-align: middle;
    border-style: none;
    width: 60px;
    height: 55px;
    margin-left: -50px;
}

@media screen and (max-width: 538px) {
  h2 img {
     margin-top: -10px;
    vertical-align: middle;
    border-style: none;
    width: 60px;
    height: 55px;
    margin-left: -15px;
  }
  
}

@media screen and (max-width: 306px) {
  h2 img {
    margin-top: -10px;
    vertical-align: middle;
    border-style: none;
    width: 60px;
    height: 55px;
    margin-left: -15px;
  
    
  }  

}

@media screen and (max-width: 538px) {
   h3 {
    position: absolute;
    left: 30px;
    top: 310px;
    transition-delay: 20s;
    animation-delay: 2s;
   }
}  
</style>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Raidcord-VPN</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" type="text/css" href="assets2/css/font-awesome.css">

    <link rel="stylesheet" href="assets2/css/templatemo-softy-pinko.css">		
  </head>

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2><img src="raidcord-logo.png"></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="accounts.html">Accounts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://meet.jit.si/raidcord" target="blank_" >Voice Chat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Need Help?</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
	<div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
					<li></li>
					<li></li>
					<li></li>
            </ul>
    </div >
	
	
	<body>
	<div class="row">

                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="pricing-item active">
                        <div class="pricing-header">
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper2">
                                <span class="currency"></span>
                                <span class="price">Steam</span>
                                <span class="period">Available Accounts: 128</span>
                            </div>
                            <ul class="list2">
                                <li class="active">  </li>
                            </ul>
                        </div>
                        <div class="pricing-footer2">
                            <a href="steam.php" class="main-button2">Generate</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->

            </div>
        </div>
    </section>

            </div>
        </div>
    </div>
    </body>

 <?php
$file = "extra_variables.txt";
// Convert the text fle into array and get text of each line in each array index
$file_arr = file($file);
// Total number of linesin file
$num_lines = count($file_arr);
// Getting the last array index number by subtracting 1 as the array index starts from 0
$last_arr_index = $num_lines - 1;
// Random index number
$rand_index = rand(0, $last_arr_index);
// random text from a line. The line will be a random number within the indexes of the array
$rand_text = $file_arr[$rand_index];
print "<h3 style=font-size:15px>" . $rand_text . "</h3>";
?>

    </body>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>



    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>
	
    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

</html>
