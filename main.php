<!DOCTYPE html>
<html>
<head>
	<title>Form Designer - @Rahul</title>
	
  <link rel="icon" href="assets/logo.png">


	<!-- JQuery Script-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

  	<!-- Form Builder Script -->
  	<script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>

  	<!-- Custom Script -->
  	<script src="js/script.js"></script>

  	<!-- Bootstrap CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" />

  	<!-- Custom CSS -->
  	<link rel="stylesheet" href="css/style.css" type="text/css" /> 
    <link rel="stylesheet" href="css/newstyle.css" type="text/css" />  	

<style>
        body {
            background-image: url('assets/background.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>

</head>
<body>
   
<!--
  <div class="background-image">
        <img src="assets/bg.png" alt="Background Image">
    </div>


<div class="header">
   <p>Form Designer</p>
 </div>

-->

    <button class="green-button" id="openImageBtn2">Publish</button>
    <script>
      
        const openImageBtn2 = document.getElementById("openImageBtn2");

    
        openImageBtn2.addEventListener("click", function () {
           
            const userConfirmed = confirm("Are you sure you want to publish?");

           
            if (userConfirmed) {
                
                const imageUrl = "assets/screenshot.png";

                
                window.open(imageUrl, "_blank");
            }
        });
    </script>


  <button class="green2-button" id="openImageBtn" >Preview</button>
    <script>
        const openImageBtn = document.getElementById("openImageBtn");
        openImageBtn.addEventListener("click", function () {
            const imageUrl = "assets/screenshot.png";
            window.open(imageUrl, "_blank");
        });
    </script>
<!--  <div class="bottom-button">
  <button class="green-button">clear</button>
  <button class="green2-button">save</button>
  </div> -->

	<!-- Builder Wrap -->
	<div class="build-wrap form-wrapper-div"></div>
</body>
</html>