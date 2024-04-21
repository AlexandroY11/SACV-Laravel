<section class="space-y-4">
    <header>
        <h2 class="text-lg font-weight-bold text-dark">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-muted">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button class="btn btn-danger" 
            onclick="event.preventDefault(); document.getElementById('delete-account-form').submit();">
        {{ __('Delete Account') }}
    </button>

    <form id="delete-account-form" method="post" action="{{ route('profile.destroy') }}" class="d-none">
        @csrf
        @method('delete')

        <h2 class="text-lg font-weight-bold text-dark">
            {{ __('Are you sure you want to delete your account?') }}
        </h2>

        <p class="mt-1 text-sm text-muted">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
        </p>

        <div class="mt-4">
            <label for="password" class="sr-only">{{ __('Password') }}</label>

            <input id="password"
                   name="password"
                   type="password"
                   class="form-control"
                   placeholder="{{ __('Password') }}"
                   required
            />

            @error('password')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mt-4 d-flex justify-content-end">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                {{ __('Cancel') }}
            </button>

            <button type="submit" class="btn btn-danger ms-3">
                {{ __('Delete Account') }}
            </button>
        </div>
    </form>
</section>
