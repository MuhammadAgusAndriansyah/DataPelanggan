<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Pelanggan</title>
</head>
<body>
<br>
    <div class="container" style="margin-top: 80px">
         <div class="container-fluid">
                <div class="card">
                <div class="card">
                    <div class="card-header">
                        <strong>DATA PELANGGAN</strong>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('datapelanggans.create') }}" class="btn btn-md btn-success" style="margin-bottom: 25px">Tambah Data</a>
                        <table class="table table-bordered" id="myTable" >
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">NAMA PELANGGAN</th>
                                    <th scope="col">ALAMAT</th>
                                    
                                    <th scope="col">OPSI</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datapelanggans as $d => $datapelanggan)
                                <tr>
                                  
                                    <td>{{ $datapelanggan->id_pelanggan }}</td>
                                    <td>{{ $datapelanggan->nama_pelanggan }}</td>
                                    <td>{{ $datapelanggan->alamat }}</td>
                                   
                                    
                                    
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('datapelanggans.destroy', $datapelanggan->id_pelanggan) }}" method="POST">
                                            <a href="{{ route('datapelanggans.edit', $datapelanggan->id_pelanggan) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
          $('#myTable').DataTable();
        } );
    </script>

</body>
</html>