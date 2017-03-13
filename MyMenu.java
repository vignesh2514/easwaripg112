import java.awt.*;
import java.applet.*;
import java.awt.event.*;
class MyFrames extends frame implements addActionListener
{
  MenuItem i1,i2;
  MyFrame()
  {
    SetSize(500,500);
    SetVisible(true);
    SetLayout(new FlowLayout());
    MenuBar m=new MenuBar();
    SetMenuBar(m);
    Menu f=new Menu("FILE");
    f.add(new MenuItem("NEW"));
    f.add(i1=new MenuItem("OPEN"));
    f.add(i2=new MenuItem("close"));
    m.add(f);
    Menu e=new Menu("EDIT";
    e.add(new MenuItem("CUT"));
    e.add(new MenuItem("COPY"));
    e.add(new MenuItem("PASTE"));
    m.add(e);
    Menu s=new Menu("SEARCH");
    s.add(new MenuItem("FIND"));
    s.add(new MenuItem("REPLACE"));
    m.add(s);
    i1=addActionListener(this);
    i2=addActionListener(this);
  }
  public void action performed(ActionEvent ae)
  {
    String s=ae.get ActionCOMMAND();
    if(s=="OPEN")
    {
      FileDialog fg=new FileDialog(this);
      fd.SetVisible(true);
    }
    else if(s=="CLOSE")
    {
      dispose();
    }
  }
}
class MyMenu
{
  public static void main(String args[])
  {
    MyFrame m=new MyFrame();
  }
}
