<?php

class AdminAuthController extends AdminController {

	public function getLogin() {
		$this->layout->title = 'Login';
		$this->layout->content = View::make('admin.login');
	}

	public function postLogin() {
		$rules = array(
			'email'    => 'required|email|max:100',
			'password' => 'required|max:255',
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->passes()) {
			if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
				return Redirect::intended('admin');
			} else {
				return Redirect::back()
					->withInput(Input::except('password'))
					->with('error', 'Login attempt failed.');
			}
		} else {
			return Redirect::back()
				->withInput(Input::except('password'))
				->withErrors($validator)
				->with('error', 'Please enter email address and password.');
		}
	}

	public function getLogout() {
		Auth::logout();
		return Redirect::route('login');
	}

}