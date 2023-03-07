<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return Music::all();
    }
}
