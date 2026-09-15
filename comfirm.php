<!DOCTYPE html>

<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>フォーム入力</title>
        <link rel="stylesheet" href="style.css">

    </head>

    <body>
        <h1>フォーム入力</h1>

        <?php
        if ($SERVER["REQEST"_METHOD"] === "POST"){

            $name = $_POST['name'];
            $age = $_POST['age'];
            $phone = $_POST['phone'];
            $email = $_POST['email'] ;
            $address = $_POST['address'];
            $question = $_POST['question'];
            $gender = $_POST['gender'];


            //バリテーション
            if (!preg_match("/^[ぁーんァーヶ一-龠a-zA-Z\s]+$/u",$name)) {
                echo "<p>名前はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";
            }

            if (!is_numeric($age) || $age < 0 $age > 150) {
                echo "<P>年齢は0から150の間で入力してください。</p>";
            }

            if (!preg_match('/^[0-9-]+$/', $phone)) {
                echo "<P>電話番号は半角数字とハイフンのみ使用できます。</p>"
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<p>メールアドレスの形式が正しくありません。</p>"

            if (!preg_match('/^ぁーんァーヶーー龠a-zA-Z0-9--]+$/u', $address)) {
                echo "<p>住所はひらがな、カタカナ、漢字、英字、半角数字、ハイフンのみ使用できます。</p>"

            ?>

    </body>      
    
</html>





         

