@extends('layouts.app')
@section('content')

<style>
    .header{
        margin-bottom: 3rem !important;
        background-color: #1F4B3F !important;
    }
</style>



    <section class="form-sticky stc1 mt-5">
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
                    <div class="col-lg-3 mt-3 mb-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('assets/images/blog/image-03.jpg')}}" class="card-img-top zoomRotateImage img-fluid w-100" alt="..." style="height: 200px !important">
                            <div class="card-body p-2 mb-3">
                              <p class="card-text"><a href="{{ route('EntrepriseService.show', ['slug' => $service->libelle]) }}">{{$service->libelle}}</a></p>
                            </div>
                          </div>
                    </div>

                    @empty
                    <span>Aucun résultat trouvé</span>
                @endforelse

                <div class="d-flex justify-content-center mb-5 mt-5">
                    {{ $services->links() }}
                </div>


            </div>
        </div>
        </div>
    </section>

@endsection
