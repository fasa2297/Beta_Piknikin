<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="fileaset/Logo web.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="property/daftar_styles.css" />
    <script type="text/javascript" src="property/daftar_script.js"></script>
    <title>Piknikin | {{ $title }}</title>
</head>
<body>
    @include('partials.navbar')
    <div class="container-content">
        <p id="text-1">Daftar</p>
        <p id="text-2">Tempat Wisata Museum</p>
      <div class="table-responsive">
        <table class="table table-hover table-bordered" style="text-align: center">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama Museum</th>
              <th>Alamat</th>
              <th class="col col-lg-3">Deskripsi</th>
              <th class="col col-lg-2">Jadwal</th>
              <th>Harga</th>
              <th>Katagori</th>
              <th>Foto</th>
              <th>Ubah</th>
              <th>Hapus</th>
            </tr>
          </thead>
          <tbody>
          @foreach($lists as $list)
            <tr>
                <td scope="row mb-9">{{$list->id}}</td>
                    <td>{{$list->nama}}</td>
                    <td>{{$list->alamat}}</td>
                    <td>{{$list->deskripsi}}</td>
                    <td>{{$list->jambuka}}</td>
                    <td>{{$list->hargatiket}}</td>
                    <td>{{$list->katagori}}</td>
                    <td><img src="uploads/dataImage/{{ $list->namafoto }}" width="176px" height="144px" alt="Image"></td>
                    
                    <td><a id="button_ubah" type="button" class="btn btn-warning" href="{{ url("daftar/" . $list->id . "/editdaftar/") }}">Ubah</a></td>
                    <form method="POST" action="{{ url('daftar/' . $list->id ) }}"  style="display:inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data museum tersebut?')">
                    @csrf
                    @method('DELETE')
                        <td><button id="button_hapus" class="btn btn-danger">Hapus</button></td>
                    </form>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</body>
</html>
