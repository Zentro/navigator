<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Complete Your Profile') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Update your account\'s profile address.') }}
        </p>

        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')

            <div>
                <x-input-label for="street_address" :value="__('Street Address')" />
                <x-text-input id="street_address" name="street_address" type="text" class="mt-1 block w-full" required autofocus autocomplete="street_address" />
                <x-input-error class="mt-2" :messages="$errors->get('street_address')" />
            </div>

            <div>
                <x-input-label for="street_address" :value="__('Apartment Number')" />
                <x-text-input id="street_address" name="street_address" type="text" class="mt-1 block w-full" autofocus autocomplete="street_address" />
                <x-input-error class="mt-2" :messages="$errors->get('street_address')" />
            </div>

            <div>
                <x-input-label for="street_address" :value="__('ZIP Code')" />
                <x-text-input id="street_address" name="street_address" type="text" class="mt-1 block w-full" required autofocus autocomplete="street_address" />
                <x-input-error class="mt-2" :messages="$errors->get('street_address')" />
            </div>

            <div>
                <x-input-label for="street_address" :value="__('City')" />
                <x-text-input id="street_address" name="street_address" type="text" class="mt-1 block w-full" required autofocus autocomplete="street_address" />
                <x-input-error class="mt-2" :messages="$errors->get('street_address')" />
            </div>

            <div>
                <x-input-label for="street_address" :value="__('State')" />
                <x-text-input id="street_address" name="street_address" type="text" class="mt-1 block w-full" required autofocus autocomplete="street_address" />
                <x-input-error class="mt-2" :messages="$errors->get('street_address')" />
            </div>

            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Save') }}</x-primary-button>

                @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                @endif
            </div>
        </form>
    </header>
</section>