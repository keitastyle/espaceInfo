@extends('layouts.dashboard')

@section('content')

    <div id="login-page">
        <div class="container">

            <form class="form-login" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <h2 class="form-login-heading">sign in now</h2>
                <div class="login-wrap">
                    <input type="text" class="form-control" placeholder="User ID" autofocus>
                    <br>
                    <input type="password" class="form-control" placeholder="Password">
                    <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

		                </span>
                    </label>
                    <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
                    <hr>

                    <div class="login-social-link centered">
                        <p>or you can sign in via your social network</p>
                        <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
                        <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
                    </div>
                    <div class="registration">
                        Don't have an account yet?<br/>
                        <a data-toggle="modal" href="#inscription">
                            Create an account
                        </a>
                    </div>

                </div>

            </form>


        </div>
    </div>

    <!-- reset password Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" name="email" value="{{ old('email') }}" autocomplete="off" class="form-control placeholder-no-fix" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                        <button class="btn btn-theme" type="button">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal -->
    <!--inscription modal-->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="inscription" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('register') }}" role="form" class="">
                    {{ csrf_field() }}

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Inscription</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                                <label  class="control-label" for="nom">Nom</label>
                                <div class=" col-sm-6 col-md-6">
                                    <input class="form-control" id="nom" type="text" name="nom" value="{{ old('nom') }}" placeholder="nom" required>

                                    @if ($errors->has('nom'))
                                        <span class="help-block">
                          <strong style="color: red">{{ $errors->first('nom') }}</strong>
                         </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                                <label class="control-label" for="prenom">prenom</label>
                                <div class="col-sm-6 col-md-6">
                                    <input class="form-control" id="prenom" type="text" name="prenom" id="prenom" value="{{ old('prenom') }}" placeholder="prenom" required>
                                    @if ($errors->has('nom'))
                                        <span class="help-block">
                          <strong style="color: red">{{ $errors->first('nom') }}</strong>
                         </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="control-label" for="email">Email</label>
                                <div class="col-sm-6 col-md-6">
                                    <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="email" required >
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                      <strong style="color: red">{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label class="control-label" for="phone">phone</label>
                                <div class=" col-sm-6 col-md-6">
                                    <input class="form-control" id="phone" type="tel" name="prenom" id="phone" value="{{ old('phone') }}" placeholder="phone" required>
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                  <strong style="color: red">{{ $errors->first('phone') }}</strong>
                                 </span>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <!--on affiche cette partie s'il s'agit d'un professeur-->
                            <div class="form-group{{ $errors->has('departement') ? ' has-error' : '' }}">
                                <label class="control-label" >dapartement :</label>
                                <div class="professeur col-sm-6 col-md-6 ">
                                    <select name="dapartement" class="form-control">
                                        <option value='{{departement}}'>{{old('dapartement')}}</option>
                                        <option value="genieCivil">Génie Civil</option>
                                        <option value="genieElectrique">Génie Electrique</option>
                                        <option value="genieInfo">Génie info</option>
                                        <option value="genieMineral">Génie Minéral</option>
                                        <option value="genieProcede">Génie Procédés</option>
                                        <option value="MIS">MIS</option>
                                        <option value="RT">RT</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group{{ $errors->has('grade') ? ' has-error' : '' }}">
                                <label class="control-label" for="grade">grade</label>
                                <div class=" col-sm-6 col-md-6">
                                    <input class="form-control" id="grade" type="text" name="grade" value="{{ old('grade') }}" placeholder="grade" required >

                                    @if ($errors->has('grade'))
                                        <span class="help-block">
                                  <strong style="color: red">{{ $errors->first('grade') }}</strong>
                                 </span>
                                    @endif
                                </div>
                            </div>

                            <!--fin  -->
                        </div>
                        <div class = "row">
                            <div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                                <label for="photo" class="control-label">Photo de profile</label>
                                <div id="photo" class="col-sm-5 col-md-5 ">
                                    <div class="col-sm-5 col-md-5 btn">
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input name="photo" class="form-control file-path validate" type="text" value="{{'photo'}}" placeholder="photo" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group{{$errors->has('date_naissance')?'has-error':''}}">
                                <label class="control-label" for="dateN">Date de naissance</label>
                                <div class="col-sm-6 col-md-6 ">
                                    <input type="date" class="form-control datepicker" name="date_naissance" id="dateN" value="{{old('date_naissance')}}" placeholder="date de naissance" required>
                                    @if ($errors->has('date_naissance'))
                                        <span class="help-block">
								  <strong style="color: red">{{ $errors->first('date_naissance') }}</strong>
								 </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{$errors->has('date_debut')?'has-error':''}}">
                                <label class="control-label" for="dateD">Date de début des études</label>
                                <div class="col-sm-6 col-md-6">
                                    <input type="date" class="form-control datepicker" name="date_debut" id="dateD" value="{{old('date_dabut')}}" required>
                                    @if ($errors->has('date_debut'))
                                        <span class="help-block">
                               <strong style="color: red">{{ $errors->first('date_debut') }}</strong>
							</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 form-group{{$errors->has('password')?'has-error':''}}">
                                <label for="password" class="control-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password" value="{{old('password')}}" placeholder="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
								 <strong style="color: red">{{ $errors->first('password') }}</strong>
							 </span>
                                @endif
                            </div>
                            <div class=" form-group{{$errors->has('confirmation')?'has-error':''}}">
                                <label  for="confirmation" class="control-label">Confirmation</label>
                                <div class="col-sm-6 col-md-6 ">
                                    <input type="password" class="form-control" name="confirmation" id="confirmation" value="{{old('confirmation')}}" placeholder="confirmation" required >
                                    @if ($errors->has('confirmation'))
                                        <span class="help-block">
                              <strong style="color: red">{{ $errors->first('confirmation') }}</strong>
                          </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                        <button class="btn btn-theme" type="button">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
