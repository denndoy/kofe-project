<!DOCTYPE html>
<html lang="en">

<head>
    @include('my-component.css')
    @include('home.style-css')
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!-- Navbar -->
    @include('my-component.navbar')

    <!-- Header -->
    @include('home.header')

    <!-- Section -->
    @include('home.section')

    <!-- REVIEWS Section  -->
    @include('home.review')

    <!-- CONTACT Section  -->
    @include('home.contact')

    <!-- Footer -->
    @include('my-component.footer')
    

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- wow.js -->
    <script src="assets/vendors/wow/wow.js"></script>

    <!-- google maps -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- FoodHut js -->
    <script src="assets/js/foodhut.js"></script>

</body>

</html>