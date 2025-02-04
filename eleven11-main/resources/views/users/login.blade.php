@extends('users.layout.app')
@section('content')
<div class="flex justify-center">
    <div class="login-form max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md">
        <h5 class="my-6 text-xl font-semibold">Login</h5>
        <form class="text-start" action="{{ route('verify.user') }}" method="post">
            @csrf
            <div class="grid grid-cols-1">
                <div class="mb-4">
                    <label class="font-medium" for="email">Email Address:</label>
                    <input id="email" name="email" type="email" class="form-control form-input dark:bg-slate-800 mt-1" placeholder="name@example.com">
                </div>

                <div class="mb-4">
                    <label class="font-medium" for="password">Password:</label>
                    <input id="password" name="password" type="password" class="form-control form-input dark:bg-slate-800 mt-1" placeholder="Password">
                </div>

                <div class="flex justify-between mb-4">
                    <div class="flex items-center mb-0 form-checkbox">
                        <input class="me-2 border border-inherit w-[16px] h-[16px] mb-[3px]" type="checkbox" name="remember" value="" id="RememberMe">
                        <label class="text-slate-400" for="RememberMe">Remember me?</label>
                    </div>
                    <p class="mb-0 text-slate-400"><a href="" class="text-slate-400">Forgot password?</a></p>
                </div>

                <div class="mb-4">
                    <button type="submit" class="w-full text-white rounded-md btn bg-primary hover:bg-secondary">Login</button>
                </div>

                <div class="text-center">
                    <span class="text-slate-400 me-2">Don&#039;t have an account?</span>
                    <a href="{{ route('user.registration') }}" class="font-bold text-black dark:text-white">Register</a>
                </div>
            </div>
        </form>


    </div>
</div>
@endsection