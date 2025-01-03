<!-- Navbar -->
<nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home.index') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('gallery') }}">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('book_table') }}">Book-Table</a>
            </li>
        </ul>
        <a class="navbar-brand m-auto" href="{{ route('home.index') }}">
            <img src="assets/imgs/kofe-logo.png" class="brand-img" alt="">
            <span class="brand-txt">KOFE</span>
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('product') }}">Products<span class="sr-only">(current)</span></a>
            </li>

            @if (Route::has('login'))
            @auth

            <li class="nav-item">
                <a class="nav-link" href="{{url('my_cart')}} ">Cart</a>
            </li>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <input class="btn btn-primary ml-xl-4" type="submit" value="Logout">
            </form>

            @else

            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>

            @endauth
            @endif
        </ul>
    </div>
</nav>
<!-- header -->
<!-- <header id="home" class="header">
    <div class="overlay text-white text-center">
        <h1 class="display-2 font-weight-bold my-3">Food Hut</h1>
        <h2 class="display-4 mb-5">Always fresh &amp; Delightful</h2>
        <a class="btn btn-lg btn-primary" href="#gallary">View Our gallary</a>
    </div>
</header> -->
