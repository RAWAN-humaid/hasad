@extends('layouts.appdash')
@section('content')

<div class="container">
<h1 class="alert alert-success">تفاصيل المنتجات</h1>
<form action="{{route('createnewdet')}}" method="post">
    @csrf 
 <div class="card">
<div class="card-body">
            <div class="row"> 
    <div class="col">
    <label for="products_no ">اختر المنتج</label>
    <select class="form-select"name="product_no" id="product_no">
        @foreach ($prod as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                        <label for="price"class="from-label">سعر المنتج</label>
                         <input type="text" class="form-control" id="price" name="price">
                        </div>
                        <div class="col">
                        <label for="qty"class="from-label">الكمية </label>
                        <input type="text" class="form-control" id="qty" name="qty">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                        <label for="color"class="from-label">لون المنتج</label>
                         <input type="text" class="form-control" id="color" name="color">
                        </div>
                        <div class="col">
                        <label for="img"class="from-label">صورة المنتج </label>
                        <input type="text" class="form-control" id="img" name="img">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col text-center">
                            <button class="btn btn-primary">حفط</button>
                        </div>
                        </form>
                    </div>
</div>
              </div>
        </div>
    </div>
    <div class="row mt-5">
            <div class="col">
              <div class="card">
                <div class="card-body">
                    <table class="table text-center">
                        <thead>
                        </tr>
                            <th>رقم المنتج</th>
                            <th>اسم المنتج</th>
                           <th> سعر المنتج</th>
                            <th>كمية المنتج </th>
                            <th>الصورة المنتج </th>
                            <th>اللون المنتج </th>
                            <th colspan="2">إجراء </th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($Productdrtails as $item)
                          <tr>
                            <td>
                             {{$item->id}}
                            </td>
                            <td>
                             {{$item->name}}
                            </td>
                            <td>
                            {{$item->price}}
                            </td>
                            <td>
                            {{$item->qty}}
                            </td>
                            <td>
                            {{$item->img}}
                            </td>
                            <td>
                            {{$item->color}}
                            </td>
                            <td><a href="#" onclick="lunch({{$item->id}})"><i class="bi bi-trash3 text-danger"></a></i></td>
                            <td><a href="{{route('edit',['id'=>$item->id])}}"><i class="bi bi-pencil-square text-success"></a></i></td>
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
              </div>
        </div>
    </div>




</div>
</div>
@endsection
