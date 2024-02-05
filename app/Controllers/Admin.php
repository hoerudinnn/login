<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data ['title'] = 'User List';
        // $users = new \Myth\Auth\Models\UserModel();
        // $data ['users'] = $users->findAll();

        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as userid, username, email, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.groups_id');
        $query = $builder->get();

        $data['users'] = $query->getResult();

        return view('admin/index', $data);
    }
}