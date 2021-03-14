

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BPP Associates LLP</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css"> 
    <link rel="icon" href="images/logo.jpg"size="16x16 32x32 64x64">    

</head>
<body>

	<!-- ===============Contact Start ===============-->
<section id="contact">
    <div class="container heading">
        <h2 class="heading">Contact Us</h2>
        <div class="border"></div>
        <p style="text-align: center;">Do you have any questions.Please feel free to contact us.</p>
        <br><br>
        <div class="row">
           <div class="col-md-6">
               <form action="index.html"method="post">
                    <?php

						if(isset($_POST['submit']))
						{
							$name=$_POST['name'];
							$email=$_POST['email'];
							$msg=$_POST['msg'];
							$to='gktyagi2018@mail.com'; // Receiver Email ID, Replace with your email ID
							$subject='Form Submission';
							$message="Name :".$name."\n"."\n\n".$msg;
							$headers="From: ".$email;

							if(mail($to, $subject, $message, $headers))
							{
								echo "<h3>Sent Successfully! Thank you"." <span style='color:red;'>".$name."</span>, We will contact you shortly! BPP Associates LLP.</h3>";
							}
							else
							{
								echo "Something went wrong!";
							}
						}

					?>

					<div class="btn btn-success">
						<a href='index.html'> Return Home</a>
					</div>
               </form><br><br><br><br>
           </div>
           <div class="col-md-1">
               
           </div> 
           <div class="col-md-5">
               <p class="icn"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;New Delhi,India</p>
               <p class="icn"><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;+91 9012151197</p>
               <p class="icn"><i class="fas fa-envelope"></i>&nbsp;&nbsp;aaradhyaassociates@rediffmail.com</p>
               <hr>
               <div class="media">
                   <ul class="list-unstyled">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCtR6mrCOtq7qnYxBuo-1ZNg"><i class="fab fa-youtube"></i></a></li>
                   </ul>
               </div>
               <br>
               <p style="margin-left: 23px;">BPP Associates LLP company information</p>
           </div> 
        </div>
    </div>
</section>
<!-- ===============Contact End ===============-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>