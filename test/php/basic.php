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


// # pecl_http must be installed
// $api_key = "YOUR_API_KEY_HERE";
// $url = "https://docraptor.com/docs?user_credentials=$api_key";

// $request = new HTTPRequest($url, HTTP_METH_POST);
// $request->setPostFields(array('doc[document_url ]'    => "http://www.docraptor.com/examples/invoice.html",
//                               'doc[document_type]'    => 'pdf',
//                               'doc[name]'             => 'my_doc.pdf',
//                               'doc[test]'             => 'true'));
// $request->send();

// $file = fopen ("docraptor.pdf", "w");
// fwrite($file, $request->getResponseBody());
// fclose ($file);
?>
