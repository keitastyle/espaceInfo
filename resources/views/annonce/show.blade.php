@extends("layouts.layout")

@section("title")
    <ol class="breadcrumb">
        <li><a href="{{ url('/') }}">Classes</a></li>
        <li class="active">Création</li>
    </ol>
@endsection
@section("content")
    <div class="">
        <div class="col-md-8">
            <div class="alert" role="alert">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Card title</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p id="examView" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#examView" class="col-lg-push-8 card-link" style="color: #0000cc;">voir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section("script-link")
@endsection