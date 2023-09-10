<div class="mx-auto w-full max-w-lg">
    <button type="button" class="flex w-full items-center justify-center rounded-md border border-transparent bg-black py-2 text-white hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2">
        Mercado Pago
    </button>

    <form class="mt-6">
        <h2 class="text-lg font-medium text-gray-900">Dados de contato</h2>

        <div class="mt-6">
            <label for="email-address" class="block text-sm font-medium text-gray-700">Email</label>
            <div class="mt-1">
                <input type="email" id="email-address" name="email-address" autocomplete="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
        </div>

        <div class="mt-6">
            <label for="phone" class="block text-sm font-medium text-gray-700">Telefone</label>
            <div class="mt-1">
                <input type="text" name="phone" id="phone" autocomplete="tel" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
        </div>

        <div class="mt-6 flex space-x-2">
            <div class="flex h-5 items-center">
                <input id="terms" name="terms" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
            </div>
            <label for="terms" class="text-sm text-gray-500">Li e aceito os termos</label>
        </div>

        <!-- Submit button, enable/disable based on form state -->
        <button type="submit" disabled class="mt-6 w-full rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:bg-gray-100 disabled:text-gray-500">Continuar</button>
    </form>

    <div class="mt-10 divide-y divide-gray-200 border-b border-t border-gray-200">
        <button type="button" disabled class="w-full cursor-auto py-6 text-left text-lg font-medium text-gray-500">Endereço</button>
        <button type="button" disabled class="w-full cursor-auto py-6 text-left text-lg font-medium text-gray-500">Pagamento</button>
        <button type="button" disabled class="w-full cursor-auto py-6 text-left text-lg font-medium text-gray-500">Revisão</button>
    </div>
</div>
