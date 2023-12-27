@extends('layouts.app')
@section('content')

    <section class="bg-f5 breadcrumb-section">
        <div class="tf-container">
        <div class="row">
            <div class="col-lg-12">
            <div class="page-title">
                <div class="widget-menu-link">
                <ul>
                    <li><a href="home-01.html">Home</a></li>
                    <li><a href="#">Find Jobs</a></li>
                </ul>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <section class="form-sticky stc1">
        <div class="tf-container">
        <div class="job-search-form inner-form-map st1">
            <form method="get" action="{{route('services.search')}}">
                @csrf
                <div class="row-group-search">
                    <div class="form-group-1">
                        <input type="text" name="keyword" id="keyword" class="input-filter-search" placeholder="Quel est le service que vous rechercher ?">
                        <span class="icon-search search-job"></span>
                    </div>
                    <div class="form-group-2">

                        <select name="category" id="category select-location" class="select-location">
                            <option value="">Toutes les catégories</option>
                            @foreach ($categories as $categorie )
                                <option value="{{ $categorie->id }}">{{$categorie->libelle}}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group-4">
                        <button class="btn btn-find">Rechercher</button>
                    </div>
                </div>

            </form>

            <div class="row mt-5">
                @forelse ($services as $service )
                    <div class="col-lg-3">
                        <div class="listing-style1">
                            <div class="list-thumb">
                                <img class="w-100 zoomRotateImage" src="{{$service->image}}" alt="Image">
                                <a href="#" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                            </div>
                            <div class="list-content">
                                <p class="list-text body-color fz14 mb-1"><a href="{{ route('EntrepriseService.show', ['slug' => $service->libelle]) }}">{{$service->libelle}}</a></p>
                            </div>
                        </div>
                    </div>

                    @empty
                    <span>Aucun résultat trouvé</span>
                @endforelse

                <div class="d-flex justify-content-center mb-5 ">
                    {{ $services->links() }}
                </div>


            </div>
        </div>
        </div>
    </section>

@endsection
