<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">

    <title>address ::: user office ::: foodclub</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic,400italic&subset=latin,latin-ext'
          rel='stylesheet' type='text/css'>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"/>

</head>

<body>
<div class="cbc">
    <div class="main">
        <header>
            <div class="center_box">
                <div class="wrapper">

                    <div class="logo_box">
                        <a href="index.html"><img src="{{asset('img/logo.png')}}" alt="foodclub"/></a>
                    </div>

                    <div class="lng_box">
                        <a href="#" class="flag_ar"></a>
                    </div>

                    <div class="orders_counter">
                        <span class="num">2<span class="line"></span></span>
                        <span class="num">1<span class="line"></span></span>
                        <span class="num">7<span class="line"></span></span>
                        <span class="num">0<span class="line"></span></span>

                        <span class="label">orders<br/>today</span>
                    </div>

                    @if(Auth::check())
                        <div class="r_box">
                            <a href="tel:8800117117" class="h_phone"><span
                                    class="ico"></span><span>800 117-117</span></a>

                            <div class="upan">
                                <div class="notice">
                                    <a href="#" class="ico_notice nftoggle"></a>

                                    <nav class="utnav">
                                        <ul>
                                            <li class="item">
                                                <span class="ico ico_1"></span>
                                                <div class="text_box">
                                                    <h3>5 points</h3>
                                                    <p>Thank you for visiting FoodClub.<br/>You got 5 more points on
                                                        your balance!</p>
                                                </div>
                                                <a href="#" class="gcross"></a>
                                            </li>
                                            <li class="item">
                                                <span class="ico ico_2"></span>
                                                <div class="text_box">
                                                    <h3>5 points</h3>
                                                    <p>Thank you for visiting FoodClub.<br/>You got 5 more points on
                                                        your balance!</p>
                                                </div>
                                                <a href="#" class="gcross"></a>
                                            </li>
                                            <li class="item">
                                                <span class="ico ico_3"></span>
                                                <div class="text_box">
                                                    <h3>5 points</h3>
                                                    <p>Thank you for visiting FoodClub.<br/>You got 5 more points on
                                                        your balance!</p>
                                                </div>
                                                <a href="#" class="gcross"></a>
                                            </li>
                                            <li><a href="#" class="more">Show more notifications</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="navbox">
                                    <a href="#" class="midbox nftoggle" id="navBtn">
                                        <img src="{{asset('img/imgc/user_ava_1_40.jpg')}}" alt=""/>
                                        <span class="warrd"></span>
                                    </a>
                                    <nav class="utnav" id="nav-user-account">
                                        <ul>
                                            <li class="points">600 points</li>
                                            <li class="sepor"></li>
                                            <li><a href="#">Profile</a></li>
                                            <li><a href="#">Orders</a></li>
                                            <li><a href="#">Address</a></li>
                                            <li><a href="#">Settings</a></li>
                                            <li class="sepor"></li>
                                            <a href="{{route('logout')}}"
                                               class="logout"
                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                Log Out
                                            </a>
                                            <li>
                                                <form action="{{route('logout')}}" method="POST" id="logout-form">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="clear"></div>
                </div>
            </div>
        </header>

        @yield('content')
    </div>

    <footer>
        <div class="center_box">
            <div class="wrapper">

                <nav class="f_nav">
                    <ul>
                        <li>
                            <a href="#">
                                <span class="fadv_ico"><span class="ico_1"></span></span>
                                <span class="title">Rewards Program</span>
                                <span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fadv_ico"><span class="ico_2"></span></span>
                                <span class="title">monthly lottery</span>
                                <span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fadv_ico"><span class="ico_3"></span></span>
                                <span class="title">Restaurant Owners</span>
                                <span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fadv_ico"><span class="ico_4"></span></span>
                                <span class="title">about foodclub</span>
                                <span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="bt_box">
            <div class="center_box">
                <div class="wrapper">
                    <div class="soc_link">
                        <a href="#" class="apple"></a>
                        <a href="#" class="android"></a>
                        <a href="#" class="email"></a>
                        <a href="#" class="fb"></a>
                    </div>
                    <div class="copyright">
                        <div>© 2014 Zomlex Inc. All rights reserved.</div>
                        <nav>
                            <a href="#">Partner Agreement</a>
                            <span>|</span>
                            <a href="#">User Agreement</a>
                            <span>|</span>
                            <a href="#">FAQ</a>
                            <span>|</span>
                            <a href="#">Careers</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="{{mix('js/app.js')}}?time={{time()}}"></script>

<script>
    let navBtn = document.getElementById('navBtn');
    let nav = document.getElementById('nav-user-account');
    navBtn.addEventListener('click', (evt) => {
        nav.classList.toggle('show-menu');
    });
</script>

</body>

</html>
