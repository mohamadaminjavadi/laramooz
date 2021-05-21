<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="./src/assets/welcome/Laravel_logo.png" alt="laravel_logo" style="width: 150px;">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600" dir="rtl">
            {{ __('رمز عبور را فراموش کرده اید؟ نگران نباشید. ایمیل خود را وارد کنید تا لینک بازیابی کلمه عبور را برایتان ارسال کنیم') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('ارسال لینک بازیابی کلمه عبور') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
