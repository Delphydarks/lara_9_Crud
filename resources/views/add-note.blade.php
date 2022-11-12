<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Note</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Add Note</h2>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <form method='POST' action="{{url('save-note')}}">
                    @csrf
                    <div class="md-3">
                        <label class="form-lebel">User Id</label> 
                        <input type="number" name='uuid' value="{{old('uuid')}}" placeholder='Enter your id' class="form-control">
                        @error('uuid')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-lebel">Note</label> 
                        <textarea type="text" name='note'  placeholder='Write your notes here' class="form-control">{{old('note')}}</textarea>
                        @error('note')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div><br>
                   <button class="btn btn-primary" type="submit">Save Note</button>
                   <a href="{{url('user-note')}}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>