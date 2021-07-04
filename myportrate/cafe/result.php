<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
</head>
<body>
    <?php
        $subject=$_POST['subject'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];

        $subject = htmlspecialchars($subject);
        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
        $message = htmlspecialchars($message);

        if($subject=='') {
            print 'お問い合わせの件名が入力されていません。<br>';
        } else {
            print 'お問い合わせの件名『';
            print $subject;
            print '』';
            print'<br>';
        }
        
        if($name=='') {
            print '氏名が入力されていません。<br>';
        } else {
            print $name;
            print '様';
            print'<br>';
        }

        if($email=='') {
            print 'メールアドレスが入力されていません。<br>';
        } else {
            print 'メールアドレス';
            print $email;
            print'<br>';
        }

        if($message=='') {
            print 'お問い合わせの具体的な内容が入力されていません。<br>';
        } else {
            print 'お問い合わせの具体的な内容『';
            print $message;
            print '』';
            print'<br>';
        }

        if($subject=='' || $name=='' || $email=='' || $message=="") {

            print '<form method="post" action="end.php">';
            print '<input type="button" onclick="history.back()" value="戻る">';
            print '</form>';
        } else{

            print '<form method="post" action="end.php">';
            print '<input name="subject" type="hidden" value=" '.$subject.' ">';
            print '<input name="name" type="hidden" value=" '.$name.' ">';
            print '<input name="email" type="hidden" value=" '.$email.' ">';
            print '<input name="message" type="hidden" value=" '.$message.' ">';
            print '<input type="button" onclick="history.back()" value="戻る">';
            print '<input type="submit" value="OK">';
            print '</form>';

        }

    ?>
   
</body>
</html>