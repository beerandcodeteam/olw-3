<div>
    <x-section-title title="Informacoes de contato"/>

    <div class="mt-6">
        <x-input-label for="email-address" value="Email"/>
        <div class="mt-1">
            <x-text-input
                    type="email"
                    id="email-adress"
                    name="email"
                    autocomplete="email"
                    placeholder="Digite seu email"
                    wire:model="user.email"
            />
        </div>

        <div>
            @error('user.email') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="mt-6">
        <x-input-label for="name" value="Nome completo"/>
        <div class="mt-1">
            <x-text-input
                    type="text"
                    id="name"
                    name="name"
                    autocomplete="name"
                    placeholder="Digite seu nome completo"
                    wire:model="user.name"

            />
        </div>

        <div>
            @error('user.name') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
    </div>


    <div class="mt-10">
        <x-section-title title="Endereço de entrega"/>

        <div class="mt-6 grid grid-cols-6 gap-x-4 gap-y-6 sm:grid-cols-8">
            <div class="col-span-6 sm:col-span-2">
                <x-input-label for="zipcode" value="Numero do cartao"/>
                <div class="mt-1">
                    <x-text-input
                            type="text"
                            id="zipcode"
                            name="zipcode"
                            placeholder="CEP"
                            x-mask="99999-999"
                            wire:change="findAddress()"
                            wire:model="address.zipcode"
                    />

                </div>

                <div>
                    @error('address.zipcode') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-span-6 sm:col-span-6">
                <x-input-label for="address" value="Nome da Rua"/>
                <div class="mt-1">
                    <x-text-input
                            type="text"
                            id="address"
                            name="address"
                            placeholder="Rua"
                            wire:model="address.address"
                    />
                </div>

                <div>
                    @error('address.address') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-input-label for="number" value="Numero"/>
                <div class="mt-1">
                    <x-text-input
                            type="text"
                            id="number"
                            name="number"
                            placeholder="Numero"
                            wire:model="address.number"
                    />
                </div>

                <div>
                    @error('address.number') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-input-label for="complement" value="Complemento"/>
                <div class="mt-1">
                    <x-text-input
                            type="text"
                            id="complement"
                            name="complement"
                            placeholder="Complemento"
                            wire:model="address.complement"
                    />
                </div>
            </div>

            <div class="col-span-6 sm:col-span-8">
                <x-input-label for="district" value="Bairro"/>
                <div class="mt-1">
                    <x-text-input
                            type="text"
                            id="district"
                            name="district"
                            placeholder="Bairro"
                            wire:model="address.district"
                    />
                </div>

                <div>
                    @error('address.district') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-input-label for="city" value="Cidade"/>
                <div class="mt-1">
                    <x-text-input
                            type="text"
                            id="city"
                            name="city"
                            placeholder="Cidade"
                            wire:model="address.city"
                    />
                </div>

                <div>
                    @error('address.city') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-input-label for="state" value="Estado"/>
                <div class="mt-1">
                    <x-text-input
                            type="text"
                            id="state"
                            name="state"
                            placeholder="Estado"
                            wire:model="address.state"
                    />
                </div>

                <div>
                    @error('address.state') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>

        </div>
    </div>

    <div class="flex flex-row items-center justify-end mt-8">
        <x-primary-button class="px-8 py-4" wire:click.prevent="submitInformationStep">
            Continuar com o frete
        </x-primary-button>
    </div>
</div>
