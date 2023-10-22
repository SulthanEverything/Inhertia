@extends('template')
@section('title', 'Home')

@section('content')

<div class="container">
    <div class="heading_container heading_center text-danger">
        <h2>
            PILIH KATEGORI
        </h2>
    </div>
</div>
<br>
<br>
<br>
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-3 mr-3 bg-danger text-dark border rounded">
            <h1>
                makanan
            </h1>
        </div>
        <div class="col-3 mr-3 bg-danger text-dark border rounded">
            <h1>
                minuman
            </h1>
        </div>
        <div class="col-3 mr-3 bg-danger text-dark border rounded">
            <h1>
                pakaian
            </h1>
        </div>
        <div class="col-4 mt-5 text-dark bg-danger text-dark border rounded">
            <h1>
                SUPERMARKET
            </h1>
        </div> 
    </div>
</div>
</div>
@endsection