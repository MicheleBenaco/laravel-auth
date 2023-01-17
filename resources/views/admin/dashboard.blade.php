@extends('layouts.admin')

@section('adminContent')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body">


                        {{ __('You are logged in!') }}

                    </div>
                </div>
            </div>
        </div>
        <div class="container">

        </div>

    </div>
    <div class="projects_dashboard mx-5 mt-3 text-center">
        <h2>Benvenuto {{ Auth::user()->name }}</h2>

        <a class="btn my_btn_dashboard mb-5 mt-5" href=" {{ route('adminprojects.create') }}">Crea un nuovo post</a>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-4 my_col background_card">
                <div class="col_head">
                    Numero progetti pubblicati
                </div>
                <div class="col_body">
                    {{ $last_project }}
                </div>
            </div>
            <div class="col-2">

            </div>
            <div class="col-4 my_col background_card">
                <div class="col_head">
                    Numero categorie presenti
                </div>
                <div class="col_body">
                    {{ $numerOfCategories }}
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
