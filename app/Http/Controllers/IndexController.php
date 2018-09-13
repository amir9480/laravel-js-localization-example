<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function generatedAsset()
    {
        $groups = [];
        foreach (config('translation.groups') as $group) {
            $groups[$group] = trans($group);
        }
        return response()
                ->view("generated_asset", compact("groups"))
                ->header("Content-Type", "text/javascript");
    }
}
