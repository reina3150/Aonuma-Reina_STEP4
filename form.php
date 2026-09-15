
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>フォーム入力</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <h1>フォーム入力</h1>
        <form action="confirm.php" method="post">

        <div>
            <label for="name">名前：</label>
            <input type="text" id="name" name="name">
        </div>
        
        <div>
            <label for="age">年齢:</lavel>
            <input type="number" id="age" name="age">
        </div>

        <div>
            <label for="phone">電話番号:<label>
            <input type="tel" id="phone" name="phone">
        </div>

        <div>
            <label for="email">メールアドレス:</lavel>
            <input type="email" id="email" name="email">
        </div>

        <div>
            <label for="address">住所：</lavel>
            <input type="text" id="address" name="address">
        </div>

        <div>
            <label for="question">質問：<lavel>
            <textarea id="question" name="question"></textarea>
        </div>

        <div>
            <span>性別：</span>
            
            <input type="radio" id="male" name="gender" value="男性”>
            <label for="male">男性</label>

            <input type="radio" id="female" name="gender" value="女性">
            <label for="female">女性</label>


            <botton type="submit">送信</bottom>
        </form>
    </body>
    </html>
    


        
