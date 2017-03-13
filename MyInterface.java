interface Address
{
  String city="Chennai";
  String state="Tamilnadu";
}
interface details
{
  String cname="//BCA A";
  String college="AASC";
}
class Student implements Address,details
{
  int m1,m2,tot;
  String name;
  Student(int x,int y,String s)
{
  m1=x;
  m2=y;
  names=s;
}
void calc()
{
  tot=m1+m2;
}
void display()
{
  System.out.println("Student Name:"+name);
  System.out.println("Total marks:"+tot);
  System.out.println("class name:"+cname);
  System.out.println("College name:"+college);
  System.out.println("city name:"+city);
  System.out.println("State name:"+State);
}
class MyInterface
{
  public static void main(String args[])
  {
    Student s=new Student(75,90,"MANJU");
    Student s=new Student(80,75,"SRUTHI");
    S.calc();
    s.display();
    s.calc();
    s.dispaly();

  }
}
