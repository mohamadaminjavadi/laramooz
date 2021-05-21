<x-jet-action-section>
    <x-slot name="title">
        <div dir="rtl">
            {{ __('پاک کردن حساب کاربری') }}
        </div>
    </x-slot>

    <x-slot name="description">
        <div dir="rtl">
            {{ __('حذف حساب کاربری به صورت دائمی') }}
        </div>
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600" dir="rtl">
            {{ __('بعد از پاک کردن اکانت تمامی اطلاعات شما به طور دائمی وغیر قابل برگشت حذف  خواهد شد. لطفا قبل از خروج هر اطلاعاتی نیاز دارید دانلود کنید') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('حذف حساب کاربری') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('حذف حساب کاربری') }}
            </x-slot>

            <x-slot name="content">
                <div dir="rtl">
                    {{ __('آیا از حذف حساب خود اطمینان دارید؟ بعد از حذف حساب کاربری همه اطلاعات شما به طور دائمی و غیر قابل برگشت حذف خواهد شد. لطفا برای اطمینان از حذف حساب کلمه عبورتان را وارد کنید') }}
                </div>

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4"
                                placeholder="{{ __('کلمه عبور') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('لفو') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('حذف حساب کاربری') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
