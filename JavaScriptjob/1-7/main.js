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