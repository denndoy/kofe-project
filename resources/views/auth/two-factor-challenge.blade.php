<x-guest-layout>
    <div class="card">
        <div class="card-header text-center">
            <x-authentication-card-logo />
        </div>

        <div class="card-body" x-data="{ recovery: false }">
            <!-- Info Text -->
            <div class="mb-4 text-sm text-gray-600" x-show="!recovery">
                {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
            </div>

            <div class="mb-4 text-sm text-gray-600" x-cloak x-show="recovery">
                {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
            </div>

            <!-- Validation Errors -->
            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('two-factor.login') }}">
                @csrf

                <!-- Authentication Code -->
                <div class="mb-3" x-show="!recovery">
                    <label for="code" class="form-label">{{ __('Code') }}</label>
                    <input id="code" class="form-control" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                </div>

                <!-- Recovery Code -->
                <div class="mb-3" x-cloak x-show="recovery">
                    <label for="recovery_code" class="form-label">{{ __('Recovery Code') }}</label>
                    <input id="recovery_code" class="form-control" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                </div>

                <!-- Switch Between Recovery and Authentication Code -->
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <!-- Switch to Recovery -->
                    <button type="button" class="btn btn-link text-sm text-gray-600"
                            x-show="!recovery"
                            x-on:click="
                                recovery = true;
                                $nextTick(() => { $refs.recovery_code.focus() })
                            ">
                        {{ __('Use a recovery code') }}
                    </button>

                    <!-- Switch to Authentication Code -->
                    <button type="button" class="btn btn-link text-sm text-gray-600"
                            x-cloak
                            x-show="recovery"
                            x-on:click="
                                recovery = false;
                                $nextTick(() => { $refs.code.focus() })
                            ">
                        {{ __('Use an authentication code') }}
                    </button>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary ms-4">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
