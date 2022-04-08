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
<body style="width:100%;">
    @foreach($list as $d)
    <tr>
        <td>
            <a href="/riwayat/{{ $d->id }}/edit" class="btn btn-primary" style="background-color: #FFD700; color:black; border:none">Ubah</a>
        </td>
        <td>
            <form method="post" action="/riwayat/{{ $d->id }}" style="display:inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus riwayat data tersebut?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Hapus</button>
            </form>
        </td>
        <td>{{ $d->id }}</td>
        <td>{{ $d->namapemesan }}</td>
        <td>{{ $d->namamuseum }}</td>
        <td>{{ $d->tanggal }}</td>
        <td>{{ $d->notelp }}</td>
        <td>{{ $d->jumlahtiket }}</td>
        <td>{{ $d->totalHrgtiket }}</td>
    </tr>
    @endforeach
</body>
</html>
