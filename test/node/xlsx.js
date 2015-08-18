var fs = require('fs');
var Q = require("q");

var Docraptor = require("../../clients/node/docraptor.js");
var docraptor = new Docraptor.Test();
docraptor.setToken("YOUR_API_KEY_HERE", "user_credentials", true);

require('request').debug = true;

var request = docraptor.postDocs({
  "doc": {
    "name": "swagger-node.xlsx",
    "document_type": "xlsx",
    "document_content": "<html><body><table><tr><td>Swagger Node</td></tr></table></body></html>",
    "test": true
  }
});

request.done(function(result) {
  res = result;
  console.log(result);

  fs.writeFile('/tmp/node.xlsx', res.response.body, 'binary', function(err){
    if (err) throw err
    console.log("The file /tmp/node.xlsx was saved!");
  });
});
