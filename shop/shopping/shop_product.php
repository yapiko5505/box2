<?php
    // session_start();
    // session_regenerate_id(true);
    // if(isset($_SESSION['member_login'])==false)
    // {
        // print 'ようこそゲスト様　';
        // print '<a href = "member_login.html">会員ログイン</a><br>';  
        // exit();
    // } 
    // else {
        // print 'ようこそ';
        // print $_SESSION['member_name'];
        // print '様<br>';
        // print '<a href = "member_logout.php">ログアウト</a><br>';  
        // print '<br>';
    // }

?>

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
            $pro_code = $_GET['procode'];
            
        try
        {
            $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
            $user = 'root';
            $password = '';
            $dbh = new PDO($dsn, $user, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = 'SELECT name, price, gazou FROM mst_product WHERE code=?';
            $stmt = $dbh->prepare($sql);
            $data[] = $pro_code;
            $stmt->execute($data);

            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            $pro_name=$rec['name'];
            $pro_price=$rec['price'];
            $pro_gazou_name=$rec['gazou'];

            $dbh = null;

            if($pro_gazou_name=='')
            {
                $disp_gazou='';
            } else {
                $disp_gazou='<img src="../product/gazou/'.$pro_gazou_name.'">';
            }
            print '<a href="shop_cartin.php?procode='.$pro_code.'">カートに入れる</a><br><br>';

        }
        catch (Exception $e)
        {
            print 'ただいま障害により大変ご迷惑をおかけしております。';
            exit();
        }
    ?>

    <p>商品情報参照<br></p>
    <p>商品コード<br></p>
    <?php print $pro_code; ?><br><br>
    <p>商品名<br></p>
    <?php print $pro_name; ?><br><br>
    <p>価格<br></p>
    <?php print $pro_price; ?>円<br><br>
    <?php print $disp_gazou; ?><br><br>
    <form>
        <input type="button" onclick="history.back()" value="戻る">
    </form>
</body>

</html>