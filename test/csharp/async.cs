using DocRaptor.Client;
using DocRaptor.Model;
using DocRaptor.Api;
using System;
using System.Threading;

class AsyncTest {
  static void Main(string[] args) {
    Configuration.Username = "YOUR_API_KEY_HERE";
    // Configuration.Debug = true; // Not supported in Csharp
    DefaultApi docraptor = new DefaultApi();

    Doc doc = new Doc();
    doc.Name = "swagger-csharp.pdf";
    doc.Test = true;
    doc.DocumentContent = "<html><body>Swagger C#</body></html>";
    doc.DocumentType = "pdf";

    AsyncDoc response = docraptor.AsyncDocsPost(doc);

    AsyncDocStatus status_response;
    while(true) {
      status_response = docraptor.StatusIdGet(response.StatusId);
      if (status_response.Status == "completed") {
        break;
      }
      Thread.Sleep(1000);
    }

    // WEIRD SHIT NOW, PREPARE THYSELF

    string[] url_parts = status_response.DownloadUrl.Split(new char[] { '/' });
    string download_id = url_parts[url_parts.Length - 1];

    // </WEIRD SHIT>

    Console.WriteLine(docraptor.DownloadIdGet(download_id));

    Console.WriteLine("SHITS DONE!");
  }
}
