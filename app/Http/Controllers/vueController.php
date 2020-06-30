<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class vueController extends Controller
{
    public function showVue()
    {
        return View('vue');
    }
}
