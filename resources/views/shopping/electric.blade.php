@extends('layouts.appuserui')
@section('content')
<div class="container">
    <div class="row mt-5 justify-content-center">
        @foreach($product as $item)
        <div class="col-md-4 mb-4 d-flex justify-content-center">
            <div class="card" style="width: 300px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col text-center">
                            <img src="https://ehsanimagesp.s3.me-south-1.amazonaws.com/M00122.jpg" class="card-img-top" alt="Image" style="width: 150px; height: auto;">
                        </div>
                    </div>
                    <h1 class="alert alert-dark text-center mt-3">{{ $item->name }}</h1>
                    <p class="text-center">{{ $item->description }}</p>
                    <div class="text-center">
                        <a href="{{ route('prodhom', ['id' => $item->id]) }}" class="btn btn-primary">تفاصيل</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
      </div>
    </div>
</div>
<style>
    .card {
        width: 400px;
        align-items: center;
        height: 400px;
        background-color: rgba(255, 255, 255, 0.5); 
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        display: flex;
        text-align: center;
         justify-content:center;
        flex-direction: column;
        font-size: 14px; 
        color: black;
        padding: 10px; 
        gap: 5px; 
    }

    .icon {
        font-size: 24px; 
        margin-bottom: 5px;
    }

    .card-text {
        font-size: 12px; 
    }
    body {
        background-image: url('{{ asset('images/JPEG image-4F31-B64E-D3-0.jpeg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        color: black;
        margin: 0;
        padding: 0;
    }
</style>

@endsection