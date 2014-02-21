<?php

class AdminDefaultController extends AdminController {

	/**
	 * Admin home page
	 */
	public function getDashboard() {
		$this->layout->title = 'Dashboard';
		$this->layout->current_nav = 'dashboard';
		$this->layout->content = View::make('admin.dashboard');
	}

}