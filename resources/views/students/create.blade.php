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
        <div class="card-header">Students Page</div>
        <div class="card-body">
            
        <form action="{{ url('student') }}" method="post">
            {!! csrf_field() !!}
            <label for="">name</label><br>
            <input type="text" name="name" id="name" class="form-control"><br>
            <label for="">adress</label><br>
            <input type="text" name="adress" id="adress" class="form-control"><br>
            <label for="">mobile</label><br>
            <input type="text" name="mobile" id="mobile" class="form-control"><br>
            <input type="submit" value="save" class="btn btn-success">
        </form>
        </div>
    </div>
    @stop
</body>
</html>