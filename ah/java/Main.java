//package ah;

public class Main {

	public static void main(String[] args) 
	{
		//PruebasDebugWrite1();
		PruebasDebugWrite2();
		//Pruebas_Matematicas();

	}
	
	public static void PruebasDebugWrite1()
	{
		//Debug.WriteAndNewLine("Uno");
		Debug.Wanl("Uno");
		
		
		//Debug.WriteInNewLine("Dos"); 
		Debug.Winl("Dos");
		//Debug.WriteAndNewLine("Tres");
		Debug.Wanl("Tres");

		//Debug.Write("Cuatro");
		Debug.W("Cuatro");
		//Debug.WriteNewLine();
		Debug.Wnl();

		//Debug.Write("Cinco");
		Debug.W("Cinco");
		//Debug.WriteAndNewLine("Seis");
		Debug.Wanl("Seis");

		//Debug.Write("Siete");
		Debug.W("Siete");
		//Debug.Write(Debug.NEW_LINE+"Ocho");
		Debug.W(Debug.Gnl()+"Ocho");
	}
	
	public static void PruebasDebugWrite2()
	{
		Debug d = new Debug();
		String first = "All content are: "+Debug.Gnl();
		String last = "That's All"+Debug.Gnl(2);
		String content1 = "Content 1"+Debug.Gnl();
		String content2 = "Content 2"+Debug.Gnl();

		
		d.Ac(content1);
		Debug.W(first+d.Gc()+last);
		
		d.Ac(content2);
		Debug.W(first);
		d.Wc();
		Debug.W(last);
		
		d.Sc(content2);
		Debug.W(first+d.Gc()+last);
		
		
		d.Sec();
		
		Debug.W(first+d.Gc()+last);
		
		d.Ac(first);
		d.Ac(content1+content2+content2);
		d.Ac(content2);
		d.Ac(content1+content1+last);
		d.Wc();
		
		// Prueba con parametro times

		

	}
	
	public static void Pruebas_Matematicas()
	{
		/*
		Debug.Wanl(Calculator.Add(1,1,4));
		Debug.Wanl(Calculator.Sub(14,2,3));
		Debug.Wanl(Calculator.Mul(14,2,3));
		Debug.Wanl(Calculator.Div(14,2,3));
		Debug.Wanl(Calculator.Div(14.0,2.0,3.0));
		Debug.Wanl(Calculator.Div(0,2,3));
		Debug.Wanl(Calculator.Div(14,0,3));
		*/
		
		Debug.Wanl(Calculator.Add("56","18"));


	}
	


}
