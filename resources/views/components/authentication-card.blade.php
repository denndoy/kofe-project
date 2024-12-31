<div class="min-vh-100 d-flex flex-column justify-content-center align-items-center pt-6 bg-light">
    <div class="text-center mb-4">
        {{ $logo }}
    </div>

    <div class="w-100" style="max-width: 30rem;">
        <div class="card shadow-sm">
            <div class="card-body">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
