@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/libreria-form.css') }}">
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header btn btn-success" id="show-form">Inserisci un libro</div>

                    <div class="card-body" id="openForm" style="display: none;">
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
                                        <h3 class="">Registra un libro! </h3>
                                        <p>Inserisci il tuo libro preferito!.</p>
                                        @include('components.form-libro')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END label form -->

                    </div>
                    <div>
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="text-center d-flex align-items-start flex-wrap" style="margin-right: 0; margin-left: 0;">
                            @foreach ($books as $book)
                                <div class="col-md-4 m-2">
                                    <div class="card mb-4">
                                        <img src="{{ asset('img/' . $book->img) }}"  class="card-img-top"
                                            alt="{{ $book->nome }}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $book->nome }}</h5>
                                            <p class="card-text">Autore: {{ $book->autore }}</p>
                                            <p> <a class="btn btn-danger" href="/elimina/{{$book->id}}">Elimina</a> <a class="btn btn-secondary" href="/modifica/{{$book->id}}"> Modifica </a></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {

        $('#show-form').click(function() {
            $('#openForm').toggle();
        });
    });
</script>
