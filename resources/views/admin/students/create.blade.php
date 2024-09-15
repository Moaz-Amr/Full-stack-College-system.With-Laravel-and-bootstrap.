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
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error )
        <li>{{$error}}</li>
        @endforeach
        
      </ul>
    </div>
  @endif
  @if (Session::has('msg'))
  <div class="alert alert-danger">
    {{Session::get('msg')}}
  </div>
@endif
  
                <form class="form-horizontal" action="{{route('admin.students.store')}}" enctype="multipart/form-data" method="post" novalidate>
                @csrf  
                <div class="card-body">
                  <div class="form-group row">
                      <label
                        for="ssn"
                        class="col-sm-3 text-end control-label col-form-label"
                        >code</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="ssn"
                          placeholder="SSN Here"
                          name="code"
                          value="{{old('code')}}"
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Name</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname"
                          placeholder="First Name Here"
                          name="name"
                          value="{{old('name')}}"

                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Email</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="email"
                          class="form-control"
                          id="lname"
                          placeholder="Last Name Here"
                          name="email"
                          value="{{old('email')}}"

                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="email"
                        class="col-sm-3 text-end control-label col-form-label"
                        >phone</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="email"
                          placeholder="Email Here"
                          name="phone"
                          value="{{old('phone')}}"

                        />
                      </div>
                    </div>
                    <div class="row align-items-center">
                    <label
                        for="photo"
                        class="col-sm-3 text-end control-label col-form-label"
                        >photo</label
                      >
                      <div class="col-sm-9 ">
                        <input
                          type="file"
                          class="form-control"
                          id="lname"
                          placeholder="Last Name Here"
                          name="photo"
                          value="{{old('photo')}}"/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Department</label
                      >
                      <div class="col-sm-9">
                        <select class="form-control" name="department">
                          @foreach ($departments as $debartment)
                          <option value="{{$debartment->department_num}}">{{$debartment->department_name}}</option>
                          
                        @endforeach
                        </select>
                        

                        

                      </div>
                    </div>
                  </div>
                  <div class="border-top">
                    <div class="card-body">
                      <button type="submit" class="btn btn-primary">
                        Add
                      </button>
                    </div>
                  </div>
                </form>
              </div>
@endsection