@extends('layout')

@section('content')
<div class="card">
  <div class="card-header">Create Page</div>
  <div class="card-body">
    <form action="{{ route('store') }}" method="POST">
      @csrf
      <label>Name:</label><br>
      <input type="text" name="name" id="name" class="form-control"><br>
      <label>Age:</label><br>
      <input type="text" name="age" id="age" class="form-control"><br>
      <label>Address:</label><br>
      <input type="text" name="address" id="address" class="form-control"><br>

      <!-- Academic Input Fields -->
      <label>Course:</label><br>
      <input type="text" name="academic[course]" id="course" class="form-control"><br>
      <label>Year:</label><br>
      <input type="text" name="academic[year]" id="year" class="form-control"><br>

      <!-- Country Input Fields -->
      <label>Continent:</label><br>
      <input type="text" name="country[continent]" id="continent" class="form-control"><br>
      <label>Country Name:</label><br>
      <input type="text" name="country[name]" id="country_name" class="form-control"><br>
      <label>Capital:</label><br>
      <input type="text" name="country[capital]" id="capital" class="form-control"><br>

      <input type="submit" value="Create" class="btn btn-success"><br>
    </form>
  </div>
</div>
@endsection