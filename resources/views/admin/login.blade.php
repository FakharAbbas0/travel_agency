@include('pages.header')

<div class="pt-4 pb-2">
    <h5 class="card-title text-center pb-0 fs-4">Sign In</h5>
    <p class="text-center small">Sign in and start creating quotes</p>
</div>

<form class="row g-3 needs-validation" novalidate action="{{ route('admin.authenticate') }}" method="POST">
    @csrf

    <div class="col-12">
        <label for="yourUsername" class="form-label">Username</label>
        <div class="input-group has-validation">
            <input type="text" name="email" placeholder="Enter Username" class="form-control" id="yourUsername" required
                value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-12">
        <label for="yourPassword" class="form-label">Password</label>
        <input type="password" name="password" placeholder="Enter Password" class="form-control" id="yourPassword" required>
        @error('password')
        <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12">
        <button class="btn btn-primary w-100" type="submit">Login</button>
    </div>
    <div class="col-12">
        <p class="small mb-0">Don't have account? <a href="{{ route('register') }}">Create an account</a></p>
    </div>
    @include('admin.alert')
</form>
@include('pages.footer')
