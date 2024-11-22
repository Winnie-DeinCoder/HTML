<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Identification Form</title>
</head>
<body>
    <h1>PERSONAL IDENTIFICATION FORM</h1>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('https://source.unsplash.com/1920x1080/?calm,nature') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1, h2 {
            text-align: center;
            color: #444;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        fieldset {
            border: none;
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input, select, textarea, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        input[type="radio"], input[type="checkbox"] {
            width: auto;
            margin-right: 5px;
        }

        button {
            background: #444;
            color: #fff;
            cursor: pointer;
            border: none;
            transition: background 0.3s;
        }

        button:hover {
            background: #666;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        th {
            background: #f5f5f5;
            color: #333;
        }

        td {
            background: #fff;
        }
    </style>
    <h2>PERSON'S ADDRESS</h2>
    <form action="" method="post">
        <fieldset>
            <label for="name">Enter your name:</label>
            <input type="text" name="yname" required>
        </fieldset>
        <fieldset>
            <label for="name2">Enter your parents' names:</label>
            <input type="text" name="pname" required>
        </fieldset>
        <fieldset>
            <label for="email">E-mail:</label>
            <input type="email" name="email" required>
        </fieldset>
        <fieldset>
            <label for="birthdate">Date of birth:</label>
            <input type="date" name="bd" required>
        </fieldset>
        <fieldset>
            <label for="gender">Gender:</label><br>
            <input type="radio" name="gender" value="Male" required> Male<br>
            <input type="radio" name="gender" value="Female" required> Female<br>
            <input type="radio" name="gender" value="Prefer not to say" required> Prefer not to say<br>
        </fieldset>
        <fieldset>
            <label for="country">Country:</label>
            <input type="text" name="country" required>
        </fieldset>
        <fieldset>
            <label for="province">Province:</label>
            <select name="province" required>
                <option>North</option>
                <option>South</option>
                <option>East</option>
                <option>West</option>
            </select>
        </fieldset>
        <h2>OTHER PERSONAL INFORMATION</h2>
        <fieldset>
            <label>What do you do in your free time?</label>
            <textarea name="text" required></textarea>
        </fieldset>
        <fieldset>
            <label>Which of the following characteristics best describes you?</label><br>
            <input type="radio" name="characteristics" value="Caring" required> Caring<br>
            <input type="radio" name="characteristics" value="Hardworking" required> Hardworking<br>
            <input type="radio" name="characteristics" value="Patient" required> Patient<br>
            <input type="radio" name="characteristics" value="Kind" required> Kind<br>
            <input type="radio" name="characteristics" value="Considering" required> Considering<br>
        </fieldset>
        <fieldset>
            <label for="color">What is your favorite color?</label>
            <input type="color" name="color" required>
        </fieldset>
        <fieldset>
            <label for="range">Rate yourself in terms of socializing:</label>
            <input type="range" name="range" min="0" max="10" required>
        </fieldset>
        <fieldset>
            <label for="music">Favorite music genres:</label><br>
            <input type="checkbox" name="song[]" value="Gospel"> Gospel<br>
            <input type="checkbox" name="song[]" value="Pop"> Pop<br>
            <input type="checkbox" name="song[]" value="Rap"> Rap<br>
        </fieldset>
        <fieldset>
            <label for="telephone">Telephone number:</label>
            <input type="tel" name="tel" placeholder="Your telephone number" required>
        </fieldset>
        <fieldset>
            <label for="time">At what time do you wake up?</label>
            <input type="time" name="time" required>
        </fieldset>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $yourname = $_POST['yname'];
        $parentname = $_POST['pname'];
        $email = $_POST['email'];
        $birthday = $_POST['bd'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $province = $_POST['province'];
        $text = $_POST['text'];
        $characteristics = $_POST['characteristics'];
        $color = $_POST['color'];
        $range = $_POST['range'];
        $songs = isset($_POST['song']) ? implode(', ', $_POST['song']) : 'None';
        $telephone = $_POST['tel'];
        $time = $_POST['time'];

        echo "<table border=1>";
        echo "<tr>
                <th>Name</th>
                <th>Parents' Names</th>
                <th>Email</th>
                <th>Birthday</th>
                <th>Gender</th>
                <th>Country</th>
                <th>Province</th>
                <th>Free Time Activities</th>
                <th>Characteristics</th>
                <th>Favorite Color</th>
                <th>Socializing Rate</th>
                <th>Favorite Music</th>
                <th>Telephone</th>
                <th>Wake-up Time</th>
              </tr>";
        echo "<tr>
                <td>$yourname</td>
                <td>$parentname</td>
                <td>$email</td>
                <td>$birthday</td>
                <td>$gender</td>
                <td>$country</td>
                <td>$province</td>
                <td>$text</td>
                <td>$characteristics</td>
                <td style='background-color:$color;'>$color</td>
                <td>$range</td>
                <td>$songs</td>
                <td>$telephone</td>
                <td>$time</td>
              </tr>";
        echo "</table>";
    }
    ?>
</body>
</html>
