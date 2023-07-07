window.addEventListener('DOMContentLoaded', function(){

    // テキストエリアのHTML要素を取得
    let name = document.getElementById("name");
    let level = document.getElementById("level");
    let parts = document.querySelectorAll("input[id=part]");
    let targets = document.querySelectorAll("input[id=target]");
    let desc = document.getElementById("desc");
    let point = document.getElementById("point");

    console.log(parts);


    // トレーニング名を入力時のイベント
    name.addEventListener("input",function(){
        //cookieに保存
        document.cookie = 'name='+this.value;
    });

    //レベル選択時のイベント
    level.addEventListener("input",function(){
        //cookieに保存
        document.cookie = "level="+this.value;
    });

    //部位選択時のイベント
    parts.forEach(function(part, i){
        //1部位毎にイベントを設定
        part.addEventListener("input",function(){
            //現在のcookieを取得
            const cookies = document.cookie.split("; ");
            //cookieに情報があったら削除する(チェックを外す処理)
            if(cookies.includes("part"+i+"=1")){
                document.cookie = "part"+i+"=1; max-age=0;";
            }else{//cookieに情報がなかったら追加する(チェックを付ける)
                document.cookie = "part"+i+"=1";
            };
            console.log(document.cookie);
        });
        i++;
    });

    //目的選択時のイベント
    targets.forEach(function(target, i){
        //1部位毎にイベントを設定
        target.addEventListener("input",function(){
            //現在のcookieを取得
            const cookies = document.cookie.split("; ");
            //cookieに情報があったら削除する(チェックを外す処理)
            if(cookies.includes("target"+i+"=1")){
                document.cookie = "target"+i+"=1; max-age=0;";
            }else{//cookieに情報がなかったら追加する(チェックを付ける)
                document.cookie = "target"+i+"=1";
            };
            console.log(document.cookie);
        });
        i++;
    });

    //解説入力時のイベント
    desc.addEventListener("keyup",function(){
        //改行を置換(cookieに改行は入らない)
        var text = this.value.replaceAll("\n","\\n");
        console.log(text);
        //cookieに保存
        document.cookie = "desc="+text;
    });

    //注意事項入力時のイベント
    point.addEventListener("keyup",function(){
        //改行を置換
        var text = this.value.replaceAll("\n","\\n");
        //cookieに保存
        document.cookie = "point="+text;
    });

});