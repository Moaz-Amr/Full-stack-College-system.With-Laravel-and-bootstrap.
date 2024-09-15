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
                  <h5 class="card-title">Departments</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                      <tr>
            <th>no.</th>
            <th>dep_id</th>
            <th>dep_Name</th>
            
            <th></th>
        </tr>
                      </thead>
                      <tbody>
        @foreach ($department as $dept)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $dept['department_num '] }}</td>
            <td>{{ $dept['department_name'] }}</td>
           
            <td>
              <a href="{{ route('admin.department.show',$dept['department_num']) }}" class="btn btn-outline-primary">show</a>
              
            </td>

        </tr>
        @endforeach
    </tbody>
                    </table>
                  </div>
                </div>
            </div>
@endsection