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

        require_once('../kansu/common.php');

        $post=sanitize($_POST);

        $onamae=$_POST['onamae'];
        $email=$_POST['email'];
        $postal1=$_POST['postal1'];
        $postal2=$_POST['postal2'];
        $address=$_POST['address'];
        $tel=$post['tel'];

        $okflg=true;

        if($onamae=='')
        {
            print 'お名前が入力されていません。<br><br>';
            $okflg=false;
        }

        if(preg_match('/\A[\w\-\.]+\@[\w\-\.]+\.([a-z]+)\z/',$email)==0)
        {
            print 'メールアドレスを正確に入力してください。<br><br>';
            $okflg=false;
        }

        if(preg_match('/\A[0-9]+\z/',$postal1)==0)
        {
            print '郵便番号は半角数字で入力してください。<br><br>';
            $okflg=false;
        }

        if(preg_match('/\A[0-9]+\z/',$postal2)==0)
        {
            print '郵便番号は半角数字で入力してください。<br><br>';
            $okflg=false;
        }

        if($address=='')
        {
            print '住所が入力されていません。<br><br>';
            $okflg=false;
        }

        if(preg_match('/\A\d{2,5}-?\d{2,5}-\d{4,5}\z/', $tel)==0)
        {
            print '電話番号を正確に入力してください。<br><br>';
            $okflg=false;
        }

        if($okflg==true)
        {
        print '<form method="post" action="shop_form_done.php">';
        print '<form method="hidden" name="onamae" value="'.$onamae.'">';
        print '<form method="hidden" name="email" value="'.$email.'">';
        print '<form method="hidden" name="postal1" value="'.$postal1.'">';
        print '<form method="hidden" name="postal2" value="'.$postal2.'">';
        print '<form method="hidden" name="address" value="'.$address.'">';
        print '<form method="hidden" name="tel" value="'.$tel.'">';
        print '<input type="button" onclick="history.back()" value="戻る">';
        print ' <input type="submit" value="OK"><br>';  
        print '</form>';
        }
        else
        {
            print '<form>';
            print '<input type="button" onclick="history.back()" value="戻る">';
            print '</form>';
        }

        ?>
        
</body>
</html>