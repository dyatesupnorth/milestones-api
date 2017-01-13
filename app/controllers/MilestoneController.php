<?php

class MilestoneController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
//		$user = User::find(Input::get('user_id'));
//
//		$categories = Category::where('user_id', $user->_id)->orderBy('updated_at', 'DESC')->get();

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
        $user = 1;


        $milestone = Milestone::create(array(
            'goal_id' => Input::get('goal_id'),
            'milestone_name' => Input::get('milestone_name'),
            'is_complete' => false

        ));


        $this->updatePercentage(Input::get('goal_id'));
        $goal = $milestone->goal()->first();

        return ApiResponse::json(array(
            'success' => true,
            'input' => Input::all(),
            'goal' => $goal,
            'milestone' => $milestone

        ));

    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {

        $milestone = Milestone::find(Input::get('_id'));

        $milestone->milestone_name = Input::get('milestone_name');

        if (Input::get('is_complete') == "false") {
            $milestone->is_complete = false;

        } else {
            $milestone->is_complete = true;
        }

        $milestone->notes = Input::get('notes');

        $milestone->order = Input::get('order');

        $milestone->save();

        $this->updatePercentage(Input::get('goal_id'));
        $goal = $milestone->goal()->first();
        return ApiResponse::json(array(
            'success' => true,
            'input' => Input::all(),
            'milestone' => $milestone,
            'goal' => $goal
        ));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {

        $goal = Milestone::find($id)->goal()->first();

        Milestone::destroy($id);
        $returnGoal = $this->updatePercentage($goal->_id);


        return ApiResponse::json(array(
            'success' => true,
            'goal' => $returnGoal,
            'milestoneCount' => $milestoneCount = Milestone::where('goal_id', $goal->_id)->count()
        ));
    }

    function updatePercentage($goalId)
    {
        $goal = Goal::find($goalId);

        $milestoneCount = Milestone::where('goal_id', $goal->_id)->count();
        if ($milestoneCount != 0) {
            $milestonesComplete = Milestone::where('goal_id', $goal->_id)->where('is_complete', '=', true)->count();

            $totalMilestones = 100 / $milestoneCount;

            $goal->percentage = $totalMilestones * $milestonesComplete;

        } else {
            $goal->percentage = "0";
            $goal->is_complete = false;
        }


        if ($goal->percentage == "100") {

            $goal->is_complete = true;
        } else {
            $goal->is_complete = false;

        }

        $goal->save();

        return $goal;
    }


}
