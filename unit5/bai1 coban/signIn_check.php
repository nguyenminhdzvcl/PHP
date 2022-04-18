<?php 
    session_start();
    $username = $_POST['user'];
    $pwd = $_POST['pwd'];
    
    function check($username, $pwd){
        $users = [
            [
                'username' => 'minh',
                'pwd' => '1234567'
            ],
            [
                'username' => 'hoannc',
                'pwd' => '123456'
            ],
        ];
    
        foreach ($users as $user) {
            if ($user['username'] == $username && $user['pwd'] == $pwd) {
                return true;
            }
        }
    
        return false;
    }

    $check = check($username, $pwd);

    $_SESSION['login'] = true;

    header('location: product_list.php');
?>