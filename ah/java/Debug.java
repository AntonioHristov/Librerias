//package ah;

public class Debug 
{
	//public final static String NEW_LINE = "\n";
	private String _content;
	
	// GETTER AND SETTER _content
	public String GetContent()
	{
		return _content;
	}
	public String Gc()
	{
		return GetContent();
	}
	public String GetContent(Integer times)
	{
		String result = "";
		for(Integer i=0; i<times; i++)
		{
			result+=GetContent();
		}
		return result;
	}
	public String Gc(Integer times)
	{
		return GetContent(times);
	}
	
	public void SetContent(String arg)
	{ 
		_content=arg;
	}
	public void Sc(String arg)
	{ 
		SetContent(arg);
	}
	public void SetContent(String arg, Integer times)
	{
		String result = "";
		for(Integer i=0; i<times; i++)
		{
			result+=arg;
		}
		SetContent(result);
	}
	public void Sc(String arg, Integer times)
	{ 
		SetContent(arg,times);
	}

	public void SetEmptyContent()
	{
		SetContent("");
	}
	public void Sec()
	{
		SetEmptyContent();
	}
	// METHODS _content
	
	public void AddContent(String arg)
	{		
		SetContent(GetContent()+arg);
	}
	public void Ac(String arg)
	{		
		AddContent(arg);
	}
	public void AddContent(String arg, Integer times)
	{		
		String result = GetContent();
		for(Integer i=0; i<times; i++)
		{
			result+=arg;
		}
		SetContent(result);
	}
	public void Ac(String arg, Integer times)
	{		
		AddContent(arg, times);
	}
	
	public void WriteContent()
	{
		Debug.W(GetContent());	
	}
	public void Wc()
	{
		WriteContent();
	}
	public void WriteContent(Integer times)
	{
		String result = "";
		for(Integer i=0; i<times; i++)
		{
			Debug.W(GetContent());
		}		
	}
	public void Wc(Integer times)
	{
		WriteContent(times);	
	}
	
	
	// CONSTRUCTORS
	public Debug() 
	{
		SetEmptyContent();
	}	
	public Debug(String arg) 
	{
		SetContent(arg);
	}
	
	
	
	
	
	// STATIC METHODS
	
	
	public static String GetNewLine()
	{
		return "\n";
	}
	// SHORTCUT
	public static String Gnl()
	{
		return Debug.GetNewLine();
	}
	
	public static String GetNewLine(Integer times)
	{
		String result = "";
		for(Integer i=0; i<times; i++)
		{
			result+=Debug.GetNewLine();
		}
		return result;
	}
	public static String Gnl(Integer times)
	{
		return Debug.GetNewLine(times);
	}
	
	
	// WRITING PARAMETER
	public static void Write(String arg)
	{
		System.out.print(arg);
	}
	// SHORTCUT
	public static void W(String arg)
	{
		Debug.Write(arg);
	}
	
	public static void Write(Integer arg)
	{
		System.out.print(arg);
	}
	public static void W(Integer arg)
	{
		Debug.Write(arg);
	}
	public static void Write(Double arg)
	{
		System.out.print(arg);
	}
	public static void W(Double arg)
	{
		Debug.Write(arg);
	}
	public static void Write(Float arg)
	{
		System.out.print(arg);
	}
	public static void W(Float arg)
	{
		Debug.Write(arg);
	}
	

	
	
	// WRITING PARAMETER AND NEW LINE
	public static void WriteAndNewLine(String arg)
	{
		System.out.println(arg);
	}	
	// SHORTCUT
	public static void Wanl(String arg)
	{
		WriteAndNewLine(arg);
	}
	public static void WriteAndNewLine(String arg, Integer times)
	{
		for(Integer i=0; i<times; i++)
		{
			WriteAndNewLine(arg);
		}
	}
	public static void Wanl(String arg, Integer times)
	{
		WriteAndNewLine(arg, times);
	}
	
	public static void WriteAndNewLine(Integer arg)
	{
		WriteAndNewLine(arg);
	}	
	public static void Wanl(Integer arg)
	{
		WriteAndNewLine(arg);
	}
	public static void WriteAndNewLine(Integer arg,Integer times)
	{
		WriteAndNewLine(arg,times);
	}
	public static void Wanl(Integer arg,Integer times)
	{
		WriteAndNewLine(arg,times);
	}
	public static void WriteAndNewLine(Double arg)
	{
		System.out.println(arg);
	}	
	public static void Wanl(Double arg)
	{
		Debug.WriteAndNewLine(arg);
	}
	public static void WriteAndNewLine(Double arg,Integer times)
	{
		WriteAndNewLine(arg,times);
	}
	public static void Wanl(Double arg,Integer times)
	{
		WriteAndNewLine(arg,times);
	}

	
	
	// NEW LINE AND WRITING PARAMETER 
	public static void WriteInNewLine(String arg)
	{
		Write(Gnl()+arg);
	}	
	// SHORTCUT
	public static void Winl(String arg)
	{
		WriteInNewLine(arg);
	}
	public static void WriteInNewLine(String arg,int times)
	{
		for (int i = 0; i < times; i++) {
			Write(Gnl()+arg);
		}
	}
	public static void Winl(String arg,int times)
	{
		WriteInNewLine(arg,times);
	}
	
	public static void WriteInNewLine(Integer arg)
	{
		Debug.Write(Gnl()+arg);
	}	
	public static void Winl(Integer arg)
	{
		WriteInNewLine(arg);
	}
	public static void WriteInNewLine(Integer arg,int times)
	{
		for (int i = 0; i < times; i++) {
			Write(Gnl()+arg);
		}
	}
	public static void Winl(Integer arg,int times)
	{
		WriteInNewLine(arg,times);
	}
	public static void WriteInNewLine(Double arg)
	{
		Debug.Write(Gnl()+arg);
	}	
	public static void Winl(Double arg)
	{
		Debug.WriteInNewLine(arg);
	}

	public static void WriteInNewLine(Double arg,int times)
	{
		for (int i = 0; i < times; i++) {
			Write(Gnl()+arg);
		}
	}
	public static void Winl(Double arg,int times)
	{
		WriteInNewLine(arg,times);
	}
	
	// NEW LINE
	public static void WriteNewLine()
	{
		System.out.println();
	}
	// SHORTCUT
	public static void Wnl()
	{
		Debug.WriteNewLine();
	}
	public static void WriteNewLine(int times)
	{
		for (int i = 0; i < times; i++) {
			WriteNewLine();
		}
	}
	// SHORTCUT
	public static void Wnl(int times)
	{
		WriteNewLine(times);
	}
}
