<?php

class UserModel {
    private $users = [
        [
            'id' => 1,
            'username' => 'admin',
            'email' => 'admin@example.com',
            'role' => 'admin'
        ],
        [
            'id' => 2,
            'username' => 'user1',
            'email' => 'user1@example.com',
            'role' => 'user'
        ],
        [
            'id' => 3,
            'username' => 'user2',
            'email' => 'user2@example.com',
            'role' => 'user'
        ]
    ];
    
    public function getAllUsers() {
        return $this->users;
    }
    
    public function getUserById($id) {
        foreach ($this->users as $user) {
            if ($user['id'] == $id) {
                return $user;
            }
        }
        return null;
    }
}