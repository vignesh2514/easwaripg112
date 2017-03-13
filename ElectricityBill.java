import java.io.*;
class ElectricityBill
{
  public static void main(String args[])throws Exception
  {
    DataInputStream dis=new DataInoutStream(System.in);
    DataOutputStream dos=new DtaInputStream(new FileOutputStream("Ebil.doc"));
    System.out.println("Enter customer id:");
    int cid=Integer.parseInt(dis.readLine());
    System.out.println("enter Previous reading:");
    double prd=Double.parseDouble(dis.readLine());
    System.out.println("Enter the current reading:");
    doublecrd=Double.parseDouble(dis.readLine());
    dos.write Int(cid);
    dos.write Double(prd);
    dos.writeDouble(crd);
    dos.close();
    dis.close();
    DataInputStream din=new DataInputStream(new FileInputStream("Ebil.doc"));
    int cid1=din.readInt();
    double prd1=din.readDouble();
    doble crd1=din.readDouble();
    double Units=crd1-prd1;
    double amt=Units*1.50;
    System.out.println("the Customer id:"+cid1);
    System.out.println("the units used:"+Units);
    System.out.println("The Electricity bill amount:"+amt);
    din.close();
   }
}
