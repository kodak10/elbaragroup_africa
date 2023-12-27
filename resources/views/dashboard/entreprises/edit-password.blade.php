@extends('dashboard.entreprises.layouts.app')
@section('content')
<section class="page-title-dashboard">
    <div class="themes-container">
      <div class="row">
        <div class="col-lg-12 col-md-12 ">
          <div class="title-dashboard">
            <div class="title-dash flex2">Modification de mot de passe</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="flat-dashboard-password">
    <div class="themes-container">
      <div class="row">
        <div class="col-lg-12 col-md-12 ">

          <div class="change-password bg-white">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif


            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="" enctype="multipart/form-data">
              <div class="form-password">
                <h3></h3>
                <div class="pass-box">
                  <div class="inner info-wd">
                    <label class="title-url fs-16">Mot de passe actuel</label>
                    <div class="inputs-group auth-pass-inputgroup relative flex2">
                      <input type="password" class="input-form password-input" value="123456789abcd123" required>
                      <a class="icon-eye-off password-addon"></a>
                    </div>
                  </div>
                  <div class="inner info-wd">
                    <label class="title-url fs-16">Nouveau mot de passe</label>
                    <div class="inputs-group auth-pass-inputgroup relative flex2">
                      <input type="password" class="input-form password-input" value="123456789flat123" required>
                      <a class="icon-eye-off password-addon"></a>
                    </div>
                  </div>
                  <div class="inner info-wd">
                    <label class="title-url fs-16">Confirmation du nouveau mot de passe</label>
                    <div class="inputs-group auth-pass-inputgroup relative flex2">
                      <input type="password" class="input-form password-input" value="123456789flat123" required>
                      <a class="icon-eye-off password-addon" id="password-addon"></a>
                    </div>
                  </div>

                  <div class="tt-button submit">
                    <a class="btn-3">Mettre à jour</a>
                  </div>
                </div>
              </div>
            </form>


          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
