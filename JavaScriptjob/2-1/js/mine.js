// document.body.textContent='hello';
// document.title='JavaScript2-1'

// console.log(window);
// let url =window.location.href;
// console.log(url)

// window.alert('Hello Wold');

// let target=document.getElementById('target');
// console.log(target);

/*function myfunc() {
  let change = document.getElementById('target');

  // textContentを使って「こんにちは」で書き変える
  change.textContent = 'こんにちは!';
}*/

/*let elems = document.  getElementsByTagName('h1');

  //HTMLを上から順番に探した時に、最初に見つかったh1タグが0番目の要素として取得できます。

  console.log(elems[0]);
  console.log(elems[1]);
*/

/*let boxs = document.getElementsByName('box');
for (let i = 0; i < boxs.length; i++) {
    console.log(boxs[i]);
  }
*/

/* let boxs = document.getElementsByClassName('box');

  console.log(boxs[0]);
  console.log(boxs[1]);
  console.log(boxs[2]);
*/

let elems = document.getElementById('box').style.backgroundColor = 'red';
