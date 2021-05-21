<x-jet-action-section>
    <x-slot name="title">
        <div dir="rtl">
            {{ __('احراز هویت دو مرحله ای') }}
        </div>
    </x-slot>

    <x-slot name="description">
        {{ __('با استفاده از احراز هویت دو مرحله ای، امنیت حسابتان را افزایش دهید') }}
    </x-slot>

    <x-slot name="content">
        <h3 class="text-lg font-medium text-gray-900">
            @if ($this->enabled)
                {{ __('شما احراز هویت دو مرحله ای را فعال کردید') }}
            @else
                {{ __('شمااحراز هویت دو مرحله ای را  فعال نکرده اید') }}
            @endif
        </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p dir="rtl">
                {{ __('وقتی احراز هویت دو مرحله ای فعال باشد، شما یک توکن امن و رندوم طی مرحله احراز هویت دریافت میکنید. شما میتوانید این توکن را از برنامه google authenticator موبایلتان بازیابی کنید') }}
            </p>
        </div>

        @if ($this->enabled)
            @if ($showingQrCode)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold" dir="rtl">
                        {{ __('احراز هویت دو مرحله ای فعال شد. به وسیله برنامه احراز هویت موبایلتان کد زیر را اسکن کنید') }}
                    </p>
                </div>

                <div class="mt-4 dark:p-4 dark:w-56 dark:bg-white">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>
            @endif

            @if ($showingRecoveryCodes)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold" dir="rtl">
                        {{ __('کد های ریکاوری را در یک برنامه مدیریت پسورد امن ذخیره کنید زیرا در صورتی که دستگاهتان گم شود میتوانید به وسیله این کد ها حسابتان را بازیابی کنید') }}
                    </p>
                </div>

                <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 rounded-lg">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-5">
            @if (! $this->enabled)
                <x-jet-confirms-password wire:then="enableTwoFactorAuthentication">
                    <x-jet-button type="button" wire:loading.attr="disabled">
                        {{ __('فعالسازی') }}
                    </x-jet-button>
                </x-jet-confirms-password>
            @else
                @if ($showingRecoveryCodes)
                    <x-jet-confirms-password wire:then="regenerateRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            {{ __('Regenerate Recovery Codes') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @else
                    <x-jet-confirms-password wire:then="showRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            {{ __('نمایش کد های ریکاوری') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @endif

                <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                    <x-jet-danger-button wire:loading.attr="disabled">
                        {{ __('غیرفعال سازی') }}
                    </x-jet-danger-button>
                </x-jet-confirms-password>
            @endif
        </div>
    </x-slot>
</x-jet-action-section>
