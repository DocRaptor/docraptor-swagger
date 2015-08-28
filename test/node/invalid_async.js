var fs = require('fs');
var Q = require("q");

var Docraptor = require("../../clients/node/docraptor.js");
var docraptor = new Docraptor.Test();
docraptor.setToken("YOUR_API_KEY_HERE", "user_credentials", true);

require('request').debug = true;

var requestStart = new Date();

var request = docraptor.postAsync_docs({
  "doc": {
    "name": Array(202).join("s"),
    "document_type": "pdf",
    "document_content": "<html><body>Swagger Node</body></html>",
    "test": true
  }
});

request.done(function(result) {
  var status_id = result.response.body.status_id;
  checkStatus(status_id);
});

function checkStatus(id) {
  var request = docraptor.getStatusById({ id: id });
  request.done(function(result) {
    var json = JSON.parse(result.response.body);
    console.log(json)
    if (json.status == "failed") {
      process.exit(0);
    } else {
      if ((new Date() - requestStart) > 30000) {
        console.log("Did not receive failed validation within 30 seconds.")
        process.exit(1);
      }
      setTimeout(function() { checkStatus(id) }, 1000)
    }
  });
}
