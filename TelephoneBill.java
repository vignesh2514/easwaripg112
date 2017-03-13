import java.io.*;
class TelephoneBill
{
  public static void main(String args[])throws Exception
  {
    DataInputStream dis=new DataInputStream(System.in)
    DataOutputStream dos=new DataOutputStream(new FileOutputStream("Tbill.doc"));
    System.out.println("Enter customer id:");
    int cid=Integer.parseInt(dis.readLine());
    System.out.println("Enter Previous reading:");
    double prd=Double.parseDouble(dis.readLine());
    System.out.println("Enter current reading:");
    double crd=Double.parseDouble(dis.readLine());
    dos.writeInt(cid);
    dos.writeDouble(prd);
    dos.writeDoubie(crd);
    dos.close();
    dis.close();
    DataInputStream din=new DataInputStream(new FileInputStream("Tbil.doc"));
    int cid1=din.readInt();
    double prd1=din.readDouble();
    double crd1=din.readDouble();
    double units=crd1-prd1;
    double amt;
    if(units<100)
    amt=units*1.0;
    else if((units>=100)&&(units<=200))
    amt=units*2.0;
    else if(units>=300)
    amt=units*3.0;
    else
    amt=units*5.0;
    System.out.println("The customer id:"+cid 1);
    System.out.println("The units used:"+units);
    System.out.println("The Telephone bill amount:"+amt);
    din.close();
  }
}
