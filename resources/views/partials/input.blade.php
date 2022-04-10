<?php //Input component?>
<!--Nama, Alamat, Deskripsi Museum-->
    <p id="text-1" id="home">Beranda</p>
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
          <textarea name="value_deskripsiMuseum" id="value_deskripsiMuseum"></textarea>
        </div>
        <br />
    </div>

    <div class="right">
<!--Jadwal Museum-->
        <div class="in_jadwalMuseum">
          <a>Jam Buka - Tutup Museum</a><br />
          Senin
          <select id="t_senin" class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option value="Senin: 08.00-18.00">08.00-18.00</option>
            <option value="Senin: 08.00-11.00">08.00-11.00</option>
            <option value="Senin: Tutup/Libur">Libur</option>
          </select>

          Selasa
          <select id="t_selasa" class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option value="Selasa: 08.00-18.00">08.00-18.00</option>
            <option value="Selasa: 08.00-11.00">08.00-11.00</option>
            <option value="Selasa: Tutup/Libur">Libur</option>
          </select>

          Rabu
          <select id="t_rabu" class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option value="Rabu: 08.00-18.00">08.00-18.00</option>
            <option value="Rabu: 08.00-11.00">08.00-11.00</option>
            <option value="Rabu: Tutup/Libur">Libur</option>
          </select>

          Kamis
          <select id="t_kamis" class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option value="Kamis: 08.00-18.00">08.00-18.00</option>
            <option value="Kamis: 08.00-11.00">08.00-11.00</option>
            <option value="Kamis: Tutup/Libur">Libur</option>
          </select>
          <div class="harikekanan">
            Jumat
            <select id="t_jumat" class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option value="Jumat: 08.00-18.00">08.00-18.00</option>
              <option value="Jumat: 08.00-11.00">08.00-11.00</option>
              <option value="Jumat: Tutup/Libur">Libur</option>
            </select>
            Sabtu
            <select id="t_sabtu" class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option value="Sabtu: 08.00-18.00">08.00-18.00</option>
              <option value="Sabtu: 08.00-11.00">08.00-11.00</option>
              <option value="sabtu: Tutup/Libur">Libur</option>
            </select>
            Minggu
            <select id="t_minggu" class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option value="Minggu: 08.00-18.00">08.00-18.00</option>
              <option value="Minguu: 08.00-11.00">08.00-11.00</option>
              <option value="Minggu: Tutup/Libur">Libur</option>
            </select>
          </div>
        </div>
        <br /><br /><br />
<!--Harga Museum dan Katagori Museum-->
        <div class="in_hargaMuseum">
          <a>Harga Tiket Museum</a><a id="notifnull_Harga">&nbsp;</a><br />
          <input id="value_hargaMuseum" type="text" placeholder="Rp." />
        </div>
        <br />

        <div class="in_katagoriMuseum">
          <a>Katagori Museum</a><br />
          
          <input type="radio" id="check1" name="ktg" value="Seni" checked="checked"/>&nbsp;Seni<i style="font-size: 10px; color:grey">&nbsp;&nbsp;(default)</i><br />
          <input type="radio" id="check2" name="ktg" value="Budaya"/>&nbsp;Budaya<br />
          <input type="radio" id="check3" name="ktg" value="Sejarah"/>&nbsp;Sejarah
        </div>
    </div>