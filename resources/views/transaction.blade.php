<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wombat Coffee Roasters</title>



    <link rel="stylesheet" href="/css/listing2.css">
    <link rel="stylesheet" href="/css/listing3.css">
    <link rel="stylesheet" href="/css/listing5.css">
    <link rel="stylesheet" href="/css/listing7.css">
    <link rel="stylesheet" href="/css/listing8.css">
    <link rel="stylesheet" href="/css/listing9.css">
    <link rel="stylesheet" href="/css/listing10.css">
</head>
<body>
<div class="wrapper">
    <div class="response container">
        <div class="content">
            <section>
                <a class="button primary back" href="/index.php">
                    <span>Test Another Transaction</span>
                </a>
            </section>
        </div>
    </div>
</div>

<aside class="drawer dark">
    <header>
        <div class="content compact">
            <a href="https://developers.braintreepayments.com" class="braintree" target="_blank">Braintree</a>
            <h3>ทำรายการสำเร็จ</h3>
        </div>
    </header>

    <article class="content compact">
        <section>
            <h5>ธุรกรรม</h5>
            <table cellpadding="0" cellspacing="8">
                <tbody>
                    <tr>
                        <td>id</td>
                        <td>{{ $transaction->id }}</td>
                    </tr>
                    <tr>
                        <td>type</td>
                        <td>{{ $transaction->type }}</td>
                    </tr>
                    <tr>
                        <td>amount</td>
                        <td>{{ $transaction->amount }}</td>
                    </tr>
                    <tr>
                        <td>status</td>
                        <td>{{ $transaction->status }}</td>
                    </tr>
                    <tr>
                        <td>created_at</td>
                        <td>{{ $transaction->createdAt->format('Y-m-d H:i:s') }}</td>
                    </tr>
                    <tr>
                        <td>updated_at</td>
                        <td>{{ $transaction->updatedAt->format('Y-m-d H:i:s') }}</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section>
            <h5>Payment</h5>

            <table cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td>token</td>
                        <td>{{ $transaction->creditCardDetails->token }}</td>
                    </tr>
                    <tr>
                        <td>bin</td>
                        <td>{{ $transaction->creditCardDetails->bin }}</td>
                    </tr>
                    <tr>
                        <td>last_4</td>
                        <td>{{ $transaction->creditCardDetails->last4 }}</td>
                    </tr>
                    <tr>
                        <td>card_type</td>
                        <td>{{ $transaction->creditCardDetails->cardType }}</td>
                    </tr>
                    <tr>
                        <td>expiration_date</td>
                        <td>{{ $transaction->creditCardDetails->expirationDate }}</td>
                    </tr>
                    <tr>
                        <td>cardholder_name</td>
                        <td>{{ $transaction->creditCardDetails->cardholderName }}</td>
                    </tr>
                    <tr>
                        <td>customer_location</td>
                        <td>{{ $transaction->creditCardDetails->customerLocation }}</td>
                    </tr>
                </tbody>
            </table>
        </section>

        @if (!is_null($transaction->customerDetails->id))
        <section>
            <h5>Customer Details</h5>
            <table cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td>id</td>
                        <td>{{ $transaction->customerDetails->id }}</td>
                    </tr>
                    <tr>
                        <td>first_name</td>
                        <td>{{ $transaction->customerDetails->firstName }}</td>
                    </tr>
                    <tr>
                        <td>last_name</td>
                        <td>{{ $transaction->customerDetails->lastName }}</td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td>{{ $transaction->customerDetails->email }}</td>
                    </tr>
                    <tr>
                        <td>company</td>
                        <td>{{ $transaction->customerDetails->company }}</td>
                    </tr>
                    <tr>
                        <td>website</td>
                        <td>{{ $transaction->customerDetails->website }}</td>
                    </tr>
                    <tr>
                        <td>phone</td>
                        <td>{{ $transaction->customerDetails->phone }}</td>
                    </tr>
                    <tr>
                        <td>fax</td>
                        <td>{{ $transaction->customerDetails->fax }}</td>
                    </tr>
                </tbody>
            </table>
        </section>i
        @endif

        <section>
            <p class="center small">Integrate with the Braintree SDK for a secure and seamless checkout</p>
        </section>

        <section>
            <a class="button secondary full" href="https://developers.braintreepayments.com/guides/drop-in" target="_blank">
                <span>See the Docs</span>
            </a>
        </section>
    </article>
</aside>


</body>
</html>
