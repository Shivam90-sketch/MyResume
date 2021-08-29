<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/MStyle.css">

  <!-- font css -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css">

  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  
  <!-- font awosome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <title>My Resume ||💗</title>
</head>

<body>
  <!-- footer_Section -->
  <?php 
      include 'header.php';
    ?>
  
  <!-- Body_section -->
  <div class="container section_one">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card text-white mb-3">
          <div class="card-body card_body">
            <img src="image/myself.jpg" alt="myself_img" >
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <h1 class="heading">Hii, there <span class="hii">👋</span></h1>
        <h2 class="name">I am Shivam Shukla</h2>
        <p>I am a talented, ambitious, and hardworking individual, with broad skills.
          Furthermore, I want to adept at handling multiple tasks on a daily basis competently
          I Pursuing an Open degree, including Bachelor of Computer(BCA) Application at the YCMOU University</p>
        <!-- <form action="resume/Resume.pdf" method="get"> type="submit"-->
          <button class="btn btn-outline btn-lg" onclick="window.open('resume_folder/Resume.pdf')">Download CV <i class="fas fa-arrow-circle-down"></i> </button>
        <!-- </form> -->
          
        <div class="social-media">
          <div class="icon">
            <img src="image/instagram.png" alt="instagram" >  
               <a href="https://www.instagram.com/_shivam_._s/" target="_blank"> 
                 <img src="image/link.png" alt="link">
               </a>
          </div>
          <div class="icon">
            <img src="image/linkedin.png" alt="linkedin">  
               <a href="https://www.linkedin.com/in/shivam-s-9969a2202" target="_blank"> 
                 <img src="image/link.png" alt="link">
               </a>
          </div>
          <div class="icon">
            <img src="image/facebook.png" alt="facebook">  
               <a href="https://www.facebook.com/campaign/landing.php?&campaign_id=973072061&extra_1=s%7Cc%7C231348943360%7Ce%7Cfacebook%7C&placement=&creative=231348943360&keyword=facebook&partner_id=googlesem&extra_2=campaignid%3D973072061%26adgroupid%3D54006406691%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-297690534863%26loc_physical_ms%3D1007785%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=Cj0KCQjwna2FBhDPARIsACAEc_WW_XMrY9rWrngUoDzauz6Ahfd00LnrEAhaMTJaLJCS69ENwukfJ_gaAgzvEALw_wcB"  target="_blank"> 
                 <img src="image/link.png" alt="link">
               </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- footer_Section -->
    <?php 
      include 'footer.php';
    ?>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>
</html>