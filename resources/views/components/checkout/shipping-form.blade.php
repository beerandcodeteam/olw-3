<div>
    <div
            class="flex flex-col rounded-md border border-primary-200 p-4 divide-y divide-primary-200 divide-opacity-10"
    >

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

    </div>

    <div class="mt-10">
        <x-section-title title="Endereço de entrega" />

        <div class="mt-4 w-full flex flex-col rounded-md border border-primary-200 p-4 divide-y divide-primary-200 divide-opacity-10">

            <div class="flex flex-row items-center justify-between">

                <div class="flex flex-row gap-x-4 items-center">
                    <input type="radio" checked="true">

                    <div class="flex flex-col">
                        <span class="text-sm text-white">Entrega padrão</span>
                        <span class="text-xs text-white">Chegará entre 10 e 15 dias úteis</span>
                    </div>
                </div>

                <span class="text-white">R$ 0,00</span>

            </div>

        </div>

    </div>

    <div class="flex flex-row items-center justify-end mt-8">
        <x-primary-button class="px-8 py-4" wire:click.prevent="submitShippingStep">
            Continuar com o pagamento
        </x-primary-button>
    </div>

</div>
