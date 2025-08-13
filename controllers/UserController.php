<?php

class UserController {
    private $userModel;
    
    public function __construct() {
        $this->userModel = new UserModel();
    }
    
    public function listUsers() {
        $users = $this->userModel->getAllUsers();
        
        include './views/layouts/header.php';
        include './views/layouts/menu.php';
        
        echo '<div class="container">';
        echo '<h1>Danh sách người dùng</h1>';
        
        echo '<table class="table table-bordered">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>Tên người dùng</th>';
        echo '<th>Email</th>';
        echo '<th>Vai trò</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        
        foreach ($users as $user) {
            echo '<tr>';
            echo '<td>' . $user['id'] . '</td>';
            echo '<td>' . $user['username'] . '</td>';
            echo '<td>' . $user['email'] . '</td>';
            echo '<td>' . $user['role'] . '</td>';
            echo '</tr>';
        }
        
        echo '</tbody>';
        echo '</table>';
        
        echo '</div>';
        
        include './views/layouts/footer.php';
    }
}