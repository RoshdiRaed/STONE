<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{

    public function home()
    {
        $projects = [
            [
                'name' => 'E-Commerce Redesign Project',
                'status' => 'In Progress',
                'description' => 'Revamping the online store experience to boost engagement and conversion rates by 25% in Q2.',
                'tags' => ['UI/UX', 'Frontend', 'Marketing'],
                'team' => ['user1.jpg', 'user2.jpg', 'user3.jpg', 'user4.jpg'],
                'progress' => 65,
                'due_date' => 'Apr 15, 2025',
            ],
        ];

        $tasks = [
            ['title' => 'Finalize homepage wireframes', 'due' => 'Today', 'completed' => false],
            ['title' => 'Create product page prototypes', 'due' => 'Mar 25', 'completed' => false],
            ['title' => 'User interviews', 'due' => 'Mar 18', 'completed' => true],
        ];

        $files = [
            ['name' => 'Homepage_Design.fig', 'updated' => '2 hours ago'],
            ['name' => 'Analytics_Report.xlsx', 'updated' => 'yesterday'],
            ['name' => 'Project_Brief.pdf', 'updated' => '3 days ago'],
        ];

        return view('room.home', compact('projects', 'tasks', 'files'));
    }
}
