<form class="bg-body-tertiary shadow rounded p-5 my-5">
    <div class="mb-3">
        <label for="title" class="form-label">Titolo:</label>
        <input type="text" class="form-control" id="title" wire:model="title">
    </div>
    <div class="mb-3">
        <label for="artist" class="form-label">Artist:</label>
        <input type="text" class="form-control" id="artist" wire:model="artist">
    </div>
    <div class="mb-3">
        <label for="year">Anno di Pubblicazione:</label>
        <input type="number" name="year" id="year" class="form-control" wire:model="year" min="1900" max="{{ date('Y') }}">
    </div>
    <div class="mb-3">
        <label for="price">Prezzo:</label>
        <input type="number" name="price" id="price" class="form-control" wire:model="price" step="0.01" min="0.01">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione:</label>
        <textarea id="description" class="form-control" wire:model="description" cols="30" rows="10"></textarea>
    </div>
    <div class="mb-3">
        <label for="format_id">Formato:</label>
        <select name="format_id" id="format_id" class="form-control" wire:model="format_id">
            @foreach($formats as $format)
                <option value="{{ $format->id }}">{{ $format->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="label">Etichetta Discografica:</label>
        <input type="text" name="label" id="label" class="form-control" wire:model="label">
    </div>
    <div class="mb-3">
        <label for="genres">Generi:</label>
        <select name="genres[]" id="genres" class="form-control" wire:model="genres" multiple>
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-dark">Inserisci il tuo disco</button>
</form>
