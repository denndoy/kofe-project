<x-guest-layout>
    <div class="card">
        <div class="card-header text-center">
            <x-authentication-card-logo />
        </div>

        <div class="card-body">
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-success">
                    {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
                </div>
            @endif

            <!-- Form to Resend Verification Email -->
            <div class="d-flex justify-between mt-4">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <button type="submit" class="btn btn-primary">
                        {{ __('Resend Verification Email') }}
                    </button>
                </form>

                <!-- Profile Edit and Logout Links -->
                <div>
                    <a href="{{ route('profile.show') }}" class="btn btn-link text-sm">
                        {{ __('Edit Profile') }}
                    </a>

                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-link text-sm ms-2">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
