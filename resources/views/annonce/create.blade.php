@extends("layouts.layout")
@section("content")
        <!--main content start-->
<!-- BASIC FORM ELELEMNTS -->
<div class="col-md-9">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Nouvelle Annonce</h3>
        </div>
        <!-- /.box-header -->

        <form role="form" method="POST" action="{{ url('/annonceForm') }}">
            {{csrf_field()}}
            <div class="box-body">
                <div class="form-group">
                    <input name="titre" class="form-control" placeholder="sujet:">
                </div>
                <div class="form-group">
                        <textarea name="contenu" id="annonceContenu" class="form-control" style="height: 300px">

                        </textarea>
                </div>
                <div class="form-group">
                    <div class="btn btn-default btn-file">
                        <i class="fa fa-paperclip"></i> Attachment
                        <input type="file" name="attachment">
                    </div>
                    <p class="help-block">Max. 32MB</p>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="pull-right">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                    <!--<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i>Envoyer</button> -->
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /. box -->
        </form>
    </div>
</div>

@endsection
@section("script-link")

@endsection