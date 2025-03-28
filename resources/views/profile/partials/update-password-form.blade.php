<section>
    <div class="bg-red-700 p-4 rounded-lg">
        <h2 class="text-lg font-medium text-white">
            {{ __('Atualizar senha') }}
        </h2>

        <p class="mt-1 text-sm text-white">
            {{ __('Certifique-se de que sua conta esteja usando uma senha longa e aleatória para permanecer segura.') }}
        </p>
    </div>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Senha atual')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>
        <div class="flex flex-col xl:flex-row w-full gap-4">
            <div class="flex-1">
                <x-input-label for="update_password_password" :value="__('Nova Senha')" />
                <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>

            <div class="flex-1">
                <x-input-label for="update_password_password_confirmation" :value="__('Confirme sua senha')" />
                <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Salvar') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Salvar.') }}</p>
            @endif
        </div>
    </form>
</section>
