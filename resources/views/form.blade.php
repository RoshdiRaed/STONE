@include('head')

<body class="bg-gray-100">

    @include('header')


    <div class="container mx-auto p-6 my-8 bg-white shadow-lg rounded-lg max-w-3xl">

        <body class="bg-gray-100 pt-16">

            <div class=" text-white p-6">
            </div>
        </body>

        <style>
            /* Toast message styling */
            .toast {
                position: fixed;
                top: 20px;
                right: 20px;
                padding: 15px;
                border-radius: 5px;
                color: white;
                z-index: 1000;
                opacity: 0;
                transition: opacity 0.5s ease-in-out;
            }
            .toast.error {
                background-color: #ff4444;
            }
            .toast.success {
                background-color: #00C851;
            }
            .toast.show {
                opacity: 1;
            }
        </style>
    </head>
    <body>
        <!-- Your content -->
        @yield('content')

        <!-- Toast messages -->
        @if($errors->any())
            <div id="error-toast" class="toast error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div id="success-toast" class="toast success">
                {{ session('success') }}
            </div>
        @endif

        <!-- JavaScript to handle toast messages -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Function to show and hide toast messages
                function showToast(toastElement) {
                    if (toastElement) {
                        // Show the toast
                        toastElement.classList.add('show');

                        // Hide the toast after 5 seconds
                        setTimeout(() => {
                            toastElement.classList.remove('show');
                            setTimeout(() => toastElement.remove(), 500); // Remove after fade-out
                        }, 5000);
                    }
                }

                // Check for error toast
                const errorToast = document.getElementById('error-toast');
                showToast(errorToast);

                // Check for success toast
                const successToast = document.getElementById('success-toast');
                showToast(successToast);
            });
        </script>

        <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Fill The Form</h1>
        <form action="{{ route('form.submit') }}" method="POST" class="space-y-6" enctype="multipart/form-data">
            @csrf
            <!-- Name -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" name="name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
            </div>

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
            </div>

            <!-- Phone -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="tel" name="phone" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
            </div>

            <!-- Date of Birth -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Date of Birth</label>
                <input type="date" name="dob" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
            </div>

            <!-- Gender -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Gender</label>
                <select name="gender" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                    <option value="">Select...</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <!-- Address -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Address</label>
                <textarea name="address" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500" rows="3"></textarea>
            </div>

            <!-- Skills -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Skills</label>
                <input type="text" name="skills" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="e.g., Python, JavaScript, UI/UX">
            </div>

            <!-- Upload Resume -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Upload Resume</label>
                <input type="file" name="resume" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Profile Picture -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Profile Picture</label>
                <input type="file" name="profile_picture" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Website URL -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Website URL</label>
                <input type="url" name="website" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="https://example.com">
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
            </div>

            <!-- Confirm Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" name="password_confirmation" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
            </div>


            <!-- Checkbox -->
            <div class="flex items-center">
                <input type="checkbox" name="subscribe" value="1" class="h-4 w-4 text-blue-500 border-gray-300 rounded focus:ring-blue-500">
                <label class="ml-2 block text-sm text-gray-700">Subscribe to Newsletter</label>
            </div>

            <!-- Radio Buttons -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Preferred Contact Method</label>
                <div class="mt-2 space-y-2">
                    <label class="inline-flex items-center">
                        <input type="radio" name="contact_method" value="email" class="h-4 w-4 text-blue-500 border-gray-300 focus:ring-blue-500">
                        <span class="ml-2 text-sm text-gray-700">Email</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="contact_method" value="phone" class="h-4 w-4 text-blue-500 border-gray-300 focus:ring-blue-500">
                        <span class="ml-2 text-sm text-gray-700">Phone</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="contact_method" value="mail" class="h-4 w-4 text-blue-500 border-gray-300 focus:ring-blue-500">
                        <span class="ml-2 text-sm text-gray-700">Mail</span>
                    </label>
                </div>
            </div>

            <!-- Time -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Preferred Time to Contact</label>
                <input type="time" name="preferred_time" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Hidden Field -->
            <input type="hidden" name="user_id" value="12345">

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="w-full px-4 py-2 bg-[#2f3241] text-white rounded-lg hover:bg-[#4b5068] focus:ring-2 focus:bg-[#d1a145] focus:ring-offset-2">
                    Submit
                </button>
            </div>
        </form>
    </div>

    @include('footer')

</body>
</html>
