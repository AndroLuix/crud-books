@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Benvenuto') }}, {{Auth()->user()->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   Hai effettuato l'accesso, visualizza la <a href="/libreria" > libreria </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
