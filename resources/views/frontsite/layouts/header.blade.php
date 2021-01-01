<!-- HEADER Start -->
<!-- Top Bar Start -->
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="tb-contact">
                    <p><i class="fas fa-envelope"></i>info@mail.com</p>
                    <p><i class="fas fa-phone-alt"></i>+012 345 6789</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar End -->

<!-- Brand Start -->
<div class="brand">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4">
                <div class="b-logo">
                    <a href="{{route("frontsite.home")}}">
                        <img src="{{asset("img/logo.png")}}" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-4">
                <div class="b-ads">

                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="b-search">
                    <input type="text" placeholder="Search">
                    <button><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand End -->

<!-- Nav Bar Start -->
<div class="nav-bar">
    <div class="container">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="{{route('frontsite.home')}}" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="{{route('frontsite.home')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{route('frontsite.contact')}}" class="nav-item nav-link">Contact Us</a>
                    @auth
                        <a href="{{route('dashboard.news.index')}}" class="nav-item nav-link">Dashboard</a>
                        <a href="{{route('logout')}}" class="nav-item nav-link">Logout</a>
                    @endauth
                    @guest
                        <a href="{{route('login')}}" class="nav-item nav-link">login</a>
                    @endguest
                </div>
                <div class="social ml-auto">
                    <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                    <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
                    <a href="https://youtube.com"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->
<!-- HEADER END -->
