<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Invoice</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        @media print {
            @page {
                size: A3;
            }
        }

        ul {
            padding: 0;
            margin: 0 0 1rem 0;
            list-style: none;
        }

        body {
            font-family: "Inter", sans-serif;
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        table th,
        table td {
            border: 1px solid silver;
        }

        table th,
        table td {
            text-align: right;
            padding: 8px;
        }

        h1,
        h4,
        p {
            margin: 0;
        }

        .container {
            padding: 20px 0;
            width: 1000px;
            max-width: 90%;
            margin: 0 auto;
        }

        .inv-title {
            padding: 10px;
            border: 1px solid silver;
            text-align: center;
            margin-bottom: 30px;
        }

        .inv-logo {
            width: 150px;
            display: block;
            margin: 0 auto;
            margin-bottom: 40px;
        }

        /* header */
        .inv-header {
            display: flex;
            margin-bottom: 20px;
        }

        .inv-header> :nth-child(1) {
            flex: 2;
        }

        .inv-header> :nth-child(2) {
            flex: 1;
        }

        .inv-header h2 {
            font-size: 20px;
            margin: 0 0 0.3rem 0;
        }

        .inv-header ul li {
            font-size: 15px;
            padding: 3px 0;
        }

        /* body */
        .inv-body table th,
        .inv-body table td {
            text-align: left;
        }

        .inv-body {
            margin-bottom: 30px;
        }

        /* footer */
        .inv-footer {
            display: flex;
            flex-direction: row;
        }

        .inv-footer> :nth-child(1) {
            flex: 2;
        }

        .inv-footer> :nth-child(2) {
            flex: 1;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="inv-title">
            <h1>Invoice # 424773</h1>
        </div>
        <img src="./ZAF.jpg" class="inv-logo" />
        <div class="inv-header">
            <div>
                <h2>ABC Private Limited</h2>
                <ul>
                    <li>Birmingom BS -435</li>
                    <li>United Kingdom</li>
                    <li>888-555-2311 | eadzhosting@gmail.com</li>
                </ul>
                <h2>ABC Private Limited</h2>
                <ul>
                    <li>Birmingom BS -435</li>
                    <li>United Kingdom</li>
                    <li>888-555-2311 | eadzhosting@gmail.com</li>
                </ul>
            </div>
            <div>
                <table>
                    <tr>
                        <th>Issue Date</th>
                        <td>12-02-2018</td>
                    </tr>
                    <tr>
                        <th>Due Date</th>
                        <td>12-02-2018</td>
                    </tr>
                    <tr>
                        <th>Sub total</th>
                        <td>6500</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <td>7000</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="inv-body">
            <table>
                <thead>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h4>Hosting</h4>
                            <p>Some kind of hositing</p>
                        </td>
                        <td>1</td>
                        <td>2000</td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Hosting</h4>
                            <p>Some kind of hositing</p>
                        </td>
                        <td>1</td>
                        <td>2000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="inv-footer">
            <div>
                <!-- required -->
            </div>
            <div>
                <table>
                    <tr>
                        <th>Sub total</th>
                        <td>200</td>
                    </tr>
                    <tr>
                        <th>Sales tax</th>
                        <td>200</td>
                    </tr>
                    <tr>
                        <th>Grand total</th>
                        <td>1200</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
