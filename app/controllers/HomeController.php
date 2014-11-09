<?php

class HomeController extends BaseController {

	public function home()
	{
        $topics = Topic::paginate(3);
        return View::make('page.home')->withTopics($topics);
	}

}
