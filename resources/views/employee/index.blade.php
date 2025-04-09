<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Employee Info</title>
</head>
<style>
    h1{
        text-align: center;
        color: red;
    }
</style>
<body>
    <h1><u>Employee Information</u></h1><br>
    <table class="table table-dark table-striped">
       <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Position</th>
                <th width="200px">Action</th>
            </tr>
       </thead>
       <tbody>
            @foreach ($employees as $emp)
                <tr>
                    <td>{{$emp->id}}</td>
                    <td>{{$emp->name}}</td>
                    <td>{{$emp->email}}</td>
                    <td>{{$emp->position}}</td>
                    <td style="display: flex">
                        <a class="btn btn-primary" href="{{route('employee.edit', ['employee'=>$emp])}}">Edit</a> 
                        <form action="{{route('employee.destroy', ['employee'=>$emp])}}" method="POST" style="margin-left: 5px">
                            @csrf
                            @method('delete')
                            <input class="btn btn-danger" type="submit" name="" id="" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
       </tbody>
    </table>
</body>
</html>