@extends('layouts.admin')
@section('adminContent')
    <div class="container mt-5 mb-5 flex my_container_index">
        <div class="my_row">
            <div class="left_row">
                <h3>{{ $tecnology->name }}</h3>
            </div>

            <div class="left_row_header">
                <h3>Modifica</h3>
            </div>
        </div>
        @foreach ($tecnology->projects as $project)
            <div class="my_row mb-2 mt-2">
                <section class="left_row"> <a class=""
                        href="{{ route('adminprojects.show', $project->slug) }}">{{ $project->nome_progetto }}</a>
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
