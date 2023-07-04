<div>
    <div>
        @section('title', 'Make Payment | ' . config('app.name'))

        <div class="mb-3">
            <h2 class="fs-2 fw-black mb-2"></h2>
            <h5 class="text-700 fw-semi-bold"></h5>
        </div>

        <div class="row">
            <div class="col-8">

                <div class="card">

                    <div class="card-body">

                        <div class="d-flex align-items-end">
                            <h3 class="mb-0 me-3">Customer Details</h3>
                        </div>
                        <table class="table table-borderless mt-4">
                            <tbody>
                                <tr>
                                    <td class="py-2 ps-0">
                                        <div class="d-flex"><i class="fa-solid fa-user-tie me-2"></i>
                                            <h5 class="lh-sm me-4">Name</h5>
                                        </div>
                                    </td>
                                    <td class="py-2 fw-bold lh-sm">:</td>
                                    <td class="py-2 px-3">
                                        <h5 class="lh-sm fw-normal text-800">{{ $payment_data['full_name'] }}</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2 ps-0">
                                        <div class="d-flex"><i class="fa-solid fa-envelope-open-text me-2"></i>
                                            <h5 class="lh-sm me-4">Email</h5>
                                        </div>
                                    </td>
                                    <td class="py-2 fw-bold lh-sm">:</td>
                                    <td class="py-2 px-3">
                                        <h5 class="lh-lg fw-normal text-800">{{ $payment_data['email'] }}</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2 ps-0">
                                        <div class="d-flex"><i class="fa-solid fa-square-phone me-2"></i>
                                            <h5 class="lh-sm me-4">Phone</h5>
                                        </div>
                                    </td>
                                    <td class="py-2 fw-bold lh-sm">: </td>
                                    <td class="py-2 px-3">
                                        <h5 class="lh-sm fw-normal text-800">{{ $payment_data['phone'] }}</h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
                <hr class="my-6">


                <div class="card">

                    <div class="card-body">

                        <div class="d-flex align-items-end justify-content-between">
                            <h3 class="mb-0 me-3">Payment Details</h3>



                        </div>
                        <table class="table table-borderless mt-4 fs--1 mb-0">

                            <tbody>
                                <tr class="border-top border-dashed border-bottom align-items-center">
                                    <td class="py-2 ps-0" colspan="2">
                                        <div class="d-flex align-items-center">
                                            <h6 class="fw-semi-bold text-1000 lh-base">Bus ticket :
                                                {{ $payment_data['route'] }}</h6>
                                        </div>

                                        <div class="d-flex align-items-center">
                                            <h6 class="fw-semi-bold text-1000 lh-base">
                                                Time : {{ $payment_data['schedule'] }}</h6>
                                        </div>
                                    </td>
                                    <td class="py-2 fw-bold lh-sm">
                                        <h6 class="fs--2 mb-0">x{{ $payment_data['quantity'] }}</h6>
                                    </td>

                                    <td class="py-2 px-3">
                                        <h5 class="mb-0 fw-semi-bold text-end text-lg-start">MWK


                                            {{ number_format($payment_data['price'], 2) }}</h5>
                                    </td>
                                    <td class="py-2 px-3">
                                        <h5 class="mb-0 fw-semi-bold text-end text-lg-start">MWK


                                            {{ number_format($payment_data['price'] * $payment_data['quantity'], 2) }}
                                        </h5>
                                    </td>
                                </tr>

                                <tr class="border-top border-dashed border-bottom">
                                    <td colspan="4">
                                        <h4 class="mb-0">Total :</h4>
                                    </td>
                                    <td>


                                        <h4 class="mb-0">MWK {{ number_format($payment_data['price'], 2) }}
                                        </h4>


                                    </td>
                                </tr>

                                <tr class="border-top border-dashed border-bottom">
                                    <td colspan="4">

                                    </td>
                                    <td>


                                        <h4 class="mb-0">= USD {{ $amount }}
                                        </h4>

                                    </td>
                                </tr>
                            </tbody>

                        </table>

                        <div class="d-flex align-items-end my-5">
                            <h3 class="mb-0 me-3">Payment Method</h3>
                        </div>


                        <div class="row g-2 mb-5 mb-lg-0 justify-content-start">
                            <div class="col">

                                <div id="paypal-button-container"></div>


                            </div>

                            <div class="col-8">
                                <x-button-deny class="btn btn-phoenix-secondary">Cancel Payment</x-button-deny>
                            </div>


                        </div>

                    </div>

                </div>
                <hr class="my-6">

            </div>

            <div class="col-4">
                s
            </div>

        </div>

    </div>
</div>


@push('scripts')
    <script
        src="https://www.paypal.com/sdk/js?client-id=ASrAQJzOKewNu0ebmPWd3EAR2zLjwMTXjmNISzq6S1kHI020jqXS5dBqyWC7j9Lzt8vVY-qHuz0fAQXm&currency=USD">
    </script>
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            let amount = @this.amount;


            paypal.Buttons({

                style: {

                    layout: 'horizontal',
                    label: 'paypal',
                    tagline: false

                },
                createOrder: function(data, actions) {
                    // Create the order object and return it to the SDK
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: amount
                            }
                        }]
                    });
                },
                onApprove: function(data, actions) {
                    // Capture the payment and update your application accordingly
                    // console.log(data.orderID);
                    Livewire.emit('approved', data.orderID);

                }




            }).render('#paypal-button-container');


        });






        // $(window).on('checkRate', function() {
        //     $.get("https://v6.exchangerate-api.com/v6/fe9dad822a73f2a8da92adea/latest/MWK",
        //         function(response) {

        //             Livewire.emit('save_exchange_rate', price, 'USD', 'MWK', response.conversion_rates.USD,
        //                 response.result);

        //         }).fail(function(xhr, status, error) {
        //         console.log(error);
        //     });
        // });
    </script>
@endpush
