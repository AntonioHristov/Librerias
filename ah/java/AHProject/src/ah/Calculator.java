package ah;

public class Calculator 
{
	public static int Sum(Integer... args) {
		Integer result=0;
	    for (Integer arg : args) 
	    {
	    	result+=arg;
	    }
	    return result;
	}

}
