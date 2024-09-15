@extends('admin.layout.master')
@section('breadcrumb')
<div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Students</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                    <a href="#">Add New</a></li>
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
@endsection
@section('content')
<div class="card">
  @if (Session::has('msg'))
  <div class="alert alert-danger">
    {{Session::get('msg')}}
  </div>
@endif
                <div class="card-body">
                  <h5 class="card-title">Stidents</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                      <tr>
            <th>no.</th>
            <th>Code</th>
            <th>Name</th>
            <th>Email</th>
            <th>phone</th>
            <th>department</th>
            <th></th>
        </tr>
                      </thead>
                      <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $student['code'] }}</td>
            <td>{{ $student['name'] }}</td>
            <td>{{ $student['email']}}</td>
            <td>{{ $student['phone']}}</td>
            <td>{{ $student['dept_id']}}</td>
            <td>
              
              <form class="d-inline" action="{{ route('admin.students.restore',$student['code']) }}" method="post">
                @csrf
                <input type="submit" value="restore" class="btn btn-outline-success" method="post">
              </form>
              <form class="d-inline" action="{{ route('admin.students.destroyArchive',$student['code']) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="delete" class="btn btn-outline-danger" method="post">
                
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