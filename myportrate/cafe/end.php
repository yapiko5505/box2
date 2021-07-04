<boby>
     <?php 

        try
        {
            $subject=$_POST['subject'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $dsn = 'mysql:dbname = cafe;host=localhost';
            $user = 'root';
            $password = '';
            $dbh = new PDO($dsn, $user, $password);
            $dbh->query('SET NAMES utf8');

            $subject = htmlspecialchars($subject);
            $name = htmlspecialchars($name);
            $email = htmlspecialchars($email);
            $message = htmlspecialchars($message);

            print $subject;
            print $name;
            print '様<br>';
            print 'お問い合わせありがとうございました。<br>';
            print '頂いたお問い合わせの内容『';
            print $message;
            print '』<br>';
            print $email;
            print 'にメールを送りましたのでご確認ください。';

            $mail_sub = 'お問い合わせ受け付けました。';
            $mail_body = $name."様へ\nお問い合わせご協力ありがとうございました。";
            $mail_body= html_entity_decode($mail_body, ENT_QUOTES, "UTF-8");
            $mail_head = 'From: xxx@xxx.co.jp';
            mb_language('Japanese');
            mb_internal_encoding("UTF-8");
            mb_send_mail($email, $mail_sub, $mail_body, $mail_head);

            $sql = 'INSERT INTO cafes (subject, name, email, message) VALUES(" '.$subject.' "," '.$name.' "," '.$email.' "," '.$message.' ")';
            $stmt = $dbh->prepare($sql);
            $stmt->execute();

            $dbh = null;
        }

        catch(Exception $e)
        {
            print 'ただいま障害により大変ご迷惑をおかけしております。';
        }
    ?>

</body>