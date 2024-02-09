@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/libreria-form.css') }}">
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header btn btn-success" id="show-form">Inserisci un libro</div>

                    <div class="card-body" id="openForm" style="display: none;"> <!-- Modificato per nascondere il form all'inizio -->
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
                    <div>ciao</div>

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
