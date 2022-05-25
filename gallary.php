<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Vaishnav Creation</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <script type="text/javascript" src="imageList.js"></script>
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
      <style>
        .portfolio-item > div{
            padding-right: 7px !important;
            margin-top: 1px;
            margin-bottom: 13px;
        }
      </style>  
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- header -->
    <header>
    <!-- header inner -->
        <div class="header-top">
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li> <a href="index.php">Home</a> </li>
                                        <li> <a href="index.php#jewellery">jewellery</a> </li>
                                        <li class="active"> <a href="gallary.php">Gallery</a> </li>
                                        <li> <a href="AboutUs.php">About Us</a> </li>
                                        <li> <a href="contactus.php">Contact Us</a> </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <section class="slider_section">
                <div class="banner_main">
                    <div class="container">
                        
                    </div>
                </div>
                <a class="whats-app" href="https://api.whatsapp.com/send/?phone=917666662824&text=Hi+Vaishnav+Creation+team,+I+am+interested+in+your+products.+Can+you+please+share+more+details%3F&app_absent=0">
                        <i class="fa fa-whatsapp my-float"></i>
                    </a>
            </section>
        </div>
    </header> 
    <div class="container gallery_section" >
         <div class="row">
            <div class="col-lg-12 text-center my-2">
                   <!-- <h3 class="py-3"><a href="#">Vaishnav Creation</a></h3> -->
               <!-- <h4>Our Work</h4> -->
            </div>
         </div>
         <div class="portfolio-menu mt-2 mb-4">
            <ul>
               <!-- <li class="btn btn-outline-dark" data-filter="*">All</li> -->
               <li id='default_button' class="btn btn-outline-dark active" data-filter=".product">Our product</li>
               <li class="btn btn-outline-dark" data-filter=".photos">Photos</li>
            </ul>
         </div>
         <div class="portfolio-item row" id="gallery_images">

         <!-- for each image -->
            <script>
                // var mydata = JSON.parse(data);
                var _gallaryData =  gallaryData;
                    // alert(mydata[0]);
                    for(var i=0;i<_gallaryData.length;i++){                        
                    document.getElementById("gallery_images").innerHTML += 
                        "<div class='item "+_gallaryData[i].type+" col-lg-3 col-md-4 col-6 col-sm'>"
                        +"<a href='"+_gallaryData[i].path+"' class='fancylight popup-btn' data-fancybox-group='light'>"
                        +"<img class='img-fluid' src='"+_gallaryData[i].path+"' alt=''>"
                        +"</a>"
                        +"</div>";
                    }


                   
            </script>

           

            <!-- Till here -->

         </div>
      </div>
      

      <!--  footer -->
        <?php require_once('includes/footer.php'); ?>
      <!-- end footer -->
      <script src="js/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> 
    <script src="js/isotope.pkgd.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>

    

     <!-- Javascript files-->
     <!-- <script src="js/jquery.min.js"></script> -->
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="js/jquery.fancybox.min.js"></script>
      <script>
        $('.portfolio-menu ul li').click(function(){
        $('.portfolio-menu ul li').removeClass('active');
        $(this).addClass('active');
        
        var selector = $(this).attr('data-filter');
        $('.portfolio-item').isotope({
            filter:selector
        });
        return  false;
        });
        $(document).ready(function() {
            var popup_btn = $('.popup-btn');
            popup_btn.magnificPopup({
                type : 'image',
                gallery : {
                    enabled : true
                }
            });

            var button_default = document.getElementById("default_button");
                    button_default.click();
        });

        $(window).load(function(){
            $('#default_button').trigger('click');
        });
    </script>
   </body>
</html>