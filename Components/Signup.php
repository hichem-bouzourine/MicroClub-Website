<?php

include '../config/db_connect.php';

$first_name = $last_name = $email = $birthday = $university = $level = $password = '';
$errors = array('first_name' => '', 'last_name' => '', 'password' => '');

if (isset($_POST['submit'])) {
    // Nous avons validé le formulaire au préalable
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];
    $level = $_POST['level'];
    $university = $_POST['university'];

    // Verification du champs de password
    $password1 = $_POST['password'];
    $password2 = $_POST['confirm-password'];

    if ($password1 != $password2) {
        $errors['password'] = "You've entered a different passwords";
    }

    // le nom et le prénom ne doit pas contenir des caractères spéciaux !
    if (!preg_match('/^[a-zA-Z]+$/', $first_name)) {
        $errors['first_name'] = 'Please enter a valid name.';
        $errors['password'] = 'Please re-write your password.';
    }
    if (!preg_match('/^[a-zA-Z]+$/', $last_name)) {
        $errors['last_name'] = 'Please enter a valid surname.';
        $errors['password'] = 'Please re-write your password.';
    }

    if (!(array_filter($errors))) {
        $first_name = mysqli_real_escape_string($conn, $_POST['first-name']);
        $last_name = mysqli_real_escape_string($conn, $_POST['last-name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
        $level = mysqli_real_escape_string($conn, $_POST['level']);
        $university = mysqli_real_escape_string($conn, $_POST['university']);

        // la requete
        $sql = "INSERT INTO members (first_name, last_name, email, password, birthdate, level, university) VALUES ('$first_name', '$last_name', '$email', '$password', '$birthday', '$level', '$university') ";
        // Sauvegarder & check
        if (mysqli_query($conn, $sql)) {

            $to = $email;
            $subject = "Email verification";
            $message = "Hello mister $name\nWe glad to confirm this registration \r\n";
            $headers = "From: boiteprojet2022@gmail.com";
            $headers .= "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            mail($to, $subject, $message, $headers);

            header('Location: ../index.php');
        } else {
            echo 'Query error' . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Micro-Club - Signup</title>
    <link rel="shortcut icon" href="../images/Logo-clear.svg" />
    <link rel="stylesheet" href="../styles/normalize.css" />
    <link rel="stylesheet" href="../styles/main.css" />
    <!-- Font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cousine:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <header>
        <nav>
            <div class="nav-logo">
                <a href="../index.php">
                    <img src="../images/Logo-white.svg" alt="Micro Club logo" />
                </a>
            </div>
            <div id="navLinks" class="nav-links sidenav">
                <ul id="UlNav" class="disable">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="Events.php">Events</a></li>
                    <li><a href="#support">Support Us</a></li>
                    <li><a href="#media">Media</a></li>
                    <li><a href="#">Join MC</a></li>
                </ul>
            </div>
            <a href="#" id="openBtn" onclick="openNav()">
                <i class="fas fa-bars burger-icon"></i>
            </a>
        </nav>
    </header>
    <main>
        <section>
            <form action="Signup.php" method="POST">
                <div class="input-container">
                    <label for="first-name">First name</label>
                    <input type="text" name="first-name" id="first-name" minlength="3" maxlength="25" placeholder="What's your name?" autofocus required value="<?php echo htmlspecialchars($first_name) ?>" />
                    <div class="red"><?php echo $errors['first_name']; ?></div>
                </div>
                <div class="input-container">
                    <label for="last-name">Last name</label>
                    <input type="text" name="last-name" id="last-name" minlength="3" maxlength="25" placeholder="what about ur family's name?" required value="<?php echo htmlspecialchars($last_name) ?>" />
                    <div class="red"><?php echo $errors['last_name']; ?></div>
                </div>
                <div class="input-container">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" minlength="12" maxlength="40" placeholder="Your Email please..." required value="<?php echo htmlspecialchars($email) ?>" />
                </div>
                <div class="input-container">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" minlength="8" maxlength="30" placeholder="A Strong one please" required />
                    <div class="red"> <?php echo $errors['password'] ?> </div>
                </div>
                <div class="input-container">
                    <label for="confirm-password">Repeate password</label>
                    <input type="password" name="confirm-password" id="confirm-password" minlength="8" maxlength="30" placeholder="Make sure it's unbeatable!" required />
                    <div class="red"> <?php echo $errors['password'] ?> </div>
                </div>
                <div class="input-container">
                    <label for="birthday">Birthday</label>
                    <input type="date" name="birthday" id="birthday" size="40" required value="<?php echo $birthday ?>" />
                </div>
                <div class="input-container">
                    <label for="level">Level</label>
                    <input type="text" list="levels" name="level" id="level" placeholder="In what year are you studying?" required value="<?php echo $level ?>" />
                    <datalist id="levels">
                        <option>L1</option>
                        <option>L2</option>
                        <option>L3</option>
                        <option>M1</option>
                        <option>M2</option>
                    </datalist>
                </div>
                <div class="input-container">
                    <label for="level">University</label>
                    <input type="text" list="univ" name="university" id="university" placeholder="Where do you study?" required value="<?php echo $university ?>" />
                    <datalist id="univ">
                        <option>USTHB</option>
                        <option>ESI</option>
                        <option>ENPA</option>
                        <option>USDB</option>
                    </datalist>
                </div>
                <div class="input-container inline">
                    <input type="checkbox" id="agreements" required />
                    <label for="agreements"> Accept the agreements of the club </label>
                </div>
                <div class="input-container">
                    <button type="submit" name="submit" class="btn-form">Submit</button>
                    <button type="reset" name="reset" class="btn-form">Reset</button>
                </div>
            </form>
        </section>
    </main>
    <?php require 'footer.php'; ?>
</body>
<script src="/js/index.js"></script>

</html>