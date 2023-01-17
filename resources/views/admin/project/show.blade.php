@extends('layouts.admin')
@section('adminContent')
    <div class="container-fluid">
        <h1 class="text-center text-capitalize">{{ $project->nome_progetto }}</h1>
        <div class="head_show">
            <section class="head_show_left">
                @if ($project->category)
                    <p>Categoria : {{ $project->category->name }}</p>
                @else
                    <p>Categoria non attribuita</p>
                @endif

            </section>
            <section class="head_show_center">
                <p>Autore : {{ $project->autore }}</p>
            </section>
            <section class="head_show_right">

                <p> Tecnologie Utilizzate :
                    @if ($project->tecnologies && count($project->tecnologies) > 0)
                        @foreach ($project->tecnologies as $tecnology)
                            <span><a
                                    href="{{ route('admintecnologies.show', $tecnology->slug) }}">{{ $tecnology->name }}</a></span>
                        @endforeach
                    @else
                        <span>0</span>
                    @endif
                </p>

            </section>
        </div>
        <div class="body_show text-center">
            @if ($project->img)
                <img class="mb-3 mt-5 show_img
                " src="{{ asset('storage/' . $project->img) }}">
            @else
                <img class="mb-3 mt-5 show_img"src="{{ asset('/img/not_found_img.jpeg') }}
" alt="">
            @endif
            <p>{{ $project->descrizione }}</p>
            <p> Data inizio progetto : {{ $project->data_inizio_progetto }}</p>
        </div>
        <div class="footer_show text-center">
            <a class="btn btn-primary mx-3" href="https://github.com/AndreaGallini/{{ $project->slug }}" target="_blank">
                Visualizza codice sorgente</a>
            <a class="btn btn-primary mx-3" href="{{ route('adminprojects.edit', $project->slug) }}" target="_blank">
                Modifica il progetto</a>

        </div>
    </div>
@endsection
