<!-- Login Popup -->
<div id="login-popup"
    class="fixed inset-0 z-50 hidden bg-black/50 flex items-center justify-center transition-opacity duration-300 ease-in-out opacity-0">
    <div
        class="bg-white rounded-lg shadow-lg p-8 w-[600px] transform scale-95 transition-transform duration-300 ease-in-out">
        <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Select Your Role</h2>
        <div class="flex gap-6 justify-center">
            <!-- Client Card -->
            <a href="{{ route('register') }}"
                class="group relative flex flex-col items-center justify-center w-1/2 p-6 bg-blue-50 rounded-lg shadow-md hover:shadow-lg hover:bg-blue-100 transition-all duration-300 transform hover:-translate-y-2 hover:scale-105">
                <img src="./img/freelancer.png" alt="freelancer"
                    class="h-12 w-12 mb-4 transition-transform duration-300 group-hover:scale-110">
                <p class="text-lg font-medium text-gray-800 group-hover:text-gray-900 transition-colors duration-300">
                    Client</p>
            </a>

            <!-- Freelancer Card -->
            <a href="{{ route('register') }}"
                class="group relative flex flex-col items-center justify-center w-1/2 p-6 bg-green-50 rounded-lg shadow-md hover:shadow-lg hover:bg-green-100 transition-all duration-300 transform hover:-translate-y-2 hover:scale-105">
                <img src="./img/client.png" alt="freelancer"
                    class="h-12 w-12 mb-4 transition-transform duration-300 group-hover:scale-110">
                <p class="text-lg font-medium text-gray-800 group-hover:text-gray-900 transition-colors duration-300">
                    Freelancer</p>
            </a>
        </div>
        <button id="close-login-popup" class="mt-6 w-full text-center text-sm text-gray-500 hover:underline">
            Cancel
        </button>
    </div>
</div>

<script>
    const loginPopupButton = document.getElementById('login-popup-button');
    const loginPopup = document.getElementById('login-popup');
    const closeLoginPopup = document.getElementById('close-login-popup');

    loginPopupButton.addEventListener('click', () => {
        loginPopup.classList.remove('hidden');
        setTimeout(() => {
            loginPopup.classList.remove('opacity-0');
            loginPopup.querySelector('.transform').classList.remove('scale-95');
        }, 10);
    });

    closeLoginPopup.addEventListener('click', () => {
        loginPopup.classList.add('opacity-0');
        loginPopup.querySelector('.transform').classList.add('scale-95');
        setTimeout(() => {
            loginPopup.classList.add('hidden');
        }, 300);
    });

    loginPopup.addEventListener('click', (e) => {
        if (e.target === loginPopup) {
            loginPopup.classList.add('opacity-0');
            loginPopup.querySelector('.transform').classList.add('scale-95');
            setTimeout(() => {
                loginPopup.classList.add('hidden');
            }, 300);
        }
    });
</script>
