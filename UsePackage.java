package first;
public class Sample
{
  public void display()
  {
    System.out.println("This is method in sample class");
    System.out.println("This class belong to package first");
  }
}
import first.*;
class UsePackage
{
  public static void main(String args[])
  {
    First.Sample s=new First.Sample();
    s.dispaly();
  }
}
