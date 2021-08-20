import java.util.Scanner;
class IPAddress{

	public static void main(String args[]){
		Scanner O = new Scanner(System.in);
		int[] a = new int[]{0,0,0,0};
		int countDots = 0,ok=0;
		
		System.out.print("\n Enter your I.P Address in (xxx.xxx.xxx.xxx):  ");
		String Ip = O.nextLine();
		int LenIP = Ip.length();
		System.out.println(LenIP);
		if(LenIP<16 && LenIP >5){
			for(int i = 0; i<Ip.length(); i++){
				if(Ip.charAt(i)=='.'){
					countDots++;	
				}
			}
			if(countDots!=3){
				System.out.println(" wrong IP Address !");
			}
			// String into integer array
			int j=0;
			for(int i = 0; i<Ip.length(); i++){
				if(Ip.charAt(i)=='.'){
					j++;
				}
				else{
				a[j]= a[j]*10 +(Ip.charAt(i)-48);
				}
			}
			for(int i =0 ; i< 4; i++){
				if(a[i]<0 && a[i]>255 ){
					ok--;
				}
			}
			if(ok==0&&j==3){
				//A
				if(a[0]>-1 && a[0]<128){
					System.out.println("The IP : "+Ip+" is of class A");
				}
				else if(a[0]>127 && a[0]<192){
					System.out.println("The IP : "+Ip+" is of class B");
				}
				else if(a[0]>191 && a[0]<224){
					System.out.println("The IP : "+Ip+" is of class C");
				}
				else if(a[0]>223 && a[0]<240){
					System.out.println("The IP : "+Ip+" is of class D");
				}
				else if(a[0]>239 && a[0]<256){
					System.out.println("The IP : "+Ip+" is of class E");
				}
			}	
		
		}
		else{
			System.out.println(" wrong IP Address !");		
		}
	}
}
