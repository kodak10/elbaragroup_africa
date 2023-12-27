<div class="left-menu">

    <!--- Sidemenu -->
    <div id="sidebar-menu">

      <ul class="downmenu list-unstyled" id="side-menu">

        <li>
          <a href="/compagny" class="tf-effect">
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
            <li><a href="/compagny/mon_compte">Paramétrage du compte</a></li>
            <li><a href="/compagny/create-service">Poster un service</a></li>
          </ul>
        </li>

        <li>
          <a href="/compagny/service" class="tf-effect">
            <span class="icon-work dash-icon"></span>
            <span class="dash-titles">Mes Services</span>
          </a>
        </li>

        <!-- <li>
          <a href="employer-submit-job.html" class=" tf-effect">
            <span class="icon-submit dash-icon"></span>
            <span class="dash-titles">Submit Job</span>
          </a>
        </li> -->

        <!-- <li>
          <a href="employer-applicants-jobs.html" class="tf-effect">
            <span class="icon-applicant dash-icon"></span>
            <span class="dash-titles">applicants Jobs</span>
          </a>
        </li> -->

        <!-- <li>
          <a href="employer-saved-candidates.html" class="tf-effect">
            <span class="icon-save-candidate dash-icon"></span>
            <span class="dash-titles">Saved Candidates</span>
          </a>
        </li>

        <li>
          <a href="employer-alerts-candidate.html" class="tf-effect">
            <span class="icon-bell1 dash-icon"></span>
            <span class="dash-titles">candidate Alerts</span>
          </a>
        </li>

        <li>
          <a href="employer-my-packages.html" class="tf-effect">
            <span class="icon-mypackage dash-icon"></span>
            <span class="dash-titles">My Packages</span>
          </a>
        </li> -->

        <li>
          <a href="/compagny/message" class="tf-effect">
            <span class="icon-chat dash-icon"></span>
            <span class="dash-titles">Messages</span>
          </a>
        </li>

        <!-- <li>
          <a href="employer-meetings.html" class="tf-effect">
            <span class="icon-meeting dash-icon"></span>
            <span class="dash-titles">Meeting</span>
          </a>
        </li> -->

       

        <!-- <li>
          <a href="employer-delete-profile.html" class="tf-effect ">
            <span class="icon-trash dash-icon"></span>
            <span class="dash-titles">Delete Profile</span>
          </a>
        </li> -->

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
