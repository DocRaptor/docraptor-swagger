var fs = require('fs');
var Q = require("q");

var Docraptor = require("../../clients/node/docraptor.js");
var docraptor = new Docraptor.Test();
docraptor.setToken("YOUR_API_KEY_HERE", "user_credentials", true);

require('request').debug = true;

var request = docraptor.postDocs({
  "doc": {
    "name": "swagger-node.pdf",
    "document_type": "pdf",
    "document_content": "<html><body>Swagger Node</body></html>",
    "test": true
  }
});

request.done(function(result) {
  res = result;
  console.log(result);

  fs.writeFile('/tmp/node.pdf', res.response.body, 'binary', function(err){
    if (err) throw err
    console.log("The file /tmp/node.pdf was saved!");
  });
})
