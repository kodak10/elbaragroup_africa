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
            <div class="title-dash flex2">Ajouter un service</div>
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

                <form action="{{route('store_service')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label fw500 fz16 dark-color">Selectionnez le service</label>
                            <div class="bootselect-multiselect">
                                <select class="selectpicker" name="service" data-live-search="true"
                                    data-width="100%" class="p-3">
                                    <option>Selectionner ici...</option>
                                    @forelse ($services as $val)
                                        <option
                                            value="{{ $val->id }}"data-tokens="{{ $val->libelle }}">
                                            {{ mb_strtoupper($val->libelle) }}</option>
                                    @empty
                                        <option>Aucun secteur trouv&eacute;
                                        </option>
                                    @endforelse
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label fw500 fz16 dark-color">Saisissez le
                                Libell&eacute; du service (Courte phrase d'accroche)</label>
                            <div class="bootselect-multiselect">
                                <input required
                                    type="text"name="libelle"class="form-control"placeholder="Saisissez le Libelle du service">
                            </div>
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

                                    <input type="file" class="btn-3" name="images" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit"class="btn-3">Valider</button>


                </form>




            </div>

        </div>

    </section>

    <script>
        $(document).ready(function() {
            $('#imageForm').submit(function(e) {
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // Mettre à jour l'élément avec l'ID "imageContainer"
                        $('#imageContainer').html('<img src="' + response.imagePath + '" alt="Imported Image">');
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
@endsection
