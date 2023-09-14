import {loadMercadoPago} from "@mercadopago/sdk-js";

export default () => ({
    async creditCardPayment() {
        await loadMercadoPago();
        const mp = new window.MercadoPago(import.meta.env.VITE_MERCADO_PAGO_PUBLIC_KEY);

        const cardForm = mp.cardForm({
            amount: this.$wire.$get("cart.total"),
            iframe: true,
            form: {
                id: "form-checkout",
                cardNumber: {
                    id: "form-checkout__cardNumber",
                    placeholder: "Número do cartão",
                    style: {
                        color: '#ff79c5'
                    }
                },
                expirationDate: {
                    id: "form-checkout__expirationDate",
                    placeholder: "MM/YY",
                    style: {
                        color: '#ff79c5'
                    }
                },
                securityCode: {
                    id: "form-checkout__securityCode",
                    placeholder: "Código de segurança",
                    style: {
                        color: '#ff79c5'
                    }
                },
                cardholderName: {
                    id: "form-checkout__cardholderName",
                    placeholder: "Titular do cartão",
                },
                issuer: {
                    id: "form-checkout__issuer",
                    placeholder: "Banco emissor",
                },
                installments: {
                    id: "form-checkout__installments",
                    placeholder: "Parcelas",
                },
                identificationType: {
                    id: "form-checkout__identificationType",
                    placeholder: "Tipo de documento",
                },
                identificationNumber: {
                    id: "form-checkout__identificationNumber",
                    placeholder: "Número do documento",
                },
                cardholderEmail: {
                    id: "form-checkout__cardholderEmail",
                    placeholder: "E-mail",
                },
            },
            callbacks: {
                onFormMounted: error => {
                    if (error) return console.warn("Form Mounted handling error: ", error);
                    console.log("Form mounted");
                },
                onSubmit: async event => {
                    event.preventDefault();

                    const {
                        paymentMethodId: payment_method_id,
                        issuerId: issuer_id,
                        cardholderEmail: email,
                        amount,
                        token,
                        installments,
                        identificationNumber,
                        identificationType,
                    } = cardForm.getCardFormData();

                    const result = await this.$wire.creditCardPayment({
                        token,
                        issuer_id,
                        payment_method_id,
                        transaction_amount: Number(amount),
                        installments: Number(installments),
                        description: "Descrição do produto",
                        payer: {
                            email,
                            identification: {
                                type: identificationType,
                                number: identificationNumber,
                            },
                        },
                    });

                    cardForm.unmount();
                    document.getElementById("form-checkout__cardholderEmail").value = this.$wire.$get('user.email');
                    this.creditCardPayment();
                },
            },
        });
    },

    async pixOrBankSlipPayment(method) {
        this.$wire.pixOrBankSlipPayment({
            amount: this.$wire.$get("cart.total"),
            method,
            cpf: this.$wire.$get('user.cpf')
        });
    }
})