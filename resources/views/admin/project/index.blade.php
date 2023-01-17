@extends('layouts.admin')
@section('adminContent')
    <div class="container flex my_container_index">
        <a class="btn my_btn_dashboard mb-5 mt-5" href=" {{ route('adminprojects.create') }}">Crea un nuovo post</a>
        @if (session()->has('message'))
            <div class="alert alert-success mb-3 mt-3">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="my_row">
            <div class="left_row">
                <h3>Nome Progetto</h3>
            </div>
            <div class="center_row">
                <h3>Categoria</h3>
            </div>
            <div class="left_row_header">
                <h3>Modifica</h3>
            </div>
        </div>
        @foreach ($projects as $project)
            <div class="my_row mb-2 mt-2">
                <section class="left_row"> <a
                        href="{{ route('adminprojects.show', $project->slug) }}">{{ $project->nome_progetto }}</a>
                </section>
                <section class="center_row">
                    <p>{{ $project->category ? $project->category->name : 'Senza categoria' }}</p>
                </section>
                <section class="right_row">
                    <section class="edit"><a class="btn btn-primary"
                            href="{{ route('adminprojects.edit', $project->slug) }}"><i
                                class="fa-regular fa-pen-to-square"></i></a></section>
                    <section class="delete">
                        <form action="{{ route('adminprojects.destroy', $project->slug) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </section>
                </section>
            </div>
        @endforeach

    </div>
@endsection
