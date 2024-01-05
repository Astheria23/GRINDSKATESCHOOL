<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>G-skate</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('skate-style/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('skate-style/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('skate-style/css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('skate-style/css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('skate-style/css/flaticon.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('skate-style/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('skate-style/css/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('skate-style/css/gijgo.min.css')}}">
    <link rel="stylesheet" href="{{ asset('skate-style/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('skate-style/css/all.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('skate-style/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('set/css/style.css')}}">
    <!-- script -->
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        .preloader {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          z-index: 9999;
          background-color: #fff;
        }
        .preloader .loading {
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%,-50%);
          font: 14px arial;
        }
        .shopping-cart{
            
        }
        .countCart{
            position: relative;
        }
        .countCart span{
            position: absolute;
            top: -8px;
            right: 5px;
            display: block;
        }
        
        </style>
        <!-- <script>
        $(document).ready(function(){
          $(".preloader").fadeOut();
        })
        </script> -->
</head>

<body>
    <!-- <div class="preloader">
        <div class="loading">
          <img src="{{asset('folder_image/logokantin.jpg')}}" width="250">
        </div>
    </div> -->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                       <a href="#" class="navbar-brand"><b style="color: #2FDBBC;">G</b>-Skate</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent" >
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('userhome')}}">Home</a>
                                </li>
                                
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{url('about')}}">About</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('menu')}}">Menu</a>
                                </li>
                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{url('blog')}}">Blog</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li> --}}
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li> --}}
                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Masuk
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Login</a>
                                        <a class="dropdown-item" href="#">Register</a>
                                    </div>
                                </li> --}}
                         @if (Route::has('login'))
                             @auth
                                @if (Auth::user()->role === 'seller')
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            My Account ({{Auth::user()->name}})
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('product')}}">Dashboard</a>
                                        </div>
                                    </li>
                                @else
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            My Account ({{Auth::user()->name}}) 
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <div class="container">
                                            <a class="dropdown-item" href="{{route('user.dashboard')}}"><span class="btn">My Order</span>
                                                <span class="badge rounded-pill badge-notification text-light" style="background-color: #2FDBBC; width: 34px;">{{$count_menuOrder}}</span>
                                            </a>
                                            <div class="dropdown-item">
                                            <form action="{{route('aksilogout')}}" method="post">
                                                @csrf
                                                <button type="submit" class="btn">Logout</button>
                                              </form>
                                            </div>
                                            </div>
                                        </div>
                                    </li>
                                   
                                @endif
                            @else
                            <li class="nav-item"><a href="{{url('/')}}">Login</a></li>
                            <li class="nav-item"><a href="{{url('reg')}}">Register</a></li>  
                            @endif
                            @endif
                            &nbsp;
                            @livewire('cart-count-component')
                            {{-- <li class="nav-item" style="">
                                <a href="{{route('product.cart')}}" class="countCart">
                                    <i class="fa-solid fa fa-shopping-cart fa-lg"></i>
                                    <span class="badge rounded-pill badge-notification bg-danger text-light">3</span>
                                </a>
                           </li>  --}}
                           &nbsp;
                           &nbsp;
                           &nbsp;
                            {{-- <li class="shopping-cart"><a href="#" class="cart"><span><small>0</small><i class="bi bi-cart"></i></span></a></li> --}}
                            {{-- <li class="nav-item">
                                        <p>{{number_format(Auth::user()->saldo)}}</p>
                                </li> --}}
                            </ul>
                        </div>
                        
                        {{-- <div class="menu_btn">
                            <div class="row">
                                <a href="#" class="btn_1 d-none d-sm-block">Login</a>
                                &nbsp;
                                <a href="#" class="btn_1 d-none d-sm-block">Register</a> 
                            </div>
                        </div> --}}
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
<br><br><br>
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Selamat Datang Di G-Skate</h5>
                           
                            <h1>Skateee</h1>
                            
                            <p></p>
                            <div class="banner_btn">
                                <div class="banner_btn_iner">
                                    <!-- <a href="{{url('menu')}}" class="btn_2">Menu<img src="{{asset('ekantin/img/icon/left_1.svg')}}" alt=""></a> -->
                                </div>
                                {{-- <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="popup-youtube video_popup">
                                    <span><img src="{{asset('ekantin/img/icon/play.svg')}}" alt=""></span>Watch our story</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!--::exclusive_item_part start::-->
    {{-- <section class="exclusive_item_part blog_item_section">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="section_tittle">
                        <p>Makanan Populer</p>
                        <h2>Popular Items</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($produks as $produk)
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{asset('ekantin/img/food_item/food_item_1.png')}}" alt="">
                        </div>
                        <div class="single_blog_text">
                            <h3>{{$produk->nama_produk}} </h3>
                            <p>{{$produk->desk_produk}}</p>
                            <P>{{$produk->harga_produk}}</P>
                            <a href="#" class="btn_3">Read More<img src="{{asset('ekantin/img/icon/left_2.svg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{asset('ekantin/img/food_item/food_item_2.png')}}" style="width: 500px; height: 250px;" alt="">
                        </div>
                        <div class="single_blog_text">
                            <h3>Mie Ayam Sukarela</h3>
                            <p>Enak </p>
                            <a href="#" class="btn_3">Read More <img src="{{asset('ekantin/img/icon/left_2.svg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{asset('folder_image/BATAGOR.jpg')}}" alt="">
                        </div>
                        <div class="single_blog_text">
                            <h3>Batagor Ori</h3>
                            <p>Enak pecah dimulut </p>
                            <a href="#" class="btn_3">Read More <img src="{{asset('ekantin/img/icon/left_2.svg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{asset('folder_image/CIRENG.jpeg')}}" alt="">
                        </div>
                        <div class="single_blog_text">
                            <h3>Cireng Ayam</h3>
                            <p>Enak renyah daging piling mudah ditelan</p>
                            <a href="#" class="btn_3">Read More <img src="{{asset('ekantin/img/icon/left_2.svg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 d-none d-sm-block d-lg-none">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/food_item/food_item_1.png" alt="">
                        </div>
                        <div class="single_blog_text">
                            <h3>Cireng </h3>
                            <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                            <a href="#" class="btn_3">Read More <img src="{{asset('ekantin/img/icon/left_2.svg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--::exclusive_item_part end::-->

    <!-- about part start-->
    <section class="about_part">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-4 col-lg-5 offset-lg-1">
                    <div class="about_img">
                        <img src="{{asset('folder_image/BATAGOR.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-sm-8 col-lg-4">
                    <div class="about_text">
                        <br>
                        <h5>Our History</h5>
                        <h2>Batagor</h2>
                        <p>Melansir berbagai sumber, batagor mulai dikenal sebagai jajanan pada dekade 1980-an. Batagor itu merupakan akronim dari baso tahu goreng. Berbagai sumber juga menyebut sosok Haji Isan (yang biasa dikenal dengan Batagor H. Isan) lah yang pertama kali 'menemukan' batagor.</p>
                        {{-- <p>Dengan cita rasa yang terbaik </p> --}}
                        <a href="{{url('menu')}}" class="btn_3">Check Menu<img src="{{asset('ekantin/img/icon/left_2.svg')}}" class="rounded" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part end-->

    <!-- intro_video_bg start-->
    <section class="breadcrumb breadcrumb_bg" style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            {{-- <h2>Segera Checkout</h2> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-3 col-sm-6 col-md-3 col-lg-3">
                    <div class="single-footer-widget footer_1">
                        <h4>About Us</h4>
                        <br>
                      <div style="text-decoration: none; color: black;">
                        <a href="https://www.youtube.com/c/SMKN11BANDUNG" ><p class="bi bi-youtube">&nbsp;&nbsp;<span style="color: black">SMKN 11 BANDUNG</span></p><br></a><br> 
                        <a href="tel:028397382763"><p class="bi bi-telephone">&nbsp;&nbsp;<span>028397382763</span></p><br></a><br>
                        <a href="https://www.instagram.com/accounts/login/?next=%2Finfo.smkn11bandung%2F"><p class="bi bi-instagram">&nbsp;&nbsp;<span>info.smkn11bandung</span></p><br></a><br>
                        <a href="#"><p class="bi bi-facebook">&nbsp;&nbsp;<span>SMKN 11 BANDUNG</span></p><br></a><br>
                      </div>
                               
                            
                    </div>
                </div>
            
                <div class="col-xl-3 col-sm-6 col-md-2 col-lg-3">
                    <div class="single-footer-widget footer_2">
                        <h4>Important Link</h4>
                        <div class="contact_info">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Menu</a></li>
                                <li><a href="#">My Order</a></li>
                                <li><a href="#">Shopping Cart</a></li>
                                {{-- <li><a href="#"> Our Shop</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-3 col-lg-3">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <br>
                        <div class="contact_info">
                            <p><a href="https://goo.gl/maps/vdqHS8KU9S9p9yUq5"><span> Address :</span>  Jl. Budi Jl. Raya Cilember, RT.01/RW.04, Sukaraja, Kec. Cicendo, Kota Bandung, Jawa Barat 40153 </a></p>
                            <p><span> Phone :</span> 022-6652442</p>
                            <p><span> Email : </span>smkn11bdg@gmail.com</p>
                            <p><span><a href="{{ asset('storage/mdKantin/E-kantin.md.html')}}">E-Kantin User Guide</a></span></p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-3 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-end" >
                    <div class="single-footer-widget footer_3">
                        <h4>Newsletter</h4>
                        <br>
                        <p>Heaven fruitful doesn't over lesser in days. Appear creeping seas</p>
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Email Address'
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
                                    <div class="input-group-append">
                                        <button class="btn" type="button"><i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> --}}
            </div>
            {{-- <div class="copyright_part_text">
                <div class="row">
                    <div class="col-lg-8">
                        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="ti-heart" aria-hidden="true"></i> by <a href="https://e-kantin.com" target="_blank">G-skate</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                    <div class="col-lg-4">
                        <div class="copyright_social_icon text-right">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="ti-dribbble"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </footer>
<!-- Footer part end -->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{ asset('ekantin/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{ asset('ekantin/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('ekantin/js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{ asset('ekantin/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{ asset('ekantin/js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{ asset('ekantin/js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{ asset('ekantin/js/owl.carousel.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{ asset('ekantin/js/slick.min.js')}}"></script>
    <script src="{{ asset('ekantin/js/gijgo.min.js')}}"></script>
    <script src="{{ asset('ekantin/js/jquery.nice-select.min.js')}}"></script>
    <!-- custom js -->
    <script src="{{ asset('ekantin/js/custom.js')}}"></script>
</body>

</html>
</div>
