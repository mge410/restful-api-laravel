<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Services\Product\Service;

class BaseController extends Controller
{
    public $services;

    public function __construct(Service $service)
    {
        $this->services = $service;
    }
}
