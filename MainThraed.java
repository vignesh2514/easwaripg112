class A extends Thread
{
  public void run()
  {
    for(int i=1;i<=10;i++)
    {
      System.out.println("Thraed A"+i);
      if(i=2)
      yield();
    }
  }

}
class B extends Thraed
{
  public void run()
  {
    for(int j=0;j<=100;j=j+10)
    {
      System.out.println("Thread B"+j);
      try
      {
      if(j==50)
      sleep(1000);
      }
      catch(Exception e)
      {

      }
    }
  }
}
class C extends Thread
{
  public void run()
  {
    for(int k=100;k<=1000;k+=100)
    {
      System.out.println("Thread C"+k);
      if(k==400)
      stop();
    }
  }
}
class MainThread
{
  public static void main(String args[])throws Exception
  {
    A a1=new A();
    B b1=new B();
    C c1=new C();
    a1.start();
    b1.start();
    c.start();
    System.out.println(:End of mainThread");
  }
}
