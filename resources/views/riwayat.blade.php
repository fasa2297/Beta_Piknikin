<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="property/daftar_styles.css" />
    <script type="text/javascript" src="property/daftar_script.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    -->
    <title>Piknikin | {{ $title }}</title>
</head>
<body>
    @include('partials.navbar')
    <div class="container-content">
      <p id="text-1">Riwayat</p>
      <p id="text-2">Pembelian Tiket Wisata Museum</p>
      <table class="table table-hover table-bordered" style="text-align: center">
        <thead>
          <tr>
            <th scope="col" class="col col-lg-0">No</th>
            <th scope="col" class="col col-lg-2">Nama Pemesan</th>
            <th scope="col" class="col col-lg-2">Nama Museum</th>
            <th scope="col" class="col col-lg-1">Tanggal</th>
            <th scope="col" class="col col-lg-1">No Telepon</th>
            <th scope="col" class="col col-lg-2">Jumlah Pesanan Tiket</th>
            <th scope="col" class="col col-lg-2">Total Harga Tiket</th>
            <th id="col_ubah" scope="col" class="col col-lg-1">Ubah Data Pesanan</th>
            <th id="col_hapus"  scope="col" class="col col-lg-1">Hapus Data Pesanan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row mb-9">1</td>
              <td>Joko</td>
              <td>Museum Sonobudoyo</td>
              <td>20/04/22</td>
              <td>081224356897</td>
              <td>2</td>
              <td>60.000</td>
              <td><button id="button_ubah" type="button" class="btn btn-warning" href="/edit">Ubah</button></td>
              <td><button id="button_hapus" type="button" class="btn btn-danger" href="/delete">Hapus</button></td>
          </tr>
        </tbody>
      </table>
    </div>
</body>
</html>
