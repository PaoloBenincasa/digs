<form class="bg-body-tertiary shadow rounded p-5 my-5" wire:submit.prevent="save">
    @if (session()->has('success'))
        <div class="alert alert-success text-center display-2">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="mb-3 col-12 col-md-6">
            <label for="title" class="form-label">Titolo:</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                wire:model.live="title">
            @error('title')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3 col-12 col-md-6">
            <label for="artist" class="form-label">Artista:</label>
            <input type="text" class="form-control @error('artist') is-invalid @enderror" id="artist"
                wire:model.live="artist">
            @error('artist')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-12 col-md-6">
            <label for="year">Anno di Pubblicazione:</label>
            <input type="number" name="year" id="year" class="form-control @error('year') is-invalid @enderror"
                wire:model.live="year" min="1900" max="{{ date('Y') }}">
            @error('year')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3 col-12 col-md-6">
            <label for="price">Prezzo:</label>
            <input type="integer" name="price" id="price"
                class="form-control @error('price') is-invalid @enderror" wire:model.live="price" step="0.01"
                min="0.01">
            @error('price')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>


    </div>
    <div class="row">
        <div class="mb-3 col-12 col-md-6">
            <label for="format_id">Formato:</label>
            <select name="format_id" id="format_id" class="form-control @error('format') is-invalid @enderror"
                wire:model.live="format_id">
                <option label>scegli il formato</option>
                @foreach ($formats as $format)
                    <option value="{{ $format->id }}">{{ $format->name }}</option>
                @endforeach
            </select>
            @error('format')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3 col-12 col-md-6">
            <label for="label">Etichetta Discografica:</label>
            <input type="text" name="label" id="label"
                class="form-control @error('label') is-invalid @enderror" wire:model.live="label">
            @error('label')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione:</label>
        <textarea id="description" class="form-control @error('description') is-invalid @enderror" wire:model.live="description"
            cols="25" rows="5"></textarea>
        @error('description')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="genres">Generi:</label>
        <select name="genres[]" id="genres" class="form-control @error('genres') is-invalid @enderror"
            wire:model.live="genres" multiple>
            @foreach ($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
            @endforeach
        </select>
        @error('genres')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>
    <button type="submit" class="btn btn-dark">Inserisci il tuo disco</button>
</form>
