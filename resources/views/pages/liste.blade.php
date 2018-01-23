@extends('layouts.app')
@section('title') Liste des produits :: @parent @endsection
@section('content')
    <div class="row">
        <div class="page-header">
            <h2>Liste des produits</h2>
        </div>
    </div>
    <div class="row">
    <table class="table">
        <caption>Liste actuel</caption>
        <thead>
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Etat</th>
            <th>code-barre</th>
            <th class="hidden-print"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
        <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->name }}</td>
            <td>{{ $article->sold }}</td>
            <td><img src="{{ $article->getBase64Ean13() }}" alt="{{ $article->barcode }}"/></td>
            <td class="hidden-print"><a href="{{ url()->route('article_edit', ['id' => $article->id]) }}"><i class="glyphicon glyphicon-pencil"></i> Editer</a> <a href="{{ url()->route('article_delete', ['id' => $article->id]) }}" style="color: red"><i class="glyphicon glyphicon-trash"></i> Supprimer</a></td>
        </tr>
        @endforeach

        </tbody>
    </table>
        <a href="{{ url()->route('article_create') }}" class="btn btn-success btn-block right hidden-print">Créer un article</a>
    </div>
@endsection