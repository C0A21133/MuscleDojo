//PHPを用いて、PHPからResources/Images内のファイルを送信することで、
//ここで定義する必要はなくなるが、実力不足のためかんすう
frontMuscleArray = [
	"/FrontMusclePart/Abs.png", "/FrontMusclePart/Calf.png", "/FrontMusclePart/LowerArm.png",
	"/FrontMusclePart/Nape.png", "/FrontMusclePart/Pectoral.png", "/FrontMusclePart/Shoulder.png",
	"/FrontMusclePart/Thigh.png", "/FrontMusclePart/UpperArm.png"];

//frontMuscleArray内の要素の数だけImage()をつくり
//一つの画像に対して一つのキャンバスを生成する
//キャンバスの透過度からクリックした画像を判定するため
//複数のキャンバスを重ねる方法をとった。
//そのためキャンバスの画像、コンテキストを保持するための、配列を作成
frontCanvasArray = Array(frontMuscleArray.length);
frontImageArray = Array(frontMuscleArray.length);
frontContextArray = Array(frontMuscleArray.length);

//キャンバスに画像を描写する
function Draw()
{
	path = "../Resources/Images"
	var canvas = document.getElementById('frontCanvas');
	if( !canvas || !canvas.getContext )
	{
		console.log("load miss");
		return false;
	}
	var context = canvas.getContext("2d");
	context.globalAlpha = 0.5;
    var img = new Image();
	img.src = path + "/Front.png"; //相対URLの場
    img.onload = function onImageLoad() {
        context.drawImage(img, 0, 0);
	}
	for (let index = 0; index < frontMuscleArray.length; index++) 
	{
		frontCanvasArray[index] = document.getElementById(index.toString()+"frontCanvas");
		frontContextArray[index] = frontCanvasArray[index].getContext("2d");
		
		var filepath = frontMuscleArray[index];
		frontImageArray[index] = new Image();
		frontImageArray[index].src = path + filepath;
		frontImageArray[index].onload = function onImageLoad(){
			frontContextArray[index].drawImage(frontImageArray[index], 0,0);
		}	
		console.log(frontImageArray[index]);
	}
}

//キャンバスでクリックした時のマウスの座標を取得して、clickOnCanvasを実行
const frontCanvas = document.getElementById("frontJudgeCanvas");
frontCanvas.addEventListener('click', (e) => {
    var rect = e.target.getBoundingClientRect();
    var x = e.clientX - rect.left;
    var y = e.clientY - rect.top;
	clickOnCanvas(x,y);
});

//キャンバスでマウスを動かしたときの座標を取得して、moveOnCanvasを実行
frontCanvas.addEventListener('mousemove', (e) =>{
	var rect = e.target.getBoundingClientRect();
    var x = e.clientX - rect.left;
    var y = e.clientY - rect.top;
	moveOnCanvas(x,y);
})

//キャンバス上でクリックしたときの処理
function clickOnCanvas(x, y)
{
	let id = judgePart(x, y);
	if(id == undefined) return;
	let text;
	switch (id) {
		case "0frontCanvas":
			text = "腹";
			break;
		case "1frontCanvas":
			text = "すね";
			break;
		case "2frontCanvas":
			text = "下腕";
			break;
		case "3frontCanvas":
			text = "首";
			break;
		case "4frontCanvas":
			text = "胸";
			break;
		case "5frontCanvas":
			text = "肩";
			break;
		case "6frontCanvas":
			text = "ふともも";
			break;
		case "7frontCanvas":
			text = "上腕";
			break;
		default:
			text = "無";
			break;
	}
	alert(text+"を選択した");
}

//キャンバス上でマウスが動いたときの処理
function moveOnCanvas(x, y)
{
	let id = judgePart(x, y);
	if(id == undefined) return;
	//以下に画像上にマウスが存在する時の処理を記述
}

/*
* 与えられた座標の位置が透明かどうかを、frontCanvasArrayの要素すべてに対して判定する
* 引数；x,y はクリックしたマウスの座標
* 戻り値 ：クリックした場所が透明でない画像が描写されているキャンバスのid (string)
*/
function judgePart(x, y)
{
	let result;
	frontCanvasArray.forEach(canvas => {
		var context = canvas.getContext("2d");
		var imagedata = context.getImageData(x, y, 1, 1);
		
		//  RGBAの取得 alphaが0の時 画像の（x,y）は透明
    	var alpha = imagedata.data[3];
		if (alpha != 0)
		{
			result = canvas.id.toString();
		}
	});
	return result;
}

