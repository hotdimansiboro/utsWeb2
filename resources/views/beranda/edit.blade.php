<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    @if (session('success'))
    <p style="color: green">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        
    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="background:red;">
                        <h1 class="text-center text-white"><b>{{strtoupper($page_title)}}</b></h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12  d-flex justify-content-center">
                                <form action="{{url('update/'. $mahasiswa->id)}}" method="post">
                                    @csrf
                                    @method('patch')
                                    @include('beranda._form', [
                                        'submitButtonText' => 'Lanjutkan' . ucfirst($page_title),
                                    ])
                                  </form>
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