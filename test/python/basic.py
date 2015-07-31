import docraptor

docraptor.configuration.username = "YOUR_API_KEY_HERE"
docraptor.configuration.debug = True

default_api = docraptor.DefaultApi()

response = default_api.docs_post({"doc": {"test": True, "document_content": "hihihi", "name": "eli-real-1.pdf", "document_type": "pdf"}})
