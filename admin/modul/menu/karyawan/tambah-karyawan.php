<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Forms</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="?page=&act=home">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="?page=menu&act=karyawan">Karyawan</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Tambah Data Karyawan</a>
            </li>
        </ul>
    </div>
    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    Tambah Data Karyawan
                </div>
                <div class="card-body">
                    <form action="?page=menu&act=proses" method="post">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input name="nama" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>No HP</label>
                            <input name="no_hp" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input name="alamat" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" type="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Jabatan</label>
                            <select name="jabatan" class="form-control">
                                <option value="Kepala Bagian">Kepala Bagian</option>
                                <option value="Kepsek">Kepala Sub Bagian</option>
                                <option value="Staff">Staff</option>
                                <option value="Warek 1">Warek 1</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Divisi</label>
                            <select name="Divisi" class="form-control">
                                <option value="Umum">Umum</option>
                                <option value="BAUK">BAUK</option>
                                <option value="Staff">BAA</option>
                                <option value="IT">IT</option>
                                <option value="Cleaning Service">Cleaning Service</option>
                                <option value="OB">OB</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">
                                <a href="?page=menu&act=karyawan"></a>Simpan</button>
                            <a href=" javascript:history.back()" class="btn btn-danger"> Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>