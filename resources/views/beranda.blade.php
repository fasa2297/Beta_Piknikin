<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="property/beranda_styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="property/beranda_script.js"></script>
    <title>Piknikin | {{ $title }}</title>
</head>
<body>
    @include('partials.navbar') <!--(Navbar) this part moved in partials/navbar-->
    <div class="container-content">
      @include('partials.input') <!--(Some Input field) this part moved in partials/input-->
      <div class="in_fotoMuseum">
        <p>Foto Museum<a id="notifnull_Foto">&nbsp;</a></p>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#uploadfoto">Pilih Foto</button>
        <div class="modal fade" id="uploadfoto" tabindex="-1" aria-labelledby="uploadfotoLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="uploadfotoLabel"><b>Unggah Foto Museum</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <label>
                *Max hanya 1 foto .jpg/.jpeg/.png<br/>
                *Ulangi upload untuk mengganti file foto</label><br/><br/>
                <input type="file" id="value_fotoMuseum" onchange="showPreview(event);" accept="image/*"/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-dark" id="showimage" >Oke</button>
              </div>
            </div>
          </div>
        </div> 
        <img id="image-preview" alt="image preview"/><br/>  
      </div> 
      <br/>
      <button class="btn btn-danger run" id="button_submit" type="submit" value="Buat Destinasi" style="width: 150px" onclick="ValidateForm()">Buat Destinasi</button> 
    </div>
  </body>
<script type="text/javascript">
  $(document).ready(function () {
    $(document).on("click", ".run", function (e) {
        e.preventDefault();
        const sn = document.getElementById("t_senin").value;
        const sl = document.getElementById("t_selasa").value;
        const rb = document.getElementById("t_rabu").value;
        const km = document.getElementById("t_kamis").value;
        const jm = document.getElementById("t_jumat").value;
        const sb = document.getElementById("t_sabtu").value;
        const mg = document.getElementById("t_minggu").value;
        let schedule = (sn+" "+sl+" "+rb+" "+km+" "+jm+" "+sb+" "+mg);
        //console.log(schedule);
        let ktg = document.querySelector('input[name="ktg"]:checked').value;
        console.log(ktg);
        var data = {
            nama: $("#value_namaMuseum").val(),
            alamat: $("#value_alamatMuseum").val(),
            deskripsi: $("#value_deskripsiMuseum").val(),
            jambuka: schedule,
            hargatiket: $("#value_hargaMuseum").val(),
            katagori: ktg
            //'namafoto':
        };
        console.log(data);
    });
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</html>