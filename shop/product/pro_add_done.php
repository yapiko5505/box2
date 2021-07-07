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
        
        
            $pro_name=$_POST['name'];
            $pro_price=$_POST['price'];

            $dsn = 'mysql:dbname = shop; host = localhost; charset=utf8';
            $user = 'root';
            $password = '';

        try
        {
            $dbh = new PDO($dsn, $user, $password);
            $dbh->query(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $pro_name=htmlspecialchars($pro_name, ENT_QUOTES, 'UTF-8');
            $pro_price=htmlspecialchars($pro_price, ENT_QUOTES, 'UTF-8');

            $sql = 'INSERT INTO mst_product(name, price) VALUES(?, ?)';
            $stmt = $dbh->prepare($sql);
            $data[] = $pro_name;
            $data[] = $pro_price;
            $stmt->execute($data);

            $dbh = null;

            print $pro_name;
            print 'を追加しました。<br>';

        }
        catch (Exception $e)
        {
            print 'ただいま障害により大変ご迷惑をおかけしております。';
            exit();
        }
        
    ?>

    <a href = "pro_list.php">戻る</a>  

</body>
</html>