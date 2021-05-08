<?php
    include('home/header.php');
    include('actions/connection.php');
?>

                    <?php
                if(isset($_POST["login"]))
            
                {
                    $sql="select * from student where sname='{$_POST["sname"]}' and spass='{$_POST["spass"]}'";
                    $res=$db->query($sql);

                    if($res->num_rows>0)
                    {
                        $ro=$res->fetch_assoc();
                        $_SESSION["sid"]=$ro["sid"];
                        $_SESSION["sname"]=$ro["sname"];
                        echo "<script>window.open('student_home.php','_self');</script>";
                    }
                    else
                    {
                        header('location:/16/error_login.php');
                    }

                    
                    
                }
                if(isset($_GET["mes"]))
                {
                    echo "<div class='error'>{$_GET["mes"]}</div>";
                }
                
            ?>
<!-- end modal -->