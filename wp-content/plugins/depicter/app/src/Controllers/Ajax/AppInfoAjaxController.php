<?php
namespace Depicter\Controllers\Ajax;

use Averta\WordPress\Utility\JSON;
use Depicter\GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;
use WPEmerge\Requests\RequestInterface;

class AppInfoAjaxController {

	/**
	 * Retrieves Lists of all entries. (GET)
	 *
	 * @param RequestInterface $request
	 * @param string           $view
	 *
	 * @return ResponseInterface
	 * @throws GuzzleException
	 */
	public function changelogs( RequestInterface $request, string $view)
	{
		try {
			$response = \Depicter::remote()->get( 'v1/core/changelogs', [ 'query' => $request->getQueryParams() ] );
			return \Depicter::json(
				JSON::decode( $response->getBody(), true )
			)->withStatus( 200 );

		} catch( \Exception $exception ) {
			return \Depicter::json([
				'errors' => [ $exception->getMessage() ]
			])->withStatus( 503 );
		}
	}

}
