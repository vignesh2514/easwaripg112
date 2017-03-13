import java.awt.*;
import java.awt.event.*;
class MyFrames extends Frame implements ActionListener
{
  Label 11,12,13;
  TextField t1,t2,t3;
  Button b;
  MyFrames()
  {
    SetSize(500,500);
    SetVisible(true);
    SetLayout(new flow Layout());
    11=new Lable("Number 1");
    12=new Lable("Number 2");
    13=new Lable("Result");
    t1=new TextField(10);
    t2=new TextField(10);
    t3=new TextField(10);
    b=new Button("ADD");
    add(11);
    add(t1);
    add(12);
    add(t2);
    add(13);
    add(t3);
    t3.SetVisible(false);
    add(b);
    b.addActionListener(this);
  }
  public void actionperformed(ActionEvent ae)
  {
    int n1=Integer.parseInt(t1.getText());
    int n2=Integer.parseInt(t2.getText());
    t3.SetVisible(true);
    int n3=n1+n2;
    t3.SetText(Integer.toString(n3));
  }
}
class MyControls
{
  public static void main(String args[])
  {
    MyFrames f=new MyFrames();
  }
}
