@extends('layouts.admin')
@section('adminContent')
    <div class="container mt-5 mb-5 flex my_container_index">
        <a class="btn my_btn_dashboard mb-5 mt-5" href=" {{ route('admincategories.create') }}">Crea una nuova categoria</a>
        @if (session()->has('message'))
            <div class="alert alert-success mb-3 mt-3">
                {{ session()->get('message') }}
            </div>
        @endif
        @foreach ($categories as $category)
            <div class="my_row mb-2 mt-2">
                <section class="left_row"> <a
                        href="{{ route('admincategories.show', $category->slug) }}">{{ $category->name }}</a> </section>
                <section class="right_row">
                    <section class="edit"><a class="btn btn-primary"
                            href="{{ route('admincategories.edit', $category->slug) }}"><i
                                class="fa-regular fa-pen-to-square"></i></a></section>
                    <section class="delete">
                        <form action="{{ route('admincategories.destroy', $category->slug) }}" method="POST">
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
