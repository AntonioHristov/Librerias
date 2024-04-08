//package ah;

public class Calculator 
{
	public static String Add(String num1, String num2)
	{
		final int lastValue1Digit=9;
		final int firstValue2Digits=10;
		String resultReverse="";
		String result="";
		boolean addOne=false;
		
		int maxLenghOp = 0;
		
		if(num1.length()>num2.length())
		{
			maxLenghOp=num1.length();				
		}
		else
		{
			maxLenghOp=num2.length();	
		}
		
	    for (int i=maxLenghOp-1;i>=0;i--) 
	    {
	    	int sumChar = Character.getNumericValue(num1.charAt(i)) + Character.getNumericValue(num2.charAt(i)); 

	    	
	    	if(addOne)
	    	{
	    		sumChar++;
	    	}
	    	addOne=sumChar>lastValue1Digit;
	    	
	    	if(addOne)
	    	{
	    		sumChar-=firstValue2Digits;
	    	}
	    	
	    	resultReverse+=sumChar;
	    }
	    
	    for(int i=resultReverse.length()-1;i>=0;i--)
	    {
	    	result+=resultReverse.charAt(i);	    	
	    }
	    
		return result;
	}
	
	public static Double Add(Double... args) 
	{
		Double result=0.0;
	    for (Double arg : args) 
	    {
	    	result+=arg;
	    }
	    return result;
	}
	
	public static int Add(Integer... args) 
	{
		Integer result=0;
	    for (Integer arg : args) 
	    {
	    	result+=arg;
	    }
	    return result;
	}
	
	public static Double Sub(Double... args) 
	{
		Double result=args[0]*2;
	    for (Double arg : args) 
	    {
	    	result-=arg;
	    }
	    return result;
	}
	
	public static int Sub(Integer... args) 
	{
		Integer result=args[0]*2;
	    for (Integer arg : args) 
	    {
	    	result-=arg;
	    }
	    return result;
	}
	
	public static Double Mul(Double... args) 
	{
		Double result=1.0;
	    for (Double arg : args) 
	    {
	    	result*=arg;
	    }
	    return result;
	}
	
	public static int Mul(Integer... args) 
	{
		Integer result=1;
	    for (Integer arg : args) 
	    {
	    	result*=arg;
	    }
	    return result;
	}
	
	public static Double Div(Double... args) 
	{
		Double result= args[0] * args[0];
		if(result!=0.0)
		{
			for (Double arg : args) 
			{
				if(arg==0.0 || result==0.0)
				{
					result = 0.0;
				}
				else
				{
					result/=arg;
				}
			}		
		}
	    return result;
	}
	
	public static int Div(Integer... args) 
	{
		Integer result= args[0] * args[0];
		if(result!=0)
		{
			for (Integer arg : args) 
			{
				if(arg==0 || result==0)
				{
					result = 0;
				}
				else
				{
					result/=arg;
				}
			}
		}
	    return result;
	}


}
