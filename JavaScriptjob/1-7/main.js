//問1：以下の要件を満たすように「たい焼きクラス」を作成してください。

// 【要件】
// ・クラス名：Taiyaki
// ・インスタンス化する度に「あんこ」「クリーム」「チーズ」等と中身を変えられるように実装してください。
// （コンストラクタで渡ってきた引数をセットする）
// ・「中身は〇〇です」と中身を出力する関数を作成してください。

class Taiyaki{
  constructor(parts){
    this.parts=parts;
  }
  topping(){
    console.log(`中身${this.parts}はです。`);
  }
}
let anko=new Taiyaki('あんこ');
anko.topping()

let crem=new Taiyaki('クリーム');
crem.topping()

let chees=new Taiyaki('チーズ');
chees.topping()
/*
//クラス //設計図(空)
//インスタンス化 //クラスをコピーして使う使って

let yamada = { 
    name: 'yamada',
    height: 170,
    weight: 60,
    gender: "男",
    age: 30,
}
//「鈴木」オブジェクト作成
let suzuki = {
    name: 'suzuki',
    height: 180,
    weight: 70,
    gender: "男",
    age: 35,
}

//クラスの宣言
class Human{
  constructor(name,age){//クラスがインスタンス化された時に、一番最初に自動で実行される関数
    this.name=name;
    this.age=age;
  }
}
//インスタンス化 Humanクラスを使う
let yamada=new Human('yamada',25);
console.log(yamada.name);

//クラスのメリット
  //書き忘れ防止
  //コードが見やすい
  //関数もかけて使える
class Human{
  constructor(name,height,weight,gender,age){
    this.name=name;
    this.height=height;
    this.weight=weight;
    this.gender=gender;
    this.age=age;
  }
}

let yamada=new Human('yamada',170,60,'男',30);

let suzuki=new Human('suzuki',180,70,'男',35);

//クラス内の関数を使用する
  //クラスの中に関数を書く時functionは不要
function walk(){
  console.log('歩きました');
}

class Human{
  constructor(name,height,weight,gender,age){
    this.name=name;
    this.height=height;
    this.weight=weight;
    this.gender=gender;
    this.age=age;
  }
  walk(){
    console.log('歩きました');
    console.log(`身長${this.height}cm、体重${this.weight}kg、${this.name}という${this.gender}があるきました`);
  }
}
let yamada=new Human('yamada',170,60,'男',
30);
yamada.walk();*/