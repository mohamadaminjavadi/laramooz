<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        <div dir="rtl">
            {{ __('بروز رسانی کلمه عبور') }}
        </div>
    </x-slot>

    <x-slot name="description">
        <div dir="rtl">
        {{ __('برای امنیت بیشتر، مطمئن شوید که کلمه عبور طولانی و حاوی کاراکتر های مختلف انتخاب می کنید') }}
        </div>
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="{{ __('کلمه عبور فعلی') }}" />
            <x-jet-input id="current_password" type="password" class="mt-1 block w-full" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="{{ __('کلمه عبور جدید') }}" />
            <x-jet-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="{{ __('تایید کلمه عبور جدید') }}" />
            <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('ذخیره شد.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('ذخیره') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
