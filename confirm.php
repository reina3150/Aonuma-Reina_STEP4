<?php
session_start();

$name = $_SESSION['name'] ?? '';
$age = $_SESSION['age'] ?? '';
$phone = $_SESSION['phone'] ?? '';
$email = $_SESSION['email'] ?? '';
$address = $_SESSION['address'] ?? '';
$question = $_SESSION['question'] ?? '';
$gender = $_SESSION['gender'] ?? '';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>入力内容確認</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main class="confirm-container">

        <h1>入力内容確認</h1>

        <p>
            名前:
            <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>
        </p>

        <p>
            年齢:
            <?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>
        </p>

        <p>
            電話番号:
            <?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?>
        </p>

        <p>
            メールアドレス:
            <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>
        </p>

        <p>
            住所:
            <?php echo htmlspecialchars($address, ENT_QUOTES, 'UTF-8'); ?>
        </p>

        <p>
            質問:
            <?php echo htmlspecialchars($question, ENT_QUOTES, 'UTF-8'); ?>
        </p>

        <p>
            性別:
            <?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?>
        </p>

    </main>

</body>

</html>