#!/usr/bin/env ruby
require "bundler/setup"
Bundler.require

# binding.pry

DocRaptor::Swagger.configuration.username = "YOUR_API_KEY_HERE"
DocRaptor::Swagger.configuration.debug = true

response = DocRaptor::DefaultApi.docs_post(doc: {test: true, document_content: "hihihi", name: "eli-real-1.pdf", document_type: "pdf"})
