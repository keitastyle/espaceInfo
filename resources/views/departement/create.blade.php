@extends("layouts.layout")
@section("title")
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Departement</a></li>
        <li class="active">Création</li>
    </ol>
    @endsection
    @section("content")
            <!--main content start-->
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                <div class="col-lg-12 col-lg-pull-2">
                    <div class="form-panel">
                        <form class="form-horizontal style-form" method="POST" action="{{url('/departementcreation')}}" role="form">
                            {{ csrf_field() }}
                            <div style="padding-top: 1cm;" class="row form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
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
                            <div class="row">
                                <button id="envoi" class="btn btn-primary pull-right" type="submit">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div><!-- col-lg-12-->
            </div><!-- /row -->

@endsection
@section("script-link")
@endsection