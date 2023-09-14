<div>

    <div class="flex flex-col rounded-md border border-primary-200 p-4 divide-y divide-primary-200 divide-opacity-10">

        <div class="flex flex-row items-center py-2 gap-x-4">
            <span class="text-sm text-white opacity-10 whitespace-nowrap w-[70px]">Contato</span>
            <span class="text-sm text-white">{{ $user->email }}</span>
        </div>

        <div class="flex flex-row items-center py-2 gap-x-4">
            <span class="text-sm text-white opacity-10 whitespace-nowrap w-[70px]">Enviar para</span>
            <span class="text-sm text-white">
                    {{ $address->zipcode }},
                    {{ $address->address }},
                    {{ $address->number }} -
                    {{ $address->district }},
                    {{ $address->complement }}.
                    {{ $address->city }} -
                    {{ $address->state }}
                </span>
        </div>

        <div class="flex flex-row items-center py-2 gap-x-4">
            <span class="text-sm text-white opacity-10 whitespace-nowrap w-[70px]">Metodo</span>
            <span class="text-sm text-white">
                    Entrega padrão - R$ 0,00
                </span>
        </div>

    </div>

    <div class="mt-10">
        <x-section-title title="Pagamento"/>

        <div>
            @error('payment') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mt-4 w-full flex flex-col rounded-md border border-primary-200 p-4 divide-y divide-primary-200 divide-opacity-10">

            <label
                    for="credit_card" class="flex flex-row gap-x-4 items-center py-4 cursor-pointer"
                    @click.prevent="$wire.method = 1; creditCardPayment()"
            >
                <input
                    type="radio"
                    name="payment_method"
                    id="credit_card"
                    value="1"
                    wire:model.live="method"
                >

                <div class="flex flex-col">
                    <span class="text-sm text-white">Cartão de crédito</span>
                </div>
            </label>

            <x-checkout.credit-card-form />

            <label
                for="pix"
                class="flex flex-row gap-x-4 items-center py-4 cursor-pointer"
            >
                <input type="radio" name="payment_method" id="pix" value="2" wire:model.live="method">

                <div class="flex flex-col">
                    <span class="text-sm text-white">Pix</span>
                </div>
            </label>

            <x-checkout.pix-bank-slip-payment-form :method="2" type="pix" />

            <label for="bank_slip"
               class="flex flex-row gap-x-4 items-center py-4 cursor-pointer"
            >
                <input type="radio" name="payment_method" id="bank_slip" value="3" wire:model.live="method">

                <div class="flex flex-col">
                    <span class="text-sm text-white">Boleto</span>
                </div>
            </label>

            <x-checkout.pix-bank-slip-payment-form :method="3" type="bolbradesco" />

        </div>

    </div>
</div>
