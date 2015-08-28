<?php
// require "/Users/esquivalient/code/docraptor-swagger/clients/php/docraptor/autoload.php";
require "../../clients/php/docraptor/autoload.php";
require "../../clients/php/docraptor/lib/ApiClient.php";
require "../../clients/php/docraptor/lib/ApiException.php";
require "../../clients/php/docraptor/lib/docraptor/Doc.php";
require "../../clients/php/docraptor/lib/docraptor/AsyncDoc.php";
require "../../clients/php/docraptor/lib/docraptor/AsyncDocStatus.php";
require "../../clients/php/docraptor/lib/docraptor/DefaultApi.php";

use docraptor\Doc as Doc;
use docraptor\NewDoc as NewDoc;
use docraptor\DefaultApi as DefaultApi;

$doc = new Doc();
$doc->setName(str_repeat("s", 201));
$doc->setTest(true);
$doc->setDocumentType("pdf");
$doc->setDocumentContent("<html><body>Swagger PHP</body></html>");

$default_api = new DefaultApi();
$api_client = $default_api->getApiClient();
$configuration = $api_client->getConfig();
$configuration->setUsername("YOUR_API_KEY_HERE");
$configuration->setDebug(true);

try {
  $default_api->docsPost($doc);
} catch (Swagger\Client\ApiException $exception) {
  exit(0);
}
echo "Exception expected, but not raised";
exit(1);

?>
