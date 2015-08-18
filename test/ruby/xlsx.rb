#!/usr/bin/env ruby
require "bundler/setup"
Bundler.require

DocRaptor::Swagger.configuration.username = "YOUR_API_KEY_HERE"
DocRaptor::Swagger.configuration.debug = true

response = DocRaptor::DefaultApi.docs_post(test: true, document_content: "<html><body><table><tr><td>Swagger Ruby</td></tr></table></body></html>", name: "swagger-ruby.xlsx", document_type: "xlsx")
