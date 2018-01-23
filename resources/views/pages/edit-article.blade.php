@extends('layouts.app')
@section('title') Edition :: @parent @endsection
@section('content')
    <div class="row">
        <div class="page-header">
            <h2>Gestion d'un article</h2>
        </div>
    </div>
    <div class="row">
        <form method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name" class="control-label">Nom</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nom de l'article" value="{{ $article->name or '' }}">
            </div>

            <div class="form-group">
                <label for="sold" class="control-label">Quantité</label>
                <input type="number" class="form-control" id="sold" name="sold" placeholder="0" value="{{ $article->sold or '0' }}">
            </div>

            <div class="form-group">
                <label for="barcode" class="control-label">Code barre</label>
                <input type="text" class="form-control" id="barcode" name="barcode" placeholder="978020137962" value="{{ $article->barcode or '' }}">
            </div>


            <div class="form-group"> <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Valider !</button>
            </div>

        </form>
    </div>
@endsection