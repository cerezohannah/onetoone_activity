@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">View Page</div>
  <div class="card-body">
   
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Age : {{ $students->age }}</p>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Course : {{ $students->academic->course }}</p>
        <p class="card-text">Year : {{ $students->academic->year }}</p>
        <p class="card-text">Continent : {{ $students->country->continent }}</p>
        <p class="card-text">Name : {{ $students->country->name }}</p>
        <p class="card-text">Capital : {{ $students->country->capital }}</p>
  </div>
       
    </hr>
  
  </div>
</div>