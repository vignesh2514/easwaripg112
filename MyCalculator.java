import java.applet.*;
import java.awt.*;
import java.awt.event.*;
/*<applet code="MyCalculator" height=500 width=600></applet>*/
public class MyCalculator extends Applet implements ActionListener
{
  Button d1,d2,d3,d4,d5,d6,d7,d8,d9,d0;
  Button 01,02,03,04,05,06,07,08,09,010,011,012;
  TextField t1;
  panel p;
  double v1=0;
  double v2=0;
  double v3=0;
  String op;
  public void init()
  {
    SetSize(500,500);
    SetVisible(true);
    SetLayout(new BorderLayout());
    t1=new TextField();
    add(t1,BorderLayout.NORTH);
    p=new panel();
    p.SetLayout(new GridLayout(4,6));
    add(p);
    d1=new Button("1");
    d2=new Button("2");
    d3=new Button("3");
    d4=new Button("4");
    d5=new Button("5");
    d6=new Button("6");
    d7=new Button("7");
    d8=new Button("8");
    d9=new Button("9");
    d0=new Button("0");
    01=new Button("+");
    02=new Button("-");
    03=new Button("*");
    04=new Button("/");
    05=new Button("%");
    06=new Button("+/-");
    07=new Button("x^2");
    08=new Button("x^y");
    09=new Button("sqrt");
    010=new Button("c");
    011=new Button("=");
    012=new Button(".");
    p,add(d1);
    p.add(d2);
    p.add(d3);
    p.add(d4);
    p.add(d5);
    p.add(d6);
    p.add(d7);
    p.add(d8);
    p.add(d9);
    p.add(d0);
    p.add(01);
    p.add(02);
    p.add(03);
    p.add(04);
    p,add(05);
    p.add(06);
    p.add(07);
    p.add(08);
    p.add(09);
    p.add(010);
    p.add(011);
    p.add(012);
    d1.addActionListener(this);
    d2=addActionListener(this);
    d3=addActionListener(this);
    d4=addActionListener(this);
    d5=addActionListener(this);
    d6=addActionListener(this);
    d7=addActionListener(this);
    d8=addActionListener(this);
    d9=addActionListener(this);
    d0=addActionListener(this);
    01=addActionListener(this);
    02=addActionListener(this);
    03=addActionListener(this);
    04=addActionListener(this);
    05=addActionListener(this);
    06=addActionListener(this);
    07=addActionListener(this);
    08=addActionListener(this);
    09=addActionListener(this);
    010=addActionListener(this);
    011=addActionListener(this);
    012=addActionListener(this);
  }
  public void actionperformed(Actionevent ae)
  {
    String s=aegetActionCommand();
    if((s=="1")//(s=="2")//(s=="3")//(s=="4")//(s=="5")//(s=="6")//(s=="7")//(s=="8")//(s=="9")//(s=="0")//(s=="."))
    {
      t1.SetText(t1.getText()+s);
    }
    elseif(s=="=")
    {
      Calculate();
    }
    else
    {
    v1=Doble.parseDouble(t1.getText());
    t1.SetText(" ")
    }
  }
  public void Calculate()
  {
    if(op=="+")
    {
      v2=Double.parseDouble(t1.getText());
      v3=v1+v2;
    }
    elseif(op=="-")
    {
      v2=Double.parseDouble(t1.getText());
      v3=v1-v2;
    }
    else if(op=="*")
    {
      v2=Double.parseDouble(t1.getText());
      v3=v1*v2;
    }
    else if(op=="/")
    {
      v2=Double.parseDouble(t1.getText());
      v3=v1/v2;
    }
    else if(op=="%")
    {
      v2=Double.parseDouble(t1.getText());
      v3=v1%v2;
    }
    elseif(op=="x^2")
    {
    v3=v1*v1;
    }
    elseif(op=="x^y")
    {
      v2=Double.parseDouble(t1.getText());
      v3=math.pow(v1,v2);
    }
    elseif(op=="sqrt")
    {
      v3=math.sqrt(v1);
    }
    elseif(op=="sqrt")
    {
    v3=math.sqrt(v1);
    }
    elseif(op=="+/-")
    {
      v3=v1;
    }
    else
    {
      v1=0;
      v2=0;
      v3=0;
    }
    t1.SetText(Double.toString(v3));
  }
}
