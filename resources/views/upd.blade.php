<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Data UTS UBG</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Soal Ujian - <strong>EDIT DATA</strong> 
                </div>
                <div class="card-body">
                    <a href="/" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/edit/{{ $data->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Nama Matakuliah</label>
                            <input type="text" name="namamk" class="form-control" placeholder="Nama Matakuliah .." value=" {{ $data->nama_mk }}">
 
                            @if($errors->has('namamk'))
                                <div class="text-danger">
                                    {{ $errors->first('namamk')}}
                                </div>
                            @endif
 
                        </div>
 

                        <div class="form-group">
                            <label>Dosen</label>
                            <input type="text" name="dosen" class="form-control" placeholder="Nama Dosen .." value=" {{ $data->dosen }}">
 
                            @if($errors->has('dosen'))
                                <div class="text-danger">
                                    {{ $errors->first('dosen')}}
                                </div>
                            @endif
 
                        </div>

                        
                        <div class="form-group">
                            <label>Jumlah Soal</label>
                            <input type="text" name="jml" class="form-control" placeholder="Isi Jumlah Soal .." value=" {{ $data->jumlah_soal }}">
 
                            @if($errors->has('jml'))
                                <div class="text-danger">
                                    {{ $errors->first('jml')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="ket" class="form-control" placeholder="Isi Keterangan .."> {{ $data->keterangan }} </textarea>
 
                             @if($errors->has('ket'))
                                <div class="text-danger">
                                    {{ $errors->first('ket')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>