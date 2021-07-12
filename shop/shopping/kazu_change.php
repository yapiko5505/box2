<?php
    session_start();
    session_regenerate_id(true);

    require_once('../kansu/common.php');

    $post=sanitize($_POST);

    $max=$_POST['max'];
    for($i=0;$i<$max;$i++)
    {
        if(preg_match("/\A[0-9]+\z/", $_POST['kazu'.$i])==0)
        {
            print '数量に誤りがあります。';
            print '<a href="shop_cartlook.php">カートに戻る</a>';
            exit();
        }

        if($post['kazu'.$i]<1 || 10<$post['kazu'.$i])
        {
            print '数量は必ず１個以上、１０個までです。';
            print '<a href="shop_cartlook.php">カートに戻る</a>';
            exit();
        }
        $kazu[]=$_POST['kazu'.$i];
    }

    $cart=$_SESSION['cart'];

    for($i=$max;0<=$i;$i--)
    {
        if(isset($_POST['sakujyo.$i'])==true)
        {
            array_sprice($cart,$i,1);
            array_sprice($kazu,$i,1);
        }
    }

    $_SESSION['cart']=$cart;
    $_SESSION['kazu']=$kazu;

    header('Location:shop_cartlook.php');
    exit();

?>