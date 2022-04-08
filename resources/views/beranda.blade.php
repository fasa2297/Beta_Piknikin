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
    <!--form action="/beranda" name="inputanData" id="inputanForm" class="btn-submit" method="post">
      @csrf </form-->
      @include('partials.input') 
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
                <input type="file" id="value_fotoMuseum" onchange="showPreview(event);" accept="image/*"/>
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
    </div>
</body>
<script  type="text/javascript">
      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

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
            let ktg = document.querySelector('input[name="ktg"]:checked').value;
            
            let nama= $("#value_namaMuseum").val();
            let alamat= $("#value_alamatMuseum").val();
            let deskripsi= $("#value_deskripsiMuseum").val();
            let jambuka= schedule;
            let hargatiket= $("#value_hargaMuseum").val();
            let katagori= ktg;
            let namafoto= null;
            
            $.ajax({
              url: "/save",
              type:"POST",
              data:{
                "_token": "{{ csrf_token() }}",
                nama: nama,
                alamat: alamat,
                deskripsi: deskripsi,
                jambuka: jambuka,
                hargatiket: hargatiket,
                katagori: katagori,
                namafoto: namafoto,
              },
              success:function(response){
                  alert("OKe");
              },
              statusCode: {
                500: function(){
                         alert("Error");
                     } 
              }
            });
        });
      });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
        /*
        var data = {
            nama: $("#value_namaMuseum").val(),
            alamat: $("#value_alamatMuseum").val(),
            deskripsi: $("#value_deskripsiMuseum").val(),
            jambuka: schedule,
            hargatiket: $("#value_hargaMuseum").val(),
            katagori: ktg,
            namafoto: null
        };

        console.log(data);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            type:"POST",
            url:"/beranda",
            data: data,
            datatype: "json",
            succes: function (response){
              console.log(response)
              /*
              if(resoinse.status == 400){

                $('#savefrom_errList').html("");
                $('#savefrom_errList').addClass('alert alert-danger');
                $.each(response.errors, function(key, err_values){
                  $('#savefrom_errList').append('<li>'+err_values+'</li>')
                });
              }
              else{
                $('#saveform_errList').html("");
                $('#success_message').addClass('alert alert-success')
                $('#success-message').text(response.message)
              }
            }
        });*/
</script>   

</html>