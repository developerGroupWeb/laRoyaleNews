@extends('templates.template')

  @section('content')

<div class="">
  <nav class="navbar navbar-expand-sm fixed-top pl-0 pr-4 shadow" style="background: #000000;">>
    <a class="navbar-brand" href="{{route('root_path')}}" style="color: #fff;">
      <h3 class="font-weight-bold m-0">LA ROYALE <span class="title-label pt-0 px-2 pb-1 rounded">News</span>
      </h3>
    </a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a href="{{route('singin')}}" class="nav-link btn px-4 singbg-btn" style="color: #fff;"><strong>Se connecter</strong>
              </a>
          </li>
      </ul>
    </div>
  </nav>
</div>

<div class="singin-body col-12">
  <div class="row bg-light">
    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12 offset-0 singin-content bg-white py-4 px-5 mb-5 shadow" style="margin-top: 100px; border-radius: 20px;">
      <div class="row">
        <h1 class="text-center mx-auto mb-5" style="color: #333;">Créez votre compte<br>en 1 minute.</h1>
        <h4 class="text-center mx-auto">Vous pourrez profiter des services gratuits de La Royale News sur tous les supports.</h4>
        <h6 class="d-block d-sm-none text-center mx-auto"><strong>Déjà inscrit(e) ? <a href="{{route('singin')}}">Connectez-vous</a></strong></h6>

        <div class="col-12">
          <div class="row">
            <div class="col-12">
              <hr class="row">
              <p class="d-block d-sm-none text-center font-weight-bold">Continuer avec</p>
            </div>

            <div class="col">
              <div class="row">
                <a href="#" class="btn" style="background: #3B5998; color: #fff;">
                  <span class="d-none d-sm-inline-block font-weight-bold">Continuer avec</span> 
                  <button class="btn" style="background: #fff; color: #3B5998;"><i class="fa fa-facebook" aria-hidden="true"></i></button>
                </a>
              </div>
            </div>

            <div class="col">
              <div class="row">
                <a href="#" class="btn ml-auto" style="background: #d34836; color: #fff;">
                  <span class="d-none d-sm-inline-block font-weight-bold">Continuer avec</span> 
                  <button class="btn" style="background: #fff; color: #d34836;"><i class="fa fa-google" aria-hidden="true"></i></button>
                </a>
              </div>
            </div>
          </div>
        </div>

          <div class="col-12 text-center">
              <hr class="row">

              <p class="my-2"><strong>Ou</strong></p>
            </div>

            <div class="col-12">

            <form method="post" action="" id="singup">

                {{csrf_field()}}

              <div class="radio">
                    <span style="margin-right: 20px;">Civilité: </span>
                    <label class="radio-inline">
                      <input type="radio" name="civility" id="inlineRadio" value="madame"> Madame
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="civility" id="inlineRadio" value="monsieur"> Monsieur
                    </label>
                    <small style="margin-left: 20px; color: red;"><span style="color: red; font-style: italic">{{ $errors->first('civility') }}</span> </small>
              </div>

                  <div class="row">
                    <div class="form-group col-sm-6">
                      <label for="firstname">Prénom</label>
                      <input type="text" name="name" class="form-control" id="firstname" title="first name" placeholder="Votre prénom" value="{{ old('name') }}"><span class="error"></span>
                    </div>

                      <span style="color: red; font-style: italic">{{ $errors->first('name') }}</span>

                    <div class="form-group col-sm-6">
                      <label for="surname">Nom</label>
                      <input type="text" name="surname" class="form-control" id="surname" title="surname" placeholder="Votre nom" value="{{ old('surname') }}"><span class="error"></span>
                    </div>

                      <span style="color: red; font-style: italic">{{ $errors->first('surname') }}</span>

                  </div>
              <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control " id="email" title="email" placeholder="email@mail.fr" value="{{ old('email') }}"><span class="error"></span>
              </div>

                <span style="color: red; font-style: italic">{{ $errors->first('email') }}</span>

              <div class="form-group">
                <div class="">
                  <label class="pull-left" for="password">Créer un mot de passe</label>
                  <span class="pull-right" style="font-size: 15px; color: #1abc9c;"><i class="fa fa-eye" id="fa-eye" aria-hidden="true">Afficher</i><i class="fa fa-eye-slash" id="fa-eye-slash" aria-hidden="true" style="display: none;">Cacher</i></span>
              </div>
                <input type="password" name="password" class="form-control" id="password" title="password" placeholder="Au moins 8 caratères, 1 majuscule, 1 chiffre"><span class="error"></span>
              </div>

                <span style="color: red; font-style: italic">{{ $errors->first('password') }}</span>

              <div class="form-group">
                          <label class="pull-left" for="password">Confirmer mot de passe</label>
                          <input type="password" name="password_confirmation" class="form-control" id="passwordConfirm" title="password confirm" placeholder="Confirmer mot de passe"><span class="error"></span>
                  </div>

                <span style="color: red; font-style: italic">{{ $errors->first('password_confirmation') }}</span>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="news" value="1"> Oui, je souhaite recevoir les informations de laroyalepresse.com
                    </label>

                      <span style="color: red; font-style: italic">{{ $errors->first('news') }}</span>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="partner" value="1"> Oui, je souhaite recevoir les informations des partenaires de laroyalepresse.com
                    </label>
                  </div>

                      <span style="color: red; font-style: italic">{{ $errors->first('partner') }}</span>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" required="required" checked="">J'accepte les <a href="">conditions générales de vente</a> et <a href="">conditions générales d'utilisation</a>
                    </label>
                  </div>


              <button type="submit"  id="singup" class="btn col-sm-8 offset-sm-2 col-8 offset-2 singbg-btn my-4" style="padding: 7px;"><h4>Je m'inscris</h4></button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div>
	<footer style="color: #fff;" class="p-4 bg-dark">
    <div class="container">
      <div class="col-12" style="color: #fff;">
        <div class="row">
          <span style="">© laroyalepresse.com</span> <span class="ml-auto"><a href="#">Aide</a> / <a href="#">CGU/CGV</a> / <a href="#">Confidentialité</a></span>
        </div>
      </div>
    </div>
  </footer>
</div>
<script src="{{asset('js/singup.js')}}"></script>
  @stop