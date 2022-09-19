<div>
    <div class="container col-md-6 offset-md-3 mt-5">
        <div class="card m-5">
            <div class="card-header">
                <h3>Edit Anime</h3>
            </div>
            <div class="card-body">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="name">
                    <label for="name">Anime Name</label>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="genre">
                    <label for="genre">Genre</label>
                    @error('genre')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <select name="status" class="form-select" wire:model.defer="status">
                        <option hidden="true">-</option>
                        <option selected disabled>-</option>
                        <option value="Completed">Completed</option>
                        <option value="Currently Airing">Currently Airing</option>
                    </select>
                    <label for="status">Status</label>
                    @error('status')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="studio">
                    <label for="studio">Studio</label>
                    @error('studio')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary" type="submit" wire:click="editAnime()">
                        Save Changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
