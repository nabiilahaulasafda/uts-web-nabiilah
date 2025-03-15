<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css') }}">
</head>

<body>
    <div class="text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark text-white p-3 d-inline-block">{{$nama}}</h1>
        <h1 class="bg-primary text-white p-3 d-inline-block">{{$nilai}}</h1>
        @if(($nilai > 0) and ($nilai <=39))
            <h1 class="alert alert-danger p-3 d-inline-block ">E</h1>
        @elseif(($nilai >= 40) and ($nilai <=54))
            <h1 class="alert alert-danger p-3 d-inline-block ">D</h1>
        @elseif(($nilai >= 55) and ($nilai <=69))
            <h1 class="alert alert-warning p-3 d-inline-block ">C</h1>
        @elseif(($nilai >= 70) and ($nilai <=84))
            <h1 class="alert alert-success p-3 d-inline-block ">B</h1>
        @elseif(($nilai >= 85) and ($nilai <=100))
            <h1 class="alert alert-success p-3 d-inline-block ">A</h1>
        @else
            <h1 class="alert alert-danger d-inline-block ">tidak lulus</h1>
        @endif



        <br>
        @forelse($nilai2 as $val)
        @if(($nilai > 0) and ($nilai <=50))
            <div class="alert alert-danger d-inline-block ">tidak lulus</div>
        @elseif(($nilai > 50) and ($nilai <=100))
            <div class="alert alert-success d-inline-block ">lulus</div>
        @else
            <div class="alert alert-danger d-inline-block ">tidak lulus</div>
        @endif

    <hr>

    <div class="text-center">
        @for ($i=1;$i<=5;$i++)
            <div class="alert alert-info d-inline-block">{{$i}} </div>
        @endfor
    </div>
</div>

    <script> src="{{asset('js/bootstrap.bundle.js') }}"</script>
    <script> src="{{asset('js/bootstrap.js')}}" </script>
</body>
</html>

route : :get('/mahasiswa', funcion(){
    $data_mhs = ["abdul","adha","aidil","alif","asfal"];
    return view 
})
