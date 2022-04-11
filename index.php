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
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" type="text/css" href="css/toastr.min.css">
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <!-- <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div> -->

      <!-- end loader -->
      <?php require_once('pages/home.php'); ?>
      <!--  footer -->
      <?php require_once('includes/footer.php'); ?>
       <!-- Javascript files-->
       <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <!-- end footer -->
      <!-- Javascript files-->
      <script>
         $('#carouselExample').on('slide.bs.carousel', function (e) {


            var $e = $(e.relatedTarget);
            var idx = $e.index();
            var itemsPerSlide = 4;
            var totalItems = $('.carousel-item').length;

            if (idx >= totalItems-(itemsPerSlide-1)) {
                  var it = itemsPerSlide - (totalItems - idx);
                  for (var i=0; i<it; i++) {
                     // append slides to end
                     if (e.direction=="left") {
                        $('.carousel-item').eq(i).appendTo('.carousel-inner');
                     }
                     else {
                        $('.carousel-item').eq(0).appendTo('.carousel-inner');
                     }
                  }
            }
         });


         $('#carouselExample').carousel({
            interval: 2000
         });


         $(document).ready(function() {
            /* show lightbox when clicking a thumbnail */
            $('a.thumb').click(function(event){
                  event.preventDefault();
                  var content = $('.modal-body');
                  content.empty();
                  var title = $(this).attr("title");
                  $('.modal-title').html(title);
                  content.html($(this).html());
                  $(".modal-profile").modal({show:true});
            });

         });
      </script>
   </body>
</html>