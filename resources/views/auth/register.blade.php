<x-guest-layout>
    <div class="card">
        <div class="card-header text-center">
            <x-authentication-card-logo />
        </div>

        <div class="card-body">
            <!-- Validation Errors -->
            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('Name') }}</label>
                    <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>

                <!-- Phone -->
                <div class="mb-3">
                    <label for="phone" class="form-label">{{ __('Phone') }}</label>
                    <input id="phone" class="form-control" type="text" name="phone" :value="old('phone')" required autocomplete="phone" />
                </div>

                <!-- Address -->
                <div class="mb-3">
                    <label for="address" class="form-label">{{ __('Address') }}</label>
                    <input id="address" class="form-control" type="text" name="address" :value="old('address')" required autocomplete="address" />
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <!-- Terms and Privacy Policy -->
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mb-3">
                        <div class="form-check">
                            <input name="terms" id="terms" type="checkbox" class="form-check-input" required />
                            <label class="form-check-label" for="terms">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-muted">'.__('Terms of Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-muted">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </label>
                        </div>
                    </div>
                @endif

                <!-- Actions -->
                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('login') }}" class="text-decoration-none text-muted">
                        {{ __('Already registered?') }}
                    </a>

                    <button type="submit" class="btn btn-primary ms-4">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
