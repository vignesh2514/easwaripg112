import java.io.*;
class MyException
{
  public static void main(Stirng args[])throws Exception
  {
    DataInputStream dis=new DataInputStream(System.in)
    System.out.println("Enter your choice:");
    int ch=Integer.parse Int(dis.readLine);
    try
    {
      switch(ch)
      {
        case 1:
        int a=10,b=0,c;
        c=a/b;
        System.out.println(c);
        break;
        case 2:
        int d[]={1,2,3};
        for(int i=1;i<=3;i++)
        System.out.println(d[i]);
        break;
        case 3:
        int e=Integer.parseInt("12x");
        System.out.println(e);
        break;
      }
    }
    catch(Arithmetic Exception ae)
    {
      System.out.println(ae)
      int b=5;
      int a=10;
      int c=a/b;
      System.out.println("The result in the catch:"+c);
    }
    catch(ArrayIndexOutOfBoundsException aoe)
    {
      int d[]={1,2,3};
      System.out.println(aoe);
      System.out.println("The result in the catch:");
      for(inti=0;i<3;i++)
      System.out.println(d[i]);
    }
    catch(NumberFormatException noe)
    {
      System.out.println(noe);
      int e=Integer.parseInt("12");
      System.out.println("the result in the catch:"+e");
    }
  }
}
