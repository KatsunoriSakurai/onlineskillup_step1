<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>POSTのサンプル</title>
  </head>
  <body>
    <?php
            //commentがPOSTされているなら
      if(isset($_POST["name"])){
        //エスケープしてから表示
        $name = htmlspecialchars($_POST["name"]);
        $mail = htmlspecialchars($_POST["mail"]);
        $hitoko = htmlspecialchars($_POST["hitoko"]);
        print("あなたの名前は「 ${name} 」です。");
        print("あなたのメールアドレスは「 ${mail} 」です。");
        print("あなたのコメントは「 ${hitoko} 」です。");
      }else{
 
    ?>

  投稿内容を入力してください。
  <form action="index.php" method="POST">
    <fieldset>
      <legend>個人情報</legend>
      お名前：<input type="text" name="name" size="20">
      メール：<input type="text" name="mail" size="40">
      <br>一言どうぞ<br>
      <textarea rows="3" name="hitoko" cols="40"></textarea> 
    </fieldset> 
      <input type="submit" value="送信"> 
  </form>

    <?php
      }
    ?>

  </body>
</html>