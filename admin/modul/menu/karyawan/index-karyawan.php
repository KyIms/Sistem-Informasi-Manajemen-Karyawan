<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Dashboard Menu Karyawan</h2>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header ">
                    <div class="card-title d-flex justify-content-between">
                        Data Karyawan
                        <a href="?page=menu&act=add" class="btn btn-primary btn-sm text-white border-radius-50"><i
                                class="fa fa-plus"></i> Tambah Karyawan</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">

                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <!-- isi table -->
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>K001</td>
                                        <td>Dicky Imam Sobari</td>
                                        <td>dickyimamsobari@gmail.com</td>
                                        <td>Jl.Prasetya No.17</td>
                                        <td>Warek 1</td>
                                        <td>
                                            <a class="btn btn-info btn-sm"
                                                href="?page=menu&act=edit&id=<?= $g['id_guru'] ?>"><i
                                                    class="far fa-edit"></i></a>
                                            <a class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin Hapus Data ??')"
                                                href="?page=menu-karyawan&act=del&id=<?= $g['id_guru'] ?>"><i
                                                    class=" fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>K002</td>
                                        <td>Bagas</td>
                                        <td>bagas@gmail.com</td>
                                        <td>Ciledug</td>
                                        <td>Staff</td>
                                        <td>
                                            <a class="btn btn-info btn-sm"
                                                href="?page=menu&act=edit&id=<?= $g['id_guru'] ?>"><i
                                                    class="far fa-edit"></i></a>
                                            <a class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin Hapus Data ??')"
                                                href="?page=menu-karyawan&act=del&id=<?= $g['id_guru'] ?>"><i
                                                    class=" fas fa-trash"></i></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>