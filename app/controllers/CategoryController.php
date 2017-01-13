<?php

class CategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = User::find(Input::get('user_id'));

		$categories = Category::where('user_id', 1)->orderBy('updated_at', 'DESC')->get();

		$categories->each(function ($category) {
			$category->user = User::find(Input::get('userId'));
			$category->goals = Goal::where('category_id',$category->_id)->get();

			$category->goals->each(function ($goal) {
				$goal->milestones = Milestone::where('goal_id', $goal->_id)->get();

			});
		});

		return ApiResponse::json(array(
			'input' => Input::all(),
			'user' => $user,
			'categories' => $categories,
		));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
		Category::destroy($id);

		return ApiResponse::json(array('success' => true));
	}


}
