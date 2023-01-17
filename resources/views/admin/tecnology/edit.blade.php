@extends('layouts.admin')

@section('adminContent')
    <div class="container-md">
        <h2>Modifica tecnologia</h2>
        <form action="{{ route('admintecnologies.update', $tecnology->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group mt-4 mb-4">
                <label for="name">Nome tecnologia</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    placeholder="Nome tecnologia" value="{{ old('name', $tecnology->name) }}">
                @error('name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror

            </div>



            <button type="submit" id="mySubmit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
@endsection
