<div>
    <div class="container col-md-6 offset-md-3 mt-3">
        <div class="card">
            <div class="card-header">
                <h3 class="text-danger">Delete Anime?</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <td>{{ $this->anime->name }}</td>
                    </tr>
                    <tr>
                        <th>Studio</th>
                        <td>{{ $this->anime->studio }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center">
                    <button class="btn btn-danger" wire:click="delete">Delete</button>
                    <button class="btn btn-secondary mx-2" wire:click="back">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
