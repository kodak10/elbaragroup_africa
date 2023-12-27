@extends('dashboard.entreprises.layouts.app')
@section('content')
<section class="page-title-dashboard">
    <div class="themes-container">
      <div class="row">
        <div class="col-lg-12 col-md-12 ">
          <div class="title-dashboard">
            <div class="title-dash flex2">Ajouter un service</div>
          </div>
        </div>
      </div>
    </div>
  </section>



    <section class="flat-dashboard-post flat-dashboard-setting">
        <div class="themes-container">

            <div class="row">

                <form action="" method="post">
                    @csrf

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label fw500 fz16 dark-color">Saisissez le
                                Libell&eacute; du service (Coute phrase d'accroche)</label>
                            <div class="bootselect-multiselect">
                                <input required
                                    type="text"name="libelle"class="form-control"placeholder="Saisissez le Libelle du service">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label fw500 fz16 dark-color">Selectionnez le service</label>
                            <div class="bootselect-multiselect">
                                {{-- <select class="selectpicker" name="service" data-live-search="true"
                                    data-width="100%">
                                    <option>Selectionner ici...</option>
                                    @forelse ($service as $val)
                                        <option
                                            value="{{ $val->id }}"data-tokens="{{ $val->libelle }}">
                                            {{ mb_strtoupper($val->libelle) }}</option>
                                    @empty
                                        <option>Aucun secteur trouv&eacute;
                                        </option>
                                    @endforelse
                                </select> --}}
                            </div>
                            {{-- <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select> --}}
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-6">
                        <div class="form-group">
                            <label class="form-label fw500 fz16 dark-color">Delais de livraison Approximatif (en jours)
                            </label>
                            <div class="bootselect-multiselect">
                                <input required
                                    type="number"name="delais"class="form-control"placeholder="Saisissez le nombre de jours">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label fw500 fz16 dark-color">Saisissez la description
                                du service</label>
                            <div class="bootselect-multiselect">
                                <textarea name="description" id="" cols="5" rows="2" placeholder="Saisissez la description du service"></textarea>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="photo-wrap">
                                <h3>Vos Réalisations</h3>
                                <ul class="flex">
                                    <li class="file-delete"><img src="{{asset('assets/images/dashboard/photo-1.jpg')}}" alt=""><a
                                        class="icon-clear remove-file"></a> </li>
                                    <li class="file-delete"><img src="{{asset('assets/images/dashboard/photo-2.jpg')}}" alt=""> <a
                                        class="icon-clear remove-file"></a> </li>
                                    <li class="file-delete"><img src="{{asset('assets/images/dashboard/photo-1.jpg')}}" alt=""> <a
                                        class="icon-clear remove-file"></a> </li>
                                </ul>
                            </div>

                            <div class="btn-wrap button-wrap flex2">
                                <div class="tt-button button-browse">
                                    <a href="#" class="btn-3">Importer des réalisations</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit"class="">Valider</button>


                </form>




            </div>

        </div>

    </section>
@endsection
