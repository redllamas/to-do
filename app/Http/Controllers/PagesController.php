<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//


	public function about() {
		
		$people = [
			'椎名林檎', 'Phil Elverum'
			];
		return view('pages.about')->with('people', $people);
	}

	public function contact() {
		return view('pages.contact');
	}

}
