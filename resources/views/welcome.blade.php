<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
</head>
<body>
    <h1>Todo Application</h1>
<div>
    <form action="{{route('saveTodo')}}" method="post">
     @csrf
     <input type="text" name="todo" class="form-control">
     <button type="submit" class="btn btn-success mt-2 btn-center">Add Todo</button>


    </form>
    <!-- <pre>
        {{$list}}
    </pre> -->
</div>
    <!-- <ul>
        @foreach($list as $value)
        <li>{{$value->title}}</li>
        @endforeach
    </ul> -->
    <table class="table">
            <thead>

                <tr>
                    <th scope="col">ID </th>
                    <th scope="col">Tasks</th>

                    <th scope="col"> Actions </th>
                </tr>
            </thead>

            <tbody>
                <!-- <tr>
                    <td>1</td>
                    <td>Homework</td>
                    <td>
                        <button type="button" class="btn btn-danger">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr> -->

                @foreach($list as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->title}}</td>
                    <td>
                        <form action="" method="get">

                            <input type="text" value="{{$value->title}}">
                            <a href="/edit/{{$value->id}}" class="btn btn-danger">Edit</a>
                            <a href="/delete/{{$value->id}}" class="btn btn-danger">Delete</a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
</body>
</html>