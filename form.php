<?php
$username   = trim($_POST['username']);
$password   = trim($_POST['password']);
$student_id = trim($_POST['student_id']);
$gender     = ($_POST['gender']);
$languages  = ($_POST['languages']);

if (!preg_match('/[A_Za-z]{2}/', $username)) {
    echo "Change the username";
} elseif (!preg_match('/(bcit)/', $password)) {
    echo "Incorrect password";
} elseif (!preg_match('/^A0[0-9][0-9][0-9][0-9][0-9][0-9][0-9]/', $student_id)) {
    echo "Incorrect student number";
} elseif (!isset($_POST['gender'])) {
    echo "Choose the gender";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Lab3</title>
</head>

<body>
    <div>
        Hello <?php if (isset($gender) && $gender == "Male") {
                    echo "Mr. $username";
                } else {
                    echo "Ms. $username";
                }
                ?>
    </div>
</body>

</html>

<?php
if (isset($_POST['languages'])) {
    $arrayOfLanguages = $_POST['languages'];
    if (count($arrayOfLanguages) <= 5) {
        echo "<p>You are multilingual</p>";
    }
    if (count($arrayOfLanguages) > 5) {
        echo "<p>Impressive. You have been studying quite a few computing languages</p>";
    }

    foreach ($arrayOfLanguages as $oneLanguage) {
        echo "<br />" . $oneLanguage;
    }
} else {
    echo "<p>You are not studying any computer language(s)</p>";
}
?>