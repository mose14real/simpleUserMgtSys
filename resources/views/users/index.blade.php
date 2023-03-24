<x-layouts title="Home | Page">

    <div class="container mt-2">

        <x-flash-message />

        <div class="row">
            <div class="text-center">
                <h2>User Management System</h2>
            </div>

            <div class="float-start mb-2">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create User</a>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
                <th>SN</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </thead>
            @foreach ($users as $key => $user)
                <tbody>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tbody>
            @endforeach
        </table>
        <div>{!! $users->links() !!}</div>
    </div>

</x-layouts>
