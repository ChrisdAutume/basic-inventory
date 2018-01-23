@extends('layouts.app')
@section('title') Utilisation :: @parent @endsection
@section('content')
    <div class="jumbotron text-center">
        <h1>Scanner l'article</h1>
        <form>
            <div class="col-md-6 col-md-offset-3 ">
                <div class="input-group input-group-lg">
                    <input class="form-control" placeholder="Code barre" type="text">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
                </div>
            </div>
        </form>
    </div>
@endsection