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

               



            </div>

        </div>

    </section>

   
@endsection
