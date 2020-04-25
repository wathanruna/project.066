<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Data UTS UBG</title>
  </head>
  <body>
    <h1>Data Soal Ujian Tengah Semester Universitas Bumigora</h1>
    <br>
    <a href="\add" class="btn btn-primary" style="margin-left:2%">Tambah Data</a>
    
    <br>
    <br>
    <div style="padding-left:2%; padding-right:2%">
    <table class="table" >
  
  <thead class="thead-dark">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">ID</th>
      <th scope="col">Nama Matakuliah</th>
      <th scope="col">Dosen</th>
      <th scope="col">Jumlah Soal</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Ditambahkan</th>
      <th scope="col">Last Edited</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($data as $d)
    <tr>
      <th scope="row">{{ $loop->iteration}}</th>
      <td>{{ $d-> id}}</td>
      <td>{{ $d-> nama_mk}}</td>
      <td>{{ $d-> dosen}}</td>
      <td>{{ $d-> jumlah_soal}}</td>
      <td>{{ $d-> keterangan}}</td>
      <td>{{ $d-> created_at}}</td>
      <td>{{ $d-> updated_at}}</td>
      <td>
      <a href="/upd/{{ $d->id }}" class="badge badge-success">Edit</a>
      <a href="/del/{{ $d->id }}" class="badge badge-danger">Hapus</a>
      </td>
      
    </tr>
    @endforeach
   </tbody>
</table>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>