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
            <h5 class="card-title">Indomie</h5>
            <p class="card-text">Indomie goreng + Telor dadar enak banget guys.</p>
            <form action="/checkout" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="qty" class="form-label">Jumlah pembelian</label>
                    <input type="number" class="form-control" id="qty" placeholder="Jumlah pembbelian" name="qty">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" placeholder="Nama" name="name">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">No tlp</label>
                    <input type="number" class="form-control" id="phone" placeholder="No tlp" name="phone">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <textarea name="address" id="address" cols="30" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Checkout</button>
            </form>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>