@extends('layouts.app')

@section('content')
    <div class="container-md">
        <h2>Aggiungi il tuo progetto</h2>
        <form action="{{ route('adminprojects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mt-4 mb-4">
                <label for="nome_progetto">Nome Progetto</label>
                <input type="text" class="form-control @error('nome_progetto') is-invalid @enderror" id="nome_progetto"
                    name="nome_progetto" placeholder="Nome progetto">
                @error('nome_progetto')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group mb-4">
                <label for="descrizione">Descrizione del progetto</label>
                <input type="text" class="form-control @error('descrizione') is-invalid @enderror" id="descrizione"
                    name="descrizione" placeholder="Scrizione progetto">
                @error('descrizione')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="collaboratori">Collaboratori</label>
                <input type="text" class="form-control @error('collaboratori') is-invalid @enderror" id="collaboratori"
                    name="collaboratori" placeholder=" Eventuali collaboratori">
                <small>Lasciare vuoto nel caso di progetto singolo</small>
                @error('collaboratori')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="autore">Autore del progetto</label>
                <input type="text" class="form-control @error('autore') is-invalid @enderror" id="autore"
                    name="autore" placeholder="Autore">
                @error('autore')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="data_inizio_progetto">Data inizio progetto</label>
                <input type="text" class="form-control @error('data_inizio_progetto') is-invalid @enderror"
                    id="data_inizio_progetto" name="data_inizio_progetto" placeholder="Data di inizio progetto">
                @error('data_inizio_progetto')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="img">Immagine</label>
                <input type="file" class="form-control" id="img" name="img">
            </div>
            <div class="form-group mb-4">
                <label for="category_id">Seleziona la categoria</label>
                <select name="category_id" id="category_id" @error('category_id') is-invalid @enderror>
                    <option value="">Seleziona la categoria</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"{{ $category->id == old('category_id') ? 'selected' : '' }}>
                            {{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="tecnologies" class="form-label">Tecnologie usate : </label>
                <select multiple class="form-select" name="tecnologies[]" id="tecnologies">
                    <option value="">Seleziona le tecnologie usate</option>
                    @forelse ($tecnologies as $tecnology)
                        <option value="{{ $tecnology->id }}">{{ $tecnology->name }}</option>
                    @empty
                        <option value="">Nessuna tecnologia</option>
                    @endforelse

                </select>
            </div>


            <button type="submit" id="mySubmit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
@endsection
