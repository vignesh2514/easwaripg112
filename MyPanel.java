import java.awt.*;
import java.applet.*;
/*<applet code=MyPanel width=500 height=500></applet>*/
public class MyPanel extends applet
{
  public void init()
  {
    SetSize(500,500);
    SetVisile(true);
    SetLayout(new GridLayout(1,2));
    panel p1=new panel 1();
    panel p2=new panel 2();
    add(p1);
    add(p2);
  }
}
class panel1 extends panel
{
  public void paint(Graphics g)
  {
    SetBackground(color.blue);
    SetForeground(color.PINK);
    g.drawString("panel 1",50,50);
    g.setColor(Color.PINK);
    g.fillRect(100,200,200,100);
  }
}
class panel 2 extends panel
{
  public void paint(Graphics g)
  {
    SetBackground(color.green);
    SetForeground(colo.black);
    g.drawString("panel 2",50,50);
    g.setcolor(color.red);
    g.fillRect(100,200,200,100);
  }
}
