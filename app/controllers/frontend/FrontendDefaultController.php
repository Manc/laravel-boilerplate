<?php

class FrontendDefaultController extends FrontendController {

	/**
	 * Home page
	 */
	public function getHome() {
		$this->layout->title = '';
		$this->layout->content = View::make('frontend.index');
	}

}