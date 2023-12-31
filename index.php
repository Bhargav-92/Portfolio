<?php
session_start();

include("db.php");

$msg = false;

if (isset($_POST['btnlogin'])) {
    $user = $_POST['name'];
    $pass = $_POST['password'];

    $query = "select * from user where Name = '" . $user . "' AND Password = '" . $pass . "'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
        header("Location: home.html");
    } else {
        $msg = 'Incorrect Password';
    }
    
} 

?>



<!DOCTYPE html>
<html>

<head>
    <title>Simple registration form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <style>
        html,
        body {
            display: flex;
            justify-content: center;
            height: 100%;
        }

        body,
        div,
        h1,
        form,
        input,
        p {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 16px;
            color: #666;
        }

        h1 {
            padding: 10px 0;
            font-size: 32px;
            font-weight: 300;
            text-align: center;
        }

        p {
            font-size: 12px;
        }

        hr {
            color: #a9a9a9;
            opacity: 0.3;
        }

        .main-block {
            max-width: 340px;
            min-height: 400px;
            padding: 10px 0;
            margin: auto;
            border-radius: 5px;
            border: solid 1px #ccc;
            box-shadow: 1px 2px 5px rgba(0, 0, 0, .31);
            background: #ebebeb;
        }

        form {
            margin: 0 20px;
        }

        .account-type,
        .gender {
            margin: 15px 0;
        }

        label#icon {
            margin: 0;
            border-radius: 5px 0 0 5px;
        }


        input[type=text],
        input[type=password] {
            width: calc(100% - 57px);
            height: 36px;
            margin: 13px 0 0 -5px;
            padding-left: 10px;
            border-radius: 0 5px 5px 0;
            border: solid 1px #cbc9c9;
            box-shadow: 1px 2px 5px rgba(0, 0, 0, .09);
            background: #fff;
        }

        input[type=password] {
            margin-bottom: 15px;
        }

        #icon {
            display: inline-block;
            padding: 9.3px 15px;
            box-shadow: 1px 2px 5px rgba(0, 0, 0, .09);
            background: crimson;
            color: #fff;
            text-align: center;
        }

        .btn-block {
            margin-top: 10px;
            text-align: center;
        }

        input[type=submit] {
            width: 100%;
            padding: 10px 0;
            margin: 30px auto;
            border-radius: 5px;
            border: none;
            background: crimson;
            font-size: 14px;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background: rgb(221, 43, 79)
        }

        .email {
            margin-top: 2rem;
        }

        .password {
            margin-top: 10px;
        }

        .right_bx1 {
            color: crimson;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="main-block">
        <h1>Login</h1>
        <form method="post">
            <hr>
            <div class="email">
                <label id="icon" for="name"><i class="fas fa-envelope"></i></label>
                <input type="text" name="name" id="name" placeholder="User Name" required />
            </div>
            <div class="password">
                <label id="icon" for="name"><i class="fas fa-unlock-alt"></i></label>
                <input type="password" name="password" id="name" placeholder="Password" required />
            </div>
            <hr>
            <div class="right_bx1">
                <?php
                echo ('<h3>' . $msg . '</h3>');
                ?>
            </div>
            <div class="btn-block">
                <p>By clicking Register, you agree on our <a href="#">Privacy Policy for OurSite</a>.</p>
                <input type="submit" value="Sign In" class="submit" name="btnlogin">
            </div>
            <div class="btn-block">
                <h5>Not Register Yet ?? <a href="./signup.php"> Sign Up</a>.</h5>
            </div>

        </form>
    </div>
</body>

</html>