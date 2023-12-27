@extends('layouts.app')
@section('content')
<section class="bg-f5">
    <div class="tf-container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-title">
            <div class="widget-menu-link">
              <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="#">Connexion</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="account-section">
    <div class="tf-container">
      <div class="row">
        <div class="wd-form-login">
          <h4>Connexion</h4>
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
          <form method="post" action="{{route('postLogin')}}">
            @csrf
            <div class="ip">
              <label>Email<span>*</span></label>
              <input type="text" placeholder="Email" name="email">
            </div>
            <div class="ip">
              <label>Mot de passe<span>*</span></label>
              <div class="inputs-group auth-pass-inputgroup">
                <input type="password" class="input-form password-input" placeholder="Mot de passe" id="password-input"
                  required name="password">
                <a class="icon-eye-off password-addon" id="password-addon"></a>
              </div>
            </div>
            <div class="group-ant-choice">
              <div class="sub-ip"><input type="checkbox">Se souvenir de moi</div>
              <a href="#" class="forgot">Mot de passe oublié</a>
            </div>

            <button type="submit">Se Connecter</button>
            <div class="sign-up">Vous n'avez pas de compte ? <a href="/inscription">S'inscrire</a></div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
