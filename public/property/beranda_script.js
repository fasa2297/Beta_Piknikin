/*
function Beranda() {
    window.location.href = "index.html";
}
function Daftar() {
    window.location.href = "../Daftar/index.html";
}
function Logout() {
    window.location.href = "../Login/index.html";
}
*/
$(document).ready(function () {
    // Close modal on button click
    $(".btn").click(function () {
        $("#uploadfoto").modal("hide");
    });
});
function onlyNumberKey(evt) {
    // Only ASCII character in that range allowed
    var ASCIICode = evt.which ? evt.which : evt.keyCode;
    if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) return false;
    return true;
}
function showPreview(event) {
    if (event.target.files.length > 0) {
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("image-preview");
        preview.src = src;
        preview.style.display = "block";
    }
}

function ValidateForm() {
    let namaMuseum = document.getElementById("value_namaMuseum").value;
    let alamatMuseum = document.getElementById("value_alamatMuseum").value;
    let deskripsiMuseum = document.getElementById("value_deskripsiMuseum").value;
    let fotoMuseum = document.getElementById("value_fotoMuseum").value;
    let hargaMuseum = document.getElementById("value_hargaMuseum").value;

    if (namaMuseum == "") {
        document.getElementById("notifnull_Nama").innerHTML = "   *Perlu diisi";
    }
    if (alamatMuseum == "") {
        document.getElementById("notifnull_Alamat").innerHTML = "   *Perlu diisi";
    }
    if (deskripsiMuseum == "") {
        document.getElementById("notifnull_Deskripsi").innerHTML ="   *Perlu diisi";
    }
    if (fotoMuseum == "") {
        document.getElementById("notifnull_Foto").innerHTML = "   *Perlu diisi";
    }
    if (hargaMuseum == "") {
        document.getElementById("notifnull_Harga").innerHTML = "   *Perlu diisi";
    }
}
