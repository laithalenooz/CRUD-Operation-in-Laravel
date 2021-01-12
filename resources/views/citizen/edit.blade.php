<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Citizens</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>

<!-- Edit Modal HTML -->
<div class="container">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/citizen/edit/{{$citizen->citizen_id}}" method="post">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Add Citizen</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{$citizen->name}}">
                        @error('name')
                        <div class="danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>NID</label>
                        <input type="text" class="form-control" name="nid" value="{{$citizen->nid}}">
                        @error('nid')
                        <div class="danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" name="city" value="{{$citizen->city}}">
                        @error('city')
                        <div class="danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="mobile" value="{{$citizen->mobile}}">
                        @error('mobile')
                        <div class="danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" value="{{$citizen->address}}">
                        @error('address')
                        <div class="danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        Male: <input type="radio" name="gender" value="{{$citizen->gender}}" @if(old('gender',$citizen->gender) == 'Male') checked @endif>
                        Female: <input type="radio" name="gender" value="{{$citizen->gender}}" @if(old('gender',$citizen->gender) == 'Female') checked @endif>
                        @error('address')
                        <div class="danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-info" value="Update">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
