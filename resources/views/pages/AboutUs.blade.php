<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!----- Bootstrap link and scripts ---->

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>


  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text&display=swap" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet"  href="aboutpart/style.css">
    <title>Restaurant</title>
   <style type="text/css">
     
   </style>


  </head>
  <body>



   @include('partials.navbar')


   @include('partials.aboutUs')


   @include('partials.footer')
   





   <div class="moveUp">
       <span><i class="fa fa-arrow-up"></i></span>
   </div>





   <script type="text/javascript">
       $('.alert-danger').on('click', ()=>{
           //    $('.alert-danger').css('display', 'none');
           $('.alert-danger').fadeOut(2000);
       })
   </script>


   <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

   <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>



    <script type="text/javascript" src="js/jquery.min.js"></script>
{{--    <script type="text/javascript" src="js/bootstrap.js"></script>--}}
{{--    <script type="text/javascript" src="js/popper.min.js"></script>--}}
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
{{--   <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>--}}


   {{--    <script type="text/javascript" src="js/mdb.min.js"></script>--}}
    <script type="text/javascript" src="js/main.js"></script>
{{--    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>--}}
{{--    <script>AOS.init();</script>--}}

{{-- <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>--}}
{{--  <!-- Bootstrap tooltips -->--}}
{{--  <script type="text/javascript" src="js/popper.min.js"></script>--}}
{{--  <!-- Bootstrap core JavaScript -->--}}
{{--  <script type="text/javascript" src="js/bootstrap.min.js"></script>--}}
{{--  <!-- MDB core JavaScript -->--}}
{{--  <script type="text/javascript" src="js/mdb.min.js"></script>--}}

  </body>
</html>
