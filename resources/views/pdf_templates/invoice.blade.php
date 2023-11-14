<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <meta charset="utf-8">
    <style>
        body {
            font-weight: 400;
            color: #322d28;
        }
        main {
            margin-top: 4rem;
            min-height: calc(100vh - 107px);
            .inner-container {
                max-width: 800px;
                margin: 0 auto;
            }
        }
        .invoice .header {
            width: 60%;
        }
        .header_title {
            text-align: right;
            font-weight: 200;
            font-size: 3rem;
            color: #000;
        }
        /* table {
            background: #fff;
            width: 100%;
        }

        .intro {
            font-size: 1.5rem;
        }

        .intro td {
            padding-top: 10px;
        } */

        .order {
            font-size: 1em;
            color: #db6215;
            text-align: right;
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
            gap: 10px;
        }

        .order .amount {
            font-size: 0.7em;
        }

        .details table {
            padding-top: 40px;
        }

        .details table tr td {
            border: 0px solid #ccc;
            border-bottom-width: 1px;
            padding-bottom: 15px;
            padding-top: 15px;
        }

        .title {
            font-size: 1.2rem;
            color: #1779ba;
        }

        .item_value {
            font-size: 1.2rem;
            font-weight: bold;
        }

        /* my table */
 /* my table */
 table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #f2f2f2;
  color: #000;
}
   
    </style>
</head>
<body>
    <div class="row expanded">
        <main class="columns">
            <div class="inner-container">
                <section class="row">
                    <div class="callout large invoice-container">
                        <table class="invoice">
                            <tr class="header">
                                <td class="">
                                    <img src="{{ public_path('main-logo.webp') }}" alt="" width="160" height="60" />
                                </td>
                                <td class="align-right">
                                    <h2 class="header_title">Invoice</h2>
                                </td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                              <th><strong>Order summary</strong></th>
                              <th></th>
                            </tr>
                            @foreach ($cart->lines as $line)
                                <tr>
                                    <td style="background-color:#f2f2f2;">
                                        <?php 
                                            $url = $line->purchasable->getThumbnail()->getUrl();
                                            $splitUrl = explode("/", $url);
                                            array_splice($splitUrl, 0, 3);
                                        ?>
                                        <img style="height: 124px;" src="{{ public_path(implode('/', $splitUrl)) }}" />
                                    </td>
                                    <td style="background-color:#f2f2f2;">
                                        <div>
                                            <strong>{{ $line->purchasable->getDescription() }}</strong>
                                        </div>
                                        <div style="font-style: italic; color: #444;">
                                            {{ $line->quantity }} @ {{ $line->subTotal->formatted() }}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                              <td style="background-color:#f2f2f2;">Sub Total</td>
                              <td style="background-color:#f2f2f2;">{{ $cart->subTotal->formatted() }}</td>
                            </tr>
                            @if ($shippingOption)
                                <tr>
                                <td style="background-color:#f2f2f2;">{{ $shippingOption->getDescription() }}</td>
                                <td style="background-color:#f2f2f2;">{{ $shippingOption->getPrice()->formatted() }}</td>
                                </tr>
                            @endif
                            @foreach ($cart->taxBreakdown as $tax)
                            <tr>
                              <td style="background-color:#f2f2f2;">{{ $tax['description'] }}</td>
                              <td style="background-color:#f2f2f2;">{{ $tax['total']->formatted() }}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td style="background-color:#f2f2f2;">Total</td>
                                <td style="background-color:#f2f2f2;">{{ $cart->total->formatted() }}</td>
                            </tr>
                        </table>
                        <p style="font-size:18px;text-align:center;">Thank you for checkout</p>      
                    </div>
                </section>
            </div>
        </main>
    </div>
</body>
</html>
