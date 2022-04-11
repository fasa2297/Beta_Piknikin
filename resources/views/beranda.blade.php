<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="property/beranda_styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="property/beranda_script.js"></script>
    
    <title>Piknikin | {{ $title }}</title>
</head>
<body>
    @include('partials.navbar') <!--(Navbar) this part moved in partials/navbar-->
    <div class="container-content">
    <form method="post" action="/beranda" enctype="multipart/form-data">
      @include('partials.input') <!--(Some parts of input) this part moved in partials/input-->
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
                *Maksimal hanya 1 foto dalam 1 file .jpg/.jpeg/.png<br/>
                *Ulangi unggah foto untuk merubah file foto</label><br/><br/>
                <input type="file" class="form-control" id="value_fotoMuseum" name="value_fotoMuseum" onchange="showPreview(event);" accept="image/*"/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="showimage">Simpan</button>
              </div>
            </div>
          </div>
        </div>
        <img id="image-preview" alt="image preview"/><br/>
        <ul id="savefrom_errList"></ul>
      </div>
      <br/>
      <button class="btn btn-danger run" id="button_submit" type="submit" value="Buat Destinasi" style="width: 150px" onclick="ValidateForm()">Buat Destinasi</button>
    </form>
    </div>
</body>

<script  type="text/javascript">
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

            var nama      = $('#value_namaMuseum').val();
            var alamat    = $('#value_alamatMuseum').val();
            var deskripsi = $('#value_deskripsiMuseum').val();
            var jambuka   = schedule;
            var hargatiket= $('#value_hargaMuseum').val();
            var katagori  = document.querySelector('input[name="ktg"]:checked').value;
            var namafoto  = $('#value_fotoMuseum').val();

            if(nama!="" || alamat!="" || deskripsi!="" || hargatiket!=""){
              fd = new FormData();
              fd.append('nama', nama);
              fd.append('alamat', alamat);
              fd.append('deskripsi', deskripsi);
              fd.append('jambuka', jambuka);
              fd.append('hargatiket',hargatiket);
              fd.append('katagori', katagori);
              fd.append('namafoto', $('#value_fotoMuseum').get(0).files[0]);
              
              console.log(fd);
              $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });

              $.ajax({
                  url: "/beranda",
                  type:"POST",
                  enctype: 'multipart/form-data',
                  processData: false,
                  contentType: false,
                  cache: false,
                  data: fd,//data
                  dataType: "json",
                  success:function(response){
                      alert("Informasi museum berhasil dibuat, Anda akan diarahkan ke menu Daftar");
                      //location.reload();
                      window.location.replace("/daftar")
                  },
                  statusCode: {
                    500: function(){
                            alert("Error");
                        }
                  }
              });
            }else{
              alert("Silahkan lengkapi input data");
            }  
          });
      });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</html>
