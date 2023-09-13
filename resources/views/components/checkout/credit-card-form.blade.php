<form id="form-checkout" x-show="$wire.method == 1">
    <div class="py-4 grid grid-cols-6 gap-x-4 gap-y-6 sm:grid-cols-8">
        <div class="col-span-4 sm:col-span-8">
            <x-input-label for="zipcode" value="Numero do cartao"/>
            <div class="mt-1">
                <div
                    class="h-10 block w-full rounded-md text-primary-200 bg-tertiary-800 border-gray-300 shadow-sm focus:border-primary-200 focus:ring-primary-200 sm:text-sm"
                    id="form-checkout__cardNumber"
                    type="text"
                ></div>
            </div>
        </div>


        <div class="col-span-2 sm:col-span-4">
            <x-input-label for="zipcode" value="Vencimento"/>
            <div class="mt-1">
                <div
                    class="h-10 block w-full rounded-md text-primary-200 bg-tertiary-800 border-gray-300 shadow-sm focus:border-primary-200 focus:ring-primary-200 sm:text-sm"
                    type="text"
                    id="form-checkout__expirationDate"
                ></div>
            </div>
        </div>

        <div class="col-span-2 sm:col-span-4">
            <x-input-label for="zipcode" value="CVC"/>
            <div class="mt-1">
                <div
                    class="h-10 block w-full rounded-md text-primary-200 bg-tertiary-800 border-gray-300 shadow-sm focus:border-primary-200 focus:ring-primary-200 sm:text-sm"
                    type="text"
                    id="form-checkout__securityCode"
                ></div>
            </div>
        </div>

        <div class="col-span-4 sm:col-span-8">
            <x-input-label for="zipcode" value="Nome no Cartao"/>
            <div class="mt-1">
                <x-text-input
                    type="text"
                    id="form-checkout__cardholderName"
                    name="form-card_holder_name"
                    placeholder="Nome igual escrito no cartão"
                />
            </div>
        </div>

        <div class="col-span-4 sm:col-span-8">
            <select id="form-checkout__issuer" class="hidden"></select>
            <x-input-label for="form-checkout__installments" value="Parcelas"/>
            <div class="mt-1">
                <select
                    class="block w-full rounded-md text-primary-200 bg-tertiary-800 border-gray-300 shadow-sm focus:border-primary-200 focus:ring-primary-200 sm:text-sm"
                    id="form-checkout__installments"
                >
                </select>
            </div>
        </div>

        <div class="col-span-4 sm:col-span-2">
            <x-input-label for="form-checkout__installments" value="Documento"/>
            <div class="mt-1">
                <select
                    class="block w-full rounded-md text-primary-200 bg-tertiary-800 border-gray-300 shadow-sm focus:border-primary-200 focus:ring-primary-200 sm:text-sm"
                    id="form-checkout__identificationType"
                >
                </select>
            </div>
        </div>

        <div class="col-span-4 sm:col-span-6">
            <x-input-label for="form-checkout__installments" value="CPF/CNPJ"/>
            <div class="mt-1">
                <x-text-input
                    type="text"
                    id="form-checkout__identificationNumber"
                    name="card_holder_name"
                    placeholder="Nome igual escrito no cartão"
                />

                <x-text-input
                    type="hidden"
                    id="form-checkout__cardholderEmail"
                    name="card_holder_name"
                    placeholder="Nome igual escrito no cartão"
                    wire:model="user.email"
                />
            </div>
        </div>

        <div class="col-span-4 sm:col-span-8 flex justify-end">
            <x-primary-button
                type="submit" id="form-checkout__submit"
                wire:loading.attr="disabled"
                wire:loading.class="opacity-50 cursor-not-allowed"
            >Pagar
            </x-primary-button>
        </div>
    </div>

</form>
