@extends('layouts.appuserui')
@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col header-text">
            <h3 class="text-center welcome-text">أهلا بكم في منصة حصد</h3>
            <p class="text-center welcome-text"> قال رسول الله ﷺ: «ما نقص مال من صدقة»؛.”
            </p>
          
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <a href="{{route('electric')}}">
            <div class="card">
               <div class="card-body">
                <div class="row">
                    <div class="col d-flex justify-content-end">
                     <h3 class="card-text">تأثيث منازل المتعففين</h3>
                    </div>
                    <div class="col d-flex justify-content-end">
                    <i class="bi bi-house-gear-fill"></i>                        </div>
                </div>
               </div>
            </div>
            </a>
        </div>
    
        <div class="col">
        <a href="{{route('homeapp')}}">        
            <div class="card">
               <div class="card-body">
                <div class="row">
                    <div class="col d-flex justify-content-end">
                     <h3 class="card-text">  مشروع بناء المساجد </h3>
                    </div>
                    <div class="col d-flex justify-content-end">
                    <i class="bi bi-wallet2"></i>              </div>
                </div>
               </div>
               </a>
            </div>
            
            </div>
            <div class="col">
            <a href="{{route('rosese')}}">
            <div class="card">
               <div class="card-body">
                
                <div class="row">
                    <div class="col d-flex justify-content-end">
                     <h3 class="card-text">توصيل مياه للمساجد </h3>
                    </div>
                    <div class="col d-flex justify-content-end">
                    <i class="bi bi-droplet-half"></i>            
                   </div>
                  
               </div>
               </a>
            </div>

             
            </div>
    </div>
</div>
<style>
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

    .header-text {
        text-align: center;
        margin-top: 20px;
        color: white;
        font-size: 32px; 
        font-weight: bold;
    }

    .header-text p {
        font-size: 20px; 
    }

    .card-container {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 50px;
    }

    .card {
        width: 300px;
        height: 200px;
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 8px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        font-size: 22px; 
        color: black;
        padding: 20px;
        gap: 10px;
    }

    .icon {
        font-size: 48px; 
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 18px; 
    }
</style>
</html>
@endsection

