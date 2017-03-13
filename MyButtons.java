import java.awt.*;
import java.applet.*;
import java.awt.event.*;
/*<applet code="MyButtons" height=600 width=600></applet>*/
public class MyButtons extends Applet implements ActionListener
{
  label l1,l2,l3;
  TextField t1,t2,t3;
  Button b;
  public void init()
  {
    SetSize(500,500);
    SetVisible(true);
    SetLayout(new FlowLayout());
    l1=new Label("NUMBER 1");
    l2=new Label("NUMBER 2");
    l3=new Label("RESULT");
    t1=new TextField(10);
    t2=new TextField(10);
    t3=new TextField(10);
    b=new Button("Multiply");
    add(l1);
    add(t1);
    add(l2);
    add(t2);
    add(l3);
    add(t3);
    add(b);
    b.addActionListener(this);
  }
  public void actionperformed(ActionEvent ae)
  {
    int n1=Integer.parseInt(t1.getText());
    int n2=Integer.parseInt(t2.getText());
    int n3=n1*n2;
    t3.SetText(Integer.toString(n3));
  }
}
