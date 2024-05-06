package ah;
// FIXME: EN EL FINAL CREAR RECIBIRCONTENIDOSALTOLINEA Y ESTABLECERCONTENIDOSALTOLINEA. TAMBIEN RESPUESTAUSUARIO CON SCANNER
public class Consola {
	// ESTÁTICOS

	public static void Escribir(String contenido) {
		System.out.print(contenido);
	}

	public static void E(String contenido) {
		Escribir(contenido);
	}
	
	public static void Escribir(String contenido,int veces) {
		for (int i = 0; i < veces; i++) {
			Escribir(contenido);
		}
	}

	public static void E(String contenido,int veces) {
		Escribir(contenido,veces);
	}
	
	public static void Escribir(char contenido) {
		Escribir(contenido+"");
	}

	public static void E(char contenido) {
		Escribir(contenido);
	}
	
	public static void Escribir(char contenido,int veces) {
		for (int i = 0; i < veces; i++) {
			Escribir(contenido);
		}
	}

	public static void E(char contenido,int veces) {
		Escribir(contenido,veces);
	}

	public static void Escribir(Integer contenido) {
		Escribir(contenido+"");
	}

	public static void E(Integer contenido) {
		Escribir(contenido);
	}
	
	public static void Escribir(Integer contenido,int veces) {
		for (int i = 0; i < veces; i++) {
			Escribir(contenido);
		}
	}

	public static void E(Integer contenido,int veces) {
		Escribir(contenido,veces);
	}

	public static void Escribir(Double contenido) {
		Escribir(contenido+"");
	}

	public static void E(Double contenido) {
		Escribir(contenido);
	}
	
	public static void Escribir(Double contenido,int veces) {
		for (int i = 0; i < veces; i++) {
			Escribir(contenido);
		}
	}

	public static void E(Double contenido,int veces) {
		Escribir(contenido,veces);
	}

	public static void EscribirContenidoSaltoLinea(String contenido) {
		System.out.println(contenido);
	}

	public static void Ecsl(String contenido) {
		EscribirContenidoSaltoLinea(contenido);
	}

	public static void EscribirContenidoSaltoLinea(String contenido, Integer veces) {
		for (Integer i = 0; i < veces; i++) {
			EscribirContenidoSaltoLinea(contenido);
		}
	}

	public static void Ecsl(String contenido, Integer veces) {
		EscribirContenidoSaltoLinea(contenido, veces);
	}
	
	public static void EscribirContenidoSaltoLinea(char contenido) {
		EscribirContenidoSaltoLinea(contenido+"");
	}

	public static void Ecsl(char contenido) {
		EscribirContenidoSaltoLinea(contenido);
	}

	public static void EscribirContenidoSaltoLinea(char contenido, Integer veces) {
		for (Integer i = 0; i < veces; i++) {
			EscribirContenidoSaltoLinea(contenido);
		}
	}

	public static void Ecsl(char contenido, Integer veces) {
		EscribirContenidoSaltoLinea(contenido, veces);
	}

	public static void EscribirContenidoSaltoLinea(Integer contenido) {
		EscribirContenidoSaltoLinea(contenido+"");
	}

	public static void Ecsl(Integer contenido) {
		EscribirContenidoSaltoLinea(contenido);
	}

	public static void EscribirContenidoSaltoLinea(Integer contenido, Integer veces) {
		for (Integer i = 0; i < veces; i++) {
			EscribirContenidoSaltoLinea(contenido);
		}
	}

	public static void Ecsl(Integer contenido, Integer veces) {
		EscribirContenidoSaltoLinea(contenido, veces);
	}

	public static void EscribirContenidoSaltoLinea(Double contenido) {
		EscribirContenidoSaltoLinea(contenido+"");
	}

	public static void Ecsl(Double contenido) {
		EscribirContenidoSaltoLinea(contenido);
	}

	public static void EscribirContenidoSaltoLinea(Double contenido, Integer veces) {
		for (Integer i = 0; i < veces; i++) {
			EscribirContenidoSaltoLinea(contenido);
		}
	}

	public static void Ecsl(Double contenido, Integer veces) {
		EscribirContenidoSaltoLinea(contenido, veces);
	}

	public static void EscribirSaltoLineaContenido(String contenido) {
		EscribirSaltoLinea();
		Escribir(contenido);
	}

	public static void Eslc(String contenido) {
		EscribirSaltoLineaContenido(contenido);
	}

	public static void EscribirSaltoLineaContenido(String contenido, int veces) {
		for (int i = 0; i < veces; i++) {
			EscribirSaltoLineaContenido(contenido);
		}
	}

	public static void Eslc(String contenido, int veces) {
		EscribirSaltoLineaContenido(contenido, veces);
	}
	
	public static void EscribirSaltoLineaContenido(char contenido) {
		EscribirSaltoLineaContenido(contenido+"");
	}

	public static void Eslc(char contenido) {
		EscribirSaltoLineaContenido(contenido);
	}

	public static void EscribirSaltoLineaContenido(char contenido, int veces) {
		for (int i = 0; i < veces; i++) {
			EscribirSaltoLineaContenido(contenido);
		}
	}

	public static void Eslc(char contenido, int veces) {
		EscribirSaltoLineaContenido(contenido, veces);
	}
	
	public static void EscribirSaltoLineaContenido(int contenido) {
		EscribirSaltoLineaContenido(contenido+"");
	}

	public static void Eslc(int contenido) {
		EscribirSaltoLineaContenido(contenido);
	}

	public static void EscribirSaltoLineaContenido(int contenido, int veces) {
		for (int i = 0; i < veces; i++) {
			EscribirSaltoLineaContenido(contenido);
		}
	}

	public static void Eslc(int contenido, int veces) {
		EscribirSaltoLineaContenido(contenido, veces);
	}
	
	public static void EscribirSaltoLineaContenido(double contenido) {
		EscribirSaltoLineaContenido(contenido+"");
	}

	public static void Eslc(double contenido) {
		EscribirSaltoLineaContenido(contenido);
	}

	public static void EscribirSaltoLineaContenido(double contenido, int veces) {
		for (int i = 0; i < veces; i++) {
			EscribirSaltoLineaContenido(contenido);
		}
	}

	public static void Eslc(double contenido, int veces) {
		EscribirSaltoLineaContenido(contenido, veces);
	}

	public static void EscribirSaltoLinea() {
		System.out.println();
	}

	public static void Esl() {
		EscribirSaltoLinea();
	}

	public static void EscribirSaltoLinea(int veces) {
		for (int i = 0; i < veces; i++) {
			EscribirSaltoLinea();
		}
	}

	public static void Esl(int veces) {
		EscribirSaltoLinea(veces);
	}
	 
	// CAMPOS
	protected String _contenido;

	// RECIBIR Y ESTABLECER (GETTERS SETTERS)
	public String RecibirContenido() {
		return _contenido;
	}

	public String Rc() {
		return RecibirContenido();
	}

	public String RecibirContenido(Integer veces) {
		String contenidoTotal = "";
		for (Integer i = 0; i < veces; i++) {
			contenidoTotal += RecibirContenido();
		}
		return contenidoTotal;
	}

	public String Rc(Integer veces) {
		return RecibirContenido(veces);
	}

	public void EstablecerContenido(String contenido) {
		_contenido = contenido;
	}

	public void Ec(String contenido) {
		EstablecerContenido(contenido);
	}

	public void EstablecerContenido(String contenido, Integer veces) {
		String contenidoTotal = "";
		for (Integer i = 0; i < veces; i++) {
			contenidoTotal += contenido;
		}
		EstablecerContenido(contenidoTotal);
	}

	public void Ec(String contenido, Integer veces) {
		EstablecerContenido(contenido, veces);
	}
	
	public void EstablecerContenido(char contenido) {
		EstablecerContenido(contenido+"");
	}

	public void Ec(char contenido) {
		EstablecerContenido(contenido);
	}

	public void EstablecerContenido(char contenido, Integer veces) {
		String contenidoTotal = "";
		for (Integer i = 0; i < veces; i++) {
			contenidoTotal += contenido;
		}
		EstablecerContenido(contenidoTotal);
	}

	public void Ec(char contenido, Integer veces) {
		EstablecerContenido(contenido, veces);
	}
	
	public void EstablecerContenido(int contenido) {
		EstablecerContenido(contenido+"");
	}

	public void Ec(int contenido) {
		EstablecerContenido(contenido);
	}

	public void EstablecerContenido(int contenido, Integer veces) {
		String contenidoTotal = "";
		for (Integer i = 0; i < veces; i++) {
			contenidoTotal += contenido;
		}
		EstablecerContenido(contenidoTotal);
	}

	public void Ec(int contenido, Integer veces) {
		EstablecerContenido(contenido, veces);
	}
	
	public void EstablecerContenido(double contenido) {
		EstablecerContenido(contenido+"");
	}

	public void Ec(double contenido) {
		EstablecerContenido(contenido);
	}

	public void EstablecerContenido(double contenido, Integer veces) {
		String contenidoTotal = "";
		for (Integer i = 0; i < veces; i++) {
			contenidoTotal += contenido;
		}
		EstablecerContenido(contenidoTotal);
	}

	public void Ec(double contenido, Integer veces) {
		EstablecerContenido(contenido, veces);
	}
	
	// MÉTODOS
	public void VaciarContenido() {
		EstablecerContenido("");
	}

	public void Vc() {
		VaciarContenido();
	}

	public void AnadirContenido(String contenido) {
		EstablecerContenido(RecibirContenido() + contenido);
	}

	public void Ac(String contenido) {
		AnadirContenido(contenido);
	}

	public void AnadirContenido(String contenido, Integer veces) {
		for (Integer i = 0; i < veces; i++) {
			AnadirContenido(contenido);
		}
	}

	public void Ac(String contenido, Integer veces) {
		AnadirContenido(contenido, veces);
	}
	
	public void AnadirContenido(char contenido) {
		AnadirContenido(contenido+"");
	}

	public void Ac(char contenido) {
		AnadirContenido(contenido);
	}

	public void AnadirContenido(char contenido, Integer veces) {
		for (Integer i = 0; i < veces; i++) {
			AnadirContenido(contenido);
		}		
	}

	public void Ac(char contenido, Integer veces) {
		AnadirContenido(contenido, veces);
	}
	
	public void AnadirContenido(int contenido) {
		AnadirContenido(contenido+"");
	}

	public void Ac(int contenido) {
		AnadirContenido(contenido);
	}

	public void AnadirContenido(int contenido, Integer veces) {
		for (Integer i = 0; i < veces; i++) {
			AnadirContenido(contenido);
		}
	}

	public void Ac(int contenido, Integer veces) {
		AnadirContenido(contenido, veces);
	}
	
	public void AnadirContenido(double contenido) {
		AnadirContenido(contenido+"");
	}

	public void Ac(double contenido) {
		AnadirContenido(contenido);
	}

	public void AnadirContenido(double contenido, Integer veces) {
		for (Integer i = 0; i < veces; i++) {
			AnadirContenido(contenido);
		}
	}

	public void Ac(double contenido, Integer veces) {
		AnadirContenido(contenido, veces);
	}
	
	public void AnadirContenidoSaltoLinea(String contenido) {
		AnadirContenido(contenido);
		EscribirSaltoLinea();
	}

	public void Acsl(String contenido) {
		AnadirContenido(contenido);
	}

	public void AnadirContenidoSaltoLinea(String contenido, Integer veces) {
		for (Integer i = 0; i < veces; i++) {
			AnadirContenidoSaltoLinea(contenido);
		}
	}

	public void Acsl(String contenido, Integer veces) {
		AnadirContenido(contenido, veces);
	}
	
	public void AnadirContenidoSaltoLinea(char contenido) {
		AnadirContenidoSaltoLinea(contenido+"");
	}

	public void Acsl(char contenido) {
		AnadirContenido(contenido);
	}

	public void AnadirContenidoSaltoLinea(char contenido, Integer veces) {
		for (Integer i = 0; i < veces; i++) {
			AnadirContenidoSaltoLinea(contenido);
		}
	}

	public void Acsl(char contenido, Integer veces) {
		AnadirContenido(contenido, veces);
	}
	
	public void AnadirContenidoSaltoLinea(int contenido) {
		AnadirContenidoSaltoLinea(contenido+"");
	}

	public void Acsl(int contenido) {
		AnadirContenido(contenido);
	}

	public void AnadirContenidoSaltoLinea(int contenido, Integer veces) {
		for (Integer i = 0; i < veces; i++) {
			AnadirContenidoSaltoLinea(contenido);
		}
	}

	public void Acsl(int contenido, Integer veces) {
		AnadirContenido(contenido, veces);
	}
	
	public void AnadirContenidoSaltoLinea(double contenido) {
		AnadirContenidoSaltoLinea(contenido+"");
	}

	public void Acsl(double contenido) {
		AnadirContenido(contenido);
	}

	public void AnadirContenidoSaltoLinea(double contenido, Integer veces) {
		for (Integer i = 0; i < veces; i++) {
			AnadirContenidoSaltoLinea(contenido);
		}
	}

	public void Acsl(double contenido, Integer veces) {
		AnadirContenido(contenido, veces);
	}

	public void EscribirContenido() {
		Escribir(RecibirContenido());
	}

	public void Ec() {
		EscribirContenido();
	}

	public void EscribirContenido(Integer veces) {
		for (Integer i = 0; i < veces; i++) {
			EscribirContenido();
		}
	}

	public void Ec(Integer veces) {
		EscribirContenido(veces);
	}
	
	public void EscribirContenidoSaltoLineaObjeto() {
		EscribirContenido();
		EscribirSaltoLinea();
	}

	public void Ecslo() {
		EscribirContenidoSaltoLineaObjeto();
	}

	public void EscribirContenidoSaltoLineaObjeto(Integer veces) {
		for (Integer i = 0; i < veces; i++) {
			EscribirContenidoSaltoLineaObjeto();
		}
	}

	public void Ecslo(Integer veces) {
		EscribirContenidoSaltoLineaObjeto(veces);
	}
	
	public void EscribirSaltoLineaContenidoObjeto() {
		EscribirSaltoLinea();
		EscribirContenido();	
	}

	public void Eslco() {
		EscribirSaltoLineaContenidoObjeto();
	}

	public void EscribirSaltoLineaContenidoObjeto(Integer veces) {
		for (Integer i = 0; i < veces; i++) {
			EscribirSaltoLineaContenidoObjeto();
		}
	}

	public void Eslco(Integer veces) {
		EscribirSaltoLineaContenidoObjeto(veces);
	}

	// CONSTRUCTORES
	public Consola() {
		VaciarContenido();
	}

	public Consola(String contenido) {
		EstablecerContenido(contenido);
	}
}
