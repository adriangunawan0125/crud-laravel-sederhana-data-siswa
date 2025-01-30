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

<div class="card-body">

<h5 class="card-title">Name: {{ $students->name}}</h5>

<p class="card-text">Address: {{ $students->adress }}</p>

<p class="card-text">Mobile: {{ $students->mobile}}</p>

</div>

</hr>

</div>

</div>
</body>
</html>