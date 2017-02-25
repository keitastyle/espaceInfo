@extends('layouts.loginLayout')

@section('content')
    <style>
       #remember{
           padding-left: 3cm;
           margin-top: 30%;
           padding-bottom: 1%;

       }
    </style>

    <div id="login-page">
        <div class="container">
            <form class="form-login" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                @section('titre')
                    Connexion
                @endsection
                @section('active')
                    Connexion
                @endsection

                <div class="login-wrap">
                    <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="col-sm-3 col-md-3 control-label" for="email">Email</label>
                        <div class="col-sm-7 col-md-7">
                            <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="email" required >
                            @if ($errors->has('email'))
                                <span class="help-block">
                                      <strong style="color: red">{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div><br>
                    <div class="row form-group{{$errors->has('password')?'has-error':''}}">
                        <label for=" password" class="control-label col-sm-3 col-md-3">Password</label>
                        <div  class="col-sm-7 col-md-7">
                            <input type="password" class="form-control" name="password" id="password" value="{{old('password')}}" placeholder="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
								 <strong style="color: red">{{ $errors->first('password') }}</strong>
							 </span>
                            @endif
                        </div>
                    </div>
                      <label >
		                <span  >
		                    <input id="remember" type="checkbox" name="remember"> Remember me
		                </span>
                    </label>
                    <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
		                </span>
                    </label>
                    <div  class="col-sm-7 col-md-7 col-md-push-8">
                    <button class="btn btn-primary" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
                    </div><br>
                    <hr><br>
                    <div class="registration">
                        Don't have an account yet?<br>
                        <a data-toggle="modal" href="{{url('/register')}}">
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

@endsection

