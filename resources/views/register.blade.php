<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanbercode</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="{{url('/register')}}" method="POST">@csrf
        <div>
            <label for="first_name">First name :</label><br><br>
            <input type="text" id="first_name" name="first_name">
        </div>
        <br>
        <div>
            <label for="last_name">Last name :</label><br><br>
            <input type="text" id="last_name" name="last_name">
        </div>
        <br>
        <div>
            <p>Gender :</p>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="gender_other" name="gender" value="other">
            <label for="other">Other</label>
        </div>
        <div>
            <p>Nationaly :</p>
            <select id="cars">
                <option value="indonesian">Indonesian</option>
                <option value="england">England</option>
                <option value="other">Other</option>
              </select>
        </div>
        <div>
            <p>Language Spoken :</p>
            <input type="radio" id="indonesia" name="language" value="Indonesia">
            <label for="male">Bahasa Indonesia</label><br>
            <input type="radio" id="english" name="language" value="English">
            <label for="female">English</label><br>
            <input type="radio" id="language_other" name="language" value="Other">
            <label for="other">Other</label>
        </div>
        <div>
            <p>Bio : </p>
            <textarea name="biodata" id="biodata" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="submit" value="Sign Up">
        </div>
    </form>

</body>

</html>