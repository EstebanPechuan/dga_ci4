<?php

namespace App\Controllers;

class Pilares extends BaseController {

    public function index() {
		$data['contenido'] = 'pilares';
        return view('template', $data);
    }

}
