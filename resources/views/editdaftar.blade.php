<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!--<script src="{{ asset('assets/jquery.js') }}"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <title>Piknikin | {{ $title }}</title>
</head>
<body style="width:100%">
    <div class="row justify-content-center" style="margin-top:2%">
        <div class="col-6">
            <h4 class="text-center mb-4"><b>Edit Museum</b></h4>
            <form class="border" style="padding:20px" method="POST" action="/{{$action }}" style="display:inline" onsubmit="return confirm('Apakah Anda yakin ingin mengubah data museum ini?')">
                @csrf
                <input type="hidden" name="_method" value="{{ $method }}" />
                <div class="form-group" style="display:flex; flex-direction: row;">
                    <label class="col-sm-2 col-form-label" style="padding:10px;">No</label>
                    <input type="text" name="id" class="form-control" value="{{isset($data)?$data->id:'' }}" readonly/>
                </div>
                <div class="form-group" style="display:flex; flex-direction: row;">
                    <label class="col-sm-2 col-form-label" style="padding:10px;">Nama Museum</label>
                    <input type="text" name="nama" class="form-control" value="{{isset($data)?$data->nama:'' }}" />
                </div>
                <div class="form-group" style="display:flex; flex-direction: row;">
                    <label class="col-sm-2 col-form-label" style="padding:10px;">Alamat</label>
                    <textarea type="text" name="alamat" class="form-control">{{isset($data)?$data->alamat:'' }}</textarea>
                </div>
                <div class="form-group" style="display:flex; flex-direction: row;">
                    <label class="col-sm-2 col-form-label" style="padding:10px;">Deskripsi</label>
                    <textarea type="text" name="deskripsi" class="form-control">{{isset($data)?$data->deskripsi:'' }}</textarea>
                </div>
                <div class="form-group" style="display:flex; flex-direction: row;">
                    <label class="col-sm-2 col-form-label" style="padding:10px;">Jam Buka/Tutup</label>
                    <textarea type="text" name="jambuka" class="form-control">{{isset($data)?$data->jambuka:'' }}</textarea>
                </div>
                <div class="form-group" style="display:flex; flex-direction: row;">
                    <label class="col-sm-2 col-form-label" style="padding:10px;">Harga Tiket</label>
                    <textarea type="text" name="hargatiket" class="form-control">{{isset($data)?$data->hargatiket:'' }}</textarea>
                </div>
                <div class="form-group" style="display:flex; flex-direction: row;">
                    <label class="col-sm-2 col-form-label" style="padding:10px;">Katagori</label>
                    <textarea type="text" name="katagori" class="form-control">{{isset($data)?$data->katagori:'' }}</textarea>
                </div>
                
                <div style="text-align:center">
                    <button class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>