<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('忘记密码？没问题.只需告诉我们您的电子邮件地址，我们将通过电子邮件向您发送密码重置链接，以便您选择一个新的密码。') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('邮箱')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('电子邮件密码重置') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
