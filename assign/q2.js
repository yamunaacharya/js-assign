//write a javascript program to find all numbers between 1 and 100 using for loop.
let count=0
let i,j 
for(j=2;j<=100;j++)
{
for( i=1;i<=j;i++)
{
  if(j%i==0)
  count++ 
}
if(count==2)
console.log(j)
count=0
  
}
