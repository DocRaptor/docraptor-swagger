import docraptor

docraptor.configuration.username = "YOUR_API_KEY_HERE"
docraptor.configuration.debug = True

default_api = docraptor.DefaultApi()

response = default_api.docs_post({"test": True, "document_content": "<html><body>Swagger Python</body></html>", "name": "swagger-python.pdf", "document_type": "pdf"})
