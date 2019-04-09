<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Sitios;

class SitiosController extends Controller
{
    protected $sitios;

    public function __construct(Sitios $sitios)
    {
        $this->sitios = $sitios;
    }

    public function index()
    {
        $sitios = $this->sitios->all();
        return view('sitios.index', compact('sitios'));
    }
}
