<x-master>
    <div class="container flex flex-col items-center mx-auto pt-32">
        <div class="w-full lg:w-3/4 xl:w-1/2 px-4">
            <h1 class="text-white text-center w-full py-1 bg-blue-500 text-xl font-bold">Log in</h1>
            <form class="border-4 border-blue-500 p-8" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="my-4">
                    <div class="flex items-center justify-start">
                        <label class="w-1/3" for="email">E-mail address</label>
                        <input class="w-2/3 border-2 p-1 rounded @error('email') border-2 border-red-500 @enderror" type="text" name="email" id="email">
                    </div>
                    <div class="flex">
                        <div class="w-1/3"></div>
                        <div class="w-2/3">
                            @error('email')
                                <p class="text-red-600 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="my-4">
                    <div class="flex items-center justify-start">
                        <label class="w-1/3" for="password">Password</label>
                        <input class="w-2/3 border-2 p-1 rounded @error('password') border-2 border-red-500 @enderror" type="password" name="password" id="password">
                    </div>
                    <div class="flex">
                        <div class="w-1/3"></div>
                        <div class="w-2/3">
                            @error('password')
                                <p class="text-red-600 font-semibold">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-start my-4">
                    <div class="w-1/3"></div>
                    <div class="w-2/3">
                        <input class="border-2 border-blue-500" type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                </div>
                <div class="flex items-center justify-start my-4">
                    <div class="w-1/3"></div>
                    <div class="flex w-2/3">
                        <button class="bg-blue-500 hover:bg-blue-600 hover:shadow-xl px-8 py-1 text-white rounded mr-4" type="submit">Login</button>
                        @if (Route::has('password.request'))
                            <a class="hover:underline" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-master>