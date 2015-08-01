var fs = require('fs');
var Q = require("q");

var Docraptor = require("../../clients/node/docraptor.js");
var docraptor = new Docraptor.Test();
// Only works with Bearer Authorization, which I don't think DR supports ATM.
// docraptor.setToken("YOUR_API_KEY_HERE");

require('request').debug = true;

var params = {
  "user_credentials": "YOUR_API_KEY_HERE",
  "doc": {
    "doc": {
      "name": "eli-real-1.pdf",
      "document_type": "pdf",
      "document_content": "hihihi",
      "test": true
    }
  }
};
var request = docraptor.postDocs(params);

request.done(function(result) {
  res = result;
  console.log(result);

  fs.writeFile('/tmp/node.pdf', res.response.body, 'binary', function(err){
    if (err) throw err
    console.log("The file /tmp/node.pdf was saved!");
  });
})
