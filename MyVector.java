import java.util.*;
class MyVector
{
public static void main(String args[])throws Exception
{
Vector v=new Vector(5);
int len=args.length;
for(int i=0;i<len;i++)
v.addElement(args[1]);
String s=new String("HELLO");
v.insertElementAt(s,3);
Integer oi=new Integer(5);
v.insertElementAt(oi,4);
v.removeElementAt(2);
int s1=v.size();
for(i=0;i<s1;i++)
System.out.println(v.elementAt(i));
}
}
