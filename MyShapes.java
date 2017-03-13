import java.awt.*;
import java.applet.*;
/*<applet code="MyShapes" height=500 width=500></applet>*/
public class MyShapes extends applet
{
  public void init()
  {
    SetBackground(color.blue);
    SetForeground(color.pink);
  }
  public void paint(Graphics g)
  {
    g.drawString("VAROUS SHAPES",50,50);
    g.setColor(color.yellow);
    g.drawLine(70,70,170,170);
    g.drawRect(200,200,200,200);
    g.drawOval(210,100,300,100);
  }
}
