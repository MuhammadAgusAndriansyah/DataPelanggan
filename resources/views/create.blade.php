<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Data</title>
</head>
<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <strong>Tambah Data Pelanggan</strong>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('datapelanggans.index') }}" class="btn btn-md btn-success" style="margin-bottom: 25px">Kembali</a>
                        <form action="{{ route('datapelanggans.store') }}" method="POST">
                            @csrf
                            
                            <div class="form-group">
                                <label>NAMA PELANGGAN</label>
                                <input type="text" name="nama_pelanggan" placeholder="Nama Pelanggan" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>ALAMAT</label>
                                <input type="text" name="alamat" placeholder="Alamat" class="form-control" required>
                            </div>
                            
                               
                               
                            </div>
                            <button type="submit" class="btn btn-success" class="btn btn-md btn-success" style="margin-bottom: 25px">SIMPAN</button>
                            <button type="reset" class="btn btn-warning" class="btn btn-md btn-success" style="margin-bottom: 25px">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <!-- <script>
        CKEDITOR.replace( 'content' );
    </script> -->

</body>
</html>