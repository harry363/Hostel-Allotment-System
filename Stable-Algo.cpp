#include<iostream> 
#include<string.h> 
#include<cstdio> 
#include<cstdlib>
//#include<ctime>
using namespace std; 

#define N 15
//int N;
// This function returns true if woman 'w' prefers man 'm1' over man 'm' 
bool wPrefersM1OverM(int prefer[2*N][N], int w, int m, int m1) 
{ 
	// Check if w prefers m over her current engagment m1 
	for (int i = 0; i < N; i++) 
	{ 
		// If m1 comes before m in lisr of w, then w prefers her 
		// cirrent engagement, don't do anything 
		if (prefer[w][i] == m1) 
			return true; 

		// If m cmes before m1 in w's list, then free her current 
		// engagement and engage her with m 
		if (prefer[w][i] == m) 
		return false; 
	} 
} 

// Prints stable matching for N boys and N girls. Boys are numbered as 0 to 
// N-1. Girls are numbereed as N to 2N-1. 
void stableMarriage(int prefer[2*N][N]) 
{ 
	// Stores partner of women. This is our output array that 
	// stores paing information. The value of wPartner[i] 
	// indicates the partner assigned to woman N+i. Note that 
	// the woman numbers between N and 2*N-1. The value -1 
	// indicates that (N+i)'th woman is free 
	int wPartner[N]; 

	// An array to store availability of men. If mFree[i] is 
	// false, then man 'i' is free, otherwise engaged. 
	bool mFree[N]; 

	// Initialize all men and women as free 
	memset(wPartner, -1, sizeof(wPartner)); 
	memset(mFree, false, sizeof(mFree)); 
	int freeCount = N; 

	// While there are free men 
	while (freeCount > 0) 
	{ 
		// Pick the first free man (we could pick any) 
		int m; 
		for (m = 0; m < N; m++) 
			if (mFree[m] == false) 
				break; 

		// One by one go to all women according to m's preferences. 
		// Here m is the picked free man 
		for (int i = 0; i < N && mFree[m] == false; i++) 
		{ 
			int w = prefer[m][i]; 

			// The woman of preference is free, w and m become 
			// partners (Note that the partnership maybe changed 
			// later). So we can say they are engaged not married 
			if (wPartner[w-N] == -1) 
			{ 
				wPartner[w-N] = m; 
				mFree[m] = true; 
				freeCount--; 
			} 

			else // If w is not free 
			{ 
				// Find current engagement of w 
				int m1 = wPartner[w-N]; 

				// If w prefers m over her current engagement m1, 
				// then break the engagement between w and m1 and 
				// engage m with w. 
				if (wPrefersM1OverM(prefer, w, m, m1) == false) 
				{ 
					wPartner[w-N] = m; 
					mFree[m] = true; 
					mFree[m1] = false; 
				} 
			} // End of Else 
		} // End of the for loop that goes to all women in m's list 
	} // End of main while loop 


	// Print the solution 
	cout << "Woman Man" << endl; 
	for (int i = 0; i < N; i++) 
	cout << " " << i+N << "\t" << wPartner[i] << endl; 
} 


int Search(int num,int SID[]){
      for(int i=0;i<N;i++){
          if(num==SID[i])
            return i;
      }
}
int generate_random() 
{   
    //srand(time(0));
    int num = rand()%N;
    return num;  
} 

int main() 
{       
	//cout<<"Enter Number of rooms and students"<<endl;
        
        int k,temp,temp1,prefer[2*N][N]={0};
        cout<<"Enter k for A block";
        cin>>k;
        temp=N;
        temp1=N+k;
	int SID[N],Friends[N][5];
        char Block[N][2];
	/*for(int i=0;i<N;i++){
           cout<<"Enter your SID";
	   cin>>SID[i];
	   cout<<"Enter Blocks: A and C in order of your preference";
	   cin>>Block[i][0]>>Block[i][1];
           cout<<"Enter your friends SID in order of their preference (5)";
           for(int j=0;j<5;j++)
              cin>>Friends[i][j];
        } */
        for(int i=0;i<N;i++){
            if(Block[i][0]=='A'){
               if(temp<N+k){
                 prefer[i][0]=temp;
                 temp++;
               }
               else{
                 temp=N;
                  prefer[i][0]=temp;
               }
            }
            else{
               if(temp1<2*N)
                 prefer[i][0]=temp1++;
               else{
                 temp1=N+k;
                 prefer[i][0]=temp1;
               }  
            }
        }
           temp=N,temp1=N+k;
         for(int i=0;i<N;i++){
            if(Block[i][1]=='A'){
               if(temp<N+k)
                 prefer[i][6]=temp++;
               else{
                 temp=N;
                 prefer[i][6]=temp;
               }
            }
            else{
               if(temp1<2*N)
                 prefer[i][6]=temp1++;
               else{
                 temp1=N+k;  
                 prefer[i][6]=temp1;
               }
            }
        }
        
   	for(int i=0;i<N;i++){
            cout<<prefer[i][0]<<" "<<prefer[i][6]<<endl;
        }	  

        for(int i=0;i<N;i++){
           for(int j=1;i<6;j++){
              prefer[i][j]=prefer[Search(Friends[i][j-1],SID)][0];
           }
        }
      cout<<"hI"<<endl;
       int z,flag;
        for(int i=N;i<2*N;i++){
           for(int j=0;j<N;j++){ flag=0;
              while(1){  cout<<"!11"<<" ";
                   z=generate_random();
                   for(int k=0;k<N;k++){
                      if(prefer[i][k]==z){
                        flag=1;
                        break;
                      } 
                   }
                  if(flag==0)
                    break;       
              }
            prefer[i][j]=z;     
           }
        }
        for(int i=0;i<N;i++){
            for(int j=0;j<N;j++){
            cout<<prefer[i][j]<<"  ";  
            }cout<<endl;    
        }
       
       



	/*int prefer[2*N][N] = { {7, 5, 6, 4}, 
		{5, 4, 6, 7}, 
		{4, 5, 6, 7}, 
		{4, 5, 6, 7}, 
		{0, 1, 2, 3}, 
		{0, 1, 2, 3}, 
		{0, 1, 2, 3}, 
		{0, 1, 2, 3}, 
	}; */
	//stableMarriage(prefer); 

	return 0; 
} 

