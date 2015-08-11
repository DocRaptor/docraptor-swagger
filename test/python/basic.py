import docraptor
import time

docraptor.configuration.username = "YOUR_API_KEY_HERE"
docraptor.configuration.debug = True

default_api = docraptor.DefaultApi()

# response = default_api.docs_post({"test": True, "document_content": "<html><body>Swagger Python</body></html>", "name": "swagger-python.pdf", "document_type": "pdf"})
response = default_api.async_docs_post({"test": True, "document_content": "<html><body>Swagger Python</body></html>", "name": "swagger-python.pdf", "document_type": "pdf"})

status_response = None
while True:
  status_response = default_api.status_id_get(response.status_id)
  if status_response.status == "completed":
    break
  time.sleep(1)

# WEIRD SHIT NOW, PREPARE THYSELF

download_id = status_response.download_url.split("/")[-1]

# </WEIRD SHIT>

print default_api.download_id_get(download_id)

print "SHITS DONE!"
