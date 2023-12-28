<div class="menu-mobile-popup">
    <div class="modal-menu__backdrop"></div>
    <div class="widget-filter">

      <div class="mobile-header">
        <div >
            <a href="/">
                <img class="site-logo" style="width: 80px !important; height:80px !important;" src="{{asset('assets/images/logo-white.png')}}" alt="Logo"/>
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
                @include('layouts.navbar-mobile')

            </div>
          </div>

          <div class="categories">
            <div class="sub-categorie-mobile">
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

      </div>

      <div class="header-customize-item button">
        <a href="employer-my-job.html">Post Job</a>
      </div>

      <div class="mobile-footer">
        <div class="icon-infor d-flex aln-center">
          <div class="icon">
            <span class="icon-call-calling"><span class="path1"></span><span class="path2"></span><span
                class="path3"></span><span class="path4"></span></span>
          </div>
          <div class="content">
            <p>Besoin de nous ?</p>
            <h6><a href="tel:0123456678">001-1234-88888</a></h6>
          </div>
        </div>
        <div class="wd-social d-flex aln-center">
          <ul class="list-social d-flex aln-center">
            <li><a href="#"><i class="icon-facebook"></i></a></li>
          </ul>
        </div>
      </div>
    </div>

  </div>
