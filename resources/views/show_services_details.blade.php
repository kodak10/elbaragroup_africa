@extends('layouts.app')
@section('content')

<style>
    .header{
        background-color: #1F4B3F !important;
        margin-bottom: 3rem !important;
    }
    #header .style-absolute{
        position: fixed !important;
    }
    .header{
        position: fixed !important;
    }
</style>
<section class="single-job-thumb">
    <img src="{{asset('storage/assets/images/couverture/' . $serviceDetails->couverture)}}" alt="images">
</section>

<section class="form-sticky fixed-space">
<div class="tf-container">
<div class="row">
  <div class="col-lg-12">
    <div class="wd-job-author2">
      <div class="content-left">
        <div class="thumb">
          <img src="{{asset('storage/assets/images/profil/' . $serviceDetails->photo)}}" alt="logo">
        </div>
        <div class="content">
          <a href="#" class="category">{{$serviceDetails->libelle}}</a>
          <h6><a href="#">{{$serviceDetails->name}}<span class="icon-bolt"></span></a></h6>
          <ul class="job-info">
            <li><span class="icon-calendar"></span>
                <span>{{$serviceDetails->type_entreprise}}</span>
            </li>
            <li><span class="icon-map-pin"></span>
              <span>{{$serviceDetails->localisation}}</span>
            </li>
            <li><span class="icon-calendar"></span>
                <span>{{$serviceDetails->delais_execution}} Jours</span>
            </li>
          </ul>

        </div>
      </div>
      <div class="content-right">
        <div class="top">
          <a href="#" class="share"><i class="icon-share2"></i></a>
          <button type="button" class="btn btn-primary btn_contact" data-toggle="modal" data-target="#exampleModal">
            Contactez l'entreprise <i class="fal fa-arrow-right-long"></i>
        </button>
        </div>



  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="">Formulaire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="">
                        @csrf
                        <input type="hidden" name="client_id" value="{{
                            Auth::check() &&
                            (
                                (Auth::user()->company && Auth::user()->company->id) ||
                                (Auth::user()->serviceclient && Auth::user()->serviceclient->id) ||
                                (Auth::user()->client && Auth::user()->client->id)
                            ) ?
                            (Auth::user()->company ? Auth::user()->company->id : (Auth::user()->serviceclient ? Auth::user()->serviceclient->id : Auth::user()->client->id))
                            :
                            0
                        }}">

                        <input type="hidden" name="entreprise_id" value="{{$serviceDetails->entreprise_id}}">
                        <input type="hidden" name="service_id" value="{{$serviceDetails->service_id}}">

                        <div class="form-group mb-3">
                          <label for="">Description</label>
                          <input type="text" class="form-control" name="description" placeholder="Enter des details sur le service">
                        </div>
                        <div class="form-group mb-3">
                          <label for="">Delai d'exécution</label>
                          <input type="text" class="form-control" name="delais_execution" placeholder="Entrer la durée ">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Importer le cahier de charge</label>
                            <input type="file" class="form-control" name="document" >
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Contactez</button>

                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
            </div>
        </div>


      </div>
    </div>
  </div>
</div>
</div>
</section>

<section class="inner-jobs-section">
<div class="tf-container">
<div class="row">
  <div class="col-lg-8">
    <article class="job-article tf-tab single-job">
      <ul class="menu-tab">
        <li class="ct-tab active">Description</li>
        <li class="ct-tab">A Propos</li>
      </ul>
      <div class="content-tab">
        <div class="inner-content">
            <p>{{$serviceDetails->description}}</p>

            <div class="video-thumb">

                <ul class="thumb-menu menu-tab2">
                  <li class="ct-tab2"> <a class="lightbox-gallery" href="{{asset('assets/images/review/thumbv4.jpg')}}"><img src="{{asset('assets/images/review/thumbv4.jpg')}}" alt="images"></a> </li>
                  <li class="ct-tab2"> <a class="lightbox-gallery" href="{{asset('assets/images/review/thumbv1.jpg')}}"><img src="{{asset('assets/images/review/thumbv1.jpg')}}" alt="images"></a></li>
                  <li class="ct-tab2"><a class="lightbox-gallery" href="{{asset('assets/images/review/thumbv2.jpg')}}"><img src="{{asset('assets/images/review/thumbv2.jpg')}}" alt="images"></a></li>
                </ul>
              </div>
        </div>

        <div class="inner-content">
          <h5>Full Reviews</h5>
          <p>Are you a User Experience Designer with a track record of delivering intuitive digital experiences that
            drive results? Are you a strategic storyteller and systems thinker who can concept and craft smart.
          </p>
        </div>
      </div>
    </article>
  </div>
  <div class="col-lg-4">
    <div class="cv-form-details po-sticky job-sg">
      <div class="map-content">

        <iframe class="map-box"
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7302.453092836291!2d90.47477022812872!3d23.77494577893369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1627293157601!5m2!1svi!2s"
              allowfullscreen="" loading="lazy"></iframe>

    </div>
      <ul class="list-infor">
        <li><div class="category">Site Web</div><div class="detail"><a href="#">{{$serviceDetails->site_web}}</a></div></li>
        <li><div class="category">Localisation</div><div class="detail">{{$serviceDetails->localisation}}</div></li>
      </ul>

      <div class="wd-social d-flex aln-center">
        <span>Socials:</span>
        <ul class="list-social d-flex aln-center">
            <li><a href="#"><i class="icon-facebook"></i>{{$serviceDetails->facebook}}</a></li>
        </ul>
    </div>
    {{-- <div class="form-job-single">
      <h6>Contact Us</h6>
      <form action="#">
        <input type="text" placeholder="Subject">
        <input type="text" placeholder="Name">
        <input type="email" placeholder="Email">
        <textarea placeholder="Message..."></textarea>
        <button>Envoyer le messager</button>
      </form>

    </div> --}}
    </div>
  </div>
</div>
</div>
</section>
@endsection
