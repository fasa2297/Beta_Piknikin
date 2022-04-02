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
      <p id="text-1">Beranda</p>
      <p id="text-2">Daftar wisata Museum</p> 
      <table class="table table-hover table-bordered" style="text-align: center">
        <thead>
          <tr>
            <th scope="col" class="col col-lg-1">No</th>
            <th scope="col" class="col col-lg-3">Nama Museum</th>
            <th id="col_ubah" scope="col" class="col col-lg-2">Ubah Data Museum</th>
            <th id="col_hapus"  scope="col" class="col col-lg-2">Hapus Data Museum</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row mb-3">1</td>
              <td>Mark</td>
              <td><button id="button_ubah" type="button" class="btn btn-warning">Ubah</button></td>
              <td><button id="button_hapus" type="button" class="btn btn-danger">Hapus</button></td>
          </tr>
        </tbody>
      </table>
    </div>


    <!--
    <div class="container-content">
      <p id="text-1">Beranda</p>
      <p id="text-2">Daftar wisata Museum</p>          
      <table class="table table-striped">
        <thead>
          <tr>
            <th id="index">Nama Museum</th>
            <th id="col_nama">Nama Museum</th>
            <th id="col_edit">Edit</th>
            <th id="col_hapus">Hapus</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Museum</td>
            <th><a type="Edit" id="edit" href="#">📝</a></th>
            <th><a type="Hapus" id="hapus" href="#">❌</a></th>
          </tr>
        </tbody>
      </table>
    </div>
  -->
</body>
</html>