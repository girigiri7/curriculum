//問1：10、15、20、25を含む配列の変数scoresを用意して、画像のように偶数だけを出力してください
let scores=[10,15,20,25];

for(let i=0;i<4;i++){
  if(scores[i]%2===0){
    console.log(scores[i]+"偶数です");
  }
}

//問2：ガソリンとナンバーのプロパティを持った「carオブジェクト」を作成して、ガソリンとナンバーを出力してください。

let car={
  gass:20.5,
  num:1234,
};

console.log('ガソリンは'+car['gass']+'です');
console.log('ナンバーは'+car['num']+'です');
/*
//配列
let score1=50;
let score2=60;
let score3=70;
let score4=80;
let score5=90;

let scores=[50,60,70,80,90];
console.log(scores);

//配列の特定の一部にアクセス
console.log(scores[2]);

//配列に入っている要素の数 length
console.log(scores,length);

for(let i=0;i<5;i++){
  console.log("得点は"+scores[i]+"点です");
}

for(let i=0;i<scores.length;i++){
  console.log("得点は"+scores[i]+"点です");
}

//オブジェクト
//JavaScriptにおいて「オブジェクト」とは変数や関数をまとめて入れておける箱のようなものだと考えてくださ
//同じ数値でも意味の違う数値を複数持てる
//関数も管理できる
//色々な数値を管理するので0～のインデントではなんの数値かわからなくなる
//=>インデントに名前をつける

let human={
  name:'yamada',
  height:170,
  weight:60,
  gender:"男",
  age:30,
}

console.log(human.name);
console.log(human['name']);
*/