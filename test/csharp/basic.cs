using System;
using System.IO;
using System.Text;
using System.Net;
using System.Web;
using System.Runtime.Serialization;
using DocRaptor.Client;
using DocRaptor.Model;
using DocRaptor.Api;



namespace DocRaptorConsoleExample {
  class DocRaptor {
    static void Main(string[] args) {
      DocRaptor docraptor = new DocRaptor();
      NewDoc new_doc = new NewDoc();
      // Doc doc = new Doc();
      // doc.name = "eli-real-1.pdf";
      // doc.test = true;
      // doc.document_content = "hihihi";
      // doc.document_type = "pdf";

      // new_doc.doc = doc;

      // docraptor.DocsPost(new_doc, "");

      // DocRaptor::Swagger.configuration.username = "YOUR_API_KEY_HERE";
      // DocRaptor::Swagger.configuration.debug = true;

      // response = DocRaptor::DefaultApi.docs_post(doc: {test: true, document_content: "hihihi", name: "eli-real-1.pdf", document_type: "pdf"});

      // DocRaptor doc_raptor = new DocRaptor() {
      //   DocumentUrl = @"http://www.docraptor.com/examples/invoice.html",
      //   Name = "csharp_sample.pdf",
      //   Test = true
      // };

      // doc_raptor.CreatePDF();

    }
  }
}
