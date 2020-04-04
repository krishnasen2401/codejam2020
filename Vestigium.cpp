#include <iostream>
#include <bits/stdc++.h>
using namespace std;

bool rowRepeating(int arr[], int size)
{
/**for (int i = 0; i < size; i++)
{
    for(int j=0;j<i;j++){
        if(arr[i]==arr[j])
        return true;
    }
} **/

return false;
}

int main() {
  int t;
  cin >> t;
  for(int ntest=0;ntest<t;ntest++){
    int n;
  cin >> n;
  int a[n][n];
  int row[n];
  int rowcount=0;
  int columncount=0;
  int sum=0;
  for (int i = 0; i <n ; i++) {
	for (int j = 0; j < n; j++) {
	cin>>a[i][j];
	row[i]=a[i][j];
	//cout<<row[i];
  }
  sum=sum+a[i][i];
  for (int k=0;k<n;k++)
    cout<<row[k];
  if(rowRepeating(row,n))
  rowcount++;
  }
  cout<<"Case #"<<ntest+1<<": "<<sum<<" "<<rowcount<<"\n";
  }
  return 0;
} 
