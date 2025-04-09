<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PostController extends Controller
{
    private array $posts = [
        1 => ['title' => 'Laravel Basics', 'content' => 'Learn the basics of Laravel'],
        2 => ['title' => 'Routing in Laravel', 'content' => 'Named routes are powerful!']
    ];

    public function index(): View
    {
        return view('posts.index', ['posts' => $this->posts]);
    }

    public function show(int $id): View|RedirectResponse
    {
        if (!isset($this->posts[$id])) {
            return redirect()->route('admin.posts.index');
        }

        return view('posts.show', ['post' => $this->posts[$id]]);
    }
}
