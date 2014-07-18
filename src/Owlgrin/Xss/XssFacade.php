<?php namespace Owlgrin\Xss;

use Illuminate\Support\Facades\Facade;

class XssFacade extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'xss'; }

}
