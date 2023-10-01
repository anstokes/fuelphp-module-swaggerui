<?php

namespace SwaggerUI;

class Controller_SwaggerUI extends \Controller
{
	
	public function action_index()
	{
		// Read relative URL from request parameters
		$url = '';
		if ($relativeUrl = $this->param('relative')) {
			$url = \Uri::base() . $relativeUrl;
		}

		// TODO; Check URL returns valid OAS3 JSON document

		// Display SwaggerUI for URL
		return \Response::forge(
			\View::forge('swaggerui', array(
				'url' => $url,
			))
		);
	}
}		