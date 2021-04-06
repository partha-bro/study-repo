# PHP REST API

## What is REST, API and REST API?

	API (Application Program Interface) is an agreed way to send and receive data between computers. For example, if you want to display Google Maps on your site, but the maps are on Google's servers, you need a way to ask Google to provide you with the maps. The way to ask Google to send you the requested maps is through an API provided by Google that tells you to which web addresses should you send the requests to get the data. In a more formal language, you need to send a request to the remote server to get a response.

	REST (Representational State Transfer) is an API that defines a set of functions that programmers can use to send requests and receive responses using the HTTP protocol methods such as GET and POST.

	REST API can be used by any site or application no matter what language it is written in because the requests are based on the universal HTTP protocol, and the information is usually returned in the JSON format that almost all of the programming languages can read.

## The HTTP Methods

	GET		Retrieves data from a remote server. It can be a single resource or a list of resources.
	POST	Creates/insert a new resource on the remote server. *
	PUT		Updates the data on the remote server.
	DELETE	Deletes data from the remote server.

## The HTTP status code

	200	->	OK						->	The data was received and the operation was performed.
	201	->	Created					->	The data was received and a new resource was created. The response needs to return the data in the payload.
	204	->	No content				->	The operation was successful but no data is returned in the response body. This is useful when deleting a resource.
	301	->	Moved permanently		->	This and all the future requests should be redirected to a new URL.
	302	->	Moved temporarily		->	The resource moved temporarily to another URL.
	400	->	Bad request				->	The server cannot accept the request because something is wrong with the client or the request that it sent.
	403	->	Forbidden				->	The client is not allowed to use the resource.
	404	->	Not found				->	The computer is not able to find the resource.
	405	->	Method not allowed		->	For example, when sending a DELETE request to a server that doesn't support the method.
	500	->	Internal server error	->	Service unavailable due to error on the server side.

## Commonly use of Web APIs:

	1. login with facebook/google
	2. map
	3. sms
	4. payment Gateways
	5. weather
	6. email
	7. courier/shipping
	8. booking
	9. chatting
	10. youtube video/images
	11. search

## Type of Web APIs:
	
	1. Open APIs
	2. Partner/paid APIs
	3. Internal APIs

## Why Header() function is use in REST API? 
	
	HTTP Headers are an important part of the API request and response as they represent the meta-data associated with the API request and response. Headers carry information for: Request and Response Body. Request Authorization.

	Headers carry information for:

		1. Request and Response Body
		2. Request Authorization
		3. Response Caching 
		4. Response Cookies

	Authorization: Carries credentials containing the authentication information of the client for the resource being requested.

	WWW-Authenticate: This is sent by the server if it needs a form of authentication before it can respond with the actual resource being requested. Often sent along with a response code of 401, which means ‘unauthorized’.

	Accept-Charset: This is a header which is set with the request and tells the server about which character sets are acceptable by the client.

	Content-Type:  Indicates the media type (text/html or text/JSON) of the response sent to the client by the server, this will help the client in processing the response body correctly.

	Cache-Control: This is the cache policy defined by the server for this response, a cached response can be stored by the client and re-used till the time defined by the Cache-Control header.

	Example:
		header('Content-Type: application/json');							// What type of data return
		header('Access-Control-Allow-Methods: GET,PUT,POST,DELETE');		// Which methods will use 
		header('Access-Control-Allow-Origin: *');							// open/partern API use
				* means all develoers are use and any domain means allow perticular domain to use 
		header('Access-Control-Allow-Headers:<header-name>');				// define header name for use