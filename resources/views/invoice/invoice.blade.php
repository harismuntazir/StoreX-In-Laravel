@extends('app')

<head>
    <title>Invoice - StoreX</title>
    <style>
        .overlapping-images {
            position: relative;
        }

        .stamp, .signature {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

@section('content')
    <div class="columns mt-5">
        <div class="column has-text-centered box">
            <h1 class="title is-1">StoreX</h1>
            <hr style="border-top: 2px solid;">
            <div class="columns">
                <div class="column">
                    <p class="is-align-content-flex-start"><strong>Invoice No:</strong> SX-09768</p>
                    <p><strong>Invoice Date:</strong> 28/10/2023</p>
                    <p><strong>Invoice To:</strong> Ameen Shahid</p>
                </div>
                <div class="column">
                    <p><strong>Address:</strong> Moman Danjipora</p>
                    <p>Arwani, Anantnag, 192124</p>
                    <p>Jammu & Kashmir</p>
                </div>
            </div>
            <hr style="border-top: 2px solid;">
            <div class="columns">
                <div class="column is-half">
                    <p><strong>Product Title</strong></p>
                </div>
                <div class="column is-one-sixth">
                    <p><strong>Quantity</strong></p>
                </div>
                <div class="column is-one-sixth">
                    <p><strong>Rate</strong></p>
                </div>
                <div class="column is-one-sixth">
                    <p><strong>Amount</strong></p>
                </div>
            </div>
            <hr style="border-top: 2px solid;">

            <div class="columns">
                <div class="column is-half">
                    <p>BoAt Airdopes Zing Black</p>
                </div>
                <div class="column is-one-sixth">
                    <p>1</p>
                </div>
                <div class="column is-one-sixth">
                    <p>₹100</p>
                </div>
                <div class="column is-one-sixth">
                    <p>₹100</p>
                </div>
            </div>

            @for ($i = 0; $i < 4; $i++)
                <div class="columns">
                    <div class="column is-half">
                        <p>&nbsp;</p> <!-- Empty product title -->
                    </div>
                    <div class="column is-one-sixth">
                        <p>&nbsp;</p> <!-- Empty quantity -->
                    </div>
                    <div class="column is-one-sixth">
                        <p>&nbsp;</p> <!-- Empty rate -->
                    </div>
                    <div class="column is-one-sixth">
                        <p>&nbsp;</p> <!-- Empty amount -->
                    </div>
                </div>
            @endfor

            <hr style="border-top: 2px solid;">
            <div class="columns">
                <div class="column is-three-quarters">
                    <div>StoreX Inc.</div>
                    <div>Phone: 7889459724</div>
                    <div>Email: itsm3.hm@gmail.com</div>
                    <div>Address: Moman Danjipora, Bijbehara, Anantnag</div>
                    <div>Jammu & Kashmir</div>
                </div>
                <div class="column is-one-quarter">
                    <div class="columns">
                        <div class="column is-half">
                            <strong>Subtotal: </strong>
                            <p>₹110/.</p>
                        </div>
                        <div class="column is-half">
                            <strong>Discount: </strong>
                            <p>₹10/.</p>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column is-half is-centered is-vcentered">
                            <strong>Total: ₹100/.</strong>
                        </div>
                    </div>

                    <hr style="border-top: 2px solid;">
                    <div class="container">
                        <div class="columns is-vcentered is-centered">
                            <div class="column is-narrow has-text-centered overlapping-images">
                                <img src="{{ asset('/images/stamp.png') }}" class="stamp" alt="stamp">
                                <p>Seal & Signature</p>
                                <img src="{{ asset('/images/signature.png') }}" class="signature" alt="stamp">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <hr style="border-top: 2px solid;">
        </div>
    </div>
@endsection
