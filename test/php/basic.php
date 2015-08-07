<?php
// require "/Users/esquivalient/code/docraptor-swagger/clients/php/docraptor/autoload.php";
require "../../clients/php/docraptor/autoload.php";
require "../../clients/php/docraptor/lib/ApiClient.php";
require "../../clients/php/docraptor/lib/docraptor/Doc.php";
require "../../clients/php/docraptor/lib/docraptor/DefaultApi.php";
// require "../../clients/php/docraptor/lib/ApiClient.php";
// require "../../clients/php/docraptor/lib/Configuration.php";

use docraptor\Doc as Doc;
use docraptor\NewDoc as NewDoc;
use docraptor\DefaultApi as DefaultApi;



$doc = new Doc();
$doc->setName("swagger-php.pdf");
$doc->setTest(true);
$doc->setDocumentType("pdf");
$doc->setDocumentContent("<html><body>Swagger PHP</body></html>");

$default_api = new DefaultApi();
$api_client = $default_api->getApiClient();
$configuration = $api_client->getConfig();
$configuration->setUsername("YOUR_API_KEY_HERE");
$configuration->setDebug(true);

$default_api->docsPost($doc);

?>
