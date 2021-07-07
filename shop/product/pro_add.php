<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ろくまる農園</title>
</head>
<body>
    <p>商品追加</p><br>
   <form method="post" action="pro_add_check.php">
       <p>商品名を入力してください。</p>
        <input type="text" name="name" style="width:200px"><br>
        <p>価格を入力してください。</p>
        <input type="text" name="price" style="width:50px"><br><br>
        <input type="button" onclick="history.back()" value="戻る">
        <input type="submit" value="OK" >
   </form>
    
</body>
</html>