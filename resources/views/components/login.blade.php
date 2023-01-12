<form action="{{ url('/') }}/register" method="POST">
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
