@extends('base.base')

@section('content')
    <div class="flex flex-col items-center mt-10">
        <div class="font-bold text-5xl mb-5">
            Register
        </div>
        <form id="registerForm">
            <div>
                <label class="block text-white font-medium mb-1" for="email">Email</label>
                <input class="rounded border border-white" type="email" name="email" required placeholder="example@domain.com">
            </div>
            <div>
                <label class="block text-white font-medium mb-1" for="password">Password</label>
                <input class="rounded border border-white" type="password" name="password" required placeholder="***********">
            </div>
            <button class="w-full font-medium bg-blue-800 rounded px-5 py-2" type="submit">Register</button>
            <p class="text-sm font-light">
                Have an account? <a href="{{ route('login') }}" class="text-medium underline">Login</a>
            </p>
        </form>
    </div>

    <script>
        document.getElementById("registerForm").addEventListener("submit", function(event) {
            event.preventDefault();
            alert("Feature is not implemented");
        });
    </script>
@endsection