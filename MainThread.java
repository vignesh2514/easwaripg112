class MyThread extends Thread
{
  public void display()throws Exception
  {
    System.out.println("HELLO");
    sleep(1000);
    System.out.println("WORLD");
    sleep(1000);
  }
  public static synchronized void dipsync()throws Exception
  {
    System.out.println("WELCOME");
    sleep(1000);
    System.out.println("JAVA");
    sleep(1000);
  }
  public void run()
  {
    try
    {
      System.out.println("without Synchronization");
      display();
      sleep(1000);
      System.out.println();
      System.out.println("with synchronization");
      display();
    }
    catch(Exception e)
    {

    }
  }
}
class mainThread
{
  public static void main(String args[])
  {
    MyThread m1=new MyThread();
    MyThread m2-new MyThread();
    m1.start();
    m2.start();
  }
}
