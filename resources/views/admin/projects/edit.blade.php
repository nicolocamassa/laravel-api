@extends('layouts.admin')

@section('content')
    
    <form action="{{ route('admin.projects.update', $project->id) }}" method="post" enctype="multipart/form-data" class="mx-auto p-5">
        @csrf
        @method('PUT')

        <h1 class="fw-bold text-white mb-5">Modify</h1>

        {{-- TITOLO --}}
        <div class="mb-3">
            <label for="title" class="form-label text-white">Title</label>
            <input type="text" class="form-control personal-form @error('title') is-invalid @enderror" id="text" name="title" value="{{ $project->title }}">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- DESCRIZIONE --}}
        <div class="mb-3">
            <label for="description" class="form-label text-white">Description</label>
            <textarea class="form-control personal-form @error('description') is-invalid @enderror" id="description" rows="3" name="description">{{ $project->description }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- IMMAGINE --}}
        <div class="mb-3">
            <label for="image" class="form-label text-white">Image</label>
            <input type="file" class="form-control personal-form @error('image') is-invalid @enderror" id="exampleInputPassword1" name="image">
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- DATA --}}
        <div class="mb-3">
            <label for="date" class="form-label text-white">Date</label>
            <input type="date" class="form-control personal-form @error('date') is-invalid @enderror" id="date" name="date" value="{{ $project->date }}">
            @error('date')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- LINGUA --}}
        <div class="mb-3">
            <label for="language" class="form-label text-white">Language</label>
            <select class="form-select personal-form @error('language') is-invalid @enderror" name="language">
                <option value="Italiano" {{ $project->language == 'Italiano' ? 'selected' : '' }}>Italiano</option>
                <option value="Inglese" {{ $project->language == 'Inglese' ? 'selected' : '' }}>Inglese</option>
                <option value="Spagnolo" {{ $project->language == 'Spagnolo' ? 'selected' : '' }}>Spagnolo</option>
                <option value="Francese" {{ $project->language == 'Francese' ? 'selected' : '' }}>Francese</option>
                <option value="Tedesco" {{ $project->language == 'Tedesco' ? 'selected' : '' }}>Tedesco</option>
            </select>
            @error('language')
              <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- TECNOLOGIE --}}
        <div class="mb-3">
            <div for="technologies" class="form-label text-white">Technologies</div>
            
                @foreach($technologies as $technology)
                <div class="form-check-inline">
                    <div>
                        <input class="form-check-input" name="technology[]" value="{{ $technology->id }}" type="checkbox" id="technology">
                        <label class="form-check-label text-white" for="technology">
                            {{ $technology->technology }}
                        </label>
                    </div>
                </div>
                @endforeach
            
            @error('language')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- TIPO --}}
        <div class="mb-3">
            <div class="mb-3">
                <label for="type_id" class="form-label text-white">Type</label>
                <select class="form-select personal-form @error('type_id') is-invalid @enderror" name="type_id" id="type_id">
                    <option value="">Type</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" {{ $project->type_id == $type->id ? 'selected' : '' }}>{{ $type->type_name }}</option>
                    @endforeach
                </select>
                @error('type_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- STATO --}}
        <div class="mb-3">
            <div class="mb-3">
                <label for="status" class="form-label text-white">Status</label>
                <select class="form-select personal-form @error('status') is-invalid @enderror" name="status">
                    <option value="1" {{ $project->status == 'Iniziale' ? 'selected' : '' }}>Iniziale</option>
                    <option value="2" {{ $project->status == 'In corso' ? 'selected' : '' }}>In corso</option>
                    <option value="3" {{ $project->status == 'Completato' ? 'selected' : '' }}>Completato</option>
                </select>
                @error('status')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- BOTTONE CONFERMA --}}
        <button type="submit" class="btn purple-btn">Modify</button>

    </form>
@endsection
