#!/usr/bin/env ruby
require "bundler/setup"
Bundler.require

# binding.pry

DocRaptor::Swagger.configuration.username = "YOUR_API_KEY_HERE"
DocRaptor::Swagger.configuration.debug = true

# response = DocRaptor::DefaultApi.docs_post(test: true, document_content: "<html><body>Swagger Ruby</body></html>", name: "swagger-ruby.pdf", document_type: "pdf")
response = DocRaptor::DefaultApi.async_docs_post(test: true, document_content: "<html><body>Swagger Ruby</body></html>", name: "swagger-ruby.pdf", document_type: "pdf")

status_response = nil
loop do
  status_response = DocRaptor::DefaultApi.status_id_get(response.status_id)
  break if status_response.status == "completed"
  sleep 1
end

# WEIRD SHIT NOW, PREPARE THYSELF

download_id = status_response.download_url.split("/").last

# </WEIRD SHIT>

puts DocRaptor::DefaultApi.download_id_get(download_id)

puts "SHITS DONE!"
