<header id="header" class="header header-default ">
    <div class="tf-container ct2">
      <div class="row">
            <div class="col-md-12">
                <div class="sticky-area-wrap">
                    <div class="header-ct-left">
                        <div >
                            <a href="/">
                                <img class="site-logo" style="width: 80px !important; height:80px !important;" src="{{asset('assets/images/logo-white.png')}}" alt="Logo"/>
                            </a>
                        </div>
                        <div class="categories">
                            <a href="#"><span class="icon-grid"></span>Categories</a>
                            <div class="sub-categorie">
                                <ul class="pop-up">
                                    @foreach ($categories as $categorie )
                                        <li>
                                            <a class="text-uppercase" href="#"><span class="{{$categorie->icones}}"></span>{{$categorie->libelle}}</a>
                                        </li>
                                    @endforeach


                                </ul>
                            </div>
                        </div>
                    </div>

                        <div class="header-ct-center">
                            <div class="nav-wrap">

                                <nav id="main-nav" class="main-nav">
                                    <ul id="menu-primary-menu" class="menu">
                                        <li class="menu-item current-item">
                                            <a href="/">Accueil </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="/about">A Propos </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="/service">Trouver un service </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="/contact">Contact </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-ct-right">

                            <div class="header-customize-item account">
                                <img src="../images/user/avatar/image-01.jpg" alt="" />
                                <div class="name">
                                    {{Auth::user()->name}}<span class="icon-keyboard_arrow_down"></span>
                                </div>
                                <div class="sub-account">
                                    <div class="sub-account-item">
                                        <a href="/compagny"><span class="icon-dashboard"></span>Menu Général</a>
                                    </div>
                                    {{-- <div class="sub-account-item">
                                        <a href="#"><span class="icon-profile"></span> Aperçu du compte</a>
                                    </div> --}}
                                    <div class="sub-account-item">
                                        <a href="/compagny/mon_compte"><span class="icon-mypackage "></span> Parametrage du compte</a>
                                    </div>
                                    <div class="sub-account-item">
                                        <a href="/compagny/create-service"><span class="icon-submit"></span> Poster un service</a>
                                    </div>
                                    <div class="sub-account-item">
                                        <a href=""><span class="icon-work"></span> Mes Services</a>
                                    </div>

                                    <div class="sub-account-item">
                                        <a href="/compagny/message"><span class="icon-chat"></span> Messages</a>
                                    </div>



                                    <div class="sub-account-item">
                                        <a href="javascript:void(0)"  onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                                            <span class="icon-log-out"></span> Se Déconnecter
                                        </a>
                                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-filter">
                            <div class="nav-mobile"><span></span></div>
                        </div>
                </div>
            </div>
      </div>
    </div>
    <div class="btn header-item " id="left-menu-btn">
      <span class="hamburger-icon">
        <span></span>
        <span></span>
        <span></span>
      </span>
    </div>
  </header>
