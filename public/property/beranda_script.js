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
let katagoriMuseum;
function getChecked() {
    const Seni = document.getElementById("check1").checked;
    const Budaya = document.getElementById("check2").checked;
    const Sejarah = document.getElementById("check3").checked;

    if (Seni === true) {
        katagoriMuseum = "Seni";
        console.log("Seni: " + true);
    } else if (Budaya === true) {
        console.log("Budaya: " + true);
        katagoriMuseum = "Budaya";
    } else if (Sejarah === true) {
        console.log("Sejarah: " + true);
        katagoriMuseum = "Sejarah";
    }
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
    let deskripsiMuseum = document.getElementById(
        "value_deskripsiMuseum"
    ).value;
    let fotoMuseum = document.getElementById("value_fotoMuseum").value;
    let hargaMuseum = document.getElementById("value_hargaMuseum").value;
    console.log(
        namaMuseum +
            " " +
            alamatMuseum +
            " " +
            deskripsiMuseum +
            " " +
            hargaMuseum +
            " " +
            katagoriMuseum +
            " " +
            fotoMuseum
    );

    if (namaMuseum == "") {
        document.getElementById("notifnull_Nama").innerHTML = "   *Perlu diisi";
    } else {
        //input data
    }
    if (alamatMuseum == "") {
        document.getElementById("notifnull_Alamat").innerHTML =
            "   *Perlu diisi";
    } else {
        //input data
    }
    if (alamatMuseum == "") {
        document.getElementById("notifnull_Deskripsi").innerHTML =
            "   *Perlu diisi";
    } else {
        //input data
    }
    if (alamatMuseum == "") {
        document.getElementById("notifnull_Foto").innerHTML = "   *Perlu diisi";
    } else {
        //input data
    }
    if (alamatMuseum == "") {
        document.getElementById("notifnull_Harga").innerHTML =
            "   *Perlu diisi";
    } else {
        //input data
    }
}
