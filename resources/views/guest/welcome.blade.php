{{-- @extends('layouts.app')
@section('content')
    <div class="container-fluid mt-3 my_container_welcome">
        <h1 class="my_portfolio_name">Andrea Gallini Portfolio</h1>
        <div class="main_welcome container-xl">
            @foreach ($projects as $project)
                <div class="card my_card_welcome" style="width: 18rem;">
                    <img class="card-img-top"
                        src="@if ($project->img == null) https://via.placeholder.com/150
                    @else
                        {{ asset('storage/' . $project->img) }} @endif"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->nome_progetto }}</h5>
                        <p class="card-text">{{ $project->descrizione }}.</p>
                        <a href="{{ route('register') }}" class="btn btn-primary">Scopri di più</a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection --}}
@extends('layouts.app')
@section('content')
    <div class="container-fluid pt-3 my_container_welcome">
        <h1 class="my_portfolio_name text-white">Andrea Gallini Portfolio</h1>
        <div class="main_welcome container-xl">
            @foreach ($projects as $project)
                <div class="my_card_welcome">
                    <div class="left_card_welcome">
                        <img class="card-img-top"
                            src="@if ($project->img == null) https://via.placeholder.com/150
                    @else
                        {{ asset('storage/' . $project->img) }} @endif"
                            alt="Card image cap">
                    </div>
                    <div class="right_card_welcome">
                        <div class="up_right">
                            <p class="title_card_welcome">
                                {{ $project->nome_progetto }}
                            </p>
                            @if ($project->descrizione == null)
                                <p>Non è stata inserita una descrizione </p>
                            @else
                                <p> Descrizione Progetto : <br>{{ $project->descrizione }}</p>
                            @endif
                        </div>
                        <div class="down_right">
                            <a href="{{ route('register') }}" class="btn  my_btn_welcome">Scopri il progetto</a>

                        </div>

                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
