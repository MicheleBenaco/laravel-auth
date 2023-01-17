@extends('layouts.admin')

@section('adminContent')
    <div class="container-md">
        <form action="{{ route('adminprojects.update', $project->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mt-4 mb-4">
                <label for="nome_progetto">Nome Progetto</label>
                <input type="text" class="form-control  @error('nome_progetto') is-invalid @enderror" id="nome_progetto"
                    name="nome_progetto" aria-describedby="emailHelp" placeholder="Nome progetto"
                    value="{{ old('nome_progetto', $project->nome_progetto) }}">
                @error('nome_progetto')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group mb-4">
                <label for="descrizione">Descrizione del progetto</label>
                <input type="text" class="form-control  @error('descrizione') is-invalid @enderror" id="descrizione"
                    name="descrizione"
                    placeholder="Scrizione progetto"value="{{ old('descrizione', $project->descrizione) }}">
                @error('descrizione')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="collaboratori">Collaboratori</label>
                <input type="text" class="form-control  @error('collaboratori') is-invalid @enderror" id="collaboratori"
                    name="collaboratori" placeholder=" Eventuali collaboratori"
                    value="{{ old('collaboratori', $project->collaboratori) }}">
                <small>Lasciare vuoto nel caso di progetto singolo</small>
                @error('collaboratori')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="autore">Autore del progetto</label>
                <input type="text" class="form-control  @error('autore') is-invalid @enderror" id="autore"
                    name="autore" placeholder="Autore" value="{{ old('autore', $project->autore) }}">
                @error('autore')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-4">
                <label for="data_inizio_progetto">Data inizio progetto</label>
                <input type="text" class="form-control  @error('data_inizio_progetto') is-invalid @enderror"
                    id="data_inizio_progetto" name="data_inizio_progetto" placeholder="Data di inizio progetto"
                    value="{{ old('data_inizio_progetto', $project->data_inizio_progetto) }}">
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
                    <option value="">Tecnologie Utilizzate : </option>
                    @forelse ($tecnologies as $tecnology)
                        @if (old('tecnologies[]') != null)
                            <option value="{{ $tecnology->id }}"
                                {{ in_array($tecnology->id, old('tecnologies[]')) ? 'selected' : '' }}>
                                {{ $tecnology->name }}</option>
                        @else
                            <option value="{{ $tecnology->id }}"
                                {{ $project->tecnologies->contains($tecnology->id) ? 'selected' : '' }}>
                                {{ $tecnology->name }}</option>
                        @endif
                    @empty
                        <option value="">No tecnology</option>
                    @endforelse

                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
@endsection
