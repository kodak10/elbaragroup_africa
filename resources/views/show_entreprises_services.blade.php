@extends('layouts.app')
@section('content')
<style>
    .header{
        margin-bottom: 3rem !important;
        background-color: #1F4B3F !important;
    }
</style>
{{-- <section class="p-0 ">
    <div class="container">
        <h3 class="title mb-5 mt-5">Les entreprises offrant le service choisi</h3>
        <div class="row">
            @forelse($serviceEntreprises as $serviceEntreprise)
                <div class="col-lg-3">
                    <div class="listing-style1">
                        <div class="list-thumb">
                            <img class="w-100" src="{{$serviceEntreprise->image}}" alt="Image">
                            <a href="{{ route('serviceDetail.show', ['entreprise_nom' => $serviceEntreprise->name]) }}" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                        </div>
                        <div class="list-content">
                            <h4 class="fw-bold; text-uppercase"><a href="{{ route('serviceDetail.show', ['entreprise_nom' => $serviceEntreprise->name]) }}">{{$serviceEntreprise->name}}</a></h4>

                        </div>
                    </div>
                </div>


                @empty
                    <span class="mb-5">Aucune entreprise trouvé concernant ce service</span>

            @endforelse
        </div>

    </div>
</section> --}}
<section class="blog-section mt-5">
    <div class="tf-container">
      <div class="group-col-3">
        @forelse ($serviceEntreprises as $serviceEntreprise)
            <div class="widget-blog-1 style-1 cl3 stc">
                <div class="img-blog">
                    <img src="{{$serviceEntreprise->couverture}}" alt="image">
                </div>
                <div class="content">
                    <h5 class="main-title"><a href="{{ route('serviceDetail.show', ['entreprise_nom' => $serviceEntreprise->name]) }}">{{$serviceEntreprise->name}}</a></h5>
                </div>
            </div>
        @empty
            Aucune Entreprise ne propose ne service
        @endforelse

    </div>

  </section>
@endsection
