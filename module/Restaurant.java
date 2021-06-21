import java.io.*;
public class Restaurant {
	
	
    public static void main(String args[]) throws IOException {
    BufferedReader in = new BufferedReader(new InputStreamReader(System.in));
    
    String orderNameM[] ={" ","Adobong Baboy","Adobong Manok","Litchon Baboy","Litchon Manok","Ginataan","CamoteCue","Kalamay","NataDeCoco","Coke","Sprite","Pepsi","7-up"};
	String orderNameP[] ={" ","Adobong Baboy\tPhp 50.00","Adobong Manok\tPhp 50.00","Litchon Baboy\tPhp 100.00","Litchon Manok\tPhp 150.00",
							"Ginataan\t\tPhp 25.00","CamoteCue\t\tPhp 20.00","Kalamay\t\tPhp 25.00","Nata de Coco\tPhp 20.00",
							"Coke\t\t\tPhp 30.00","Sprite\t\t\tPhp 30.00","Pepsi\t\t\tPhp 25.00","7-up\t\t\tPhp 25.00"};
							
							
	double orderPrice[] ={0.00,50.00,50.00,100.00,150.00,25.00,20.00,25.00,20.00,30.0,30.00,25.00,25.00};
	String user,pass,search,again="",mainQ="",mainQ2="",dessertQ="",dessertQ2="",drinksQ="",drinksQ2="";
	
    int a=0,b=0,c=0,d=0,e=1,g=0,h=0,i=0,r=0,choice=0,choice1=0,order=0,table=1,end=0;
    
    String orderString[][] = new String[50][20];
    String orderStringM[][] = new String[20][20];
    String orderStringP[][] = new String[20][20];
    double orderMDouble[][] = new double[50][20];
    double orderDDouble[][] = new double[50][20];
    double tableNo[] = new double[21];
    double pieces[] = new double[13];
    double paid[] = new double[21];
    double totalOrder[] = new double[50];
    double payment,change=0;
    double totalPrice[] = new double[21];
    double orderDouble[][] = new double[21][20];

    for(int z=1;z<=12;z++){
    	pieces[z]=20;
    }
    
    while(a<3){
    	System.out.print("\nEnter Username: ");
    	user = in.readLine();
    	System.out.print ("\nEnter Password: ");
    	pass = in.readLine();
    	
    	
    	if(user.equalsIgnoreCase("admin") && pass.equalsIgnoreCase("admin")){
    		
    		System.out.println ("\n ******************************************************");
    		System.out.println (" ********** Welcome To Santa Klaus Restaurant **********");
   		 	System.out.println (" *******************************************************");
    		
    		do{
    		System.out.println ("\n **************************************");
    		System.out.println (" ********** M A I N  M E N U **********");
   		 	System.out.println (" **************************************");
    		System.out.println (" (1) Order");
    		System.out.println (" (2) Order Information");
    		System.out.println (" (3) Billing");
    		System.out.println (" (4) Dish Inventory");
    		System.out.println (" (5) Exit");
    		System.out.println (" *************************************");
    		
    		
    			for(int f=1;f==1;){
    		
    			System.out.print("\nEnter Choice: ");
    			choice = Integer.parseInt(in.readLine());
    		
//CHOICE 1 - "ORDER"
					
   		    		if(choice==1){
   		    			do{
   		    			for(int z=1;z<=12;z++){
   		    				orderString[b][z]="0";
   		    			}
   		    		for(int x=1;x==1;){
		    			System.out.print("\nEnter Customer Name: ");
		    			orderString[b][0] = in.readLine();
		    			
		    			x=0;
		    			
		    			for(int l=0; l<b; l++){
	    					if(orderString[l][0].equalsIgnoreCase(orderString[b][0])){
	    						System.out.println("Customer Name Already Used!");
	    						x=1;
	    					}
	    				}
   		    		}
	    			
	    			c=0;
	    			System.out.println ("\n *************************************");
	    			System.out.println (" ************* DISH MENU ************* ");
	    			System.out.println (" *************************************");
	    			System.out.println ("\n    ********** MAIN DISH **********");
	    	 		System.out.print (" Adobong Baboy \t\tPhp 50.00");
	    	 			if(pieces[1]>0){
							System.out.println("\t" +pieces[1] +"pcs.");
						}
				    	else{
				    	 	System.out.println("\t*Not Available*");
				    	}
			    	System.out.print (" Adobong Manok \t\tPhp 50.00");
	    	 			if(pieces[2]>0){
				    		System.out.println("\t" +pieces[2] +"pcs.");
				    	}
				    	else{
				    		System.out.println("\t*Not Available*");
				    	}
			    	System.out.print (" Litchon baboy \t\tPhp 100.00");
	    	 			if(pieces[3]>0){
							System.out.println("\t" +pieces[3] +"pcs.");
						}
						else{
							System.out.println("\t*Not Available*");
						}
			   		System.out.print (" Litchon Manok \t\tPhp 150.00");
	    	 			if(pieces[4]>0){
				    		System.out.println("\t" +pieces[4] +"pcs.");
				    	}
				    	else{
				    		System.out.println("\t*Not Available*");
				    	}
	    	 		System.out.println ("\n    *********** DESSERT ***********");
	    	 		System.out.print (" Ginataan \t\t\tPhp 25.00");
			    		if(pieces[5]>0){
				    		System.out.println("\t" +pieces[5] +"pcs.");
				    	}
				    	else{
				    		System.out.println("\t*Not Available*");
				    	}
	    	 		System.out.print (" CamoteCue \t\t\tPhp 20.00");
			    		if(pieces[6]>0){
				    		System.out.println("\t" +pieces[6] +"pcs.");
				    	}
				    	else{
				    		System.out.println("\t*Not Available*");
				    	}
	    	 		System.out.print (" Kalamay \t\t\tPhp 25.00");
			    		if(pieces[7]>0){
				    		System.out.println("\t" +pieces[7] +"pcs.");
				    	}
				    	else{
				    		System.out.println("\t*Not Available*");
				    	}
	    	 		System.out.print (" Nata de Coco \t\tPhp 20.00");
			    		if(pieces[8]>0){
				    		System.out.println("\t" +pieces[8] +"pcs.");
				    	}
				    	else{
				    		System.out.println("\t*Not Available*");
				    	}
	    	 		System.out.println ("\n    *********** DRINKS ************");
	    	 		System.out.print (" Coke \t\t\t\tPhp 30.00");
	    	 			if(pieces[9]>0){
				    		System.out.println("\t" +pieces[9] +"pcs.");
				    	}
				    	else{
				    		System.out.println("\t*Not Available*");
				    	}
	    	 		System.out.print (" Sprite \t\t\tPhp 30.00");
	    	 			if(pieces[10]>0){
				    		System.out.println("\t" +pieces[10] +"pcs.");
				    	}
				    	else{
				    		System.out.println("\t*Not Available*");
				    	}
	    	 		System.out.print (" Pepsi \t\t\t\tPhp 25.00");
	    	 			if(pieces[11]>0){
				    		System.out.println("\t" +pieces[11] +"pcs.");
				    	}
				    	else{
				    		System.out.println("\t*Not Available*");
				    	}
	    	 		System.out.print (" 7-Up \t\t\t\tPhp 25.00");
	    	 			if(pieces[12]>0){
				    		System.out.println("\t" +pieces[12] +"pcs.");
				    	}
				    	else{
				    		System.out.println("\t*Not Available*");
				    	}
	    	 		System.out.println (" *************************************");
	    	 		
	    	 		
	    	 		if(pieces[1]==0 && pieces[2]==0 && pieces[3]==0 && pieces[4]==0){
	    	 			System.out.println("\nMain Dish Not Available!");
	    	 		}
	    	 		else{
		    	 		for(int v=1;v==1;){
			    	 		System.out.print("\nDo you want to order MAIN DISH? [Y/N]: ");
			    	 		mainQ = in.readLine();
							
	//MAIN DISH
							
			    	 		if(mainQ.equalsIgnoreCase("y")){
			    	 			
				    	 			do{
				    	 				System.out.println ("\n\t ********** MAIN DISH **********");
				    	 				System.out.println (" **************************************");
				    	 				System.out.println (" NAME\t\t\t\tPRICE");
				    	 				System.out.print (" 1. Adobong Baboy " + "\tPhp 50.00");
					    	 				if(pieces[1]>0){
					    	 					System.out.println("\t" +pieces[1] +"pcs.");
					    	 				}
					    	 				else{
					    	 					System.out.println("\t*Not Available*");
					    	 				}
				    	 				System.out.print (" 2. Adobong Manok " + "\tPhp 50.00");
					    	 				if(pieces[2]>0){
					    	 					System.out.println("\t" +pieces[2] +"pcs.");
					    	 				}
					    	 				else{
					    	 					System.out.println("\t*Not Available*");
					    	 				}
				    	 				System.out.print (" 3. Litchon baboy " + "\tPhp 100.00");
					    	 				if(pieces[3]>0){
					    	 					System.out.println("\t" +pieces[3] +"pcs.");
					    	 				}
					    	 				else{
					    	 					System.out.println("\t*Not Available*");
					    	 				}
				    	 				System.out.print (" 4. Litchon Manok " + "\tPhp 150.00");
					    	 				if(pieces[4]>0){
					    	 					System.out.println("\t" +pieces[4] +"pcs.");
					    	 				}
					    	 				else{
					    	 					System.out.println("\t*Not Available*");
					    	 				}
				    	 				System.out.println (" **************************************");
				    	 				
				    	 				for(e=1;e==1;){
					    	 				System.out.print("\nEnter Your Order: ");
					    	 				order = Integer.parseInt(in.readLine());
					    	 				
					    	 				for(v=1;v<=4;v++){
						    	 				if(order==v){
						    	 					if(orderString[b][v].equals("1")){
						    	 						System.out.println("Dish Already Listed!");
						    	 						e=1;
						    	 					}
						    	 					else if(pieces[v]==0){
						    	 						System.out.println("Dish Not Available");
						    	 						e=1;
						    	 					}
						    	 					else{
						    	 						e=0;
						    	 					}
						    	 				}
					    	 				}
						    	 			if(order<1 || order>4){
						    	 				System.out.println("Invalid Input!");
						    	 				e=1;
						    	 			}
					    	 				
				    	 				}
				    	 				
				    	 				do{
					    	 				System.out.print("How many? : ");
					    	 				orderMDouble[b][c] = Double.parseDouble(in.readLine());
					    	 				
				    	 					for(v=1;v<=4;v++){
					    	 					if(order==v){
					    	 						orderString[b][v]="1";
					    	 						pieces[v]=pieces[v]-orderMDouble[b][c];
					    	 						if(pieces[v]<0){
					    	 							pieces[v]=pieces[v]+orderMDouble[b][c];
					    	 							System.out.println("Sorry, We only have " +pieces[v] +"pcs. Available");
					    	 							v=5;
					    	 							r=1;
					    	 						}
					    	 						else{
					    	 							r=0;
					    	 						}
					    	 					}
					    	 				}
				    	 				}while(r==1);
				    	 				
				    	 				
				    	 				orderStringP[b][c]=orderNameP[order];
				    	 				orderStringM[b][c]=orderNameM[order];
				    	 				orderDouble[b][c]=orderPrice[order];
				    	 				
				    	 				
				    	 				c++;
				    	 				
				    	 				for(d=1;d==1;){
					    	 				System.out.print("\nWant to Order Other MAIN DISH? [Y/N]: ");
					    	 				mainQ2 = in.readLine();
					    	 			
					    	 				if(mainQ2.equalsIgnoreCase("y")){
					    	 					d=0;
					    	 				}
					    	 				else if(mainQ2.equalsIgnoreCase("n")){
					    	 					System.out.print("");
					    	 					d=0;
					    	 				}
					    	 				else{
					    	 					System.out.print("Invalid Input!");
					    	 					d=1;
					    	 				}
					    	 			}
					    	 			if(orderString[b][1].equals("1") && orderString[b][2].equals("1") && orderString[b][3].equals("1") && orderString[b][4].equals("1")){
				    	 					System.out.println("\nSorry, You order all 4 MAIN DISH!");
				    	 					mainQ2="n";
				    	 				}
				    	 				if(pieces[1]==0 && pieces[2]==0 && pieces[3]==0 && pieces[4]==0){
	    	 								System.out.println("\nMain Dish Not Available!");
	    	 								mainQ2="n";
	    	 							}
				    	 			}
			    	 				while(mainQ2.equalsIgnoreCase("y"));
			    	 			
			    	 				}
			    	 				else if(mainQ.equalsIgnoreCase("n")){
			    	 					v=0;
			    	 				}
			    	 				else{
			    	 					System.out.print("Invalid Input!");
			    	 					v=1;
			    	 				}
			    	 		}
	    	 			}
	    	 			if(pieces[5]==0 && pieces[6]==0 && pieces[7]==0 && pieces[8]==0){
	    	 				System.out.println("\nMain Dish Not Available!");
	    	 			}
	    	 			else{
			    	 		for(int v=1;v==1;){
				    	 		System.out.print("\nDo you want to order DESSERT? [Y/N]: ");
				    	 		dessertQ = in.readLine();
				    	 		
		//DESSERT
				    	 		
				    	 		if(dessertQ.equalsIgnoreCase("y")){
				    	 			do{
					    	 			System.out.println ("\n\t ********** DESSERT **********");
					    	 			System.out.println (" **************************************");
						    	 		System.out.println (" NAME\t\t\t\tPRICE");
						    	 		System.out.print (" 1. Ginataan \t\tPhp 25.00");
						    	 			if(pieces[5]>0){
					    	 					System.out.println("\t" +pieces[5] +"pcs.");
					    	 				}
					    	 				else{
					    	 					System.out.println("\t*Not Available*");
					    	 				}
				    	 				System.out.print (" 2. CamoteCue \t\tPhp 20.00");
						    	 			if(pieces[6]>0){
					    	 					System.out.println("\t" +pieces[6] +"pcs.");
					    	 				}
					    	 				else{
					    	 					System.out.println("\t*Not Available*");
					    	 				}
				    	 				System.out.print (" 3. Kalamay \t\tPhp 25.00");
						    	 			if(pieces[7]>0){
					    	 					System.out.println("\t" +pieces[7] +"pcs.");
					    	 				}
					    	 				else{
					    	 					System.out.println("\t*Not Available*");
					    	 				}
				    	 				System.out.print (" 4. Nata de Coco \tPhp 20.00");
						    	 			if(pieces[8]>0){
					    	 					System.out.println("\t" +pieces[8] +"pcs.");
					    	 				}
					    	 				else{
					    	 					System.out.println("\t*Not Available*");
					    	 				}
				    	 				System.out.println (" **************************************");
						    	 		
				    	 				for(e=1;e==1;){
					    	 				System.out.print("\nEnter Your Order: ");
					    	 				order = Integer.parseInt(in.readLine());
					    	 				order=order+4;
					    	 				
					    	 				for(v=5;v<=8;v++){
						    	 				if(order==v){
						    	 					if(orderString[b][v].equals("1")){
						    	 						System.out.println("Dessert Already Listed!");
						    	 						e=1;
						    	 					}
						    	 					else if(pieces[v]==0){
						    	 						System.out.println("Dessert Not Available");
						    	 						e=1;
						    	 					}
						    	 					else{
						    	 						e=0;
						    	 					}
						    	 				}
					    	 				}
					    	 				if(order<5 || order>8){
					    	 					System.out.println("Invalid Input!");
					    	 					e=1;
					    	 				}
				    	 				}
				    	 				
				    	 				do{	
				    	 				System.out.print("How many? : ");
				    	 				orderMDouble[b][c] = Double.parseDouble(in.readLine());
				    	 				
					    	 				for(v=5;v<=8;v++){
						    	 				if(order==v){
						    	 					orderString[b][v]="1";
						    	 					pieces[v]=pieces[v]-orderMDouble[b][c];
						    	 					if(pieces[v]<0){
						    	 						pieces[v]=pieces[v]+orderMDouble[b][c];
						    	 						System.out.println("Sorry, We only have " +pieces[v] +"pcs. Available");
						    	 						v=9;
						    	 						r=1;
						    	 					
						    	 					}
						    	 					else{
						    	 						r=0;
						    	 					}
						    	 				}
						    	 				
					    	 				}
				    	 				}while(r==1);
				    	 				
				    	 				
				    	 				orderStringP[b][c]=orderNameP[order];
				    	 				orderStringM[b][c]=orderNameM[order];
				    	 				orderDouble[b][c]=orderPrice[order];
				    	 				
				    	 				
				    	 				c++;
				    	 				
					    	 			for(d=1;d==1;){
					    	 				System.out.print("\nWant to Order Other DESSERT? [Y/N]: ");
					    	 				dessertQ2 = in.readLine();
					    	 			
					    	 				if(dessertQ2.equalsIgnoreCase("y")){
					    	 					d=0;
					    	 				}
					    	 				else if(dessertQ2.equalsIgnoreCase("n")){
					    	 					d=0;
					    	 					dessertQ="n";
					    	 				}
					    	 				else{
					    	 					System.out.print("Invalid Input!");
					    	 					d=1;
					    	 				}
					    	 			}
					    	 			if(orderString[b][5].equals("1") && orderString[b][6].equals("1") && orderString[b][7].equals("1") && orderString[b][8].equals("1")){
					    	 				System.out.print("Sorry, You Order All 4 DESSERT!");
					    	 				dessertQ2="n";
					    	 			}
					    	 			if(pieces[1]==0 && pieces[2]==0 && pieces[3]==0 && pieces[4]==0){
	    	 								System.out.println("\nMain Dish Not Available!");
	    	 								dessertQ2="n";
	    	 							}
				    	 			}
				    	 			while(dessertQ2.equalsIgnoreCase("y"));
					    	 		
				    	 		}
				    	 		else if(dessertQ.equalsIgnoreCase("n")){
			    	 					v=0;
			    	 			}
			    	 			else{
			    	 				System.out.print("Invalid Input!");
			    	 				v=1;
			    	 			}
				    	 	}
	    	 			}
	    	 			if(pieces[5]==0 && pieces[6]==0 && pieces[7]==0 && pieces[8]==0){
	    	 				System.out.println("\nDessert Not Available!");
	    	 			}
	    	 			else{
				    	 	for(int v=1;v==1;){
				    	 		System.out.print("\nDo you want to Order DRINKS? [Y/N]: ");
				    	 		drinksQ = in.readLine();
				    	 		
		//DRINKS
				    	 		
				    	 		if(drinksQ.equalsIgnoreCase("y")){
				    	 			
				    	 			do{
					    	 			System.out.println ("\n\t ********** DRINKS **********");
						    	 		System.out.println (" **************************************");
						    	 		System.out.println (" NAME\t\t\t\tPRICE");
						    	 		System.out.print (" 1. Coke \t\t\tPhp 30.00");
						    	 			if(pieces[9]>0){
					    	 					System.out.println("\t" +pieces[9] +"pcs.");
					    	 				}
					    	 				else{
					    	 					System.out.println("\t*Not Available*");
					    	 				}
				    	 				System.out.print (" 2. Sprite \t\t\tPhp 30.00");
						    	 			if(pieces[10]>0){
					    	 					System.out.println("\t" +pieces[10] +"pcs.");
					    	 				}
					    	 				else{
					    	 					System.out.println("\t*Not Available*");
					    	 				}
				    	 				System.out.print (" 3. Pepsi \t\t\tPhp 25.00");
						    	 			if(pieces[11]>0){
					    	 					System.out.println("\t" +pieces[11] +"pcs.");
					    	 				}
					    	 				else{
					    	 					System.out.println("\t*Not Available*");
					    	 				}
				    	 				System.out.print (" 4. 7-Up \t\t\tPhp 25.00");
						    	 			if(pieces[12]>0){
					    	 					System.out.println("\t" +pieces[12] +"pcs.");
					    	 				}
					    	 				else{
					    	 					System.out.println("\t*Not Available*");
					    	 				}
				    	 				System.out.println (" **************************************");
						    	 		
						    	 		for(e=1;e==1;){
					    	 				System.out.print("\nEnter Your Order: ");
					    	 				order = Integer.parseInt(in.readLine());
					    	 				order=order+8;
					    	 				
					    	 				for(v=9;v<=12;v++){
						    	 				if(order==v){
						    	 					if(orderString[b][v].equals("1")){
						    	 						System.out.println("Drinks Already Listed!");
						    	 						e=1;
						    	 					}
						    	 					else if(pieces[v]==0){
						    	 						System.out.println("Drinks Not Available");
						    	 						e=1;
						    	 					}
						    	 					else{
						    	 						e=0;
						    	 					}
						    	 				}
					    	 				}
					    	 				if(order<9 || order>12){
					    	 					System.out.println("Invalid Input!");
					    	 					e=1;
					    	 				}
				    	 				}
				    	 				
				    	 				orderStringP[b][c]=orderNameP[order];
				    	 				orderStringM[b][c]=orderNameM[order];
				    	 				orderDouble[b][c]=orderPrice[order];
				    	 				
				    	 				
				    	 				do{
				    	 					
				    	 				System.out.print("How many? : ");
				    	 				orderMDouble[b][c] = Double.parseDouble(in.readLine());
				    	 				
					    	 				for(v=9;v<=12;v++){
						    	 				if(order==v){
						    	 					orderString[b][v]="1";
						    	 					pieces[v]=pieces[v]-orderMDouble[b][c];
						    	 					if(pieces[v]<0){
							    	 					pieces[v]=pieces[v]+orderMDouble[b][c];
							    	 					System.out.println("Sorry, We only have " +pieces[v] +"pcs. Available");
							    	 					v=13;
							    	 					r=1;
						    	 					}
							    	 				else{
							    	 					r=0;
							    	 				}
						    	 				}
					    	 				}
				    	 				}while(r==1);
				    	 				
				    	 				c++;
				    	 				
					    	 			for(d=1;d==1;){
					    	 				System.out.print("\nWant to Order Other DRINKS? [Y/N]: ");
					    	 				drinksQ2 = in.readLine();
					    	 			
					    	 				if(drinksQ2.equalsIgnoreCase("y")){
					    	 					d=0;
					    	 					c++;
					    	 				}
					    	 				else if(drinksQ2.equalsIgnoreCase("n")){
					    	 					System.out.print("");
					    	 					d=0;
					    	 					f=0;
					    	 				}
					    	 				else{
					    	 					System.out.print("Invalid Input!");
					    	 					d=1;
					    	 				}
					    	 			}
					    	 			if(orderString[b][9].equals("1") && orderString[b][10].equals("1") && orderString[b][11].equals("1") && orderString[b][12].equals("1")){
					    	 				System.out.print("Sorry, You order all 4 DRINKS!");
					    	 				drinksQ2="n";
					    	 				f=0;
					    	 			}
					    	 			if(pieces[9]==0 && pieces[10]==0 && pieces[11]==0 && pieces[12]==0){
	    	 								System.out.println("\nDrinks Not Available!");
	    	 								drinksQ2="n";
	    	 								f=0;
	    	 							}
				    	 			}
				    	 			while(drinksQ2.equalsIgnoreCase("y"));
					    	 		
				    	 		}
				    	 		else if(drinksQ.equalsIgnoreCase("n")){
			    	 					v=0;
			    	 					f=0;
			    	 			}
			    	 			else{
			    	 				System.out.print("Invalid Input!");
			    	 				v=1;
			    	 			}
				    	 	}
	    	 			}
			    	 	if(c==0){
			    	 		System.out.println("You Don't Have Any Order!");
			    	 		r=1;
			    	 	}
			    	 	else{
			    	 		c--;
			    	 	}
	    	 		}while(r==1);
		    	 	tableNo[b]=table;
		    	 	totalOrder[b]=c;
		    	 	paid[b]=0;
		    	 	
		    	 	System.out.println("\n YOU'RE TABLE NO. IS: "  +tableNo[b]);
		    	 	System.out.println(" YOU'RE ORDER ARE: ");
		    	 	for(int y=0;y<=totalOrder[b];y++){
	    				System.out.println("   "+orderMDouble[b][y] +" pcs.\t" +orderStringM[b][y]);
	    				totalPrice[b]=totalPrice[b]+(orderDouble[b][y]*orderMDouble[b][y]);
	    			}
		    	 	
		    	 	
		    	 	
		    	 	
		    	 	
		    	 	
	    		table++;
		    	b++;
	    		}
	    		
//CHOICE 2 - "ORDER INFO"
	    		
	    	 	else if(choice==2){
	    	 		
	    	 		do{
	    	 			
	    	 		System.out.print("\nEnter Customer Name: ");
	    	 		search = in.readLine();
	    	 		
	    	 		int s=1;
	    	 		
						for(int x=0; x<b; x++){
							
							if(search.equalsIgnoreCase(orderString[x][0])){
	    						System.out.println(" ******   CUSTOMER ORDER INFO   *******");
	    						System.out.println(" Customer Name: " + orderString[x][0]);
	    						System.out.println(" Table Number: " + tableNo[x]);
	    						System.out.println(" Customer Order:");
	    						
	    						for(int y=0;y<=totalOrder[x];y++){
	    							System.out.println("   " +orderMDouble[x][y] +" Pcs\t" +orderStringP[x][y]);
	    						}
	    						System.out.println(" --------------------------------------");
	    						System.out.print(" Total Bill: Php" + totalPrice[x]);
	    						if(paid[x]==1){
	    							System.out.println(" *PAID*");
	    							System.out.println (" **************************************");
	    						}
	    						else{
	    							System.out.println (" *NOT PAID*");
	    							System.out.println (" **************************************");
	    							System.out.println ("\n Please Proceed To Billing!");
	    						}
	    						s=0;
							}

						}
							
						if (s==1){
							System.out.println("Customer Name not found!");
							g=1;
						}
						else{
							g=0;
							}
					
	    	 		f=0;
	    	 	}while(g==1);
	    	 	
	    	 	}
	    	 	
	    	 	else if(choice==3){
	    	 		
	    	 		do{
	    	 			
	    	 		System.out.print("\nEnter Customer Name: ");
	    	 		search = in.readLine();
	    	 		
	    	 		int s=1;
						for(int x=0; x<b; x++){
							if(search.equalsIgnoreCase(orderString[x][0])){
	    						System.out.println(" ****   CUSTOMER ORDER RECEIPT   ****");
	    						System.out.println(" Customer Name: " + orderString[x][0]);
	    						System.out.println(" Table Number: " + tableNo[x]);
	    						System.out.println(" Customer Order:");
	    						
	    						for(int y=0;y<=totalOrder[x];y++){
	    							System.out.println("   " +orderMDouble[x][y] +" Pcs\t" +orderStringP[x][y]);
	    						}
	    						System.out.println (" **************************************");
	    						System.out.print(" Total Bill: Php " + totalPrice[x]);
	    						if(paid[x]==1){
	    							System.out.println(" *PAID*");
	    							System.out.println (" **************************************");
	    						}
	    						else{
	    							System.out.println ("\n **************************************");
	    							for(int m=1;m==1;){
		    							System.out.print("Enter Payment: ");
		    							payment = Double.parseDouble(in.readLine());
		    							
		    							change=payment-totalPrice[x];
		    							if(change<0){
		    								m=1;
		    								System.out.println("Insufficient Amount of Money! Please Try Again!");
		    							}
		    							else{
		    								paid[x]=1;
		    								m=0;
		    							}
	    							}
	    							System.out.println("Change: Php" +change);
	    						}
	    						
	    						
	    						
	    						s=0;
							}
						}	
						if (s==1){
							System.out.println("Customer Name not found!");
							h=1;
							}
						else{
							h=0;
							}
	    	 		f=0;
	    	 		
	    	 		
	    	 	}while(h==1);
	    	 	}
	    	 	else if(choice==4){
	    	 		System.out.println(" ********** DISH  INVENTORY **********");
	    	 		System.out.println (" **************************************");
	    	 		System.out.println ("\n   *********** MAIN  DISH ***********");
	    	 		System.out.println ("   **********************************");
	    	 		for(int z=1;z<=4;z++){
    					System.out.println(" \t" +pieces[z] +" pcs\t\t" +orderNameM[z]);
   					}
   					System.out.println ("   ************ DESSERT *************");
	    	 		System.out.println ("   **********************************");
	    	 		for(int z=5;z<=8;z++){
    					System.out.println(" \t" +pieces[z] +" pcs\t\t" +orderNameM[z]);
   					}
   					System.out.println ("   ************* DRINKS *************");
	    	 		System.out.println ("   **********************************");
	    	 		for(int z=9;z<=12;z++){
    					System.out.println(" \t" +pieces[z] +" pcs\t\t" +orderNameM[z]);
   					}
   					System.out.println (" **************************************");
	    	 		f=0;
	    	 	}
	    	 	else if(choice==5){
	    	 		f=0;
	    	 		end=1;
	    	 		again="n";
	    	 		
	    	 		System.out.println("Thank You and Come Again!!");
	    	 		
	    	 	}
	    	 	else{
	    	 		System.out.println("Invalid Input!");
	    	 		f=1;
	    	 	}
	    	 	
    		}
	    		if(end==0){
	    			do{
	    			
		    	 	System.out.print("\nDo you want Another Transaction [Y/N]?");
		    	 	again = in.readLine();
		    	 	
		    	 	if(again.equalsIgnoreCase("n")){
		    	 		i=0;
		    	 	}
		    	 	else if(again.equalsIgnoreCase("y")){
		    	 		i=0;
		    	 	}
		    	 	else{
		    	 		System.out.println("Invalid Input!");
		    	 		i=1;
		    	 	}
	    		}while(i==1);
	    		}
	    	}while(again.equalsIgnoreCase("y"));
	    	
	    	break;
    	}
    	else{
    		System.out.println("Invalid User or Password!!");
    		a++;
   		}
    }
    	
    }
    
    
}