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
            $pro_name=$_POST['name'];
            $pro_price=$_POST['price'];
            $pro_gazou_name_old=$_POST['gazou_name_old'];
            $pro_gazou_name=$_FILES['gazou_name'];

            $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
            $user = 'root';
            $password = '';

        try
        {
            $dbh = new PDO($dsn, $user, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $pro_code=htmlspecialchars($pro_code, ENT_QUOTES, 'UTF-8');
            $pro_name=htmlspecialchars($pro_name, ENT_QUOTES, 'UTF-8');
            $pro_price=htmlspecialchars($pro_price, ENT_QUOTES, 'UTF-8');

            $sql = 'UPDATE mst_product SET name=?, price=?, gazou=? WHERE code=?';
            $stmt = $dbh->prepare($sql);
            $data[] = $pro_name;
            $data[] = $pro_price;
            $data[] = $pro_gazou_name;
            $data[] = $pro_code;
            $stmt->execute($data);

            if($pro_gazou_name_old!= $pro_gazou_name)
            {
               if($pro_gazou_name_old!='')
                {
                    unlink('./gazou/'.$pro_gazou_name_old);
                }
                               
            }

            $dbh = null;

            print '修正しました。<br>';

        }
        catch (Exception $e)
        {
            print 'ただいま障害により大変ご迷惑をおかけしております。';
            print $e;
            exit();
        }
        
    ?>

    <a href = "pro_list.php">戻る</a>  

</body>
</html>