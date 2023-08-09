<div>
    <div>
        @section('title', ' | ')

        <div class="mb-3">
            <h2 class="mb-2 fs-2 fw-black"></h2>
            <h5 class="text-700 fw-semi-bold"></h5>
        </div>


        <div class="card">
            <div class="card-header d-flex justify-content-end">




            </div>
            <div class="card-body">
                <div id="paypal-container" wire:ignore>

                </div>
            </div>

        </div>


    </div>

</div>
@push('scripts')
    <script
        src="https://www.paypal.com/sdk/js?client-id=AaYXQcPNRcEjWkntqfGBJ6JHFkZyUWYr3I4r2edWm2Cr6wbgoQG8hOZ9NQ4yep_yZ-rCWF0vA2cEjCK8&currency=USD">
    </script>

    <script>
        const FUNDING_SOURCES = [

            // EDIT FUNDING SOURCES

            paypal.FUNDING.PAYPAL,




            paypal.FUNDING.CARD

        ];

        FUNDING_SOURCES.forEach(fundingSource => {

            paypal.Buttons({

                fundingSource,


                style: {

                    layout: 'vertical',

                    shape: 'rect',

                    color: (fundingSource == paypal.FUNDING.PAYLATER) ? 'gold' : '',

                },


                createOrder: async (data, actions) => {


                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: -1
                            },

                        }]
                    });




                },





                onApprove: async (data, actions) => {

                    try {

                        const response = await fetch(
                            `http://localhost:9597/orders/${data.orderID}/capture`, {

                                method: "POST"

                            });


                        const details = await response.json();

                        // Three cases to handle:

                        //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()

                        //   (2) Other non-recoverable errors -> Show a failure message

                        //   (3) Successful transaction -> Show confirmation or thank you message


                        // This example reads a v2/checkout/orders capture response, propagated from the server

                        // You could use a different API or structure for your 'orderData'

                        const errorDetail = Array.isArray(details.details) && details.details[0];


                        if (errorDetail && errorDetail.issue === 'INSTRUMENT_DECLINED') {

                            return actions.restart();

                            // https://developer.paypal.com/docs/checkout/integration-features/funding-failure/

                        }


                        if (errorDetail) {

                            let msg = 'Sorry, your transaction could not be processed.';

                            msg += errorDetail.description ? ' ' + errorDetail.description : '';

                            msg += details.debug_id ? ' (' + details.debug_id + ')' : '';

                            alert(msg);

                        }


                        // Successful capture! For demo purposes:

                        console.log('Capture result', details, JSON.stringify(details, null, 2));

                        const transaction = details.purchase_units[0].payments.captures[0];

                        alert('Transaction ' + transaction.status + ': ' + transaction.id +
                            'See console for all available details');

                    } catch (error) {

                        console.error(error);

                        // Handle the error or display an appropriate error message to the user

                    }

                },
                onError: function(err) {
                    console.log(err);


                }
            }).render("#paypal-container");

        })
    </script>
@endpush
