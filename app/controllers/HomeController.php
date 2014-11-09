<?php

class HomeController extends BaseController {

	public function home()
    {
        $topics_pass = Topic::topicsPass();
        $topics_not_pass = Topic::topicsNotPass();
        return View::make('page.home', compact('topics_pass', 'topics_not_pass'));
	}

}
