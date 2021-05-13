<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class StaticController extends BaseController {

function Home() {
	return view ('home');
	}
}
?>
