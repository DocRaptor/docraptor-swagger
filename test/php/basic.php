<?php
// require "/Users/esquivalient/code/docraptor-swagger/clients/php/docraptor/autoload.php";
require "../../clients/php/docraptor/autoload.php";
require "../../clients/php/docraptor/lib/ApiClient.php";
require "../../clients/php/docraptor/lib/docraptor/Doc.php";
require "../../clients/php/docraptor/lib/docraptor/NewDoc.php";
require "../../clients/php/docraptor/lib/docraptor/DefaultApi.php";
// require "../../clients/php/docraptor/lib/ApiClient.php";
// require "../../clients/php/docraptor/lib/Configuration.php";

use docraptor\Doc as Doc;
use docraptor\NewDoc as NewDoc;
use docraptor\DefaultApi as DefaultApi;



$doc = new Doc();
$doc->setName("eli-real-1.pdf");
$doc->setTest(true);
$doc->setDocumentType("pdf");
$doc->setDocumentContent("hihihi");

$new_doc = new NewDoc();
$new_doc->setDoc($doc);

$default_api = new DefaultApi();
$api_client = $default_api->getApiClient();
$configuration = $api_client->getConfig();
$configuration->setUsername("YOUR_API_KEY_HERE");
$configuration->setDebug(true);

$default_api->docsPost($new_doc);

?>
