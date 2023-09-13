<form id="pix-checkout" x-show="$wire.method == '{{ $method }}'" @submit.prevent="pixOrBankSlipPayment('{{ $type }}')">
    <div class="py-4 grid grid-cols-6 gap-x-4 gap-y-6 sm:grid-cols-8">
        <div class="col-span-4 sm:col-span-8">
            <x-input-label for="pix-cpf" value="CPF" />
            <div class="mt-1">
                <x-text-input
                    class="h-10 block w-full rounded-md text-primary-200 bg-tertiary-800 border-gray-300 shadow-sm focus:border-primary-200 focus:ring-primary-200 sm:text-sm"
                    id="pix-cpf"
                    type="text"
                    placeholder="SEU CPF"
                    wire:model.blur="user.cpf"
                    x-mask="999.999.999-99"
                ></x-text-input>
            </div>

            <div>
                @error('user.cpf') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>
        </div>



        <div class="col-span-4 sm:col-span-8 flex justify-end">
            <x-primary-button
                    type="submit" id="pix-pay"
                    wire:loading.attr="disabled"
                    wire:loading.class="opacity-50 cursor-not-allowed"
            >Pagar</x-primary-button>
        </div>

    </div>

</form>
