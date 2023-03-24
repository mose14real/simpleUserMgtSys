<x-layouts title="Edit | Page">

    <div class="container mt-2">

        <x-flash-message />

        <div class="col-md-4 mx-auto flex
        justify-content-center">

            <div class="text-center mt-6 mb-6">
                <h2>Edit User</h2>
            </div>
            <div class="float-end mb-3">
                <a class="btn btn-primary" href="{{ route('users.index') }}">Back</a>
            </div>

            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="form-group col-md-12">
                    <label class="form-label mt-3">Name</label>
                    <input type="text" class="form-control"name="name" value="{{ $user->name }}" required>
                </div>

                <div class="form-group col-md-12">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                </div>

                <div class="form-group col-md-12">
                    <label class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{ $user->phone }}" required>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>

            </form>
        </div>

    </div>

</x-layouts>
