<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Update Employee</title>
</head>
<style>
    form{
        background-color: rgb(130, 130, 205);
        padding: 7px;
        width: 35%;
        margin: 0 auto;
    }
    label{
        color: white;
    }
    h1{
        text-align: center;
    }
</style>
<body>
    <h1 >Update Employee</h1>
        <div>
            @if ($errors->any())
                <ul>
                    @foreach ($errors as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    <form action="{{route('employee.update',['employee'=>$employee])}}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control"  value="{{$employee->name}}" name="name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" value="{{$employee->email}}" name="email">
          </div>
          <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" value="{{$employee->position}}" name="position" >
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
    </form>
</body>
</html>