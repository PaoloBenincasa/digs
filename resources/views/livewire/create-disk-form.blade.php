<form class="bg-body-tertiary shadow rounded p-5 my-5">
    <div class="mb-3">
        <label for="title" class="form-label">Titolo:</label>
        <input type="text" class="form-control" id="title" wire:model="title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione:</label>
        <textarea id="description" class="form-control" wire:model="description" cols="30" rows="10"></textarea>
    </div>
</form>
