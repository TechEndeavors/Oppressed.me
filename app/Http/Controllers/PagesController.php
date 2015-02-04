<?php namespace oppressed\Http\Controllers;

use oppressed\Http\Requests;
use oppressed\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	/**
	 * Display a listing of all of the profiles.
	 *
	 * @return Response
	 */
	public function index()
	{
		$profiles = Profile::latest('created_at')->NotReleased()->get();
		return view('pages.index', compact('profiles'));
	}

	/**
	 * Display the contact information and form.
	 *
	 * @return Response
	 */
	public function contact()
	{
		return view('pages.contact');
	}

	/**
	 * Display some information about us.
	 *
	 * @return Response
	 */
	public function about()
	{
		return view('pages.about');
	}


}
