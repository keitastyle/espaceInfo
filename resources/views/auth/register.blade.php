@extends('layouts.loginLayout')

@section('content')
    <style>
        #usertype{
            font-size: large;
            font-family: Monaco;
        }

    </style>

    <div id="inscription" >
                <form method="post" action="{{ url('/register') }}" role="form" class="" id="registrationForm" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @section('titre')
                        Inscription
                        @endsection
                    @section('active')
                        Inscription
                    @endsection
                    <div class="modal-body">
                        <div id="usertype" class=" has-feedback row form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                            <div class="col-sm-3 col-md-3 col-sm-push-1 col-md-push-1">
                                <label>Vous êtes ? :</label>
                            </div>
                            <div class="col-sm-3 col-md-3 col-sm-push-1 col-md-push-1">
                                <label><input type="radio" name="u-type" value="Professeur" style="margin: 2px;">Professeur</label>
                            </div>
                            <div class="col-sm-3 col-md-3 col-sm-push-1 col-md-push-1">
                                <label><input type="radio" name="u-type" value="Etudiant" style="margin: 2px;">Etudiant</label>
                            </div>

                        </div>
                        <div class="row form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                            <label  class="control-label col-sm-3 col-md-3" for="nom">Nom</label>
                            <div class=" col-sm-8 col-md-8">
                                <input class="form-control" id="nom" type="text" name="nom" value="{{ old('nom') }}" placeholder="nom" required>

                                @if ($errors->has('nom'))
                                    <span class="help-block">
                          <strong style="color: red">{{ $errors->first('nom') }}</strong>
                         </span>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                            <label class="control-label col-sm-3 col-md-3" for="prenom">prenom</label>
                            <div class="col-sm-8 col-md-8">
                                <input class="form-control" id="prenom" type="text" name="prenom" id="prenom" value="{{ old('prenom') }}" placeholder="prenom" required>
                                @if ($errors->has('prenom'))
                                    <span class="help-block">
                          <strong style="color: red">{{ $errors->first('prenom') }}</strong>
                         </span>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-sm-3 col-md-3 control-label" for="email">Email</label>
                            <div class="col-sm-8 col-md-8">
                                <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="email" required >
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                      <strong style="color: red">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!--on affiche cette partie s'il s'agit d'un professeur-->
                        <div id="Professeur" class="user">
                            <div class="row form-group{{ $errors->has('departement') ? ' has-error' : '' }}">
                                <label for="departement" class="col-sm-3 col-md-3 control-label" >dapartement :</label>
                                <div id="departement" class="professeur col-sm-8 col-md-8 ">
                                    <select name="departement_id" class="form-control">
                                        <option>choix du departement</option>
                                        @foreach(App\Departement::all() as $departement)
                                            <option value='{{$departement->id}}'>{{$departement->nom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group{{ $errors->has('grade') ? ' has-error' : '' }}">
                                <label class="col-sm-3 col-md-3 control-label" for="grade">grade</label>
                                <div class=" col-sm-8 col-md-8">
                                    <input class="form-control" id="grade" type="text" name="grade" value="{{ old('grade') }}" placeholder="grade"  >

                                    @if ($errors->has('grade'))
                                        <span class="help-block">
                                  <strong style="color: red">{{ $errors->first('grade') }}</strong>
                                 </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!--fin  -->
                        <div id="Etudiant" class="user">
                            <div class="row form-group{{$errors->has('date_naissance')?'has-error':''}}">
                                <label class="col-sm-3 col-md-3 control-label" for="dateN">Date de naissance</label>
                                <div class="col-sm-8 col-md-8 ">
                                    <input type="date" class="form-control datepicker" name="date_naissance" id="dateN" value="{{old('date_naissance')}}" placeholder="date de naissance">
                                    @if ($errors->has('date_naissance'))
                                        <span class="help-block">
								  <strong style="color: red">{{ $errors->first('date_naissance') }}</strong>
								 </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row form-group{{$errors->has('date_debut')?'has-error':''}}">
                                <label class="col-sm-3 col-md-3 control-label" for="dateD">Date de début des études</label>
                                <div class="col-sm-8 col-md-8">
                                    <input type="date" class="form-control datepicker" name="date_debut" id="dateD" value="{{old('date_dabut')}}" >
                                    @if ($errors->has('date_debut'))
                                        <span class="help-block">
                               <strong style="color: red">{{ $errors->first('date_debut') }}</strong>
							</span>
                                    @endif
                                </div>
                            </div>
                        </div>


                        <div class="row form-group{{$errors->has('password')?'has-error':''}}">
                            <label for=" password" class="control-label col-sm-3 col-md-3">Password</label>
                            <div  class="col-sm-8 col-md-8">
                                <input type="password" class="form-control" name="password" id="password" value="{{old('password')}}" placeholder="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
								 <strong style="color: red">{{ $errors->first('password') }}</strong>
							 </span>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group{{$errors->has('confirmation')?'has-error':''}}">
                            <label  for="confirmation" class="col-sm-3 col-md-3 control-label">Confirmation</label>
                            <div class="col-sm-8 col-md-8 ">
                                <input type="password" class="form-control" name="confirmation" id="confirmation" value="{{old('confirmation')}}" placeholder="confirmation" required >
                                @if ($errors->has('confirmation'))
                                    <span class="help-block">
                              <strong style="color: red">{{ $errors->first('confirmation') }}</strong>
                          </span>
                                @endif
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                            <button class="btn btn-primary" type="submit">Envoyer</button>
                        </div>
                    </div>
                </form>

    </div>
    <!--modal-->
@endsection
@section("script-link")
    <script src="{{asset("assets/js/vue.js")}}"></script>

    <script>
        $(document).ready(function(){
            //alert("1");
            $elt = $('#registrationForm [type=radio]');
            $elt.change(function(){
                if(this.value == "Professeur"){
                    $('#Professeur').slideDown();
                    $('#Etudiant').slideUp();
                }else{
                    $('#Etudiant').slideDown();
                    $('#Professeur').slideUp();
                }
            });
        });
    </script>
@endsection
