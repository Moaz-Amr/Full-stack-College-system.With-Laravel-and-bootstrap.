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

    <th>id</th>
    <th>name</th>
    <th>Students</th>
  


    </tr>
          </thead>
          <tbody>
    
    <tr>
    
    <td>{{ $department->department_num}}</td>
    <td>{{$department->department_name  }}</td>
    <td>
        </ol>
        @foreach ($students as $student)
            <li>{{$student}}</li>
        @endforeach
        <ol>
        
        </td>
   

    
    </tr>
    
    </tbody>
        </table>
      </div>
  </body>
