show
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta
    name="keywords"
    content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
  />
  <meta
    name="description"
    content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
  />
  <meta name="robots" content="noindex,nofollow" />
  <title>Matrix Admin Lite Free Versions Template by WrapPixel</title>
  <!-- Favicon icon -->
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="{{ asset('assets') }}/images/favicon.png"
  />
  <!-- Custom CSS -->
  <link href="{{ asset('assets') }}/css/style.min.css" rel="stylesheet" />
    <link
      href="{{ asset('assets') }}/css/dataTables.bootstrap4.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="table-responsive">
        <table
          id="zero_config"
          class="table table-striped table-bordered"
        >
          <thead>
          <tr>

    <th>Code</th>
    <th>Name</th>
    <th>Email</th>
    <th>phone</th>
    <th>department</th>
    <th>tablet</th>
    <th>courses</th>
    <th>img</th>
    <th></th>
    </tr>
          </thead>
          <tbody>
    
    <tr>
    
    <td>{{ $student['code'] }}</td>
    <td>{{ $student['name'] }}</td>
    <td>{{ $student['email']}}</td>
    <td>{{ $student['phone']}}</td>
    <td>{{ $student->department->department_name}}</td>
    <td>{{ $tab}}</td>
    <td>@foreach ($student->courses as $course )
      <li>{{ $course->course_name }}=>{{$course->pivot->degree}}</li>
    @endforeach</td>
    <td><img class="rounded" width="70" height="70" alt="no photo" src="{{ asset('storage/'.$student->photo) }}"></td>

    <td>
    <a href="{{ route('admin.students.show',$student['code']) }}" class="btn btn-outline-primary">show</a>
    <a href="{{route('admin.students.edit',$student['code'])}}" class="btn btn-outline-primary">edit</a>
    <form class="d-inline" action="{{ route('admin.students.destroy',$student['code']) }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="delete" class="btn btn-outline-danger" method="post">
    
    </form>
    </td>
    
    </tr>
    
    </tbody>
        </table>
        <hr>
        <form action="{{route('admin.students.addCourses',$student->code)}}" method="POST">
          @csrf
          <select class="form-control" name="courses[]" id="" multiple style="height: 100px">
          @foreach ($courses as $crs )
          <option value="{{$crs->courses_id}}">{{$crs->course_name}}</option>
            
          @endforeach
          

          </select>
          <input type="submit" value="add course" class="btn btn-primary">
        </form>
      </div>
  </body>
