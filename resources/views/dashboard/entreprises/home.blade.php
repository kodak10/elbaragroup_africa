@extends('dashboard.entreprises.layouts.app')
@section('content')
<section class="page-title-dashboard">
    <div class="themes-container">
      <div class="row">
        <div class="col-lg-12 col-md-12 ">
          <div class="title-dashboard">
            <div class="title-dash flex2">Menu Général</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="flat-icon-dashboard">
    <div class="themes-container">
      <div class="row">
        <p class="mb-3">Heureux de vous revoir <span style="font-weight: bold">{{Auth::user()->compagny->name}}</span></p>

        <div class="col-lg-12 col-md-12 ">
          <div class="wrap-icon widget-counter">

            <div class="box-icon wrap-counter flex">
                <div class="icon style1">
                    <i class="fa-solid fa-briefcase"></i>
                </div>
                <div class="content">
                    <div class="count-dash counter-number" data-speed="2000" data-to="15"></div>
                    <h4 class="title-count">Service Publié</h4>
                </div>
            </div>
            <div class="box-icon wrap-counter flex">
              <div class="icon style2">
                <i class="fa-solid fa-question"></i>
              </div>
              <div class="content">
                <div class="count-dash counter-number" data-speed="2000" data-to="2068"></div>
                <h4 class="title-count">Demandes reçus</h4>
              </div>
            </div>
            <div class="box-icon wrap-counter flex">
              <div class="icon style3">
                <i class="fa-solid fa-border-none"></i>
              </div>
              <div class="content style3">
                <div class="count-dash counter-number" data-speed="2000" data-to="21"></div>
                <h4 class="title-count">Lorem</h4>
              </div>
            </div>
            <div class="box-icon wrap-counter flex">
              <div class="icon style4">
                <i class="fa-solid fa-border-none"></i>
              </div>
              <div class="content">
                <div class="count-dash counter-number" data-speed="2000" data-to="320"></div>
                <h4 class="title-count">Lorem</h4>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>
  </section>



  <section class="flat-dashboard-applicants">
    <div class="themes-container">
      <div class="row">
        <div class="col-lg-12 col-md-12 ">

          <div class="applicants bg-white">

            <h3 class="title-appli">Demande de service récents</h3>
            <div class="table-content">
              <div class="wrap-applicants table-responsive">
                <table>
                  <thead>
                    <tr>
                      <th>Nom du Client</th>
                      <th>Date de demande</th>
                      <th>Service</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- col 1 -->
                    @forelse ($demandes as $demande )
                        <tr class="file-delete">
                            <td>
                              <div class="candidates-wrap flex2">
                                <div class="images">
                                  <img src="../images/dashboard/image-1.jpg" alt="">
                                </div>
                                <div class="content">
                                  <h3>{{$demande->user->client->name}}</h3>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="status-wrap">
                                <div class="button-status color-3"> {{$demande->created_at}}</div>
                              </div>
                            </td>
                            <td>
                              <div class="title-day color-1">{{$demande->service->libelle}}</div>
                            </td>
                            <td>
                              <div class="action-wrap">
                                <ul class="flex2">
                                  <li class="hv-tool" data-tooltip="Voir les details"><a class="action-icon icon-eye"></a></li>

                                  <li><a class="button-cancel fw-7 remove-file">Discuter</a></li>
                                </ul>
                              </div>
                            </td>
                        </tr>
                        @empty
                        <span>Aucune demande reçu à ce jour</span>
                    @endforelse



                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
