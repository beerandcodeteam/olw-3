<div
    x-data="{}"
    class="bg-tertiary-900 min-h-screen w-full flex flex-col items-center justify-center" >
    <div class="flex flex-col rounded-md border border-primary-200 px-20 py-16">

        <h3 class="text-secondary-300" x-show="$wire.show_feedback">
            Email enviado com sucesso!
        </h3>

        <div class="mt-6">
            <x-input-label for="email-address" value="Email"/>
            <div class="mt-1">
                <x-text-input
                        type="email"
                        id="email-adress"
                        name="email"
                        autocomplete="email"
                        placeholder="Digite seu email"
                        wire:model="email"
                />
            </div>

            <div>
                @error('email') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>

            <x-primary-button wire:click="login()">
                Solicitar email
            </x-primary-button>
        </div>
    </div>
</div>
