<?php
// require "/Users/esquivalient/code/docraptor-swagger/clients/php/docraptor/autoload.php";
require "../../clients/php/docraptor/autoload.php";
require "../../clients/php/docraptor/lib/ApiClient.php";
require "../../clients/php/docraptor/lib/docraptor/Doc.php";
require "../../clients/php/docraptor/lib/docraptor/AsyncDoc.php";
require "../../clients/php/docraptor/lib/docraptor/AsyncDocStatus.php";
require "../../clients/php/docraptor/lib/docraptor/ClientApi.php";

use docraptor\Doc as Doc;
use docraptor\NewDoc as NewDoc;
use docraptor\ClientApi as ClientApi;

$doc = new Doc();
$doc->setName("swagger-php.pdf");
$doc->setTest(true);
$doc->setDocumentType("pdf");
$doc->setDocumentContent("<html><body>Swagger PHP</body></html>");

$doc_api = new ClientApi();
$api_client = $doc_api->getApiClient();
$configuration = $api_client->getConfig();
$configuration->setUsername("YOUR_API_KEY_HERE");
$configuration->setDebug(true);

$response = $doc_api->asyncDocsPost($doc);

while (true) {
  $status_response = $doc_api->statusIdGet($response->getStatusId());
  if ($status_response->getStatus() == "completed") {
    break;
  }
  sleep(1);
}

echo $doc_api->downloadIDGet($status_response->getDownloadId());

echo "SHITS DONE!";

?>
