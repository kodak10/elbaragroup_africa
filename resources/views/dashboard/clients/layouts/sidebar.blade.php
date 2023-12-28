<div class="left-menu">

    <!--- Sidemenu -->
    <div id="sidebar-menu">

      <ul class="downmenu list-unstyled" id="side-menu">

        <li>
          <a href="/user" class="tf-effect">
            <span class="icon-dashboard dash-icon"></span>
            <span class="dash-titles">Menu Général</span>
          </a>
        </li>

        <li>
          <a class="has-arrow tf-effect">
            <span class="icon-profile dash-icon"></span>
            <span class="dash-titles">Compte</span>
          </a>
          <ul class="sub-menu2" aria-expanded="false">
            {{-- <li><a href="employer-profile.html">Aperçu du compte</a></li> --}}
            <li><a href="/user/mon_compte">Paramétrage du compte</a></li>
          </ul>
        </li>


        <li>
          <a href="/user/message" class="tf-effect">
            <span class="icon-chat dash-icon"></span>
            <span class="dash-titles">Messages</span>
          </a>
        </li>

     

        <li>
            <a class="tf-effect" href="javascript:void(0)"  onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                <span class="icon-log-out"></span>
                <span class="dash-titles">Se Déconnecter</span>
            </a>
            <form id="logout-form" action="{{route('logout')}}" method="POST" style="">
                @csrf
            </form>


        </li>

      </ul>
    </div>
  </div>
