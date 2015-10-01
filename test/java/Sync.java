import java.io.*;
import java.net.*;
import docraptor.*;

public class Sync {
  public static void main(String[] args) throws Exception{
    DocApi docraptor = new DocApi();
    ApiClient foo = docraptor.getApiClient();
    foo.setUsername("YOUR_API_KEY_HERE");
    foo.setDebugging(true);

    Doc doc = new Doc();
    doc.setName("swagger-java.pdf");
    doc.setDocumentType("pdf");
    doc.setDocumentContent("<html><body>Swagger Java</body></html>");
    doc.setTest(true);

    docraptor.docsPost(doc);
  }
}
