<div class="menu-mobile-popup">
    <div class="modal-menu__backdrop"></div>
    <div class="widget-filter">

        <div class="mobile-header">
            <div id="logo" class="logo">
            <a href="home-01.html">
                <img class="site-logo"  src="images/logo.png" alt="Image" />
            </a>
            </div>
        <a class="title-button-group"><i class="icon-close"></i></a>

        </div>

        <div class="tf-tab">
            <div class="menu-tab">
                <div class="user-tag active">Menu</div>
                <div class="user-tag">Categories</div>
            </div>

            <div class="content-tab">

                <div class="header-ct-center menu-moblie">
                    <div class="nav-wrap">
                        <nav class="main-nav mobile">
                            <ul id="menu-primary-menu" class="menu">
                                @auth
                                    <li class="menu-item menu-item-mobile">
                                        <a href="/">Accueil</a>
                                    </li>
                                    <li class="menu-item menu-item-mobile">
                                        <a href="/about">A Propos</a>
                                    </li>
                                    <li class="menu-item menu-item-mobile">
                                        <a href="/service">Trouver un service</a>
                                    </li>
                                    <li class="menu-item menu-item-mobile">
                                        <a href="/contact">Contact</a>
                                    </li>
                                @endauth

                                @guest
                                    <li class="menu-item menu-item-mobile">
                                        <a href="/">Accueil</a>
                                    </li>
                                    <li class="menu-item menu-item-mobile">
                                        <a href="/about">A Propos</a>
                                    </li>
                                    <li class="menu-item menu-item-mobile">
                                        <a href="/service">Trouver un service</a>
                                    </li>
                                    <li class="menu-item menu-item-mobile">
                                        <a href="/contact">Contact</a>
                                    </li>
                                    <li class="menu-item menu-item-mobile">
                                        <a href="/connexion">Se Connecter</a>
                                    </li>
                                    <li class="menu-item menu-item-mobile">
                                        <a href="/inscription">S'inscrire</a>
                                    </li>
                                @endguest




                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="categories">
                    <div class="sub-categorie-mobile">
                        <ul class="pop-up">
                            @foreach ($categories as $categorie )
                            <li>
                                <a href="#"><span class="{{$categorie->icones}}"></span>{{$categorie->libelle}}</a>
                                <div class="group-menu-category">
                                    <div class="menu left">

                                        <ul>
                                            @foreach ($categorie->services as $service )
                                                <li><a href="{{ route('EntrepriseService.show', ['slug' => $service->id]) }}">{{$service->libelle}}</a></li>
                                            @endforeach


                                        </ul>
                                    </div>
                                    {{-- <div class="menu right">
                                        <h6>Top Skills</h6>
                                        <ul>
                                            <li><a href="jobs-single.html">Adobe Photoshop</a></li>
                                            <li><a href="jobs-single.html">adobe XD</a></li>
                                            <li><a href="jobs-single.html">Android Developer</a></li>
                                            <li><a href="jobs-single.html">Figma</a></li>
                                            <li><a href="jobs-single.html">CSS, Html</a></li>
                                            <li><a href="jobs-single.html">BA</a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </li>
                        @endforeach
                        </ul>
                    </div>

                </div>

            </div>

        </div>





    <div class="mobile-footer">
        <div class="icon-infor d-flex aln-center">
        <div class="icon">
            <span class="icon-call-calling"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
        </div>
        <div class="content">
            <p>Besoin de nous ?</p>
            <h6><a href="tel:0758265650">(+225) 0758265650</a></h6>
        </div>
    </div>
        <div class="wd-social d-flex aln-center">
        <ul class="list-social d-flex aln-center">
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-youtube"></i></a></li>
        </ul>
    </div>
    </div>
    </div>

</div>
