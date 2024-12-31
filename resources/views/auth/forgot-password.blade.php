<x-guest-layout>
    <div class="card">
        <div class="card-header text-center">
            <x-authentication-card-logo />
        </div>

        <div class="card-body">
            <p class="mb-4 text-muted">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </p>

            <!-- Status Message -->
            @session('status')
                <div class="mb-4 font-medium text-sm text-success">
                    {{ $value }}
                </div>
            @endsession

            <!-- Validation Errors -->
            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary ms-4">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
