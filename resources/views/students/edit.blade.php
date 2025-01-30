<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('students.layout')
    @section('content')
    <div class="card">
        <div class="card-header">contactus Page</div>
        <div class="card-body">
            
        <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id"/>
        <label for="">name</label>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"><br>
        <label for="">Address</label>
        <input type="text" name="address" id="address" value="{{$students->adress}}" class="form-control"><br>
        <label for="">Mobile</label>
        <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control"><br>
        <button type="submit" value="Update" class="btn-success"></button><br>
        </form>
        </div>
    </div>
    @stop
</body>
</html>