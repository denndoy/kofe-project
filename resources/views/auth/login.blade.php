<x-guest-layout>
    <div class="card">
        <div class="card-header text-center">
            <x-authentication-card-logo />
        </div>

        <div class="card-body">
            <!-- Validation Errors -->
            <x-validation-errors class="mb-4" />

            <!-- Status Message -->
            @session('status')
            <div class="mb-4 font-medium text-sm text-success">
                {{ $value }}
            </div>
            @endsession

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                </div>

                <!-- Remember Me -->
                <div class="form-check mb-3">
                    <input id="remember_me" name="remember" type="checkbox" class="form-check-input" />
                    <label for="remember_me" class="form-check-label">{{ __('Remember me') }}</label>
                </div>

                <div class="d-flex justify-content-between">
                    <!-- Forgot Password Link -->
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-decoration-none text-muted">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif
                    <!-- Login Button -->
                    <div>
                        <button type="submit" class="btn btn-primary ms-4">
                            {{ __('Log in') }}
                        </button>
                    </div>
                </div>
                
                <div class="d-flex justify-content-between">
                    <a href="{{ route('register') }}" class="text-decoration-none text-muted">
                        {{ __('Dont have account?') }}
                    </a>
                </div>
                <a href="{{ route('register') }}" class="btn btn-primary">
                    {{ __('Sign Up') }}
                </a>
            </form>
        </div>
    </div>
</x-guest-layout>