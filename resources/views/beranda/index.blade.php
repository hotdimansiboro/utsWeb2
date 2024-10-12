<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="background:red;">
                        <h1 class="text-center text-white"><b>{{$page_title}}</b></h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <a href="{{url('create')}}"><button class="btn btn-success">Tambah Mahasiswa</button></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">DATA MAHASISWA UPH</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-responsive">
                                    <thead class="text-center">
                                        <th>ID</th>
                                        <th>NPM</th>
                                        <th>NAMA LENGKAP</th>
                                        <th>EMAIL</th>
                                        <th>ANGKATAN</th>
                                        <th class="text-left">ACTION</th>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach($mahasiswa as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->npm}}</td>
                                            <td>{{$item->nama_lengkap}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->angkatan}}</td>
                                            <td>
                                                <div style="display: flex; gap: 10px;"> <!-- Flexbox container dengan jarak antar elemen -->
                                                    <a href="{{ url('/edit/' . $item->id) }}">
                                                        <button class="btn btn-sm btn-warning">Edit</button>
                                                    </a>
                                            
                                                    <form action="{{ url('destroy/' . $item->id) }}" method="POST"
                                                          onsubmit="return confirm('Anda yakin ingin menghapus data ini?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-danger" type="submit">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
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
        </div>
    </section>

    




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>