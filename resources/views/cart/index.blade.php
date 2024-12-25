<!DOCTYPE html>
<html lang="en">

<head>
    @include('my-component.css')

    <style>
        table {
            margin: 40px;
            border: 1px solid skyblue;
            padding: 40px;
        }

        th {
            padding: 10px;
            text-align: center;
            background-color: red;
            color: white;
            font-weight: bold;
        }

        td {
            padding: 10px;
            color: white;

        }

        .div_center {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        label {
            display: inline-block;
            width: 200px;
        }

        .div_deg {
            padding: 20px;
        }
    </style>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!-- Navbar -->
    @include('my-component.navbar')

    <!-- Cart -->
    @include('cart.my_cart')

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