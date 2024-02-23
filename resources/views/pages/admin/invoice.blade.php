<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>

    <style type="text/css">
        @page {
            margin: 0;
        }
        body {
            margin: 0;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: x-small;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }
        .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            background-color: #333333;
            color: #FFF;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
        .address{
            text-align: left;
        }
    </style>

</head>
<body>

<div class="information">
    <table style="width: 100%">
        <tr>
            <td align="left" style="width: 40%;">
                <h3  class="address">{{$user[0]->name}}</h3>
                <h3  class="address">{{$user[0]->email}}</h3>
                <div class="address">{{$order['address']}}</div>

                <div class="address">{{$order['city']}}</div>
                <div class="address">{{$order['county']}}</div>
                <div class="address">{{$order['country']}}</div>
                <br /><br />
                Date: {{date('Y-m-d',strtotime($order['created_at']))}}
                Identifier: #{{$order['id']}}
                Status: Paid
                </pre>
            </td>
            <td align="center">
                <img src="images/logo/logomain.png" alt="Logo" width="150" class="logo"/>
            </td>
            <td align="right" style="width: 40%;">
                <h3 style="margin-left: 50px">Ireland</h3>
                <h3 style="margin-left: 40px">Ireland Safety Training Company</h3>
                <pre>
                    www.Ireland-SafetyTraining.com
                    19 Montpelier Hill
                    Arbour Hill
                    Stoneybatter, Dublin
                    D07 A5Y6, Ireland
                </pre>
            </td>
        </tr>

    </table>
</div>
<br/>
<div class="invoice">
    <h3>Invoice id: #{{$order['id']}}</h3>
    <table style="width: 100%">
        <thead>
        <tr style="font-size: 17px">
            <td>Description</td>
            <td>Quantity</td>
            <td>Total</td>
        </tr>
        </thead>
        <tbody>
        <tr style="font-size: 17px">
            <td style="width:65%">{{$order['product_name']}}</td>
            <td>1</td>
            <td align="left">€ {{$order['paid']}}</td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="1"></td>
            <td align="left" style="font-size: 20px">Total</td>
            <td align="left" style="font-size: 20px" class="gray">€{{$order['paid']}}</td>
        </tr>
        </tfoot>
    </table>
</div>

<div class="information" style="position: absolute; bottom: 0;">
    <table width="100%">
        <tr>
            <td align="left" style="width: 50%;">
                &copy; {{ date('Y') }} {{ config('app.name') }} - All rights reserved.
            </td>
        </tr>

    </table>
</div>
</body>
</html>
