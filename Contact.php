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

  <!-- font awosome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Jquery Cdn link -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <title>Contact Form </title>
</head>

<body>
<?php 
      include 'header.php';
  ?>

  <div class="header">
    <div class="row">
      <div class="col-sm-6 left_col">
        <img src="image/logo.png" alt="logo" align="left">
      </div>
      <div class="col Right_col">
        <p>Let's talk</p>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="card card_sizeing">
      <div class="card-body text_style">

        <div class="container">
          <form action="mailto:shivamrshukla0@gmail.com">
            <div class="row">
              <div class="col-lg-6">
                <div class="row ">
                  Frist Name <span class="star">*</span>
                </div>
                <div class="row">
                  <input type="text" class="input_feild" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="row">
                  Last Name <span class="star"> *</span>
                </div>
                <div class="row ">
                  <input type="text" class="input_feild">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="row ">
                  Email <span class="star"> *</span>
                </div>
                <div class="row ">
                  <input type="email" class="input_feild" required>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="row">
                  Subject
                </div>
                <div class="row">
                  <input type="text" class="input_feild">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="row">Contact No </div>
                <div class="row "><input type="tel" class="input_feild" maxlength="10" pattern="\d{10}" id="phone"></div>
                <script>
                        $(document).ready(function(){
                            $("body").delegate('#phone', 'focusout', function(){
                                    if($(this).val() < 0){
                                        swal({ 
                                                title: "Wrong Number!",
                                                text: "Phone number cannot be negative!",
                                                icon: "warning",
                                                button: "Retry!",
                                            });
                                            $(this).val('');
                                    }
                                });
                                $("body").delegate('#phone', 'focusout', function(){
                                    if($(this).val() < "\d{10}"){
                                        swal({ 
                                                title: "Wrong Number!",
                                                text: "Phone number cannot be less then 10!",
                                                icon: "info",
                                                button: "Retry!",
                                            });
                                            $(this).val('');
                                    }
                                });
                            });
                    </script>
              </div>
              <div class="col-lg-12">
                <div class="row">Message </div>
                <div class="row">
                  <textarea class="input_feild" name="subject" placeholder="Write something..">
                          </textarea>
                  <input type="submit" value="Submit">
                </div>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <!-- footer_Section -->
    <?php 
      include 'footer.php';
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



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