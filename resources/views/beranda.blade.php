<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="property/beranda_styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="text/javascript" src="property/beranda_script.js"></script>
    <title>Piknikin | {{ $title }}</title>
</head>
<body>
    @include('partials.navbar')
  <form>
    <div class="container-content">
      <p id="text-1">Beranda</p>
      <p id="text-2">Input Informasi Museum Piknikin</p>
      <div class="left">
        <div class="in_namaMuseum">
          <a>Nama Museum</a><a id="notifnull_Nama">&nbsp;</a><br />
          <input id="value_namaMuseum" type="text" />
        </div>
        <br />
        <div class="in_alamatMuseum">
          <a>Alamat Museum</a><a id="notifnull_Alamat">&nbsp;</a><br />
          <input id="value_alamatMuseum" type="text" />
        </div>
        <br />
        <div class="in_deskripsiMuseum">
          <a>Deskripsi Museum</a><a id="notifnull_Deskripsi">&nbsp;</a><br />
          <textarea id="value_deskripsiMuseum"></textarea>
        </div>
        <br />
      </div>
      <div class="right">
        <div class="in_jadwalMuseum">
          <a>Jam Buka - Tutup Museum</a><br />
          Senin
          <select id="t_senin" class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Pilih Waktu</option>
            <option value="1">08.00-18.00</option>
            <option value="2">08.00-11.00</option>
            <option value="3">Libur</option>
          </select>

          Selasa
          <select id="t_selasa" class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Pilih Waktu</option>
            <option value="1">08.00-18.00</option>
            <option value="2">08.00-11.00</option>
            <option value="3">Libur</option>
          </select>

          Rabu
          <select id="t_rabu" class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Pilih Waktu</option>
            <option value="1">08.00-18.00</option>
            <option value="2">08.00-11.00</option>
            <option value="3">Libur</option>
          </select>

          Kamis
          <select id="t_kamis" class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Pilih Waktu</option>
            <option value="1">08.00-18.00</option>
            <option value="2">08.00-11.00</option>
            <option value="3">Libur</option>
          </select>
          <div class="harikekanan">
            Jumat
            <select id="t_jumat" class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Pilih Waktu</option>
              <option value="1">08.00-18.00</option>
              <option value="2">08.00-11.00</option>
              <option value="3">Libur</option>
            </select>
            Sabtu
            <select id="t_sabtu" class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Pilih Waktu</option>
              <option value="1">08.00-18.00</option>
              <option value="2">08.00-11.00</option>
              <option value="3">Libur</option>
            </select>
            Minggu
            <select id="t_minggu" class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Pilih Waktu</option>
              <option value="1">08.00-18.00</option>
              <option value="2">08.00-11.00</option>
              <option value="3">Libur</option>
            </select>
          </div>
        </div>
        <br /><br /><br />
        <div class="in_hargaMuseum">
          <a>Harga Tiket Museum</a><a id="notifnull_Harga">&nbsp;</a><br />
          <input id="value_hargaMuseum" type="text" placeholder="Rp." />
        </div>
        <br />
        <div class="in_katagoriMuseum">
          <a>Katagori Museum</a><br />
          <input type="checkbox" onchange="getChecked()" id="check1" />&nbsp;Seni<br />
          <input type="checkbox" onchange="getChecked()" id="check2" />&nbsp;Budaya<br />
          <input type="checkbox" onchange="getChecked()" id="check3" />&nbsp;Sejarah
        </div>
      </div>
      <div class="in_fotoMuseum">
          <a>Foto Museum</a><a id="notifnull_Foto">&nbsp;</a><br/>
          <label>*Hanya 1 foto berformat jpg/jpeg/png<br/>
          ! Ulangi upload untuk mengganti file foto
          </label><br /><br />
          <img id="image-preview" alt="image preview"/><br/>
          <input type="file" id="value_fotoMuseum" onchange="showPreview(event);" accept="image/*" />
      </div>
      <br />
      <input class="btn btn-primary" id="button_submit" type="submit" value="Buat Destinasi" style="width: 150px" onclick="ValidateForm()" />
    </div>
  </form>
</body>
</html>