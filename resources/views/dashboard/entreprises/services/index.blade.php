@extends('dashboard.entreprises.layouts.app')
@section('content')

<style>
    .button.btn.dropdown-toggle.btn-default{
        display: none !important;
    }
</style>

<section class="page-title-dashboard">
    <div class="themes-container">
      <div class="row">
        <div class="col-lg-12 col-md-12 ">
          <div class="title-dashboard">
            <div class="title-dash flex2">Mes services</div>
          </div>
        </div>
      </div>
    </div>
  </section>



    <section class="flat-dashboard-post flat-dashboard-setting">
        <div class="themes-container">

            <div class="row">
                @if(session('success') === false)
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                @endif

                    @if(session('success') === true)
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                @endif
            </div>
            <div class="row">

              
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
                      @forelse ($services as $service )
                          <tr class="file-delete">
                              <td>
                                <div class="candidates-wrap flex2">
                                  <div class="images">
                                    <img src="../images/dashboard/image-1.jpg" alt="">
                                  </div>
                                  <div class="content">
                                    <h3>{{$service->libelle}}</h3>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="status-wrap">
                                  <div class="button-status color-3"> </div>
                                </div>
                              </td>
                              <td>
                                <div class="title-day color-1"></div>
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

    </section>

   
@endsection
