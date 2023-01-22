<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('cssfile/register.css') }}"


  </head>
  <body>
<x-header/>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div class="regicontainer" id="reg">
        <form action="{{ url('/') }}/register" method="POST">
            @csrf
            <div class="heading">
                <h1>Register Form</h1>
            </div>

            <div class="row">

                <div class="formiteam formiteamlef">
                    <label for="firstname">First Name</label>
                    <div class="inp">
                        <span>
                            <i class="fa fa-user"></i>
                        </span>

                        <input type="text" placeholder="First Name" id="firstname" name="firstname">

                    </div>
                    <span class="text-danger">

                        @error('firstname')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="formiteam formiteamrght">
                    <label for="lastname">Last Name</label>
                    <div class="inp">
                        <span>
                            <i class="fa fa-user "></i>
                        </span>

                        <input type="text" placeholder="last Name" id="lastname" name="lastname">
                    </div>
                    <span class="text-danger">

                        @error('lastname')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
            </div>
            <div class="row">
                <div class="formiteam formiteamlef" id="datepicker">
                    <label for="expire">Birthday</label>
                    <div class="inp">
                        <span>
                            <i class="fa fa-calendar "></i>
                        </span>
                        <input type="text" id="dob" name="dob">

                    </div>
                    <span class="text-danger">

                        @error('dob')
                            {{ $message }}
                        @enderror
                    </span>



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
                    <span class="text-danger">

                        @error('gender')
                            {{ $message }}
                        @enderror
                    </span>

                </fieldset>
            </div>
            <div class="row">
                <div class="formiteam formiteamlef">
                    <label for="email">Email</label>
                    <div class="inp">
                        <span>
                            <i class="fa fa-envelope"></i>
                        </span>
                        <input type="email" placeholder="Email" id="email" name="email">

                    </div>
                    <span class="text-danger">

                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="formiteam formiteamrght">

                    <label for="phon">Phone Number</label>

                    <div class="inp">
                        <span>
                            <i class="fa fa-phone"></i>
                        </span>
                        <input type="tel" placeholder="phone" id="phone" name="phone">
                    </div>
                    <span class="text-danger">

                        @error('phone')
                            {{ $message }}
                        @enderror
                    </span>

                </div>

            </div>
            <div class="row">
                <div class="formiteam formiteamlef">
                    <label for="password">Password</label>
                    <div class="inp">
                        <span>
                            <i class="fa fa-key"></i>

                        </span>
                        <input type="password" placeholder="password" id="password" name="password">

                    </div>
                    <span class="text-danger">

                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="formiteam formiteamrght">
                    <label for="conpassword">Confirm Password</label>
                    <div class="inp">
                        <span>
                            <i class="fa fa-key"></i>
                        </span>
                        <input type="password" placeholder="confirm password" id="conpassword" name="conpassword">

                    </div>
                    <span class="text-danger">

                        @error('conpassword')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="subrow">
                <select class="sub" id="sub" name="country">
                    @foreach ($countries as $country)
                        <option value="{{$country->id }}">{{ $country->country }}</option>
                    @endforeach

                </select>

                <span class="text-danger" id="suberror">

                    @error('country')
                        {{ $message }}
                    @enderror
                </span>

            </div>





            <button type="submit" class="signbtn">Register</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script>
        $(function() {
            $('#dob').datepicker({
                dateFormat: 'yy/mm/dd',
                autoclose: true,
                todayHighlight: true
            });
        })
    </script>

  </body>
</html>
