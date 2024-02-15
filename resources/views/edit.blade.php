@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading mt-4">EDIT</div>
                    <div class="panel-body">
                        <form action="{{ route('update', $students->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $students->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="age">Age:</label>
                                <input type="number" class="form-control" id="age" name="age" value="{{ $students->age }}" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{ $students->address }}" required>
                            </div>
                            <div class="form-group">
                                <label for="course">Course:</label>
                                <input type="text" class="form-control" id="course" name="academic[course]" value="{{ $students->academic->course }}" required>
                            </div>
                            <div class="form-group">
                                <label for="course">Year:</label>
                                <input type="text" class="form-control" id="year" name="academic[year]" value="{{ $students->academic->year }}" required>
                            </div>
                            <div class="form-group">
                                <label for="course">Continent:</label>
                                <input type="text" class="form-control" id="continent" name="country[continent]" value="{{ $students->country->continent }}" required>
                            </div>
                            <div class="form-group">
                                <label for="course">Name:</label>
                                <input type="text" class="form-control" id="name" name="country[name]" value="{{ $students->country->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="course">Capital:</label>
                                <input type="text" class="form-control" id="capital" name="country[capital]" value="{{ $students->country->capital }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection