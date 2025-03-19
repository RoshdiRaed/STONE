@extends('head')
<style>
    body {
        background-color: #12141b;
    }

    /* Adjusting input fields for better fit */
    .form-input {
        width: 100%;
        /* Full width */
        padding: 12px 16px;
        /* Adjust padding for better appearance */
        font-size: 1rem;
        /* Make the text readable */
        border: 1px solid #ccc;
        /* Add border for better visibility */
        border-radius: 8px;
        /* Smooth borders */
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
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="POST" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="form-input block mt-1" :value="old('name', $user->name)"
                required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <!-- Email -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="form-input block mt-1" :value="old('email', $user->email)"
                required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}
                        <button form="send-verification"
                            class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <!-- Phone -->
        <div>
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" name="phone" type="text" class="form-input block mt-1" :value="old('phone', $user->phone)"
                required autocomplete="tel" />
            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
        </div>

        <!-- Date of Birth -->
        <div>
            <x-input-label for="dob" :value="__('Date of Birth')" />
            <x-text-input id="dob" name="dob" type="date" class="form-input block mt-1" :value="old('dob', $user->dob)"
                required />
            <x-input-error class="mt-2" :messages="$errors->get('dob')" />
        </div>

        <!-- Gender -->
        <div>
            <x-input-label for="gender" :value="__('Gender')" />
            <select id="gender" name="gender" class="form-input block mt-1" required>
                <option value="male" {{ old('gender', $user->gender) == 'male' ? 'selected' : '' }}>
                    {{ __('Male') }}</option>
                <option value="female" {{ old('gender', $user->gender) == 'female' ? 'selected' : '' }}>
                    {{ __('Female') }}</option>
                <option value="other" {{ old('gender', $user->gender) == 'other' ? 'selected' : '' }}>
                    {{ __('Other') }}</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('gender')" />
        </div>

        <!-- Address -->
        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" name="address" type="text" class="form-input block mt-1" :value="old('address', $user->address)"
                required />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>

        <!-- Skills -->
        <div>
            <x-input-label for="skills" :value="__('Skills')" />
            <x-text-input id="skills" name="skills" type="text" class="form-input block mt-1"
                :value="old('skills', $user->skills)" />
            <x-input-error class="mt-2" :messages="$errors->get('skills')" />
        </div>

        <!-- Resume -->
        <div>
            <x-input-label for="resume" :value="__('Resume')" />
            <div id="resumeDropZone"
                class="mt-1 p-4 border-2 border-dashed border-gray-300 dark:border-gray-500 text-center rounded-lg cursor-pointer transition-all duration-200 ease-in-out">
                <p class="text-gray-600 dark:text-gray-400">Drag and drop your resume here or click to select</p>
                <input id="resume" name="resume" type="file" class="form-input block mt-1 hidden"
                    accept=".pdf,.doc,.docx,.txt" />
            </div>
            <div id="resumePreview" class="mt-4 text-gray-600 dark:text-gray-400 hidden">
                <!-- Preview area for resume -->
                <p>Selected Resume: <span id="resumeFileName"></span></p>
            </div>
            <x-input-error class="mt-2" :messages="$errors->get('resume')" />
        </div>

        <!-- Profile Picture -->
        <div>
            <x-input-label for="profile_picture" :value="__('Profile Picture')" />
            <div id="profilePictureDropZone"
                class="mt-1 p-4 border-2 border-dashed border-gray-300 dark:border-gray-500 text-center rounded-lg cursor-pointer transition-all duration-200 ease-in-out">
                <p class="text-gray-600 dark:text-gray-400">Drag and drop your profile picture here or click to select
                </p>
                <input id="profile_picture" name="profile_picture" type="file" class="form-input block mt-1 hidden"
                    accept="image/*" />
            </div>
            <div id="profilePicturePreview" class="mt-4 text-gray-600 dark:text-gray-400 hidden">
                <!-- Preview area for profile picture -->
                <p>Selected Profile Picture:</p>
                <div class="w-32 h-32 rounded-full overflow-hidden">
                    <img id="profilePicturePreviewImg" src="#" alt="Profile Picture Preview"
                        class="w-full h-full object-cover hidden" />
                </div>
            </div>
            <x-input-error class="mt-2" :messages="$errors->get('profile_picture')" />
        </div>

        <!-- Website -->
        <div>
            <x-input-label for="website" :value="__('Website')" />
            <x-text-input id="website" name="website" type="url" class="form-input block mt-1"
                :value="old('website', $user->website)" />
            <x-input-error class="mt-2" :messages="$errors->get('website')" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" name="password" type="password" class="form-input block mt-1"
                autocomplete="new-password" />
            <x-input-error class="mt-2" :messages="$errors->get('password')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

{{--  Add the following script to the bottom of the file to handle file selection and drag-and-drop functionality: --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const resumeDropZone = document.getElementById('resumeDropZone');
        const profilePictureDropZone = document.getElementById('profilePictureDropZone');

        const resumeInput = document.getElementById('resume');
        const profilePictureInput = document.getElementById('profile_picture');

        const resumePreview = document.getElementById('resumePreview');
        const resumeFileName = document.getElementById('resumeFileName');

        const profilePicturePreview = document.getElementById('profilePicturePreview');
        const profilePicturePreviewImg = document.getElementById('profilePicturePreviewImg');

        // Trigger file input when clicking the drop zone
        resumeDropZone.addEventListener('click', function() {
            resumeInput.click();
        });

        profilePictureDropZone.addEventListener('click', function() {
            profilePictureInput.click();
        });

        // Handle drag and drop
        [resumeDropZone, profilePictureDropZone].forEach(zone => {
            zone.addEventListener('dragover', function(event) {
                event.preventDefault();
                zone.classList.add('border-blue-500', 'bg-blue-100');
                zone.classList.remove('border-gray-300', 'bg-white');
            });

            zone.addEventListener('dragleave', function() {
                zone.classList.remove('border-blue-500', 'bg-blue-100');
                zone.classList.add('border-gray-300', 'bg-white');
            });

            zone.addEventListener('drop', function(event) {
                event.preventDefault();
                zone.classList.remove('border-blue-500', 'bg-blue-100');
                zone.classList.add('border-green-500', 'bg-green-100'); // Success animation
                setTimeout(() => {
                    zone.classList.remove('border-green-500',
                    'bg-green-100'); // Reset after drop animation
                }, 500);

                const file = event.dataTransfer.files[0];
                handleFileSelect(file);
            });
        });

        // Handle file selection (drag or click)
        resumeInput.addEventListener('change', function(event) {
            handleFileSelect(event.target.files[0]);
        });

        profilePictureInput.addEventListener('change', function(event) {
            handleFileSelect(event.target.files[0]);
        });

        function handleFileSelect(file) {
            // Here you can add logic to handle file preview or upload,
            // or simply store the file in a form data structure for submission.

            if (file) {
                console.log("File selected:", file);
                if (file.type.startsWith('image/')) {
                    // Display image preview for profile picture
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        profilePicturePreviewImg.src = e.target.result;
                        profilePicturePreviewImg.classList.remove('hidden');
                        profilePicturePreview.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file);
                } else {
                    // Display file name for resume
                    resumeFileName.textContent = file.name;
                    resumePreview.classList.remove('hidden');
                }
            }
        }
    });
</script>
