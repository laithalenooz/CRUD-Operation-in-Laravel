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
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Citizens</b></h2>
                </div>
                <div class="col-sm-6 mt-5">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Citizen</span></a>
                    <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>City</th>
                <th>NID</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach($citizens as $citizen)
            <tr>
                <td>{{$citizen->name}}</td>
                <td>{{$citizen->gender}}</td>
                <td>{{$citizen->city}}</td>
                <td>{{$citizen->nid}}</td>
                <td>{{$citizen->mobile}}</td>
                <td>{{$citizen->address}}</td>
                <td>
                    <a href="/citizen/edit/{{$citizen->citizen_id}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href="/citizen/delete/{{$citizen->citizen_id}}" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                </td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/citizen/store" method="post">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Add Citizen</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name">
                        @error('name')
                        <div class="danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>NID</label>
                        <input type="text" class="form-control" name="nid">
                        @error('nid')
                        <div class="danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" name="city">
                        @error('city')
                        <div class="danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="mobile">
                        @error('mobile')
                        <div class="danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address">
                        @error('address')
                        <div class="danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
{{--                        <select name="gender" id="" class="form-control">--}}
                            Male: <input type="radio" name="gender" value="Male" placeholder="Male">
                            Female: <input type="radio" name="gender" value="Female" placeholder="Female">
{{--                        <option value="Male">Male</option>--}}
{{--                        <option value="Female">Female</option>--}}
{{--                        </select>--}}
                        @error('gender')
                        <div class="danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Add">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit Modal HTML -->
{{--<div id="editEmployeeModal" class="modal fade">--}}
{{--    <div class="modal-dialog">--}}
{{--        <div class="modal-content">--}}
{{--            <form action="/citizen/edit/{{$citizen->citizen_id}}" method="post">--}}
{{--                @csrf--}}
{{--                <div class="modal-header">--}}
{{--                    <h4 class="modal-title">Add Citizen</h4>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Name</label>--}}
{{--                        <input type="text" class="form-control" name="name" value="{{$citizen->name}}">--}}
{{--                        @error('name')--}}
{{--                        <div class="danger">{{$message}}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>NID</label>--}}
{{--                        <input type="text" class="form-control" name="nid" value="{{$citizen->nid}}">--}}
{{--                        @error('nid')--}}
{{--                        <div class="danger">{{$message}}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>City</label>--}}
{{--                        <input type="text" class="form-control" name="city" value="{{$citizen->city}}">--}}
{{--                        @error('city')--}}
{{--                        <div class="danger">{{$message}}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Phone</label>--}}
{{--                        <input type="text" class="form-control" name="mobile" value="{{$citizen->mobile}}">--}}
{{--                        @error('mobile')--}}
{{--                        <div class="danger">{{$message}}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Address</label>--}}
{{--                        <input type="text" class="form-control" name="address" value="{{$citizen->address}}">--}}
{{--                        @error('address')--}}
{{--                        <div class="danger">{{$message}}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Gender</label>--}}
{{--                        <select name="gender" id="" class="form-control">--}}
{{--                            <option value="{{$citizen->gender}}">{{$citizen->gender}}</option>--}}
{{--                            <option value="Male">Male</option>--}}
{{--                            <option value="Female">Female</option>--}}
{{--                        </select>--}}
{{--                        @error('gender')--}}
{{--                        <div class="danger">{{$message}}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">--}}
{{--                    <input type="submit" class="btn btn-info" value="Save">--}}
{{--                </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Citizens</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <a href="/citizen/clear_all" class="btn btn-danger">Delete</a>
                </div>
        </div>
    </div>
</div>
</body>
</html>
