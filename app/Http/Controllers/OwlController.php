<?php

namespace App\Http\Controllers;

use App\Models\Owl;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class OwlController extends Controller
{

    /**
     * Orders the owls from the database, based on when it is scheduled at in descending order
     *
     * @return Application|Factory|View
     * also returns the index page of the owls directory
     */
    public function index()
    {
        $owls = Owl::orderBy('scheduled_at', 'desc')->get();

        return view('owls.index', compact('owls'));
    }
//
//    public function create() {
//        return view('owls.create');
//    }
}
