<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <div class="card p-4 shadow">
                    <h1 class="fw-bold">Register</h1>
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="mb-2 mt-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username"
                                class="form-control @error('username') border-danger @enderror" value="{{ old('username') }}">
                            @error('username')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control  @error('email') border-danger @enderror" name="email" value="{{ old('username') }}">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control  @error('password') border-danger @enderror" name="password">
                            @error('password')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Sign up</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-layout>