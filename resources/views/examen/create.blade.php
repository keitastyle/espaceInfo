@extends("layouts.dashboard")
@section("title")
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Classes</a></li>
        <li class="active">Création</li>
    </ol>
    @endsection
    @section("content")
            <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
                <div class="col-lg-12 col-lg-pull-2">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Renseigner les champs</h4>
                        <form class="form-horizontal style-form" method="get">
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
                            <div class="row form-group{{ $errors->has('departement') ? ' has-error' : '' }}">
                                <label for="departement" class="col-sm-3 col-md-3 control-label" >dapartement :</label>
                                <div id="departement" class="professeur col-sm-8 col-md-8 ">
                                    <select name="departement_id" class="form-control">
                                        <option>choix du departement</option>
                                        @foreach(App\Departement::all() as $departement)
                                            <option value={{$departement->id}}>{{$departement->nom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <button class="btn btn-theme pull-right" type="submit" style="margin-right:1cm;">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div><!-- col-lg-12-->
            </div><!-- /row -->
            <!-- INPUT MESSAGES -->
        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

@endsection
@section("script-link")
@endsection