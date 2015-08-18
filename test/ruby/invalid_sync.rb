#!/usr/bin/env ruby
require "bundler/setup"
Bundler.require

DocRaptor::Swagger.configuration.username = "YOUR_API_KEY_HERE"
DocRaptor::Swagger.configuration.debug = true

begin
  response = DocRaptor::DefaultApi.docs_post(test: true, name: "s" * 201, document_type: "pdf")
rescue => DocRaptor::Swagger::ApiError
  exit
end

abort "Exception expected, but not raised"
