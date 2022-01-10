<x-app-layout>
    <div class="container-fluid bg-gray">
        <div class="row height-100">
            <div class="col-md-3 mx-auto my-auto">
                <h1 class="fw-bold text-center login-brand text-primary">Taxev</h1>
                <h2 class="text-center fw-bold">Daftar sekarang</h2>
                <h6 class="text-center">atau <a class="text-decoration-none" href="{{ route('login') }}">masuk ke akun anda</a></h6>
                <form class="card p-5 border-0 shadow-sm mt-4 login-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="name" name="name"
                            class="form-control shadow-none @error('name') is-invalid @enderror" id="email"
                            aria-describedby="emailHelp" value="{{ old('name') }}">
                        @error('email')
                            <div class="text-start invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email"
                            class="form-control shadow-none @error('email') is-invalid @enderror" id="email"
                            aria-describedby="emailHelp" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-start invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password"
                            class="form-control shadow-none @error('password') is-invalid @enderror" id="password">
                        @error('password')
                            <div class="text-start invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="username" name="username"
                            class="form-control shadow-none @error('username') is-invalid @enderror" id="username"
                            aria-describedby="emailHelp" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-start invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="school" class="form-label">School</label>
                        <input type="school" name="school"
                            class="form-control shadow-none @error('school') is-invalid @enderror" id="email"
                            aria-describedby="emailHelp" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-start invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="city" name="city"
                            class="form-control shadow-none @error('city') is-invalid @enderror" id="email"
                            aria-describedby="emailHelp" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-start invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="birth-year" class="form-label">Birth Year</label>
                        <input type="birth-year" name="birthyear"
                            class="form-control shadow-none @error('birth-year') is-invalid @enderror" id="birth-year"
                            aria-describedby="emailHelp" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-start invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary py-2 shadow-none">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>