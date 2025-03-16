@extends('head')
<style>
    body {
        background-color: #12141b;
    }
      /* Adjusting input fields for better fit */
      .form-input {
        width: 100%; /* Full width */
        padding: 12px 16px; /* Adjust padding for better appearance */
        font-size: 1rem; /* Make the text readable */
        border: 1px solid #ccc; /* Add border for better visibility */
        border-radius: 8px; /* Smooth borders */
    }

    /* Adjust the select input (gender) to also stretch to full width */
    select.form-input {
        width: 100%;
        padding: 12px 16px;
        border: 1px solid #ccc;
    }

    /* Adjusting buttons and overall form */
    .btn-submit {
        width: 100%;
        background-color: #E89846;
        color: white;
        padding: 16px;
        border-radius: 8px;
        border: none;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #2F3241;
    }
</style>

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="form-input block mt-1" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="Update Password2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" class="form-input block mt-1" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-input block mt-1" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="Update Password" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
