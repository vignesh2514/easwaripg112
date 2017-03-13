import java.io.*;
class MyChar
{
  public static void main(String args[])throws Exception
  {
    String s="WELCOME to java\n"+"HELLO";
    System.out.println(s);
    charc[]=s.tocharArray();
    File Writer fw=new File Writer("Sample 4.doc");
    for(int i=0;i<c length;i++)
    fw.write(c[i]);
    fw.close();
    File Reader fr=new File Reader("Sample 4.doc");
    int ch,nc=0,nl=0,nw=0;
    while((ch=fr.read())!=-1)
    {
      nc++;
      if(ch=='\n')
      nl++;
      if((ch=='\n')::(ch=='.'))
      nw++;
    }
    nc=nc-nw;
    System.out.println("the number of characters:"+nc);
    System.out.println("The number of line:"+(nl+1));
    System.out.println("The number of words:"+(nw+1));
    fr.close();
  }
}
