<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
        $html = view('base/head');
        $html .= view('base/header');
        $html .= view('home');
        $html .= view('base/footer');
		return $html;
	}
}
