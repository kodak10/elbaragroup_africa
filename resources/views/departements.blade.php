@extends('layouts.app')
@section('content')
<style>
    .header{
        background-color: #1F4B3F !important;
    }
    #header .style-absolute{
        position: fixed !important;
    }
    .header{
        position: fixed !important;
    }
</style>


  <section class="account-section">
    <div class="tf-container">
      <div class="row">
        <section class="page-title-dashboard">
            <div class="themes-container">
              <div class="row">
                <div class="col-lg-12 col-md-12 ">
                  <div class="title-dashboard">
                    <div class="title-dash flex2">Catégories</div>
                  </div>
                </div>
              </div>
            </div>
          </section>
      </div>
    </div>
  </section>
  <section class="job-category-section">
    <div class="tf-container">
        <div class="row">

            <div class="col-md-12">
                <div class="group-category-job wow fadeInUp">
                    @foreach($categories as $categorie)
                        <div class="job-category-box">
                            <div class="job-category-header">
                                <h1><a href="">{{$categorie->libelle}}</a></h1>
                                <p>120 services disponible</p>
                            </div>
                            <a href="" class="btn-category-job">Voir les services <span class="icon-keyboard_arrow_right"></span></a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
