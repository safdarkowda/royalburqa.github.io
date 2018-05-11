<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="sk_files/w3.css">
<link rel="stylesheet" href="sk_files/css_002.css">
<link rel="stylesheet" href="sk_files/css.css">
<link rel="stylesheet" href="sk_files/font-awesome.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display:none}

.w3-content{

  background-image :url("wow.jpg");
  max-width : 200px;
  
}
 .w3-sidebar

{
 background-image :url("side.jpg");
  background-size  :auto;
  border: 6px solid black;
border-radius: 5px;
margin-top: 2px;
margin-bottom: 5px;
}
 .w3-bar-item
 {
  border: 6px solid black;
border-radius: 5px;
margin-top: 5px;
margin-bottom: 5px;
 }
 .w3-contact
{
display: block;
border: 6px solid black;
border-radius: 5px;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        height:50%;
  background-image :url("contact.jpg");
  background-size  :auto;
  
} 
 
  
.w3-back{

  background-image :url("back.jpg");
  max-width : auto;
  
}
.w3-row
{
max-width :1150px;
  margin-left:200px;
}

	
</style>
</head>
<body style="max-width:1200px" class="w3-content">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-black w3-collapse w3-top w3-center" style="z-index:3;width:200px;font-weight:bold  background-image :url(" wow.jpg");"="" id="mySidebar"><br>
  <h3 class="w3-padding-64 w3-center"><b>Burqha<br>Description</b></h3>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hide-large">CLOSE</a>
  <a href="#" onclick="w3_close()" class="w3-bar-item w3-button"><b>The Quality of burqha is quite impressive<br>It will last over a decade<br>Wholesale
 New Stylish Burqa Like, Latest Burkha, Pakistani Burkha, Arabic Abaya 
Stylish Burkha, Islamic Abaya, Islamic Clothing,Islamic Dresses,Muslim 
Dress,Pakistani Suits,Burqa, Burkha.</b></a><b> 
  
</b></nav><b>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
  <span class="w3-left w3-padding">Burqha Description</span>
  <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:185px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-large">
   <!--google translate-->  
<h1>Change language</h1>

<div style="align-left"></div>
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
	<a href="#jeans" class="w3-bar-item w3-button w3-padding-large">SHOP NOW</a>
   <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>
   
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large">Home</a>
 <a href="#jeans" class="w3-bar-item w3-button w3-padding-large">SHOP NOW</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</div>
   
</header></div>
  <!-- Image header -->
  
  <div class="w3-display-container w3-container" id="photo">
  
    <video controls="controls" height="450" width="1400">
  <source src="movie2.mp4" type="video/mp4">

  Your browser does not support the video tag.
</video>
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-jumbo w3-hide-small"></h1>
      <h1 class="w3-hide-large w3-hide-medium"></h1>
      <h1 class="w3-hide-small"></h1>
      
    </div>
  </div>

  <div class="w3-container w3-text-grey" id="jeans">
    <p>8 items</p>
  </div>

  <!-- Product grid -->
  <div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="srk1.jpg" style="width:100%">
        <p>Ripped Skinny Jeans<br><b>$24.99</b></p>
      </div>
      <div class="w3-container">
        <img src="srk2.jpg" style="width:100%">
        <p>Mega Ripped Jeans<br><b>$19.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="srk3.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">New</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Mega Ripped Jeans<br><b>$19.99</b></p>
      </div>
      <div class="w3-container">
        <img src="srk4.jpg" style="width:100%">
        <p>Washed Skinny Jeans<br><b>$20.50</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="srk8.jpg" style="width:100%">
        <p>Washed Skinny Jeans<br><b>$20.50</b></p>
      </div>
      <div class="w3-container">	
        <div class="w3-display-container">
          <img src="srk5.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">Sale</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Vintage Skinny Jeans<br><b class="w3-text-red">$14.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="srk6.jpg" style="width:100%">
        <p>Vintage Skinny Jeans<br><b>$14.99</b></p>
      </div>
      <div class="w3-container">
        <img src="srk7.jpg" style="width:100%">
        <p>Ripped Skinny Jeans<br><b>$24.99</b></p>
      </div>
    </div>
  </div>

  
  <!-- Footer -->
 

      
     
    
  


  <!-- End page content -->


<!-- Newsletter Modal -->
<div class="w3-back w3-light-grey w3-padding-32 w3-padding-large" id="contact">
    <div class="w3-contact" style="max-width:1000px ">
      <h4 class="w3-center"><b>Contact Information</b></h4>
      <form action="/action_page.php" target="_blank">
        <div class="w3-section w3-center" style="max-width:250px ">
          <label>Name:</label>
          <p> Rukhsana chand shaikh</p>
        </div>
        <div class="w3-section w3-center" style="max-width:250px">
          <label>Email:</label> 
    
           <p>sktechnologies1@yahoo.com</p>
        </div>
       
       <div class="w3-section w3-center" style="max-width:250px">
          <label>Mobile Number:</label>
          <p> 9284529132</p>
        </div>
      </form>
    </div>
  </div>

<script>
// Accordion 
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>



</b></body></html>