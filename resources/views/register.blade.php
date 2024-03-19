@include('pages.header')

<div class="pt-4 pb-2">
    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
</div>

<form class="row g-3 needs-validation" novalidate action="{{ route('submit_register') }}" method="POST">
    @csrf
    <div class="col-12">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" name="name" class="form-control" id="name" required>
        <div class="invalid-feedback">Please, enter first name!</div>
    </div>

    <div class="col-12">
        <label for="yourEmail" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="yourEmail" required>
        <div class="invalid-feedback">Please enter a valid Email adddress!</div>
    </div>

    <div class="col-12">
        <label for="yourPassword" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="yourPassword" required>
        <div class="invalid-feedback">Please enter your password!</div>
    </div>

    <div class="col-12">
        <label for="yourPasswordConfirm" class="form-label">Confirm Password</label>
        <input type="password" name="password" class="form-control" id="yourPasswordConfirm" required>
        <div class="invalid-feedback">Please confirm your password!</div>
    </div>

    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
            <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and
                    conditions</a></label>
            <div class="invalid-feedback">You must agree before submitting.</div>
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary w-100" type="submit">Let's Get Started</button>
    </div>
    <div class="col-12">
        <p class="small mb-0">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
    </div>
</form>
@include('pages.footer')
