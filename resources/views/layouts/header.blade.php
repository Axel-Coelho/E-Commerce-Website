<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ route('home') }}"><img id="main-logo" src="img/Coureurs-des-bois-logo-03.svg" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <!-- <ul class="nav navbar-nav menu_nav mr-auto ml-5">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">
                                <i class="fas fa-home"></i>
                                Home
                            </a>
                        </li>

                        <li class="nav-item submenu dropdown">
                            <a href="{{ route('shop') }}" class="nav-link">
                                <i class="fas fa-shopping-bag"></i>
                                Shop
                            </a>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">
                                <i class="fas fa-envelope"></i>
                                Contact
                            </a>
                        </li>
                    </ul> -->
                    <div class="header-group navbar-nav mr-auto ml-5" id="links">
                        <a href="une-fois.html">
                            Il&nbsp;était&nbsp;une&nbsp;fois
                        </a>

                        <a href="{{ route('shop') }}">
                            L'échoppe
                        </a>

                        <a href="gazette.html">
                            La&nbsp;gazette&nbsp;du&nbsp;coureur
                        </a>

                        <a href="contact.html">
                            Contact
                        </a>
                    </div>


                    <ul class="header-group">
                        @guest
                        <li class="nav-item submenu dropdown">
                            <a href="{{ route('login') }}" class="nav-link">
                                <i class="fa-solid fa-user"></i>
                            </a>
                        </li>
                        @else
                        <!-- <li class="nav-item"><a class="nav-link" href="{{ route('orders') }}">
                                <i class="fas fa-truck"></i>
                                Orders
                            </a>
                        </li> -->
                        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">
                                <i class="fas fa-sign-out-alt"></i>
                                Déconnexion
                            </a>
                        </li>
                        @endguest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cart.index') }}">
                                <img class="picto" src="img/Sac_a_dos.png" alt=""></img>
                                Panier
                                @if(Cart::instance('default')->count() > 0)
                                <span class="badge badge-primary">{{ Cart::instance('default')->count() }}</span>
                                @endif
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>