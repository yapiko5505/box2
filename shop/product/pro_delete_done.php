<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ろくまる農園</title>
</head>
<body>
    <?php
          
            $pro_code=$_POST['code'];

            $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
            $user = 'root';
            $password = '';
        
        try
        {
            $dbh = new PDO($dsn, $user, $password);
            $dbh->query(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = 'DELETE FROM mst_product WHERE code=?';
            $stmt = $dbh->prepare($sql);
            $data[] = $pro_code;
            $stmt->execute($data);

            $dbh = null;


        }
        catch (Exception $e)
        {
            print 'ただいま障害により大変ご迷惑をおかけしております。';
            exit();
        }
        
    ?>

    <p>削除しました。</p><br><br>
    <a href = "pro_list.php">戻る</a>  

</body>
</html>