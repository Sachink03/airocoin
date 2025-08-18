<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{ siteName() }}</title>
    <meta name=description
        content="Trade smarter with our AI-powered crypto trading bot. Automate your Bitcoin and altcoin strategies 24/7 with cutting-edge artificial intelligence">
    <link rel=apple-touch-icon sizes=180x180 href=theme/static/apple-touch-icon.png>
    <link rel=icon type=image/png sizes=32x32 href=theme/static/favicon-32x32.png>
    <link rel=icon type=image/png sizes=16x16 href=theme/static/favicon-16x16.png>
    <link rel=manifest href=theme/static/site.webmanifest>
    <style>
        .preloader {
            background: #000;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 2147483590;
            width: 100%;
            height: 100%;
            height: 100vh;
            opacity: 1;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .preloader>* {
            -webkit-animation: pulseLogo 1.5s ease-in-out infinite;
            animation: pulseLogo 1.5s ease-in-out infinite;
            -webkit-transform-origin: center;
            transform-origin: center
        }

        .preloader.ready {
            opacity: 0;
            top: -100%;
            top: -100vh;
            transition: opacity .15s .2s linear, top 0s .7s
        }

        @-webkit-keyframes pulseLogo {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: .6
            }

            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                opacity: 1
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: .6
            }
        }

        @keyframes pulseLogo {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: .6
            }

            50% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                opacity: 1
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: .6
            }
        }
    </style>
    <link rel=stylesheet href=theme/css/style-v-d367a25c6b3e.css>
    <script src=https://unpkg.com/lottie-web/build/player/lottie.min.js></script>
    <script src=https://cdn.jsdelivr.net/npm/centrifuge@2.8.0/dist/centrifuge.min.js></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17076536460"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments)
        }
        gtag('js', new Date());
        gtag('config', 'AW-17076536460')
    </script>
    <script>
        var centrifuge;
        document.addEventListener('DOMContentLoaded', function() {
            centrifuge = new Centrifuge('wss://cortextrade.ai:8443/connection/websocket');
            centrifuge.connect()
        })
    </script>
    <script>
        var pageInits = [],
            pageDestroys = []
    </script>
</head>

<body style="overflow-x:hidden !important">
    <script>
        var html = document.documentElement,
            WebP = new Image();
        WebP.onload = WebP.onerror = function() {
            if (WebP.height === 2) {
                if (html.className.indexOf('no-webp') >= 0) {
                    html.className = html.className.replace(/\bno-webp\b/, 'webp')
                } else {
                    html.className += ' webp'
                }
            } else {
                if (html.className.indexOf('webp') >= 0) {
                    html.className = html.className.replace(/\bwebp\b/, 'no-webp')
                } else {
                    html.className += ' no-webp'
                }
            }
        };
        WebP.src =
            'data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA'
    </script>
    <div class=preloader id=js-preloader><svg width=65 height=65 viewbox="0 0 44 45" fill=none
            xmlns=http://www.w3.org/2000/svg>
            <path
                d="M21.9787 44.4787C9.8628 44.4787 0 34.6159 0 22.5H4.5913C4.5913 32.1077 12.4135 39.8874 21.9787 39.8874C29.0357 39.8874 35.2425 35.7213 37.9208 29.4295H32.6918C30.3536 33.043 26.3575 35.2536 21.9787 35.2536V30.6623C25.1246 30.6623 27.9304 28.9193 29.2908 26.1135L29.9285 24.8382H44L43.3198 27.6865C40.9391 37.5493 32.1816 44.4787 21.9787 44.4787Z"
                fill=url(#paint0_linear_439_3587)></path>
            <path
                d="M13.8159 22.5H9.22461C9.22461 15.443 14.9637 9.74636 21.9782 9.74636C26.357 9.74636 30.3531 11.957 32.6913 15.5705H37.9203C35.1995 9.27873 28.9927 5.11254 21.9782 5.11254V0.52124C32.1811 0.52124 40.9386 7.45071 43.3193 17.3135L43.9995 20.1618H29.928L29.2903 18.8865C27.8874 16.0807 25.0816 14.3377 21.9782 14.3377C17.4719 14.3377 13.8159 17.9937 13.8159 22.5Z"
                fill=url(#paint1_linear_439_3587)></path>
            <defs>
                <lineargradient id=paint0_linear_439_3587 x1=7.06091 y1=39.6115 x2=37.9758 y2=15.205
                    gradientunits=userSpaceOnUse>
                    <stop stop-color=#2CF074></stop>
                    <stop offset=1 stop-color=#2BF3C3></stop>
                </lineargradient>
                <lineargradient id=paint1_linear_439_3587 x1=2.7845 y1=34.1953 x2=33.6994 y2=9.78883
                    gradientunits=userSpaceOnUse>
                    <stop stop-color=#2CF074></stop>
                    <stop offset=1 stop-color=#2BF3C3></stop>
                </lineargradient>
            </defs>
        </svg> </div>
    <script>
        window.addEventListener('load', function() {
            $('#js-preloader').addClass('ready').addClass('loaded')
        });
        setTimeout(function() {
            if (!document.getElementById('js-preloader').classList.contains('loaded')) {
                document.getElementById('js-preloader').classList.add('ready');
                document.getElementById('js-preloader').classList.add('loaded')
            }
        }, 2500)
    </script>
    <div id=js-pjax-container>
        <div class="page page-main page-home">
            <div class=mobile-navigation id=js-mobile-navigation>
                <div class=mobile-navigation__backdrop id=js-mobile-navigation-close><svg width=75 height=75
                        class=mobile-navigation__close>
                        <use xlink:href=#close></use>
                    </svg> </div>
                <div class=mobile-navigation__inner>
                    <!-- <div class=mobile-navigation__header><a href=index.html class="logo mobile-navigation__logo"
                            data-pjax=""></a>
                        <div class="dropdown locale-dropdown "><button
                                class="dropdown-widget locale-dropdown__dropdown-widget dropdown-toggle"
                                data-toggle=dropdown><span class=dropdown-widget__inner><span
                                        class=dropdown-widget__icon-cell><svg width=20 height=20>
                                            <use xlink:href=#locale-planet></use>
                                        </svg> </span> <span class=dropdown-widget__locale-cell> en </span> <span
                                        class=dropdown-widget__carret-cell><svg width=10 height=10 class=color->
                                            <use xlink:href=#carret-down></use>
                                        </svg> </span></span> </button>
                            <div class="dropdown-menu dropdown-menu-right locale-dropdown__dropdown-menu"><a
                                    class="dropdown-item locale-dropdown__dropdown-item" href={{asset('')}} data-pjax="">
                                    English </a> </div>
                        </div>
                    </div> -->
                    <div class=mobile-navigation__body>
                        <div class=mobile-menu-list>
                            <div class=mobile-menu-list__item><a href={{asset('')}} class=mobile-menu-list__link
                                    data-pjax=""> Home </a> </div>
                            <div class=mobile-menu-list__item><a href={{route('affiliate')}} class=mobile-menu-list__link
                                    data-pjax=""> Company </a> </div>
                            <div class=mobile-menu-list__item><a href={{route('start')}} class=mobile-menu-list__link
                                    data-pjax=""> Technologies </a> </div>
                            <!-- <div class=mobile-menu-list__item><a href={{route('affiliate')}} class=mobile-menu-list__link
                                    data-pjax=""> Trading bots </a> </div> -->
                            <div class=mobile-menu-list__item><a href={{route('partners')}} class=mobile-menu-list__link
                                    data-pjax=""> Partnership </a> </div>
                        </div>
                        <div class=mobile-menu-list>
                            <div class=mobile-menu-list__item><a href=theme/static/presentation-en.pdf target=_blank
                                    class=mobile-menu-list__link> Presentation </a> </div>
                            <div class=mobile-menu-list__item><a href={{route('faq')}} class=mobile-menu-list__link
                                    data-pjax=""> FAQ </a> </div>
                            <!-- <div class=mobile-menu-list__item><a href=guide.html class=mobile-menu-list__link
                                    data-pjax=""> Guide </a> </div> -->
                            <!-- <div class=mobile-menu-list__item><a href={{route('news')}} class=mobile-menu-list__link
                                    data-pjax=""> Blog </a> </div> -->
                            <!-- <div class=mobile-menu-list__item><a href={{route('contact-us')}} class=mobile-menu-list__link
                                    data-pjax=""> Contacts </a> </div> -->
                        </div>
                    </div>
                    <div class=mobile-navigation__footer>
                        <div class=mobile-navigation__footer-cell><a href={{route('login')}}
                                class="btn btn-outline-success btn-block" data-pjax=""> Login </a> </div>
                        <div class=mobile-navigation__footer-cell><a href={{route('register')}}
                                class="btn btn-success btn-block" data-pjax=""> Signup </a> </div>
                    </div>
                    <div class=mobile-navigation__social><a href=https://t.me/AiroCoin_support target=_blank
                            class="comunity-link mobile-navigation__comunity-link"><span
                                class=comunity-link__inner><span class=comunity-link__icon-cell><svg width=36 height=36>
                                        <use xlink:href=#comunity-telegram></use>
                                    </svg> </span> <span class=comunity-link__content> Join Our Community </span> <span
                                    class=comunity-link__arrow-cell><svg width=18 height=16>
                                        <use xlink:href=#arrow-right></use>
                                    </svg> </span></span> </a>
                        <div class="social-icons-list mobile-navigation__social-icons-list">
                            <div class=social-icons-list__inner>
                                <div class=social-icons-list__cell><a href=https://t.me/AiroCoin_support target=_blank
                                        class=social-icon><svg width=20 height=20>
                                            <use xlink:href=#social-telegram></use>
                                        </svg> </a> </div>
                                <div class=social-icons-list__cell><a href=#
                                        target=_blank class=social-icon><svg width=20 height=20>
                                            <use xlink:href=#social-instagram></use>
                                        </svg> </a> </div>
                                <div class=social-icons-list__cell><a href=#
                                        target=_blank class=social-icon><svg width=20 height=20>
                                            <use xlink:href=#social-youtube></use>
                                        </svg> </a> </div>
                                <div class=social-icons-list__cell><a href="#"
                                        target=_blank class=social-icon><svg width=20 height=20>
                                            <use xlink:href=#social-x></use>
                                        </svg> </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <a
                class="scroll-btn page__scroll-btn page__scroll-btn--down js-scroll-btn js-scroll-btn-bottom js-anchor"
                href=#js-first><span class=scroll-btn__label> Scroll down </span> <span class=scroll-btn__btn><svg
                        width=14 height=14 class="scroll-btn__icon scroll-btn__icon--1 color-green">
                        <use xlink:href=#carret-down></use>
                    </svg> <svg width=14 height=14 class="scroll-btn__icon scroll-btn__icon--2 color-green">
                        <use xlink:href=#carret-down></use>
                    </svg></span></a> <a
                class="scroll-btn page__scroll-btn page__scroll-btn--top js-scroll-btn js-scroll-btn-top js-anchor "
                href=#js-pjax-container><span class=scroll-btn__label> Back to Top </span> <span
                    class=scroll-btn__btn><svg width=14 height=14
                        class="scroll-btn__icon scroll-btn__icon--1 color-green">
                        <use xlink:href=#carret-top></use>
                    </svg> <svg width=14 height=14 class="scroll-btn__icon scroll-btn__icon--2 color-green">
                        <use xlink:href=#carret-top></use>
                    </svg></span></a>
            <div class="page-main__bg page-home__bg"></div>
            <div class=page-main__inner>
                <div class="header-navigation page-main__header-navigation js-top-navibar">
                    <div class=container-fluid>
                        <div class=header-navigation__inner>
                            <div class=header-navigation__left-cell><a href={{route('Index')}}
                                    class="logo header-navigation__logo" data-pjax=""></a>
                                <!-- <div class="dropdown locale-dropdown header-navigation__locale-dropdown">
                                    <button
                                        class="dropdown-widget locale-dropdown__dropdown-widget dropdown-toggle"
                                        data-toggle=dropdown><span class=dropdown-widget__inner><span
                                                class=dropdown-widget__icon-cell><svg width=20 height=20>
                                                    <use xlink:href=#locale-planet></use>
                                                </svg> </span> <span class=dropdown-widget__locale-cell> en </span>
                                            <span class=dropdown-widget__carret-cell><svg width=10 height=10
                                                    class=color->
                                                    <use xlink:href=#carret-down></use>
                                                </svg> </span></span> </button>
                                    <div class="dropdown-menu  locale-dropdown__dropdown-menu"><a
                                            class="dropdown-item locale-dropdown__dropdown-item" href=index.html
                                            data-pjax=""> English </a> </div>
                                </div> -->
                            </div>
                            <div class=header-navigation__middle-cell>
                                <div class="menu header-navigation__menu">
                                    <nav class=menu__inner>
                                        <li class=menu__item><a href={{route('Index')}}
                                                class="menu-link menu__menu-link js-link-home" data-pjax=""><span
                                                    class="round-stroke-icon menu-link__round-stroke-icon"><svg width=14
                                                        height=14>
                                                        <use xlink:href=#menu-home></use>
                                                    </svg> </span> <span>Home</span></a> </li>
                                        <li class="menu__item dropdown">
                                            <button
                                                class="menu-link menu__menu-link dropdown-toggle js-link-about"
                                                data-toggle=dropdown>
                                                <span
                                                    class="round-stroke-icon menu-link__round-stroke-icon"><svg width=14
                                                        height=14>
                                                        <use xlink:href=#menu-company></use>
                                                    </svg> </span> <span> Company &nbsp;
                                                         <svg width=10 height=10>
                                                        <use xlink:href=#carret-down></use>
                                                    </svg>
                                                </span>
                                            </button>
                                            <div class="dropdown-menu locale-dropdown__dropdown-menu"><a
                                                    href={{route('affiliate')}}
                                                    class="dropdown-item locale-dropdown__dropdown-item js-link-company"
                                                    data-pjax=""> Company </a> 
                                                    <a href={{route('start')}}
                                                    class="dropdown-item locale-dropdown__dropdown-item js-link-techno"
                                                    data-pjax=""> Our Technologies </a>
                                                     <!-- <a href=blog.html
                                                    class="dropdown-item locale-dropdown__dropdown-item d-xxl-none js-link-blog"
                                                    data-pjax=""> Blog </a>  -->
                                                    <!-- <a href={{route('contact-us')}}
                                                    class="dropdown-item locale-dropdown__dropdown-item d-xxl-none js-link-contacts"
                                                    data-pjax=""> Contacts </a> -->
                                                </div>
                                        </li>
                                        <li class=menu__item><a href={{route('partners')}}
                                                class="menu-link menu__menu-link js-link-finance" data-pjax=""><span
                                                    class="round-stroke-icon menu-link__round-stroke-icon"><svg width=14
                                                        height=14>
                                                        <!-- <use xlink:href=#menu-finance></use> -->
                                                    </svg> </span> <span>Partnership</span></a> </li>
                                        <li class=menu__item><a href={{route('contact-us')}} 
                                                class="menu-link menu__menu-link js-link-partnership"
                                                data-pjax=""><span
                                                    class="round-stroke-icon menu-link__round-stroke-icon"><svg width=14
                                                        height=14>
                                                        <use xlink:href=#menu-partnership></use>
                                                    </svg> </span> <span>Contact Us</span></a>
                                                 </li>
                                                    <li class=menu__item><a href={{route('faq')}}
                                                class="menu-link menu__menu-link js-link-partnership"
                                                data-pjax=""><span
                                                    class="round-stroke-icon menu-link__round-stroke-icon"><svg width=14
                                                        height=14>
                                                        <use xlink:href=#menu-partnership></use>
                                                    </svg> </span> <span>FAQ</span></a> </li></svg>
                                        <!-- <li class="menu__item dropdown">
                                            <button
                                                class="menu-link menu__menu-link dropdown-toggle js-link-help"
                                                data-toggle=dropdown><span
                                                    class="round-stroke-icon menu-link__round-stroke-icon"><svg width=14
                                                        height=14>
                                                        <use xlink:href={{route('news')}}></use>
                                                    </svg> </span> <span> Help &nbsp; 
                                                        <svg width=10 height=10>
                                                        <use xlink:href=#carret-down></use>
                                                    </svg> 
                                                </span></button>
                                            <div class="dropdown-menu locale-dropdown__dropdown-menu">
                                                <a
                                                    href=theme/static/presentation-en.pdf target=_blank
                                                    class="dropdown-item locale-dropdown__dropdown-item js-link-pdf">
                                                    PDF Presentation </a>
                                                     <a href={{route('faq')}}
                                                    class="dropdown-item locale-dropdown__dropdown-item js-link-faq"
                                                    data-pjax=""> FAQ </a> 
                                                    <a href=guide.html
                                                    class="dropdown-item locale-dropdown__dropdown-item js-link-guide"
                                                    data-pjax=""> Guide </a>
                                                </div>
                                        </li> -->
                                        <!-- <li class="menu__item d-none d-xxl-inline-block"><a href={{route('news')}}
                                                class="menu-link menu__menu-link js-link-blog" data-pjax=""><span
                                                    class="round-stroke-icon menu-link__round-stroke-icon"><svg width=14
                                                        height=14>
                                                    </svg> </span> <span>Blog</span></a> </li>                                                    
                                        <li class="menu__item d-none d-xxl-inline-block"><a href={{route('faq')}}
                                                class="menu-link menu__menu-link js-link-contacts" data-pjax=""><span
                                                    class="round-stroke-icon menu-link__round-stroke-icon"><svg width=14
                                                        height=14>
                                                    </svg> </span> <span>Contacts</span></a> </li> -->
                                    </nav>
                                </div>
                            </div>
                            <div class=header-navigation__right-cell><a href={{route('login')}}
                                    class="btn btn-outline-success btn-lg header-navigation__auth-btn"
                                    data-pjax=""><svg width=20 height=20>
                                    </svg> <span>Login</span></a> <a href={{route('register')}}
                                    class="btn btn-success btn-lg header-navigation__auth-btn"
                                    data-pjax=""><span>Signup</span> <svg width=18 height=16>
                                    </svg></a> <button
                                    class="btn btn-success btn-lg btn-burger header-navigation__burger"
                                    id=js-mobile-navigation-open><span class=burger-icon
                                        id=js-mobile-navigation-burger-icon><span></span> <span></span>
                                        <span></span></span> </button></div>
                        </div>
                    </div>
                </div>