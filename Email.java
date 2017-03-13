import java.sql.*;
import java.io.*;
class Email
{
  public static void main(String args[])throws Exception
  {
    Connection con=null;
    try
    {
      Class.forName("Sun.jdbc.odbc.JdbcOdbc Driver");
      con=DriverManager.get/connection("jdbc:odbc:email");
      System.out.println("CONNECTION ESTABLISHED");
      Statement st=con.creatStatement();
      String a="INSERT INTOT1 VALUES('JENNI','X520','jennibca@gmail.com')";
      st.executeUpdate(0);
      String b="INSERT T1 VALUES('NOELIN','Y521','noelinbca@gmail.com')";
      st.executeUpdate(b);
      ResultSet rs=st=executeQuery("SELECT*FROM T1");
      System.out.println("Email details");
      while(rs.next())
      {
        System.out.println("USERNAME:");
        System.out.println("rs.getObject(1)");
        System.out.println("PASSWORD:");
        System.out.println("rs.getObject(2)");
        System.out.println("EMAIL ID:");
        System.out.println("rs.getObject(3)");
      }
    }
    catch(Exception e)
    {
    }
    con.commit();
    con.close();
  }
}    
