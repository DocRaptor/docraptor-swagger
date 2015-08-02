import java.io.*;
import java.net.*;
import docraptor.*;

public class Basic {
  public static void main(String[] args) throws Exception{
    DefaultApi docraptor = new DefaultApi();
    ApiClient foo = docraptor.getApiClient();
    foo.setUsername("YOUR_API_KEY_HERE");
    foo.setDebugging(true);

    Doc doc = new Doc();
    NewDoc new_doc = new NewDoc();
    new_doc.setDoc(doc);
    doc.setName("swagger-java.pdf");
    doc.setDocumentType("pdf");
    doc.setDocumentContent("<html><body>Swagger Java</body></html>");
    doc.setTest(true);

    docraptor.docsPost(new_doc);
  }
}
