#!/usr/bin/env ruby
require "bundler/setup"
Bundler.require

# binding.pry

DocRaptor::Swagger.configuration.username = "YOUR_API_KEY_HERE"
DocRaptor::Swagger.configuration.debug = true

response = DocRaptor::DefaultApi.docs_post(test: true, document_content: "<html><body>Swagger Ruby</body></html>", name: "swagger-ruby.pdf", document_type: "pdf")
