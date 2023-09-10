<x-app-layout>
    <div class="bg-tertiary-900">
        <!-- Background color split screen for large screens -->
        <div class="fixed left-0 top-0 hidden h-full w-1/2 bg-tertiary-900 lg:block" aria-hidden="true"></div>
        <div class="fixed right-0 top-0 hidden h-full w-1/2 bg-tertiary-800 lg:block" aria-hidden="true"></div>


        <div class="relative mx-auto grid max-w-7xl grid-cols-1 gap-x-16 lg:grid-cols-2 lg:px-8 lg:pt-16">

            <section aria-labelledby="summary-heading" class="bg-tertiary-800 py-12 text-indigo-300 md:px-10 lg:col-start-2 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:bg-transparent lg:px-0 lg:pb-24 lg:pt-0">

                <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">

                    <dl>
                        <dt class="text-lg font-medium text-primary-200">Resumo</dt>
                    </dl>

                    <ul role="list" class="divide-y divide-white divide-opacity-10 text-sm font-medium">

                        <li class="flex items-start space-x-4 py-6">
                            <img src="https://tailwindui.com/img/ecommerce-images/checkout-page-07-product-01.jpg" alt="Front of zip tote bag with white canvas, white handles, and black drawstring top." class="h-20 w-20 flex-none rounded-md object-cover object-center">
                            <div class="flex-auto space-y-1">
                                <h3 class="text-white">High Wall Tote</h3>
                                <p class="text-primary-200">White and black</p>
                                <p class="text-primary-200">15L</p>
                            </div>
                            <p class="flex-none text-base font-medium text-secondary-300">$210.00</p>
                        </li>

                    </ul>

                    <dl class="space-y-6 border-t border-white border-opacity-10 pt-6 text-sm font-medium">
                        <div class="flex items-center justify-between">
                            <dt class="text-primary-200">Subtotal</dt>
                            <dd class="text-secondary-300">R$ 570,00</dd>
                        </div>

                        <div class="flex items-center justify-between">
                            <dt class="text-primary-200">Frete</dt>
                            <dd class="text-secondary-300">R$ 25,00</dd>
                        </div>

                        <div class="flex items-center justify-between border-t border-white border-opacity-10 pt-6 text-white">
                            <dt class="text-base text-primary-200">Total</dt>
                            <dd class="text-base text-secondary-300">R$ 642,60</dd>
                        </div>
                    </dl>
                </div>
            </section>

            <section aria-labelledby="payment-and-shipping-heading" class="py-16 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:pb-24 lg:pt-0">
                <form>
                    <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
                        <div>
                            <h3 id="contact-info-heading" class="text-lg font-medium text-white">Informação de contato</h3>

                            <div class="mt-6">
                                <label for="email-address" class="block text-sm font-medium text-white">Email address</label>
                                <div class="mt-1">
                                    <input type="email" id="email-address" name="email-address" autocomplete="email" class="block w-full rounded-md text-primary-200 bg-tertiary-800 border-[#69727d] shadow-sm focus:border-primary-200 focus:ring-primary-200 sm:text-sm">
                                </div>
                            </div>
                        </div>

                        <div class="mt-10">
                            <h3 class="text-lg font-medium text-white">Detalhes do pagamento</h3>

                            <div class="mt-6 grid grid-cols-3 gap-x-4 gap-y-6 sm:grid-cols-4">
                                <div class="col-span-3 sm:col-span-4">
                                    <label for="card-number" class="block text-sm font-medium text-white">Numero do cartao</label>
                                    <div class="mt-1">
                                        <input type="text" id="card-number" name="card-number" autocomplete="cc-number" class="block w-full rounded-md text-primary-200 bg-tertiary-800 border-[#69727d] shadow-sm focus:border-primary-200 focus:ring-primary-200 sm:text-sm">
                                    </div>
                                </div>

                                <div class="col-span-2 sm:col-span-3">
                                    <label for="expiration-date" class="block text-sm font-medium text-white">Data de expiração (MM/YY)</label>
                                    <div class="mt-1">
                                        <input type="text" name="expiration-date" id="expiration-date" autocomplete="cc-exp" class="block w-full rounded-md text-primary-200 bg-tertiary-800 border-[#69727d] shadow-sm focus:border-primary-200 focus:ring-primary-200 sm:text-sm">
                                    </div>
                                </div>

                                <div>
                                    <label for="cvc" class="block text-sm font-medium text-white">CVC</label>
                                    <div class="mt-1">
                                        <input type="text" name="cvc" id="cvc" autocomplete="csc" class="block w-full rounded-md text-primary-200 bg-tertiary-800 border-[#69727d] shadow-sm focus:border-primary-200 focus:ring-primary-200 sm:text-sm">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-10">
                            <h3 class="text-lg font-medium text-white">Endereço</h3>

                            <div class="mt-6 grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-3">
                                <div class="sm:col-span-3">
                                    <label for="address" class="block text-sm font-medium text-white">Rua</label>
                                    <div class="mt-1">
                                        <input type="text" id="address" name="address" autocomplete="street-address" class="block w-full rounded-md text-primary-200 bg-tertiary-800 border-[#69727d] shadow-sm focus:border-primary-200 focus:ring-primary-200 sm:text-sm">
                                    </div>
                                </div>

                                <div>
                                    <label for="city" class="block text-sm font-medium text-white">Cidade</label>
                                    <div class="mt-1">
                                        <input type="text" id="city" name="city" autocomplete="address-level2" class="block w-full rounded-md text-primary-200 bg-tertiary-800 border-[#69727d] shadow-sm focus:border-primary-200 focus:ring-primary-200 sm:text-sm">
                                    </div>
                                </div>

                                <div>
                                    <label for="region" class="block text-sm font-medium text-white">Estado</label>
                                    <div class="mt-1">
                                        <input type="text" id="region" name="region" autocomplete="address-level1" class="block w-full rounded-md text-primary-200 bg-tertiary-800 border-[#69727d] shadow-sm focus:border-primary-200 focus:ring-primary-200 sm:text-sm">
                                    </div>
                                </div>

                                <div>
                                    <label for="postal-code" class="block text-sm font-medium text-white">CEP</label>
                                    <div class="mt-1">
                                        <input type="text" id="postal-code" name="postal-code" autocomplete="postal-code" class="block w-full rounded-md text-primary-200 bg-tertiary-800 border-[#69727d] shadow-sm focus:border-primary-200 focus:ring-primary-200 sm:text-sm">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-10 flex justify-end border-t border-tertiary-800-200 pt-6">
                            <button type="submit" class="rounded-md border border-transparent bg-primary-200 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-tertiary-800-50">
                                Comprar
                            </button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</x-app-layout>
