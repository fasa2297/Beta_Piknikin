<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="{{ asset('assets/jquery.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <title>Piknikin | {{ $title }}</title>
</head>
<body style="width:100%">
    <div class="row justify-content-center" style="margin-top:2%">
        <div class="col-6">
            <h4 class="text-center mb-4"><b>Edit Pemesanan Tiket</b></h4>
            <form class="border" style="padding:20px" method="POST" action="/{{$action }}" style="display:inline" onsubmit="return confirm('Apakah Anda yakin ingin mengubah data pemesanan tiket tersebut?')">
                @csrf
                <input type="hidden" name="_method" value="{{ $method }}" />
                <div class="form-group" style="display:flex; flex-direction: row;">
                    <label class="col-sm-2 col-form-label" style="padding:10px;">No</label>
                    <input type="text" name="id" class="form-control" value="{{isset($data)?$data->id:'' }}" readonly/>
                </div>
                <div class="form-group" style="display:flex; flex-direction: row;">
                    <label class="col-sm-2 col-form-label" style="padding:10px;">Nama Pemesan</label>
                    <input type="text" name="namapemesan" class="form-control" value="{{isset($data)?$data->namapemesan:'' }}" />
                </div>
                <div class="form-group" style="display:flex; flex-direction: row;">
                    <label class="col-sm-2 col-form-label" style="padding:10px;">Nama Museum</label>
                    <textarea name="namamuseum" class="form-control">{{isset($data)?$data->namamuseum:'' }}</textarea>
                </div>
                <div class="form-group" style="display:flex; flex-direction: row;">
                    <label class="col-sm-2 col-form-label" style="padding:10px;">Tanggal</label>
                    <textarea name="tanggal" class="form-control">{{isset($data)?$data->tanggal:'' }}</textarea>
                </div>
                <div class="form-group" style="display:flex; flex-direction: row;">
                    <label class="col-sm-2 col-form-label" style="padding:10px;">No Telp</label>
                    <textarea name="notelp" class="form-control">{{isset($data)?$data->notelp:'' }}</textarea>
                </div>
                <div class="form-group" style="display:flex; flex-direction: row;">
                    <label class="col-sm-2 col-form-label" style="padding:10px;">Jumlah Tiket</label>
                    <textarea type="number" name="jumlahtiket" class="form-control">{{isset($data)?$data->jumlahtiket:'' }}</textarea>
                </div>
                <div class="form-group" style="display:flex; flex-direction: row;">
                    <label class="col-sm-2 col-form-label" style="padding:10px;">Total Harga</label>
                    <input type="number" name="totalHrgtiket" class="form-control" value="{{isset($data)?$data->totalHrgtiket:'' }}" />
                </div>
                <div style="text-align:center">
                    <button class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
