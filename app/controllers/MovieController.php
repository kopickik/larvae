<?php

class MovieController extends BaseController {

	public function __construct()
	{
		$this->beforeFilter('serviceAuth');
        $this->beforeFilter('serviceCSRF');
	}

    public function index()
    {
        $movies = Movie::All();
        return Response::json([
                'movies' => $movies->toArray()
            ]);
    }

}
