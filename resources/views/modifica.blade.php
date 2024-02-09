@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/libreria-form.css') }}">
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header btn btn-success" id="show-form">Modifica il libro {{ $book->nome }}</div>

                    <div class="card-body" id="openForm">
                        <!-- Modificato per nascondere il form all'inizio -->
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <!-- label form -->
                        <div class="row">
                            <div class="form-holder">
                                <div class="form-content">
                                    <div class="form-items">
                                        <form class="requires-validation" id="registra-libro" method="POST"
                                              action="/update" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-12">
                                                <input type="hidden" name="id" value="{{ $book->id }}">
                                                <input class="form-control" type="text" name="nome"
                                                       placeholder="Nome del Libro" value="{{ $book->nome }}" required>
                                            </div>

                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="autore"
                                                       placeholder="Autore" value="{{ $book->autore }}" required>
                                            </div>

                                            <div class="col-md-12">
                                                <input class="form-control" type="file" accept="image/*" name="img"
                                                       placeholder="Immagine">
                                            </div>

                                            <div class="form-button mt-3">
                                                <button id="submit" type="submit" class="btn btn-primary">Aggiorna</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END label form -->
@endsection
