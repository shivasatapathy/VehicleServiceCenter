import java.util.*;
class Cr7{
	public static void main(String arg[]){
		Scanner sc=new Scanner(System.in);
		System.out.println("Enter a string:-");
		String s=sc.nextLine();
		int l=s.length();
		String r="";
		for(int i=0;i<l;i++){
			char ch=s.charAt(i);
			r=r+ch;
		}
		if(r.compareTo(s)==0)
		{
			System.out.println("It is a palendrome String");
		}
		else{
			System.out.println("It is not a palendrome string");
		}
	}
}