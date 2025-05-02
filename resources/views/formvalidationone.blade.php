<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        form {
            width: 30%;
            border: solid;
            padding: 10px
        }

        input {
            width: 100%;
            height: 35px
        }
    </style>
</head>

<body>

    <ul>
        @foreach ($errors->all() as $err)
            <li style="color: red; background-color: oldlace;">{{ $err }}</li> {{-- fixed interpolation --}}
        @endforeach
    </ul>

    <form action="{{ route('form.validate') }}" method="post">
        <h1>Login Form</h1>
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <br><br>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <br><br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password">
        <br><br>

        <label for="confirm_password">Confirm Password</label> {{-- fixed name to match validation rule --}}
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your password">
        <br><br>

        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" placeholder="Enter your phone number">
        <br><br>

        <label for="address">Address</label>
        <input type="text" name="address" id="address" placeholder="Enter your address">
        <br><br>

        <label for="age">Age</label>
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <br><br>

        <label for="city">City</label>
        <input type="text" name="city" id="city" placeholder="Enter your city">
        <br><br>

        <label for="gender">Gender</label>
        <select name="gender" id="gender">
            <option value="">--Select--</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <br><br>

        <button type="submit">Submit</button>
    </form>

</body>

</html>