@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-md bg-white p-8 shadow-lg rounded-lg">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h2>

    @if($errors->any())
        <div class="toast error" id="error-toast">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div>
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg">
        </div>

        <div class="mt-4">
            <label class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg">
        </div>

        <div class="mt-4 flex justify-between">
            <label class="flex items-center">
                <input type="checkbox" name="remember" class="mr-2">
                <span class="text-sm text-gray-700">Remember Me</span>
            </label>
            <a href="#" class="text-sm text-blue-600 hover:underline">Forgot Password?</a>
        </div>

        <div class="mt-6 text-center">
            <button type="submit" class="w-full px-4 py-2 bg-[#2f3241] text-white rounded-lg hover:bg-[#4b5068]">
                Login
            </button>
        </div>
    </form>

    <p class="text-center text-gray-600 mt-4">Don't have an account? <a href="/register" class="text-blue-500">Sign up</a></p>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const errorToast = document.getElementById('error-toast');
        if (errorToast) {
            errorToast.classList.add('show');
            setTimeout(() => {
                errorToast.classList.remove('show');
            }, 5000);
        }
    });
</script>
@endsection
