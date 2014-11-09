<?php

class UserController extends \BaseController {
    public function __construct()
    {
        $this->beforeFilter('auth');
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $user = User::find($id);
        $topics = $user->topics;
        return View::make('users.profile', compact('user', 'topics'));
	}


}
