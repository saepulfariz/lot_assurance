<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LotAssurance extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'List'
        ];

        return view('lot_assurance/new', $data);
    }
}
