<?php 

Class PagesController {
	public function home()
	{
		return view('index');
	}

	public function about()
	{
		return view('about');
	}

	public function aboutCulture()
	{
		$company = 'Laracasts';
		return view('about-culture', compact('company'));
	}

	public function contact()
	{
		return view('contact');
	}
}