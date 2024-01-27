@extends('layouts.app')

@section('content')
<!----هنا الفورم -->
<div class="container">
  <div class="card">
    <div class="card-body">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-4">
                    <h4 class="text-center " >العناصر  :</h4>
                    <form action="{{route('save-item')}}" method="post">
                        @csrf
                        <label for="itemname" class="p-2">ادخل اسم العنصر</label>
                        <input type="text" class="form-control form-control-sm " name="itemname" id="itemname">

                        <label for="price" class="p-2">ادخل سعر العنصر</label>
                        <input type="text" class="form-control form-control-sm " name="price" id="price">

                        <label for="color" class="p-2">اللون  </label>
                        <input type="text" class="form-control form-control-sm " name="color" id="color">

                        <label for="qty" class="p-2">ادخل الكمية </label>
                        <input type="text" class="form-control form-control-sm " name="qty" id="qty">
                        <div class="row">

                            <label for="description" class="p-2">الوصف</label>
                            <input type="text" class="form-control form-control-sm " name="description" id="description">
                            <div class="row">

                            <label for="image" class="p-2"> image </label>
                            <input type="text" class="form-control form-control-sm " name="image" id="image">
                            <div class="row">

                            <label for="itemgroupno" class="p-2"> مجموعة العنصر </label>
                            <input type="text" class="form-control form-control-sm " name="itemgroupno" id="itemgroupno">
                            <div class="row">
        
                        <div class="text-center">
                        <button class="btn btn-success mt-2" type="submit" >حفظ</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

  <div class="card mt-3">
    <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>رقم العنصر </th>
                            <th>اسم العنصر </th>
                            <th> سعر العنصر </th>
                            <th>اللون</th>
                            <th>الكمية </th> 
                            <th>الوصف </th> 
                            <th>image </th> 
                            <th>مجموعة العنصر </th>
                            <th colspan="2"> اجراء </th>
                        </tr>
                    </thead>  
                    <tbody>
                        @foreach($data as $row) 
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->itemname}}</td>
                            <td>{{$row->price}}</td>
                            <td>{{$row->color}}</td>
                            <td>{{$row->qty}}</td> 
                            <td>{{$row->description}}</td> 
                            <td>{{$row->image}}</td> 
                            <td>{{$row->itemgroupno}}</td>
                            <td> <a href="{{route('Delitem',['x'=>$row->id])}}"><i class="fa-solid fa-trash text-danger"></i></a></td>
                            <td> <a href="{{route('Edititem',['x'=>$row->id])}}"><i class="fa-regular fa-pen-to-square text-success"></i></a></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
    </div>
  </div>
</div>


@endsection