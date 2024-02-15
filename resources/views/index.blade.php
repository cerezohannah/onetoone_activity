@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
        <div class="card-header mt-5">
            <h2>OneToOne-Web</h2>
        </div>
            <div class="col-md-12">
                <table class="table">
                <a href="{{ url('students/create') }}" class="btn btn-success btn-sm mt-3" title="Add New Student">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New </a>

                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Address</th>
                            <th>Course</th>
                            <th>Year</th>
                            <th>Continent</th>
                            <th>Name</th>
                            <th>Capital</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->age }}</td>
                                <td>{{ $student->address }}</td>
                                <td>
                                    @if ($student->academic)
                                        {{ $student->academic->course }}
                                    @endif
                                </td>
                                <td>
                                    @if ($student->academic)
                                        {{ $student->academic->year }}
                                    @endif
                                </td>
                                <td>
                                    @if ($student->country)
                                        {{ $student->country->continent }}
                                    @endif
                                </td>
                                <td>
                                    @if ($student->country)
                                        {{ $student->country->name }}
                                    @endif
                                </td>
                                <td>
                                    @if ($student->country)
                                        {{ $student->country->capital }}
                                    @endif
                                </td>
                                <td>
                                    
                                <a href="{{ route('students.show', $student->id) }}" title="View Student" class="btn btn-info btn-sm">
                                      <i class="fa fa-eye" aria-hidden="true"></i> View
                                </a>

                                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form method="POST" action="{{ route('students.destroy', $student->id) }}" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection