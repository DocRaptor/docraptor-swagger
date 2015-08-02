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
      Configuration.Username = "YOUR_API_KEY_HERE";
      // Configuration.Debug = true; // Not supported in Csharp
      DefaultApi docraptor = new DefaultApi();

      NewDoc new_doc = new NewDoc();
      Doc doc = new Doc();
      doc.Name = "eli-real-1.pdf";
      doc.Test = true;
      doc.DocumentContent = "hihihi";
      doc.DocumentType = "pdf";

      new_doc.Doc = doc;

      docraptor.DocsPost(new_doc);
    }
  }
}
