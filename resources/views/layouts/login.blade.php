<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('cssfile/register.css') }}"
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  </head>
  <body>
    <x-header/>


    <div class="regicontainer" id="logincontainer">
        <form action="{{ url('/') }}/login" method="POST">
            @csrf
            <div class="heading">
                <h1>Register Form</h1>
            </div>




            <div class="row">
                <div class="formiteam formiteamlef">
                    <label for="email">Email</label>
                    <div id="inp">
                        <span>
                            <i class="fa fa-envelope"></i>
                        </span>
                        <input type="email" placeholder="Email" id="email" name="email" class="loginp">

                    </div>
                    <span class="text-danger">

                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>

                </div>


            </div>
            <div class="row">
                <div class="formiteam formiteamlef">
                    <label for="password">Password</label>
                    <div id="inp">
                        <span>
                            <i class="fa fa-key"></i>

                        </span>
                        <input type="password" placeholder="password" id="password" name="password" class="loginp">

                    </div>
                    <span class="text-danger">

                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>

                </div>

            </div>
            <button type="submit" class="signbtn">Register</button>
        </form>

    </div>
  </body>
</html>
