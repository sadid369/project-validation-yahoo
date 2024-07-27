<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Add User form</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Add New User</h1>
                {{-- @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="alert alert-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif --}}
                <form action="{{ route('addUser') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" value="{{ old('username') }}"
                            class="form-control @error('username') is-invalid @enderror" name="username">
                        <span class="text-danger">
                            @error('username')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" value="{{ old('useremail') }}"
                            class="form-control @error('useremail') is-invalid @enderror" name="useremail">
                        <span class="text-danger">
                            @error('useremail')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" value="{{ old('userpassword') }}"
                            class="form-control @error('userpassword') is-invalid @enderror" name="userpassword">
                        <span class="text-danger">
                            @error('userpassword')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label ">Age</label>
                        <input type="text" value="{{ old('userage') }}"
                            class="form-control @error('userage') is-invalid @enderror" name="userage">
                        <span class="text-danger">
                            @error('userage')
                                {{ $message }}
                            @enderror
                        </span>

                    </div>
                    <div class="mb-3">
                        <label class="form-label ">City</label>
                        <select class="form-control" name="usercity">
                            <option value="Barishal">Barishal</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Khulna">Khulna</option>
                            <option value="Kuakata">Kuakata</option>
                        </select>
                        <span class="text-danger">
                            @error('usercity')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
