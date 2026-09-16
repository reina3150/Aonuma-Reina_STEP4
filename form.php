<?php
$errors = [];

$name = $_POST['name'] ?? '';
$age = $_POST['age'] ?? '';
$phone = $_POST['phone'] ?? '';
$email = $_POST['email'] ?? '';
$address = $_POST['address'] ?? '';
$question = $_POST['question'] ?? '';
$gender = $_POST['gender'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // 名前
    if ($name === '') {
        $errors[] = '名前を入力してください。';
    } elseif (!preg_match('/^[ぁ-んァ-ヶ一-龠々a-zA-Z]+$/u', $name)) {
        $errors[] = '名前はひらがな、カタカナ、漢字、英字のみ使用できます。';
    }

    // 年齢
    if ($age === '') {
        $errors[] = '年齢を入力してください。';
    } elseif (!ctype_digit($age) || (int)$age < 0 || (int)$age > 150) {
        $errors[] = '年齢は0から150の間で入力してください。';
    }

    // 電話番号
    if ($phone === '') {
        $errors[] = '電話番号を入力してください。';
    } elseif (!preg_match('/^[0-9-]+$/', $phone)) {
        $errors[] = '電話番号は半角数字とハイフンのみ使用できます。';
    }

    // メールアドレス
    if ($email === '') {
        $errors[] = 'メールアドレスを入力してください。';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'メールアドレスの形式が正しくありません。';
    }

    // 住所
    if ($address === '') {
        $errors[] = '住所を入力してください。';
    } elseif (!preg_match('/^[ぁ-んァ-ヶ一-龠々a-zA-Z0-9\-]+$/u', $address)) {
        $errors[] = '住所はひらがな、カタカナ、漢字、英字、半角数字、ハイフンのみ使用できます。';
    }

    // 質問
    if ($question === '') {
        $errors[] = '質問を入力してください。';
    }

    // 性別
    if ($gender === '') {
        $errors[] = '性別を選択してください。';
    }

    // エラーがなければ確認画面へ
    if (empty($errors)) {
        session_start();

        $_SESSION['name'] = $name;
        $_SESSION['age'] = $age;
        $_SESSION['phone'] = $phone;
        $_SESSION['email'] = $email;
        $_SESSION['address'] = $address;
        $_SESSION['question'] = $question;
        $_SESSION['gender'] = $gender;

        header('Location: confirm.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォーム入力</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main class="container">

        <h1>フォーム入力</h1>

        <?php if (!empty($errors)): ?>
            <div class="error">
                <?php foreach ($errors as $error): ?>
                    <p><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form action="form.php" method="post">

            <div class="form-group">
                <label for="name">名前:</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
            </div>

            <div class="form-group">
                <label for="age">年齢:</label>
                <input
                    type="text"
                    id="age"
                    name="age"
                    value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">
            </div>

            <div class="form-group">
                <label for="phone">電話番号:</label>
                <input
                    type="text"
                    id="phone"
                    name="phone"
                    value="<?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?>">
            </div>

            <div class="form-group">
                <label for="email">メールアドレス:</label>
                <input
                    type="text"
                    id="email"
                    name="email"
                    value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
            </div>

            <div class="form-group">
                <label for="address">住所:</label>
                <input
                    type="text"
                    id="address"
                    name="address"
                    value="<?php echo htmlspecialchars($address, ENT_QUOTES, 'UTF-8'); ?>">
            </div>

            <div class="form-group">
                <label for="question">質問:</label>
                <input
                    type="text"
                    id="question"
                    name="question"
                    value="<?php echo htmlspecialchars($question, ENT_QUOTES, 'UTF-8'); ?>">
            </div>

            <div class="form-group">
                <label for="gender">性別:</label>

                <select id="gender" name="gender">
                    <option value="">選択してください</option>

                    <option value="男性"
                        <?php if ($gender === '男性') echo 'selected'; ?>>
                        男性
                    </option>

                    <option value="女性"
                        <?php if ($gender === '女性') echo 'selected'; ?>>
                        女性
                    </option>

                    <option value="その他"
                        <?php if ($gender === 'その他') echo 'selected'; ?>>
                        その他
                    </option>
                </select>
            </div>

            <button type="submit">送信</button>

        </form>

    </main>

</body>

</html><?php
$errors = [];

$name = $_POST['name'] ?? '';
$age = $_POST['age'] ?? '';
$phone = $_POST['phone'] ?? '';
$email = $_POST['email'] ?? '';
$address = $_POST['address'] ?? '';
$question = $_POST['question'] ?? '';
$gender = $_POST['gender'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // 名前
    if ($name === '') {
        $errors[] = '名前を入力してください。';
    } elseif (!preg_match('/^[ぁ-んァ-ヶ一-龠々a-zA-Z]+$/u', $name)) {
        $errors[] = '名前はひらがな、カタカナ、漢字、英字のみ使用できます。';
    }

    // 年齢
    if ($age === '') {
        $errors[] = '年齢を入力してください。';
    } elseif (!ctype_digit($age) || (int)$age < 0 || (int)$age > 150) {
        $errors[] = '年齢は0から150の間で入力してください。';
    }

    // 電話番号
    if ($phone === '') {
        $errors[] = '電話番号を入力してください。';
    } elseif (!preg_match('/^[0-9-]+$/', $phone)) {
        $errors[] = '電話番号は半角数字とハイフンのみ使用できます。';
    }

    // メールアドレス
    if ($email === '') {
        $errors[] = 'メールアドレスを入力してください。';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'メールアドレスの形式が正しくありません。';
    }

    // 住所
    if ($address === '') {
        $errors[] = '住所を入力してください。';
    } elseif (!preg_match('/^[ぁ-んァ-ヶ一-龠々a-zA-Z0-9\-]+$/u', $address)) {
        $errors[] = '住所はひらがな、カタカナ、漢字、英字、半角数字、ハイフンのみ使用できます。';
    }

    // 質問
    if ($question === '') {
        $errors[] = '質問を入力してください。';
    }

    // 性別
    if ($gender === '') {
        $errors[] = '性別を選択してください。';
    }

    // エラーがなければ確認画面へ
    if (empty($errors)) {
        session_start();

        $_SESSION['name'] = $name;
        $_SESSION['age'] = $age;
        $_SESSION['phone'] = $phone;
        $_SESSION['email'] = $email;
        $_SESSION['address'] = $address;
        $_SESSION['question'] = $question;
        $_SESSION['gender'] = $gender;

        header('Location: confirm.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォーム入力</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main class="container">

        <h1>フォーム入力</h1>

        <?php if (!empty($errors)): ?>
            <div class="error">
                <?php foreach ($errors as $error): ?>
                    <p><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form action="form.php" method="post">

            <div class="form-group">
                <label for="name">名前:</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
            </div>

            <div class="form-group">
                <label for="age">年齢:</label>
                <input
                    type="text"
                    id="age"
                    name="age"
                    value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">
            </div>

            <div class="form-group">
                <label for="phone">電話番号:</label>
                <input
                    type="text"
                    id="phone"
                    name="phone"
                    value="<?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?>">
            </div>

            <div class="form-group">
                <label for="email">メールアドレス:</label>
                <input
                    type="text"
                    id="email"
                    name="email"
                    value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
            </div>

            <div class="form-group">
                <label for="address">住所:</label>
                <input
                    type="text"
                    id="address"
                    name="address"
                    value="<?php echo htmlspecialchars($address, ENT_QUOTES, 'UTF-8'); ?>">
            </div>

            <div class="form-group">
                <label for="question">質問:</label>
                <input
                    type="text"
                    id="question"
                    name="question"
                    value="<?php echo htmlspecialchars($question, ENT_QUOTES, 'UTF-8'); ?>">
            </div>

            <div class="form-group">
                <label for="gender">性別:</label>

                <select id="gender" name="gender">
                    <option value="">選択してください</option>

                    <option value="男性"
                        <?php if ($gender === '男性') echo 'selected'; ?>>
                        男性
                    </option>

                    <option value="女性"
                        <?php if ($gender === '女性') echo 'selected'; ?>>
                        女性
                    </option>

                    <option value="その他"
                        <?php if ($gender === 'その他') echo 'selected'; ?>>
                        その他
                    </option>
                </select>
            </div>

            <button type="submit">送信</button>

        </form>

    </main>

</body>

</html>
    


        
