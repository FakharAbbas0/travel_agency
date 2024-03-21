@include('pages.header')

<div class="pt-4 pb-2">
    <h5 class="card-title text-center pb-0 fs-4">Verify your Email</h5>
    <p class="text-center small">Verify your email by providing the code that has just been sent.</p>
</div>

<form class="row g-3 needs-validation" novalidate method="POST">
    @csrf

    <div class="col-12">
        <label for="yourUsername" class="form-label">Verfication Code</label>
        <div class="input-group has-validation">
            <input type="text" name="verfication_code" placeholder="Verfication Code" class="form-control" id="verfication_code" required
                value="{{ old('verfication_code') }}">
                @error('verfication_code')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
        </div>
    </div>

    <div class="col-12">
        <button class="btn btn-primary w-100" type="submit">Verify Email</button>
    </div>
    <div class="col-12">
        <p class="small mb-0">Not Received a code? <a href="{{ route('verfiy_email') }}?send=true">Resend</a></p>
    </div>
    @include('admin.alert')
</form>
@include('pages.footer')
