<x-layouts title="Create User Page">

    <div class="container mt-2">

        <x-flash-message />

        <div class="col-md-4 mx-auto">

            <div class="text-center mt-6 mb-6">
                <h2>Add User</h2>
            </div>
            <div class="float-end mb-3">
                <a class="btn btn-primary" href="{{ route('users.index') }}">Back</a>
            </div>

            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="form-group col-md-12">
                    <label class="form-label mt-3">Name</label>
                    <input type="text" class="form-control" placeholder="John Doe" name="name"
                        value="{{ old('name') }}" required>
                </div>

                <div class="form-group col-md-12">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="example@mail.com" name="email"
                        value="{{ old('email') }}" required>
                </div>

                <div class="form-group col-md-12">
                    <label class="form-label">Phone</label>
                    <input type="text" class="form-control" placeholder="08123456789" name="phone"
                        value="{{ old('phone') }}" required>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>

            </form>
        </div>
    </div>
</x-layouts>
