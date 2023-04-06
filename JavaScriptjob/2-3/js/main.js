// ボタンのIDを取得
// let btn =document.getElementById('btn');

//ボタンがクリック→アラートを出す
/*btn.onclick=function(){
  alert('ボタンがクリックされました');
}*/
//-------------------------------

//box要素とbtn要素を取得
let box=document.getElementById('box');
let btn=document.getElementById('btn');

//ボタンがクリックされたら
/*btn.onclick=function(){
  box.style.backgroundColor='red';
};*/
btn.addEventListener('click',function(){
  box.style.backgroundColor='red';
},false);

//ボタンがクリックされたら
/*btn.onclick=function(){
  alert('ボタンが押されました');
};*/
btn.addEventListener('click',function(){
  alert('ボタンが押されました');
},false);