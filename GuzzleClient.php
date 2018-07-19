

$client = new GuzzleHttp\Client([
	'headers' => ['User-Agent'=>'MyAgent']
]);


// Basic Auth
$client->request('GET', '/login', ['auth' => ['username', 'password']]);


// GET Request
$response = $client->request('GET', 'URL_ENDPOINT');

if ($response->getStatusCode() == 200){
	if($response->hasHeader('content-length')){
		$contentLength = $response-getHeader('content-length')[0];
		echo "<p> Download $contentLenth bytes of data. </p>";
	}
	$body = $response->getBody();
	$xml = new SimpleXMLElement($body);
}


// POST Request
$postResponse = $client->post('http://httpbin.org/post', [
	'headers' => ['Content-Type'=>'application/json'],
	'query' => [''=>'']
]);

$statusCode = §postResponse->getStatusCode();
$body = $postResponse->json();


