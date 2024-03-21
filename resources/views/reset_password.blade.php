@include('pages.header')
    <div class="pt-4 pb-2">
        <h5 class="card-title text-center pb-0 fs-4">Reset Password</h5>
        {{-- <p class="text-center small">Enter your email here to reset password</p> --}}
    </div>
    <form class="row g-3 needs-validation" novalidate autocomplete="off" autocapitalize="off" method="POST">
        @csrf

        <div class="col-12">
            <label for="yourUsername" class="form-label">New Password</label>
            <div class="input-group has-validation">
                <input type="password" name="password" class="form-control"
                    id="password" required value="{{ old('password') }}">
                @error('password')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-12">
            <label for="yourUsername" class="form-label">Confirm New Password</label>
            <div class="input-group has-validation">
                <input type="password" name="password_confirmation" class="form-control"
                    id="password_confirmation" required>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary w-100" type="submit">Reset Password</button>
        </div>
        @include('admin.alert')

    </form>

@include('pages.footer')