<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class Pages extends BaseController
{
    public function home(): string
    {
        $tasks = (new TaskModel())
            ->where('task_date', date('Y-m-d'))
            ->orderBy('task_date', 'ASC')
            ->orderBy('id', 'ASC')
            ->findAll();

        return view('pages/welcome', [
            'title' => 'Welcome',
            'heading' => "Today's Tasks",
            'tasks' => $tasks,
            'today' => date('Y-m-d'),
        ]);
    }

    public function tasks(): string
    {
        $tasks = (new TaskModel())
            ->orderBy('task_date', 'ASC')
            ->orderBy('id', 'ASC')
            ->findAll();

        return view('pages/tasks', [
            'title' => 'Task List',
            'heading' => 'All Tasks',
            'tasks' => $tasks,
        ]);
    }

    public function profile(): string
    {
        $user = (new UserModel())->orderBy('id', 'ASC')->first();

        return view('pages/profile', [
            'title' => 'Profile',
            'heading' => 'Demo Profile',
            'user' => $user,
        ]);
    }

    public function about(): string
    {
        return view('pages/about', [
            'title' => 'About',
            'heading' => 'About This System',
        ]);
    }
}
