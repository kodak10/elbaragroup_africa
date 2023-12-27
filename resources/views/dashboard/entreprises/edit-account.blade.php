@extends('dashboard.entreprises.layouts.app')
@section('content')
<section class="page-title-dashboard">
    <div class="themes-container">
      <div class="row">
        <div class="col-lg-12 col-md-12 ">
          <div class="title-dashboard">
            <div class="title-dash flex2">Paramétrage du compte</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="flat-dashboard-setting">
    <div class="container">
        <div class="row">

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


            <form method="POST" action="{{route('update_profil')}}">
                @csrf
               <div class="row">
                <div class="col-lg-6">
                    <div class="wrap-img flex2">
                        <div class="img-box relative">
                          <img class="avatar " id="profileimg" src="../images/dashboard/image-up.jpg" alt="">
                        </div>
                        <div id="upload-profile">
                          <h5 class="fw-6">Importer le Logo:</h5>
                          <h6>JPG 80x80px</h6>
                          <input class="up-file" id="tf-upload-img" type="file" name="logo">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wrap-img flex2">
                        <div class="img-box relative">
                          <img class="avatar " id="profileimg2" src="{{asset('assets/images/profil/')}}" alt="">
                        </div>
                        <div id="upload-profile2">
                          <h5 class="fw-6">Importer la couverture</h5>
                          <h6>JPG 1920x460px</h6>
                          <input class="up-file" id="tf-upload-img2" type="file" name="couverture">

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="nom" class="col-md-4 control-label">Type d'entreprise</label>
                        <div class="col-md-6">
                            <input style="text-transform: uppercase"  type="text" class="form-control"  name="type_entreprise" value="{{ old('type_entreprise', Auth::user()->compagny->type_entreprise) }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Nom -->
                    <div class="form-group">
                        <label for="nom" class="col-md-4 control-label">Nom</label>
                        <div class="col-md-6">
                            <input id="nom" type="text" class="form-control" name="name" value="{{ old('name', Auth::user()->compagny->name) }}" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Email -->
                    <div class="form-group">
                        <label for="mot_de_passe" class="col-md-4 control-label">Email</label>
                        <div class="col-md-6">
                            <input id=" email" type="email" class="form-control" value="{{ old('email', Auth::user()->compagny->email) }}" required disabled>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Téléphone -->
                    <div class="form-group">
                        <label for="telephone" class="col-md-4 control-label">Téléphone</label>
                        <div class="col-md-6">
                            <input id="telephone" type="text" class="form-control" name="telephone" value="{{ old('telephone', Auth::user()->compagny->telephone) }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Nationalité -->
                    <div class="form-group">
                        <label for="nationalite" class="col-md-4 control-label">Nationalité</label>
                        <div class="col-md-6">
                            <input id="nationalite" type="text" class="form-control" name="nationalite" value="{{ old('nationalite', Auth::user()->compagny->nationalite) }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="nom" class="col-md-4 control-label">Localisation</label>
                        <div class="col-md-6">
                            <input style="text-transform: uppercase"  type="text" class="form-control"  name="localisation" value="{{ old('localisation', Auth::user()->compagny->localisation) }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="nom" class="col-md-4 control-label">Régime social</label>
                        <div class="col-md-6">
                            <input style="text-transform: uppercase"  type="text" class="form-control"  name="regime" value="{{ old('regime', Auth::user()->compagny->regime) }}">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                     <!-- Acien Mot de passe -->
                    <div class="form-group">
                        <label for="mot_de_passe" class="col-md-4 control-label">Ancien mot de passe</label>
                        <div class="col-md-6">
                            <input id=" old_password" type="password" class="form-control" name="old_password">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Mot de passe -->
                    <div class="form-group">
                        <label for="mot_de_passe" class="col-md-4 control-label">Nouveau mot de passe</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="password" class="col-md-4 control-label">Confirmer le mot de passe</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password_confirmation">
                        </div>
                    </div>
                </div>


                <hr class="mt-3 mb-3">


                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="nom" class="col-md-4 control-label">Site Web</label>
                        <div class="col-md-6">
                            <input style="text-transform: uppercase"  type="text" class="form-control"  name="site_web" value="{{ old('site_web', Auth::user()->compagny->site_web) }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="nom" class="col-md-4 control-label">Page Facebook</label>
                        <div class="col-md-6">
                            <input style="text-transform: uppercase"  type="text" class="form-control"  name="facebook" value="{{ old('facebook', Auth::user()->compagny->facebook) }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="nom" class="col-md-4 control-label">A Propos de vous</label>
                        <div class="col-md-12">
                            <textarea class="form-control" value="{{ old('about', Auth::user()->compagny->about) }}" name="about" id="" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="tt-button button-style mt-3">
                        <button type="submit" class="btn-3">Sauvegarder les informations</button>
                    </div>
                </div>
               </div>

            </form>



















        </div>
        <div class="row">









        </div>
    </div>

   {{--  <div class="themes-container">
      <div class="row">
        <div class="col-lg-12 col-md-12 ">
          <div class="profile-setting bg-white">
            <div class="author-profile flex2 border-bt">

              <div class="wrap-img flex2">
                <div class="img-box relative">
                  <img class="avatar " id="profileimg" src="../images/dashboard/image-up.jpg" alt="">
                </div>
                <div id="upload-profile">
                  <h5 class="fw-6">Importer le Logo:</h5>
                  <h6>JPG 80x80px</h6>
                  <input class="up-file" id="tf-upload-img" type="file" name="profile" required="">
                </div>
              </div>
              <div class="wrap-img flex2">
                <div class="img-box relative">
                  <img class="avatar " id="profileimg2" src="../images/dashboard/image-up.jpg" alt="">
                </div>
                <div id="upload-profile2">
                  <h5 class="fw-6">Importer la couverture</h5>
                  <h6>JPG 1920x460px</h6>
                  <input class="up-file" id="tf-upload-img2" type="file" name="profile" required="">

                </div>
              </div>
              <div class="tt-button button-style">
                <a href="#" class="btn-3">Sauvegarder les informations</a>
              </div>
            </div>


            <div class="form-infor-profile">
              <h3 class="title-info">Information</h3>
              <div class="form-infor flex flat-form">
                <div class="info-box info-wd">
                    <fieldset>
                        <label class="title-user fw-7">Type d'entreprise</label>
                    </fieldset>
                  <fieldset>
                    <label class="title-user fw-7">Nom de l'entreprise</label>
                    <input type="text" class="input-form" value="Avitex Agency" required>
                  </fieldset>
                  <fieldset>
                    <label class="title-user fw-7">Nationalité</label>
                    <input type="text" class="input-form" value="Avitex Agency" required>
                  </fieldset>
                  <fieldset>
                    <label class="title-user fw-7">Régime social</label>
                    <input type="tel" class="input-form" value="123  456  7890" required>
                  </fieldset>
                  <fieldset>
                    <label class="title-user fw-7">Localisation</label>
                    <input type="tel" class="input-form" value="123  456  7890" required>
                  </fieldset>
                  <fieldset>
                    <label class="title-user fw-7">Numéro de téléphone</label>
                    <input type="tel" class="input-form" value="123  456  7890" required>
                  </fieldset>

                  <div id="item_date" class="dropdown titles-dropdown">
                    <label class="title-user fw-7">Date de création</label>
                    <a class="btn-selector nolink input-form"> 2018</a>
                    <ul>
                      <li><span>2018</span></li>
                      <li><span>2019</span></li>
                      <li><span>2020</span></li>
                      <li><span>2021</span></li>
                      <li><span>2022</span></li>
                    </ul>
                  </div>
                </div>
                <div class="info-box info-wd">
                  <fieldset>
                    <label class="title-user fw-7">Email</label>
                    <input type="email" class="input-form" value="hi.avitex@gmail.com" disabled>
                  </fieldset>
                  <fieldset>
                    <label class="title-user fw-7">Site Web</label>
                    <input type="url" class="input-form" required>
                  </fieldset>

                </div>
              </div>




              <div class="text-editor-wrap border-bt">
                <h3>A propos de l'entreprise</h3>
                <div class="text-editor-main">
                  <div class="options">
                    <button class="my-text-btn" data-command="undo"><i class="fas fa-undo"></i></button>
                    <button class="my-text-btn" data-command="redo"><i class="fas fa-redo"></i></button>
                    <button class="my-text-btn" data-command="bold"><i class="fas fa-bold"></i></button>
                    <button class="my-text-btn" data-command="italic"><i class="fas fa-italic"></i></button>
                    <button class="my-text-btn" data-command="underline"><i class="fas fa-underline"></i></button>
                    <button class="my-text-btn" data-command="strikeThrough"><i
                        class="fas fa-strikethrough"></i></button>
                    <button class="my-text-btn" data-command="formatBlock" data-block="H1">H1</button>
                    <button class="my-text-btn" data-command="formatBlock" data-block="H2">H2</button>
                    <button class="my-text-btn" data-command="formatBlock" data-block="H3">H3</button>
                    <button class="my-text-btn" data-command="justifyLeft"><i class="fas fa-align-left"></i></button>
                    <button class="my-text-btn" data-command="justifyCenter"><i
                        class="fas fa-align-center"></i></button>
                    <button class="my-text-btn" data-command="justifyRight"><i
                        class="fas fa-align-right"></i></button>
                    <button class="my-text-btn" data-command="justifyFull"><i
                        class="fas fa-align-justify"></i></button>
                    <button class="my-text-btn" data-command="insertImage"><i class="fas fa-images"></i></button>
                    <button class="my-text-btn" data-command="createLink"><i class="fas fa-link"></i></button>
                  </div>
                  <div class="contentOutput" contenteditable="true"></div>

                </div>
              </div>

              <div class="photo-wrap">
                <h3>Profile Photo</h3>
                <ul class="flex">
                  <li class="file-delete"><img src="../images/dashboard/photo-1.jpg" alt=""><a
                      class="icon-clear remove-file"></a> </li>
                  <li class="file-delete"><img src="../images/dashboard/photo-2.jpg" alt=""> <a
                      class="icon-clear remove-file"></a> </li>
                  <li class="file-delete"><img src="../images/dashboard/photo-1.jpg" alt=""> <a
                      class="icon-clear remove-file"></a> </li>
                </ul>
              </div>

              <div class="button-wrap flex2">
                <div class="tt-button button-browse">
                  <a href="#">Browse</a>
                </div>
                <div class="fs-16"><a>Upload image</a> </div>
              </div>

              <div class="wrap-url border-bt">
                <fieldset class="info-wd">
                  <label class="title-url fw-7">Introduction Video</label>
                  <input type="url" class="input-form" value="https://www.youtube.com/watch?v=I6ZLgk_bq90">
                </fieldset>
              </div>
              <div class="social-wrap border-bt">
                <h3>Social Network</h3>
                <div class="form-social form-wg flex flat-form">
                  <div class="form-box info-wd wg-box">
                    <fieldset class="flex2">
                      <span class="icon-facebook"></span>
                      <input type="url" class="input-form" value="http://www.facebook.com/avitex">
                    </fieldset>
                    <fieldset class="flex2">
                      <span class="icon-twitter"></span>
                      <input type="url" class="input-form2" placeholder="URL" required>
                    </fieldset>
                    <fieldset class="flex2">
                      <span class="icon-instagram1"></span>
                      <input type="url" class="input-form2" placeholder="URL" required>
                    </fieldset>
                  </div>
                  <div class="form-box info-wd wg-box">
                    <fieldset class="flex2">
                      <span class="icon-linkedin2"></span>
                      <input type="url" class="input-form2" placeholder="URL" required>
                    </fieldset>
                    <fieldset class="flex2">
                      <span class="icon-pinterest"></span>
                      <input type="url" class="input-form2" placeholder="URL" required>
                    </fieldset>
                    <fieldset class="flex2">
                      <span class="icon-youtube"></span>
                      <input type="url" class="input-form2" placeholder="URL" required>
                    </fieldset>

                  </div>
                </div>
              </div>
              <div class="member-wrap border-bt">

                <div class="member-box">
                  <h3>Member</h3>
                  <div class="form-info info-wd">
                    <div class="form-member flex2">
                      <input type="text" class="fw-7 input-form" value="Member 1"><a class="icon-write1"></a>
                    </div>
                    <div class="info-box ">
                      <fieldset class="flex2">
                        <label class="title-user fw-7">Name</label>
                        <input type="text" class="input-form" value="Maverick Nguyen">
                      </fieldset>
                      <fieldset class="flex2">
                        <label class="title-user fw-7">Designation</label>
                        <input type="text" class="input-form" value="Manager">
                      </fieldset>
                      <fieldset class="flex2">
                        <label class="title-user fw-7">Experience</label>
                        <input type="text" class="input-form" value="2 years">
                      </fieldset>
                      <fieldset class="flex2">
                        <label class="title-user fw-7">Social Network</label>
                        <input type="url" class="input-form" value="http://www.facebook.com/avitex">
                      </fieldset>
                      <div class="upload-wrap flex2">
                        <label class="fw-6">Profile Image</label>
                        <input class="up-file" type="file" name="profile" required="">
                      </div>
                      <fieldset class="message-wrap flex">
                        <label class="fw-6">Description</label>
                        <textarea name="message" rows="3" tabindex="3"
                          placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit..."></textarea>
                      </fieldset>
                    </div>


                    <div class="form-member flex2">
                      <input type="text" class="fw-7 input-form" value="Member 2"><a
                        class="icon-write1 loadmore2"></a>
                    </div>
                    <div class="info-box fl-item">
                      <fieldset class="flex2">
                        <label class="title-user fw-7">Name</label>
                        <input type="text" class="input-form" value="Maverick Nguyen">
                      </fieldset>
                      <fieldset class="flex2">
                        <label class="title-user fw-7">Designation</label>
                        <input type="text" class="input-form" value="Manager">
                      </fieldset>
                      <fieldset class="flex2">
                        <label class="title-user fw-7">Experience</label>
                        <input type="text" class="input-form" value="2 years">
                      </fieldset>
                      <fieldset class="flex2">
                        <label class="title-user fw-7">Social Network</label>
                        <input type="url" class="input-form" value="http://www.facebook.com/avitex">
                      </fieldset>
                      <div class="upload-wrap flex2">
                        <label class="fw-6">Profile Image</label>
                        <input class="up-file" type="file" name="profile" required="">
                      </div>
                      <fieldset class="message-wrap flex">
                        <label class="fw-6">Description</label>
                        <textarea id="comment-message" name="message" rows="3" tabindex="3"
                          placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit..."></textarea>
                      </fieldset>
                    </div>
                    <div class="member-button">
                      <a href="#" class="">
                        <h4 class="fw-7">Member</h4>
                      </a>
                    </div>
                  </div>
                </div>

              </div>
              <div class="contact-wrap info-wd border-bt">
                <h3>Contact Information</h3>

                <fieldset class="address-box">
                  <label class="title-user fw-7">Address</label>
                  <input type="text" class="input-form input-style" value="71  St. Takayamio, Tokyo">
                </fieldset>
                <div class="form-social form-wg flex flat-form">
                  <div class="form-box  wg-box">
                    <div id="item_category2" class="dropdown titles-dropdow">
                      <label class="title-user color-1 fw-7">Location</label>
                      <a class="btn-selector nolink input-form"> Tokyo </a>
                      <ul>
                        <li><span>VietNam</span></li>
                        <li><span>Tokyo</span></li>
                        <li><span>USA</span></li>
                        <li><span>England</span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="form-box  wg-box">
                    <fieldset class="">
                      <label class="title-user fw-7">Map Location</label>
                      <input type="text" class="input-form input-style" value="243- 235  St. Takayamio, Tokyo">
                    </fieldset>
                  </div>
                </div>
              </div>
              <div class="map-content">
                <iframe class="map-box"
                  src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7302.453092836291!2d90.47477022812872!3d23.77494577893369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1627293157601!5m2!1svi!2s"
                  allowfullscreen="" loading="lazy"></iframe>
              </div>
              <div class="area-wrap info-wd">
                <div class="form-social form-wg flex flat-form">
                  <div class="form-box  wg-box">
                    <fieldset class="">
                      <input type="text" class="input-form " value="40.69499198068389">
                    </fieldset>
                  </div>
                  <div class="form-box  wg-box">
                    <fieldset class="">
                      <input type="text" class="input-form " value="-73.9959976171989">
                    </fieldset>
                  </div>
                </div>
              </div>

            </div>

          </div>

        </div>

      </div>
    </div> --}}
  </section>
@endsection

