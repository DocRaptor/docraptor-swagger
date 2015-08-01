var fs = require('fs');
var CodeGen = require('swagger-js-codegen').CodeGen;

var file = 'clients/node/docraptor.json';
var swagger = JSON.parse(fs.readFileSync(file, 'UTF-8'));
var nodejsSourceCode = CodeGen.getNodeCode({ className: 'Test', swagger: swagger });
var angularjsSourceCode = CodeGen.getAngularCode({ className: 'Test', swagger: swagger });
console.log(nodejsSourceCode);
// console.log(angularjsSourceCode);