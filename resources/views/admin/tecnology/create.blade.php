@extends('layouts.admin')

@section('adminContent')
    <div class="container-md">
        <h2>Aggiungi una nuova tecnologia</h2>
        <form action="{{ route('admintecnologies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-4 mb-4">
                <label for="name">Nome tecnologia</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    placeholder="Nome tecnologia">
                @error('name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror

            </div>



            <button type="submit" id="mySubmit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
@endsection
