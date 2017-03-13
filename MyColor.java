import java.awt.*;
import java.awt.event.*;
import java.applet.*;
/*<applet code=MyColor height=900 width=800></applet>*/
public class MyColor extends Applet implements ActionListener
{
  Button b1,b2,b3,b4,b5;
  public void init()
  {
    SetSize(500,500);
    SetVisible(true);
    SetLayout(new FlowLayout());
    b1=new Button("GREENBLUE");
    b2=new Button("BLUEPINK");
    b3=new Button("YELLOWRED");
    b4=new Button("REDWHITE");
    b5=new Button("PINKYELLOW");
    add(b1);
    add(b2);
    add(b3);
    add(b4);
    add(b5);
    b1.add ActionListener(this);
    b2.add ActionListener(this);
    b3.add ActionListener(this);
    b4.add ActionListener(this);
    b5.add ActionListener(this);
  }
  public void paint(Graphics g)
  {
    Font f=new font("Times New Roman",font.Italic,40);
    g.setfont(f);
    g.drawString("KAVIYA",200,100);
    font f1=new font("Monotype Corsiva",font.Bold,70);
    g.setFont(f1);
    g.drawString("YESHU",200,300);
  }
  public void action performed(ActionEvent ae)
  {
    String s=ae.get ActionCommand();
    if(s=="GREENBLUE")
    {
      SetBackground(color.GREEN);
      SetForeground(color.BLUE);
    }
  }
  elseif(s=="BLUEPINK")
  {
    SetBackground(color.BLUE);
    SetForeground(color.PINK);
  }
  elseif(s=="YELLOWRED")
  {
    SetBackground(color.YELLOW);
    SetForeground(color.RED);
  }
  elseif(s=="REDWHITE")
  {
    SetBackground(color.RED);
    SetForeground(color.WHITE);
  }
  else
  {
    SetBackground(color.PINK);
    SetForeground(color.YELLOW);
  }
}
