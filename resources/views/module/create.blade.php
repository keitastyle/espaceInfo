@extends("layouts.layout")
@section("navbar")
   @parent
        @endsection
@section("content")
        <!--main content start-->
<div class="col-lg-12">
    <div class="col-md-8">
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
            <div class="row">
                <button class="btn btn-primary pull-right" type="submit" >Envoyer</button>
            </div>
        </form>
    </div>
</div>

@endsection
@section("link")

    @endsection
