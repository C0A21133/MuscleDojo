//PHPを用いて、PHPからResources/Images内のファイルを送信することで、
//ここで定義する必要はなくなるが、実力不足のため未実装。
frontMuscleArray = [
	"/FrontMusclePart/Abs.png", "/FrontMusclePart/Calf.png", "/FrontMusclePart/LowerArm.png",
	"/FrontMusclePart/Nape.png", "/FrontMusclePart/Pectoral.png", "/FrontMusclePart/Shoulder.png",
	"/FrontMusclePart/Thigh.png", "/FrontMusclePart/UpperArm.png"];

//frontMuscleArray内の要素の数だけImage()をつくり
//一つの画像に対して一つのキャンバスを生成する
//キャンバスの透過度からクリックした画像を判定するため
//複数のキャンバスを重ねる方法をとった・
canvasArray = Array(frontMuscleArray.length);
imageArray = Array(frontMuscleArray.length);
contextArray = Array(frontMuscleArray.length);

//キャンバスに画像を描写する
function Draw()
{
	path = "../Resources/Images"
	var canvas = document.getElementById('canvas');
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
		canvasArray[index] = document.getElementById(index.toString()+"canvas");
		contextArray[index] = canvasArray[index].getContext("2d");
		
		var filepath = frontMuscleArray[index];
		imageArray[index] = new Image();
		imageArray[index].src = path + filepath;
		imageArray[index].onload = function onImageLoad(){
			contextArray[index].drawImage(imageArray[index], 0,0);
		}	
		console.log(imageArray[index]);
	}
}

//キャンバスでクリックした時のマウスの座標を取得して、judgePartを実行
const canvas = document.getElementById("frontjudgecanvas");
canvas.addEventListener('click', (e) => {
    var rect = e.target.getBoundingClientRect();
    var x = e.clientX - rect.left;
    var y = e.clientY - rect.top;
	clickOnCanvas(x,y);
});

canvas.addEventListener('mousemove', (e) =>{
	var rect = e.target.getBoundingClientRect();
    var x = e.clientX - rect.left;
    var y = e.clientY - rect.top;
	moveOnCanvas(x,y);
})

function clickOnCanvas(x, y)
{
	let id = judgePart(x, y);

	let text;
	switch (id) {
		case "0canvas":
			text = "腹";
			break;
		case "1canvas":
			text = "すね";
			break;
		case "2canvas":
			text = "下腕";
			break;
		case "3canvas":
			text = "首";
			break;
		case "4canvas":
			text = "胸";
			break;
		case "5canvas":
			text = "肩";
			break;
		case "6canvas":
			text = "ふともも";
			break;
		case "7canvas":
			text = "上腕";
			break;
		default:
			text = "無";
			break;
	}
	alert(text+"を選択した");
}

function moveOnCanvas(x, y)
{

}

/*
* 
* 引数；x,y はクリックしたマウスの座標
* 戻り値 ：クリックした場所が透明でない画像が描写されている、キャンバスのid (string)
*/
function judgePart(x, y)
{
	let result;
	canvasArray.forEach(canvas => {
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

