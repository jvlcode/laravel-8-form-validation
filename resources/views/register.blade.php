<html>
    <head>
        <title>Sign Up</title>
    </head>
    <body>

        <div style="padding-left:200px">
            <h3>Register</h3>
            @if ($errors->any())
                <ul>
                    {!!implode('',$errors->all('<li>:message</li>'))!!}
                </ul>
            @endif

            <form enctype="multipart/form-data" method="POST" action="register">
                <label for="">Name <input type="text" name="name"  id="" value="{{old('name')}}"></label><br>
                <label for="">Email <input type="text" name="email"  id="" value="{{old('email')}}"></label><br>
                <label for="">Phone <input type="text" name="phone"  id="" value="{{old('phone')}}"></label><br>
                <label for="">DOB <input type="date" name="dob"  id="" value="{{old('dob')}}"></label><br>
                <label for="">Image <input type="file" name="image"  id=""></label><br>
                <label for="">Password <input type="password" name="password"  id="" ></label><br>
                <label for="">Confirm Password <input type="password" name="password_confirmation"  id="" ></label><br>
                <input type="submit" value="Register">
                @csrf
            </form>
        </div>
    </body>
</html>
