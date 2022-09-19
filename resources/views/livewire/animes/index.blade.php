<div>
    <div class="card mt-5">
        <table class="table table-striped m-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Genre</th>
                    <th>Status</th>
                    <th>Studio</th>
                </tr>
            </thead>
            <tbody>
                @foreach($animes as $anime)
                    <tr>
                        <td>{{ $anime->id }}</td>
                        <td>{{ $anime->name }}</td>
                        <td>{{ $anime->genre }}</td>
                        <td>{{ $anime->status }}</td>
                        <td>{{ $anime->studio }}</td>
                        <td><a href="{{ url('edit', ['anime' => $anime->id]) }}" class="btn btn-primary">Edit</a></td>
                        <td><a href="{{ url('delete', ['anime' => $anime->id]) }}" class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
