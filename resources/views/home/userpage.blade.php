<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aleo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home/css/bootstrap.min.css">
    <link rel="stylesheet" href="home/css/all.min.css">
    <link rel="stylesheet" href="home/css/index.css">
</head>

<body>
    <!--- start navbar-top --->
    @include('home.navbartop')
    <!--- end navbar-top --->

    <!--- start navbar-header --->
    @include('home.navbar')
    <!--- end navbar-header --->

    <!--- start header --->
    @include('home.header')
    <!--- end header --->

    <!--- start collection --->
    @include('home.collection')
    <!--- end collection --->

    <!--- start featured --->
    @include('home.product')
    <!--- end featured --->

    <!---  start offer --->
    @include('home.offer')
    <!--- end offer --->

    <!--- start trending --->
    @include('home.trending')
    <!--- end trending --->

    <!---  start about us --->
    @include('home.aboutus')
    <!--- end about us --->

    <!--- start blog --->
    @include('home.blog')
    <!--- end blog --->

    <!--- start brand --->
    @include('home.brand')
    <!--- end brand --->

    <!--- start footer --->
    @include('home.footer')
    <!--- end footer --->

    <!--- start footer-bottom --->
    @include('home.footerbottom')
    <!--- end footer-bottom --->

    <!-- start button up -->
    <a href="#">
        <div class="icon fa-3x position-fixed bottom-0 me-auto text-dark ">
            <i class="fa-solid fa-circle-arrow-up "></i>
        </div>
    </a>
    <!-- end button up -->


    <script src="home/javascript/bootstrap.min.js"></script>
    <script src="home/javascript/index.js"></script>
</body>

</html>
