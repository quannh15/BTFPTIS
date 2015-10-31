<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8 without BOM">
        <title></title>
    </head>
    <body>
        <form action='index.php' method = 'post'>
            <table>
                <tr>
                    <td>
                        <label>User </label>
                    </td>
                    <td>
                        <input type='text' name='username'/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password</label>
                    </td>
                    <td>
                        <input type='password' name="pass"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type='submit' name="submit" value="Login"/> 
                    </td>
                    <td>

                    </td>
                </tr>
            </table>
        </form>
        <?php
//        require 'tong/TinhTong.php';
//        $sum= new TinhTong(3, 3);
//        echo $sum->tinh();
        require 'vendor/slim/slim/Slim/Slim.php';
//        
        \Slim\Slim::registerAutoloader();
        $app = new \Slim\Slim();

        $app = new \Slim\Slim();
        if (isset($_POST['submit'])) {
            $name = $app->request()->post('username');
            $pass = $app->request()->post('pass');
            if ($name == 'quan1044' && $pass == 'quan94'){
                echo "Dang nhap thanh cong";
                sleep(1);
                header ('location: helloworld.php');
            }    
            else echo "Dang nhap that bai, moi dang nhap lai";
        }
        ?>
    </body>
</html>
