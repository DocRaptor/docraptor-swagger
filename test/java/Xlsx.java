import java.io.*;
import java.net.*;
import docraptor.*;

public class Xlsx {
  public static void main(String[] args) throws Exception{
    DefaultApi docraptor = new DefaultApi();
    ApiClient foo = docraptor.getApiClient();
    foo.setUsername("YOUR_API_KEY_HERE");
    foo.setDebugging(true);

    Doc doc = new Doc();
    doc.setName("swagger-java.xlsx");
    doc.setDocumentType("xlsx");
    doc.setDocumentContent("<html><body><table><tr><td>Swagger Java</td></tr></table></body></html>");
    doc.setTest(true);

    docraptor.docsPost(doc);
  }
}
