/*//① まずquerySelector で 対象のinput要素を取得
document.querySelector('#createBtn').

//② addEventListener で「クリックされたら〜...」というイベントを追加
addEventListener('click',function(){
  //③ createElement を使って追加したい要素の名前を 文字列 で入れる。今回は li
  let item=document.createElement('li');
  //④ 作成した li を2行目で item という変数に入れていますが、この時点ではまだ中身は空です

  //⑤ textContent で 「item」 という文字列を入れる
  item.textContent='item';

  //⑥ ul タグの子要素である li に「item」を追加するという意味で、 ul.appendChild(item) と記述する
  let ul=document.querySelector('ul');
  ul.appendChild(item);
});*/

/*function createBtn(){
  let item=document.createElement('li');
  item.textContent='item';
  let ul=document.querySelector('ul');
  ul.appendChild(item);
}*/