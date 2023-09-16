<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="mt-4 ms-3">
        <h1>Hello, world!</h1>
    </div>

    <div class="card ms-3" style="width: 18rem;">
        <img src="{{asset('assets/img/indomie.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Detail Transaksi</h5>
            <table>
                <tr>
                    <td>Nama</td>
                    <td> : {{ $order->name }}</td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td> : {{ $order->phone }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td> : {{ $order->address }}</td>
                </tr>
                <tr>
                    <td>Quantity</td>
                    <td> : {{ $order->qty }}</td>
                </tr>
                <tr>
                    <td>Total Price</td>
                    <td> : {{ $order->total_price }}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td> : {{ $order->status }}</td>
                </tr>
            </table>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>