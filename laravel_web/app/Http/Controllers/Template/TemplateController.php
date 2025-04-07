<?php

namespace App\Http\Controllers\Template;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;


class TemplateController extends Controller
{
    public function create(): Response
    {
        return Inertia::render('template');
    }
}
