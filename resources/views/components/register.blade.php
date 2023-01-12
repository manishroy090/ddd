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
                <input type="password" placeholder="confirm password" id="conpassword"
                    name="conpassword">

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
                <option value="{{ $country->id }}">{{ $country->country }}</option>
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
