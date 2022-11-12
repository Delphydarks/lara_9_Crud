<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Note</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-12" >
                <H2>All note</H2>
                <div style="margin-right:10%; float:right">
                    <a href="{{url('add-note')}}" class="btn btn-primary">Add note</a>
                </div>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                <div style="margin-right:10%; float:right">
                    <a href="{{url('add-note')}}" class="btn btn-primary">Add note</a>
                </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Note</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <!-- instead of showing the id of the note we can assign a counting number to the note -->
                    @php
                        $i=1;
                    @endphp
                    <tbody> 
                        @foreach($data as $note)
                        <tr>
                            <td>{{$i++}}</td>
                            <!-- <td>{{$note->uuid}}</td> -->
                            <td>{{$note->note}}</td>
                            <td>
                                <a href="{{url('edit-note/'.$note->id)}}" class="btn btn-primary">Edit</a> |
                                <a href="{{url('delete-note/'.$note->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach 
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>
</body>
</html>