<?php
session_start();

if (isset($_GET['startover'])) {
    session_destroy();
    header("Location: index.php");
    die();
}

if (!isset($_SESSION['word'])) {
    $words = explode(PHP_EOL, trim(file_get_contents('words.txt')));
    $word = $words[array_rand($words)];
    $_SESSION['word'] = trim($word);
    $_SESSION['guesses'] = [];
}

if (isset($_GET['guess'])) {
    if (mb_strlen($_GET['guess']) == 5) {
        $_SESSION['guesses'][] = $_GET['guess'];
        header("Location: index.php");
        die();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
if (count($_SESSION['guesses']) > 0) {
    echo "<div style='text-align: center; font-size: 1.5rem; margin-bottom: 20px;'>";
    echo "<p><strong style='font-size: 1.8rem;'>Твоите претходни обиди:</strong></p>";
    foreach ($_SESSION['guesses'] as $guess) {
        echo "<p style='font-size: 2.0rem; margin: 5px 0;'>";
        foreach (mb_str_split($guess) as $key => $guessLetter) {
            if ($guessLetter == mb_str_split($_SESSION['word'])[$key]) {
                echo "<span style='color: green; font-size: 2.5rem; font-weight: bold;'>$guessLetter</span>";
            } else if (strpos($_SESSION['word'], $guessLetter) !== FALSE) {
                echo "<span style='color: orange; font-size: 2.5rem; font-weight: bold;'>$guessLetter</span>";
            } else {
                echo "<span style='color: black; font-size: 2.5rem;'>$guessLetter</span>";
            }
        }
        echo "</p>";
    }
    echo "</div>";
}

if (!empty($_SESSION['guesses']) && $_SESSION['word'] == $_SESSION['guesses'][count($_SESSION['guesses']) - 1]) {
    echo "<div style='text-align: center; font-size: 1.5rem;'>";
    echo "<p style='font-size: 1.8rem; font-weight: bold; color: green;'>Честитки, го погодивте зборот: {$_SESSION['word']}</p>";
    echo "<a href='index.php?startover' style='font-size: 1.6rem; color: #007bff; text-decoration: none;'>Нова игра</a>";
    echo "</div>";
} else if (count($_SESSION['guesses']) >= 5) {
    echo "<div style='text-align: center; font-size: 1.5rem;'>";
    echo "<p style='font-size: 1.8rem; font-weight: bold; color: red;'>Повеќе среќа следниот пат. Зборот беше: {$_SESSION['word']}</p>";
    echo "<a href='index.php?startover' style='font-size: 1.6rem; color: #007bff; text-decoration: none;'>Нова игра</a>";
    echo "</div>";
} else {
    echo "<div style='text-align: center; font-size: 1.5rem;'>";
    echo "<form><input type='text' name='guess' minLength='5' maxLength='5' autofocus placeholder='Погоди го зборот' style='font-size: 1.6rem; padding: 10px; margin-right: 10px;'/><button style='font-size: 1.6rem; padding: 10px 15px;'>Провери</button></form>";
    echo "</div>";
}
?>

</body>

</html>