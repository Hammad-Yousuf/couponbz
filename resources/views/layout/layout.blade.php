<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CoubonBZ | Couponbz SHOP MASSIVE DISCOUNTS! Shop Smart, Save Big!</title>
    <link rel="shortcut icon" href="./Assets/Images/abc-3-1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css'); }} ">
    <link rel="stylesheet" href="{{ URL::asset('css/common.css'); }} ">

    @yield('css')

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ URL::asset('images/couponbz_images/Logo (1).png') }}" alt="Logo" class="d-inline-block align-text-top logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Stores</a>
                            <ul class="dropdown-menu rounded-0">
                                <li><a class="dropdown-item" href="#">Amazon</a></li>
                                <li><a class="dropdown-item" href="#">Ebay</a></li>
                                <li><a class="dropdown-item" href="#">Temu</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="./stores.html">All Stores</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                            <ul class="dropdown-menu rounded-0">
                                <li><a class="dropdown-item" href="#">Electronics</a></li>
                                <li><a class="dropdown-item" href="#">Fashion</a></li>
                                <li><a class="dropdown-item" href="#">Tech</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="./categories.html">All Categories</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>


    @yield('content')

    <section id="newsletter">
        <div class="container">
            <div class="section_header light_header">
                <h3 class="section_head_tag">Newsletter</h3>
                <h2 class="section_head text-center">Subscribe for Exclusive <span class="text_blue_patch">Savings!</span></h2>
                <p class="section_header_text">Join our newsletter and never miss out on the latest deals and discounts!
                    Get exclusive access to special offers
                    delivered straight to your inbox. Sign up now to start saving!</p>
            </div>
            <div class="subscription_form_container">
                <input type="text" placeholder="Your email here" class="subscription_form">
                <button class="subscription_btn">Subscribe!</button>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 ">
                    <div class="footer_logo_container">
                        <img src="{{ URL::asset('images/couponbz_images/Logo (1).png') }}" alt="" class="footer_logo">
                    </div>
                    <div class="footer_social_icons">
                        <span class="footer_icon">
                            <i class="fa-brands fa-facebook-f"></i>
                        </span>
                        <span class="footer_icon">
                            <i class="fa-brands fa-instagram"></i>
                        </span>
                        <span class="footer_icon">
                            <i class="fa-brands fa-twitter"></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-2">
                    <h3 class="footer_nav_title">Quick Links</h3>
                    <ul class="footer_nav navbar-nav">
                        <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Brands</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Stores</a></li>
                        <li class="nav-item"><a href="" class="nav-link">About Us</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="footer_nav_title">Top Stores & Brands</h3>
                    <div class="footer_dual_nav">
                        <ul class="footer_nav navbar-nav">
                            <li class="nav-item"><a href="#" class="nav-link">Amazon</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Alibaba</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Ebay</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Daraz</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Clicky</a></li>
                        </ul>
                        <ul class="footer_nav navbar-nav">
                            <li class="nav-item"><a href="#" class="nav-link">Addidas</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Nike</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Gucci</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Zara</a></li>
                            <li class="nav-item"><a href="" class="nav-link">J.</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="footer_nav_title">Contact & Reach Us</h3>
                    <div class="footer_contact_details">
                        <a class="footer_contact_row text-decoration-none" href="mailto:discount@couponbz.com">
                            <i class="fas fa-envelope footer_contact_icon"></i>
                            <span><span class="text_patch_orange">discount</span>@<span class="text_blue_patch">couponbz</span>.com</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./Assets/JS/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @yield('js')

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 50,
            dots: true,
            center: true,
            responsive: {
                0: {
                    items: 1.5
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1.3
                }
            }
        })
    </script>
</body>

</html>
