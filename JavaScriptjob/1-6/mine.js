//問1：10、15、20、25を含む配列の変数scoresを用意して、画像のように偶数だけを出力してください
let scores=[10,15,20,25];

for(let i=0;i<4;i++){
  if(scores[i]%2===0){
    console.log(scores[i]+"偶数です");
  }
}