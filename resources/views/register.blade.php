@extends('layouts.app')
@section('content')

<style>
    label{
        float: left !important;
        font-weight: 600;
        font-size: 16px;
    }
</style>
<section class="bg-f5">
    <div class="tf-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <div class="widget-menu-link">
                        <ul>
                            <li><a href="/">Accueil</a></li>
                            <li><a href="#">Inscription</a></li>
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
              <div class="wd-form-login tf-tab">
                    <h4>Inscription</h4>
                    <ul class="menu-tab">
                        <li class="ct-tab active">Entreprise</li>
                        <li class="ct-tab">Client</li>
                    </ul>
                    <div class="content-tab">
                        <div class="inner">
                            @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                             <form method="post" action="{{route('inscription_entreprise')}}">
                                @csrf
                                <select name="type_entreprise" class="form-select form-select-md mb-3 form-control" aria-label=".form-select-lg example" >
                                    <option >Sélectionner le type d'entreprise</option>
                                    <option value="Nationale">Nationale</option>
                                    <option value="Multinationale">Multinationale</option>
                                </select>
                                <div class="mb20">
                                    <label class="form-label fw600 dark-color">Nom de l'entreprise</label>
                                    <input type="texte" class="form-control" name="name" placeholder="Entrer le nom de l'entreprise">
                                </div> <div class="mb20">
                                    <label class="form-label fw600 dark-color">Nationalité</label>
                                    <input type="text" class="form-control" name="nationalite" placeholder="Entrer votre nationalité">
                                </div> <div class="mb20">
                                    <label class="form-label fw600 dark-color">Téléphone</label>
                                    <input type="text" class="form-control" name="telephone" placeholder="Entrer votre numéro de téléphone">
                                </div>
                                <div class="mb20">
                                    <label class="form-label fw600 dark-color">Email</label>
                                    <input type="email" class="form-control" placeholder="Entrer votre Email" name="email" required>
                                </div>
                                <div class="mb20">
                                    <label class="form-label fw600 dark-color">Regime Social</label>
                                    <input type="text" class="form-control" name="regime" placeholder="Entrer votre régime social">
                                </div>
                                <div class="mb20">
                                    <label class="form-label fw600 dark-color">Localisation</label>
                                    <input type="text" class="form-control" name="localisation" placeholder="Entrer votre adresse">
                                </div>
                                <div class="mb15">
                                    <label class="form-label fw600 dark-color">Mot de passe</label>
                                    <div class="inputs-group auth-pass-inputgroup">
                                        <input type="password" class="input-form password-input" name="password"  placeholder="Mot de passe" required>
                                        <a class="icon-eye-off password-addon"></a>
                                    </div>
                                    {{-- <input type="password" class="form-control" placeholder="Mot de passe" name="password" required> --}}
                                </div>
                                <div class="mb15">
                                    <label class="form-label fw600 dark-color">Confirmation de mot de passe</label>
                                    <div class="inputs-group auth-pass-inputgroup">
                                        <input type="password" class="input-form password-input" name="password_confirmation" placeholder="Confirmation du mot de passe" required>
                                        <a class="icon-eye-off password-addon"></a>
                                    </div>
                                    {{-- <input type="password" class="form-control" placeholder="Confirmer le mot de passe" name="password_confirmation"> --}}
                                </div>

                                <div class="d-grid mb20">
                                    <button class="ud-btn btn-thm default-box-shadow2" type="submit" style=" text-align :center; width :100%">S'inscrire <i class="fal fa-arrow-right-long"></i></button>
                                    <div class="sign-up">Vous avez déjà un compte ?<a href="/connexion">Se Connecter</a></div>
                                </div>
                            </form>
                            {{-- <form method="post" action="{{route('inscription_entreprise')}}">
                                @csrf

                                <div class="ip">
                                    <label >Nom de l'entreprise<span>*</span></label>
                                    <input type="text" placeholder="Nom de l'entreprise" name="name" required>
                                </div>
                                <div class="ip">
                                    <label >Email<span>*</span></label>
                                    <input type="text" placeholder="Email" name="email" required>
                                </div>
                                <div class="ip">
                                    <label >Mot de passe<span>*</span></label>
                                    <div class="inputs-group auth-pass-inputgroup">
                                        <input type="password" class="input-form password-input" name="password"  placeholder="Mot de passe" required>
                                        <a class="icon-eye-off password-addon"></a>
                                    </div>
                                </div>
                                <div class="ip">
                                    <label >Confirmation du mot de passe<span>*</span></label>
                                    <div class="inputs-group auth-pass-inputgroup">
                                        <input type="password" class="input-form password-input" name="password_confirmation" placeholder="Confirmation du mot de passe" required>
                                        <a class="icon-eye-off password-addon"></a>
                                    </div>
                                </div>

                                <button type="submit">S'inscrire</button>
                                <div class="sign-up">Vous avez déjà un compte ?<a href="/login">Se Connecter</a></div>
                            </form> --}}
                        </div>
                        <div class="inner">
                            @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="post" action="{{route('inscription_client')}}">
                                <div class="ip">
                                    <label >Nom<span>*</span></label>
                                    <input type="text" placeholder="Nom" name="name" required>
                                </div>
                                <div class="ip">
                                    <label >Prenoms<span>*</span></label>
                                    <input type="text" placeholder="Prenoms" name="prenom" required>
                                </div>
                                <div class="ip">
                                    <label >Email<span>*</span></label>
                                    <input type="text" placeholder="Email" required>
                                </div>
                                <div class="ip">
                                    <label >Mot de passe<span>*</span></label>
                                    <div class="inputs-group auth-pass-inputgroup">
                                        <input type="password" class="input-form password-input" placeholder="Mot de passe" required>
                                        <a class="icon-eye-off password-addon"></a>
                                    </div>
                                </div>
                                <div class="ip">
                                    <label >Confirmation du mot de passe<span>*</span></label>
                                    <div class="inputs-group auth-pass-inputgroup">
                                        <input type="password" class="input-form password-input" placeholder="Confirmation du mot de passe" required>
                                        <a class="icon-eye-off password-addon"></a>
                                    </div>
                                </div>
                                {{-- <div class="group-ant-choice st">
                                  <div class="sub-ip"><input type="checkbox">I agree to the <a href="#">Terms of User</a></div>
                                </div> --}}
                                <button>S'inscrire</button>
                                <div class="sign-up">Vous avez déjà un compte ?<a href="/connexion">Se Connecter</a></div>
                            </form>
                        </div>
                    </div>

              </div>
            </div>
        </div>
  </section>

@endsection
