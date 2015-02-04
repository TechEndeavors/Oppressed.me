<?php namespace oppressed\Http\Controllers;

use oppressed\Profile;
use oppressed\Http\Requests;
use oppressed\Http\Controllers\Controller;
use Request;
use Carbon\Carbon;

class ProfilesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// return 'testing';
		$profiles = Profile::latest('created_at')->NotReleased()->get();
		return view('profiles.index', compact('profiles'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('profiles.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Profile::create(Request::all());
		return redirect('profiles');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$profile = Profile::findOrFail($id);
		return view('profiles.show', compact('profile'));
		//dd($input);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
