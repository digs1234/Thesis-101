<?php
    include('home/header.php');
    include('actions/connection.php');
?>
  <?php
                if(isset($_POST["login"]))
            
                {
                    $sql="select * from admin where aname='{$_POST["aname"]}' and apass='{$_POST["apass"]}'";
                    $res=$db->query($sql);

                    if($res->num_rows>0)
                    {
                        $ro=$res->fetch_assoc();
                        $_SESSION["aid"]=$ro["aid"];
                        $_SESSION["aname"]=$ro["aname"];
                        echo "<script>window.open('teacher_home.php','_self');</script>";
                    }
                    else
                    {
                        header('location:/16/error1_login.php');
                    }

                    
                    
                }
                if(isset($_GET["mes"]))
                {
                    echo "<div class='error'>{$_GET["mes"]}</div>";
                }
                
            ?>