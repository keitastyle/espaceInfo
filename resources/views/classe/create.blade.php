@extends("layouts.layout")
<style>
    .form-control{
        margin-top: 2px;
        margin-bottom: 2px;
    }

</style>
@section("title")
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Classes</a></li>
        <li class="active">Création</li>
    </ol>
        @endsection
@section("content")
        <!--main content start-->

    <section class="">
          <!-- BASIC FORM ELELEMNTS -->
            <div class="col-lg-8 col-lg-push-1">
                <div class="form-panel">
                    <form class="form-horizontal style-form" method="get">
                        <div style="padding-top: 1cm;" class="row form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                            <label  class="control-label " for="nom">Nom</label>
                            <div class=" ">
                                <input class="form-control" id="nom" type="text" name="nom" value="{{ old('nom') }}" placeholder="nom" required>

                                @if ($errors->has('nom'))
                                    <span class="help-block">
                                           <strong style="color: red">{{ $errors->first('nom') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('departement') ? ' has-error' : '' }}">
                            <label for="departement" class="control-label" >dapartement </label>
                                <select name="departement_id" class="form-control">
                                    <option>choix du departement</option>
                                    @foreach(App\Departement::all() as $departement)
                                        <option value={{$departement->id}}>{{$departement->nom}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="row">
                        <button class="btn btn-primary pull-right" type="submit" style="margin-right:1cm;">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div><!-- col-lg-12-->
        <!-- INPUT MESSAGES -->
    </section><! --/wrapper -->


@endsection
@section("script-link")
@endsection