<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran Anggota UKM Baru</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="../jquery/jquery-3.4.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>

    <div class="container p-3 my-3 border">
    <h1 class="text-center">Form Pendaftaran Anggota UKM Baru</h1>
        <form id="form" method="post">
            <!-- data diri -->
            <div class="alert alert-primary">
                <strong>Data Diri</strong>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Nama Lengkap:</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nomor Induk Mahasiswa (NIM):</label>
                        <input type="text" name="nim" class="form-control" placeholder="Masukan NIM">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Jenis Kelamin:</label>
                        <select class="form-control" name="jk">
                            <option>Pilih</option>
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Nomor Whatsapp:</label>
                        <input type="text" name="no_telp" class="form-control" placeholder="Masukan Nomor WA">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukan Email">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Jurusan:</label>
                        <select class="form-control" name="jurusan">
                            <option>Pilih</option>
                            <option value="1">Teknologi Informasi</option>
                            <option value="2">Teknik</option>
                            <option value="3">Kesehatan</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Program Studi:</label>
                        <select class="form-control" name="prodi">
                            <option>Pilih</option>
                            <option value="1">Teknik Informatika</option>
                            <option value="2">Teknik Komputer</option>
                            <option value="3">Manajemen Informatika</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Angkatan</label>
                        <input type="text" name="angkatan" class="form-control" placeholder="Tahun Angkatan">
                    </div>
                </div>
            </div>

            <!-- data ukm -->
            <div class="alert alert-primary">
                <strong>Data Unit Kegiatan Mahasiswa (UKM)</strong>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Unit Kegiatan Mahasiswa:</label>
                        <select class="form-control" name="ukm">
                            <option>Pilih</option>
                            <option value="1">Unit Kegiatan Mahasiswa English Club (E-CLUB)</option>
                            <option value="2">Unit Kegiatan Mahasiswa Olahraga (UKM-O)</option>
                            <option value="3">Unit Kegiatan Mahasiswa Pramuka Racana Arjuna-Srikandi Gugusdepan Jember 02.155-02.156 Pangkalan Politeknik Negeri Jember (RASPOL)</option>
                            <option value="4">Unit Kegiatan Mahasiswa Korps Suka Rela Palang Merah Indonesia Unit Politeknik Negeri Jember (KSR PMI UNIT POLIJE)</option>
                            <option value="5">Unit Kegiatan Mahasiswa Resimen Mahasiswa 877 (MENWA)</option>
                            <option value="6">Unit Kegiatan Mahasiswa Koperasi Mahasiswa BERDIKARI (KOPMA BERDIKARI)</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Divisi:</label>
                        <select class="form-control" name="kabupaten" id="kabupaten">
                            <option>Pilih</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Alasan Bergabung Dengan UKM:</label>
                        <textarea class="form-control" name="alasan" rows="3" placeholder="Alasan"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Daftar</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>