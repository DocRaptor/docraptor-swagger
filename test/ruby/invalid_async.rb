#!/usr/bin/env ruby
require "bundler/setup"
Bundler.require

DocRaptor.configure do |dr|
  dr.username = "YOUR_API_KEY_HERE"
  dr.debugging = true
end

dr = DocRaptor::DocApi.new

response = dr.async_docs_post(test: true, document_content: "<html><body>Swagger Ruby</body></html>", name: "s" * 201, document_type: "pdf")

status_response = nil
30.times do
  status_response = dr.status_id_get(response.status_id)
  exit if status_response.status == "failed"
  sleep 1
end

abort "Did not receive failed validation within 30 seconds."
