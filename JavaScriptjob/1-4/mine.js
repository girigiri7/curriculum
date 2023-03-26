
let number=1;

while(number<=100){
  
  if(number % 3===0 && number %5===0){
    console.log("FizzBuzz!");
  }else if(number % 3===0){
    console.log("Fizz!");
  }else if(number % 5===0){
    console.log("Buzz!"); 
  }else{
    console.log(number);
  }
  number++;
}
/*
//while文
let number=1;
while(number<=100){
  console.log(number);
  number++;
}

//do while文
let number=1;
do{
  console.log(number);
  number++;
}while(number<=100);

//for文
for(let number =1;number<=100;number++){
  console.log(number);
}

//break 強制終了
let number=0;
while(number<5){
  if(number===3){
    break;
  }
  console.log(number);
  number++;
}

//continue スキップ
let number=0;
while(number<5){
  if(number===3){
    number++;
    continue;
  }
  console.log(number);
  number++;
}*/