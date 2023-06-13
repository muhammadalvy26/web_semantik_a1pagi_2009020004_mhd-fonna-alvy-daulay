$("#simpan").click(function(){
    console.log("Ok")
    var npm = $("#npm").val()
    if (npm == "") {
        $("#lihat_npm").text("NPM MASIH KOSONG!")
    }else{
        $("#lihat_npm").text("")
    }

    var nama_mahasiswa = $("#nama_mahasiswa").val()
    if (nama_mahasiswa == "") {
        $("#lihat_nama_mahasiswa").text("Nama Mahasiswa masih kosong!")
    }else{
        $("#lihat_nama_mahasiswa").text("")
    }

    var tgl_lahir = $("#tgl_lahir").val()
    if (tgl_lahir == "") {
        $("#lihat_tgl_lahir").text("Tanggal Lahir masih kosong!")
    }else{
        $("#lihat_tgl_lahir").text("")
    }

   var jurusan = $("#jurusan").val()
   if (jurusan == "") {
        $("#lihat_jurusan").text("Jurusan Belum dipilih!")
   }else{
        $("#lihat_jurusan").text("")
   }

    var alamat = $("#alamat").val()
    if (alamat == "") {
        $("#lihat_alamat").text("Alamat belum di isi!")
    }else{
        $("#lihat_alamat").text("")
    }

    if (npm != "" && nama_mahasiswa != "" && tgl_lahir !="" && jurusan !="" && alamat !="") {
        $("#alert_berhasil").html(`
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> Data Berhasil Ditambahkan.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        `)
    }


})