var fs = require('fs');
var Q = require("q");

var Docraptor = require("../../clients/node/docraptor.js");
var docraptor = new Docraptor.Test();
docraptor.setToken("YOUR_API_KEY_HERE", "user_credentials", true);

require('request').debug = true;

var request = docraptor.postDocs({
  "doc": {
    "name": Array(202).join("s"),
    "document_type": "pdf",
    "document_content": "<html><body>Swagger Node</body></html>",
    "test": true
  }
});

request.done(function(result) {
  console.log("Exception expected, but not raised")
  process.exit(1);
});

request.catch(function(response) {
  console.log(String(response.body));
  process.exit(0);
});
