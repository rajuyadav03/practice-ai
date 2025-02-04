@extends('users.layout.app')
@section('content')
<div class="flex justify-center">
    <div class="login-form max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md">
        <h5 class="my-6 text-xl font-semibold">Registration</h5>
        <form class="text-start" action="{{ route('add.user') }}" method="post">
            @csrf
            <div class="grid grid-cols-1">
                <div class="mb-4">
                    <label class="font-medium" for="username">Username:</label>
                    <input id="username" name="username" type="text" value = "{{ old('username') }}" class="form-control form-input dark:bg-slate-800 mt-1 @error('username') border-red-500 @enderror" placeholder="Username">
                    @error('username')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="font-medium" for="email">Email Address:</label>
                    <input id="email" name="email" type="email" value = "{{ old('email') }}" class="form-control form-input dark:bg-slate-800 mt-1 @error('email') border-red-500 @enderror" placeholder="name@example.com">
                    @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="font-medium" for="phone">Phone:</label>
                    <input id="phone" name="phone" type="text" value = "{{ old('phone') }}" class="form-control form-input dark:bg-slate-800 mt-1 @error('phone') border-red-500 @enderror" placeholder="Phone">
                    @error('phone')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="font-medium" for="password">Password:</label>
                    <input id="password" name="password" type="password" class="form-control form-input dark:bg-slate-800 mt-1 @error('password') border-red-500 @enderror" placeholder="Password">
                    @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="font-medium" for="confirm_password">Confirm Password:</label>
                    <input id="confirm_password" name="password_confirmation" type="password" class="form-control form-input dark:bg-slate-800 mt-1" placeholder="Confirm Password">
                </div>
                <div class="mb-4">
                    <button type="submit" class="w-full text-white rounded-md btn bg-primary hover:bg-secondary">Register</button>
                    <div class="mt-3 text-center">Already have an account? <a href="{{route('login')}}" class="text-decoration-underline">Login</a></div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
