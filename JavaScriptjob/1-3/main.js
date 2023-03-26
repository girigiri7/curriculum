// 問1  a!==10;
//      b>=10 && b<20;

let a = 15;

if(a !==10){
console.log(a);
}

// 2問  x 10～20「成功です」
//              「失敗です」

let x=10;

if(x>=10 && x<=20){
  console.log("成功です");
}else{
  console.log("失敗です");
}

// 3問  y 「偶数です」
//        「奇数です」

let y=0

if(y%2 === 0){
  console.log("偶数です");
}else if(y%2 !==0){
  console.log("奇数です");
}

/*復習
let num1=10;
let num2=4;
let result;

//足し算
result=num1+num2;
console.log(result);//14

//引き算
result=num1-num2;
console.log(result);//6

//掛け算
result=num1*num2;
console.log(result);//40

//割り算
result=num1/num2;
console.log(result);//2.5

//剰余
result=num1%num2;
console.log(result);//2

//文字列の結合
console.log('Hello'+'World');

//変数の結合
let lastName='田中';
let firstName='一郎';
let fullName=lastName + firstName;

console.log(fullName);

//+1(インクリメント) , -1(デクリメント)
let x=10;
x++;
console.log(x);//11

let y=10;
y--;
console.log(y);//9

//代入演算子
let name=hoge;

//比較演算子
console.log(10===10);//t
console.log(10===5);//f
console.log(10!==5);//t
console.log(10>20);//f
console.log(10<=10);//t

console.log('10'===10);//f
console.log('10'==10);//t

//条件分岐
let score=90;
if(score>=70){
  console.log('合格');
}else if(score===0){
  console.log('0点はまずいです...')
}else{
  console.log('不合格');
}

//論理演算子
let a=15;
if(a>=10 && a<=20){
  console.log(a);
}
//偶数・奇数
a%2===0//偶数
a%2!==0//奇数

let a=10;
let b=15;

if(a%2===0){
  console.log(a);
}
if(b%2!==0){
  console.log(b);
}*/