package ah;

public class Main {

	public static void main(String[] args) 
	{
		//PruebasDebugWrite1();
		//PruebasDebugWrite2();
		//Pruebas_Matematicas();

	}
	
	public static void PruebasDebugWrite1()
	{
		Consola.Ecsl("Uno");
		Consola.Eslc("Dos");
		Consola.Ecsl("Tres");
		Consola.E("Cuatro");
		Consola.Esl();
		Consola.E("Cinco");
		Consola.Ecsl("Seis");
		Consola.E("Siete");
		Consola.Eslc("Ocho");
	}
	
	/*
	public static void PruebasDebugWrite2()
	{
		Consola d = new Consola();
		String first = "All content are: "+Consola.Rcsl();
		String last = "That's All"+Consola.Rsl(2);
		String content1 = "Content 1"+Consola.Rsl();
		String content2 = "Content 2"+Consola.Rsl();

		
		d.Ac(content1);
		Consola.E(first+d.Rc()+last);
		
		d.Ac(content2);
		Consola.E(first);
		d.Ec();
		Consola.E(last);
		
		d.Ec(content2);
		Consola.E(first+d.Rc()+last);
		
		
		d.Vc();
		
		Consola.E(first+d.Rc()+last);
		
		d.Ac(first);
		d.Ac(content1+content2+content2);
		d.Ac(content2);
		d.Ac(content1+content1+last);
		d.Ec();
		
		// Prueba con parametro times

		

	}*/
	
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
		
		Consola.Ecsl(Calculator.Add("56","18"));


	}
	


}
