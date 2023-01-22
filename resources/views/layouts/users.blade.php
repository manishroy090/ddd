<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('cssfile/users.css') }}">
</head>

<body>
    <x-header />
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>firstname</th>
                    <th>lastname</th>
                    <th>birthday</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Country</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @php
                @endphp
                @foreach ($users->toArray() as $user)
                    <tr>
                        <td scope="row">{{ $user['firstname'] }}</td>
                        <td>{{ $user['lastname'] }}</td>
                        <td>{{ $user['dob'] }}</td>
                        <td>{{ $user['gender'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['phone'] }}</td>
                        <td>{{ $user['country'] }}</td>
                        <td class="action">
<button type="button" class="btn btn-info edits">Edit</button>

<button type="button" class="btn btn-danger del">Delet </button>
                        </td>

                    </tr>
                @endforeach


            </tbody>
        </table>

    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">UPDATE </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">First Name</label>
                            <input type="text" class="form-control" id="firstname">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastname">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">DOB</label>
                            <input type="text" class="form-control" id="dob">
                        </div>
                        <fieldset class="formiteamrght">
                            <legend>Gender</legend>
                            <div class="gen" id="gen">
                                <div>
                                    <input type="radio" name="gender" id="gender" value="male" checked>
                                    <label for="gridRadios1" id="malelabel">
                                        Male
                                    </label>
                                </div>
                                <div>
                                    <input type="radio" name="gender" id="gender" value="female" checked>
                                    <label for="gridRadios1">
                                        Female
                                    </label>
                                </div>



                            </div>

                        </fieldset>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Phone</label>
                            <input type="phone" class="form-control" id="phone">
                        </div>

                        <select class="form-control" aria-label="Default select example">
                            @foreach ($countries as $country)
                        <option value="{{$country->id }}">{{ $country->country }}</option>
                    @endforeach
                        </select>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
       const edits = document.getElementsByClassName('edits');
       Array.from(edits).forEach((element) => {
        element.addEventListener("click", (e) => {
            $('#exampleModal').modal('toggle');
        });
       });
       const del=document.getElementsByClassName('del');
       console.log(del);
    </script>

</body>

</html>
