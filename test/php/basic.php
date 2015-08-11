<?php
// require "/Users/esquivalient/code/docraptor-swagger/clients/php/docraptor/autoload.php";
require "../../clients/php/docraptor/autoload.php";
require "../../clients/php/docraptor/lib/ApiClient.php";
require "../../clients/php/docraptor/lib/docraptor/Doc.php";
require "../../clients/php/docraptor/lib/docraptor/AsyncDoc.php";
require "../../clients/php/docraptor/lib/docraptor/AsyncDocStatus.php";
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

// $default_api->docsPost($doc);
$response = $default_api->asyncDocsPost($doc);

while (true) {
  $status_response = $default_api->statusIdGet($response->getStatusId());
  if ($status_response->getStatus() == "completed") {
    break;
  }
  sleep(1);
}

# WEIRD SHIT NOW, PREPARE THYSELF
$split_url = explode("/", $status_response->getDownloadUrl());
$download_id = end($split_url);

# </WEIRD SHIT>

echo $default_api->downloadIDGet($download_id);

echo "SHITS DONE!";

?>
