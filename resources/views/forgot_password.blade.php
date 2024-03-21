@include('pages.header')
@if (Request::has('forgot_password_mail_sent') && Request::get('forgot_password_mail_sent') == 'true')
    <div class="pt-4 pb-2">
        <h5 class="card-title text-center pb-0 fs-4">Forgot Password</h5>
    </div>

    <p class="text-center small">If an account exists for <insert email address provided>, you will get an email with
            instructions on resetting your password. If it doesn't arrive, be sure to check your spam folder.</p>
    <div class="col-12 pt-4">
        <p class="small mb-0 text-center">Back to <a href="{{ route('admin.login') }}">Login</a></p>
    </div>
    @include('admin.alert')
@else
    <div class="pt-4 pb-2">
        <h5 class="card-title text-center pb-0 fs-4">Forgot Password</h5>
        <p class="text-center small">Enter your email here to reset password</p>
    </div>
    <form class="row g-3 needs-validation" novalidate method="POST">
        @csrf

        <div class="col-12">
            <label for="yourUsername" class="form-label">Email Address</label>
            <div class="input-group has-validation">
                <input type="email" name="email" placeholder="Email Address" class="form-control"
                    id="verfication_code" required value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary w-100" type="submit">Reset Password</button>
        </div>
        @include('admin.alert')

    </form>
@endif

@include('pages.footer')
