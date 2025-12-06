{{-- <style>
    .ribbon {

        z-index: 9999;
        position: fixed;
        top: 0px;
        right: 30px;
    }

    .wribbon {
        z-index: 999;
        position: fixed;
        top: 0px;
        right: 120px;
    }

    @media (max-width: 640px) and (min-width: 320px) {
        .headerTable {
            position: fixed
        }

    }


    @media (max-width: 640px) and (min-width: 320px) {
        .ribbon {
            z-index: 999;
            position: fixed;
            top: -10px;
            left: 60px;
            width: 50px;

        }

        .ribbon>img {
            width: 50px;
        }

        .wribbon {
            z-index: 999;
            position: fixed;
            top: -10px;
            left: 5px;
            width: 50px;
        }

        .wribbon>img {
            width: 50px;
        }

    }
</style> --}}

{{-- <header id="header" data-transparent="true" class="dark header-logo-center">

    <div class="header-inner" style="height:87px">

        <div class="container bg-light pb-1 pt-1">
            <!--Logo-->
            <div id="logo">
                <a href="/">
                    <span class="logo-default align-content-center">
                        <img class="pb-1" src="{{ asset('Asset/images/anzox/GVC_logo.jpeg') }}" alt=""
                            width="90px"></span>

                    <span class="logo-dark"> <img src="{{ asset('Asset/images/anzox/GVC_logo.jpeg') }}" alt=""
                            width="110px"></span>
                </a>
            </div>
            <!--End: Logo-->

            <!--Navigation Resposnive Trigger-->
            <div id="mainMenu-trigger">
                <button class="lines-button x"> <span class="lines"></span> </button>
            </div>
            <!--end: Navigation Resposnive Trigger-->

            <!--Navigation-->
            <div id="mainMenu" class="menu-center fixed light">
                <div class="container">
                    <nav class="my-1">
                        <ul class="fs-4">
                            <li><a href="/" style="text-decoration: none">HOME</a></li>
                            <li><a href="/#about" style="text-decoration: none">ABOUT</a></li>
                            <li class="dropdown"><a href="#" style="text-decoration: none">OUR PRODUCTS</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu"><a href="/butterfly-valve"
                                            style="text-decoration: none">BUTTERFLY VALVE</a>

                                    </li>

                                    <li class="dropdown-submenu"><a href="/ball-valve"
                                            style="text-decoration: none">BALL VALVE</a>

                                    </li>

                                    <li class="dropdown-submenu"><a href="/gate-globe-check-valve"
                                            style="text-decoration: none">GATE, GLOBE & CHECK
                                            VALVE</a>
                                    </li>
                                    <li class="dropdown-submenu"><a href="/plug-valve"
                                            style="text-decoration: none">PLUG VALVE</a>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="/industries-served" style="text-decoration: none">INDUSTRIES SERVED </a></li>
                            <li><a href="/facilities" style="text-decoration: none">FACILITIES</a></li>
                            <li><a href="{{ asset('Asset/pdf/catalogue.pdf') }}" download="Catalogue"
                                    style="text-decoration: none">CATALOGUE</a></li>
                            <li><a href="/#contact-us" style="text-decoration: none">CONTACT US</a></li>

                        </ul>
                    </nav>
                </div>
            </div>
            <!--end: Navigation-->

        </div>
    </div>
</header> --}}

<header id="header" class="light header-logo-center">
    <div class="header-inner">
        <div class="container">
            <!--Logo-->
            <div id="logo">
                <a href="/">
                    <span class="logo-default align-content-center">
                        <img class="pb-1 pt-3" src="{{ asset('Asset/images/anzox/GVC-Logo.png') }}" alt=""
                            width="90px"></span>

                    <span class="logo-dark"> <img src="{{ asset('Asset/images/anzox/GVC-Logo.png') }}" alt=""
                            width="110px"></span>
                </a>
            </div>
            <div id="mainMenu-trigger">
                <a class="lines-button x"><span class="lines"></span></a>
            </div>
            <div id="mainMenu">
                <div class="container">
                    <nav>
                        <!--Left Menu-->
                        <ul class="d-flex justify-content-end">
                            <li><a href="/" style="text-decoration: none">HOME</a></li>
                            <li><a href="/#about" style="text-decoration: none">ABOUT</a></li>
                            <li class="dropdown"><a href="#" style="text-decoration: none">OUR PRODUCTS</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu"><a href="/butterfly-valve"
                                            style="text-decoration: none">BUTTERFLY VALVE</a>

                                    </li>

                                    <li class="dropdown-submenu"><a href="/ball-valve"
                                            style="text-decoration: none">BALL VALVE</a>

                                    </li>

                                    <li class="dropdown-submenu"><a href="/gate-globe-check-valve"
                                            style="text-decoration: none">GATE, GLOBE & CHECK
                                            VALVE</a>
                                    </li>
                                    <li class="dropdown-submenu"><a href="/plug-valve"
                                            style="text-decoration: none">PLUG VALVE</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="/industries-served" style="text-decoration: none">INDUSTRIES SERVED </a></li>
                        </ul>
                        <!--Right Menu-->
                        <ul class="justify-content-center">
                            <li><a href="/facilities" style="text-decoration: none">OUR FACILITIES</a></li>
                            <li><a href="{{ asset('Asset/pdf/catalogue.pdf') }}" download="Catalogue"
                                    style="text-decoration: none">OUR CATALOGUE</a></li>
                            <li><a href="/#contact-us" style="text-decoration: none">CONTACT US</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--end: Navigation-->
        </div>
    </div>
</header>
