@extends('layouts.admin')

@section('adminContent')
    <div class="container-md">
        <form action="{{ route('admincategories.update', $category->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mt-4 mb-4">
                <label for="name">Nome Categoria</label>
                <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name"
                    aria-describedby="emailHelp" placeholder="Nome progetto" value="{{ old('name', $category->name) }}">
                @error('name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
@endsection
