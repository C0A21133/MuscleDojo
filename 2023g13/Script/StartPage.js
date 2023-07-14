//PHPを用いて、PHPからResources/Images内のファイルを送信することで、
//ここで定義する必要はなくなるが、実力不足のため未実装
//画像を変更する場合この配列を変更
frontMuscleArray = [
	"/FrontMusclePart/Abs.png", "/FrontMusclePart/Arm.png", "/FrontMusclePart/Foot.png",
	"/FrontMusclePart/Pectoral.png", "/FrontMusclePart/Shoulder.png",
	];

backMuscleArray = [
	"/BackMusclePart/Arm.png", "/BackMusclePart/Back.png", "/BackMusclePart/Foot.png"
];

//frontMuscleArray内の要素の数だけImage()をつくり
//一つの画像に対して一つのキャンバスを生成する
//キャンバスの透過度からクリックした画像を判定するため
//複数のキャンバスを重ねる方法をとった。
//そのためキャンバスの画像、コンテキストを保持するための、配列を作成
frontCanvasArray = Array(frontMuscleArray.length);
frontImageArray = Array(frontMuscleArray.length);
frontContextArray = Array(frontMuscleArray.length);

backCanvasArray = Array(backMuscleArray.length);
backImageArray = Array(backMuscleArray.length);
backContextArray = Array(backMuscleArray.length);

//キャンバスに画像を描写する
function Draw()
{
	path = "../Resources/Images"
	frontDraw(path);
	backDraw(path);
}

function frontDraw(path)
{
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
	}
}

function backDraw(path)
{
	var canvas = document.getElementById('backCanvas');
	if( !canvas || !canvas.getContext )
	{
		console.log("load miss");
		return false;
	}
	var context = canvas.getContext("2d");
	context.globalAlpha = 0.5;
    var img = new Image();
	img.src = path + "/Back.png"; //相対URLの場
    img.onload = function onImageLoad() {
        context.drawImage(img, 0, 0);
	}

	for (let index = 0; index < backMuscleArray.length; index++) 
	{
		backCanvasArray[index] = document.getElementById(index.toString()+"backCanvas");
		backContextArray[index] = backCanvasArray[index].getContext("2d");
		
		var filepath = backMuscleArray[index];
		backImageArray[index] = new Image();
		backImageArray[index].src = path + filepath;
		backImageArray[index].onload = function onImageLoad(){
			backContextArray[index].drawImage(backImageArray[index], 0,0);
		}	
	}
}

//キャンバスでクリックした時のマウスの座標を取得して、clickOnCanvasを実行
const frontCanvas = document.getElementById("frontJudgeCanvas");
frontCanvas.addEventListener('click', (e) => {
    var rect = e.target.getBoundingClientRect();
    var x = e.clientX - rect.left;
    var y = e.clientY - rect.top;
	clickOnFrontCanvas(x,y);
});

//キャンバスでマウスを動かしたときの座標を取得して、moveOnCanvasを実行
frontCanvas.addEventListener('mousemove', (e) =>{
	var rect = e.target.getBoundingClientRect();
    var x = e.clientX - rect.left;
    var y = e.clientY - rect.top;
	moveOnFrontCanvas(x,y);
})

//キャンバスでクリックした時のマウスの座標を取得して、clickOnCanvasを実行
const backCanvas = document.getElementById("backJudgeCanvas");
backCanvas.addEventListener('click', (e) => {
    var rect = e.target.getBoundingClientRect();
    var x = e.clientX - rect.left;
    var y = e.clientY - rect.top;
	clickOnBackCanvas(x,y);
});

//キャンバスでマウスを動かしたときの座標を取得して、moveOnCanvasを実行
backCanvas.addEventListener('mousemove', (e) =>{
	var rect = e.target.getBoundingClientRect();
    var x = e.clientX - rect.left;
    var y = e.clientY - rect.top;
	moveOnBackCanvas(x,y);
})


//キャンバス上でクリックしたときの処理
function clickOnFrontCanvas(x, y)
{
	let id = judgeFrontPart(x, y);
	if(id == undefined) return;
	let text;
	switch (id) {
		case "0frontCanvas":
			text = "体幹";
			break;
		case "1frontCanvas":
			text = "腕";
			break;
		case "2frontCanvas":
			text = "脚";
			break;
		case "3frontCanvas":
			text = "胸";
			break;
		case "4frontCanvas":
			text = "肩";
			break;
		default:
			text = "";
			break;
		
	}
	if(text != ""){
		var form = document.createElement('form');
		form.action = "../muscle/MuscleEnumerate.php";
		form.method = "POST";
		document.body.append(form);
		form.addEventListener('formdata', (e) => {
			var fd = e.formData;
			
			// データをセット
			fd.set('part[]', text);
		});
		form.submit();
	}
}

//キャンバス上でマウスが動いたときの処理
function moveOnFrontCanvas(x, y)
{
	let id = judgeFrontPart(x, y);
	if(id == undefined) return;
	//以下に画像上にマウスが存在する時の処理を記述
}


function clickOnBackCanvas(x, y)
{
	let id = judgeBackPart(x, y);
	if(id == undefined) return;
	let text;
	switch (id) {
		case "0backCanvas":
			text = "腕";
			break;
		case "1backCanvas":
			text = "背中";
			break;
		case "2backCanvas":
			text = "脚";
			break;
		default:
			text = "";
			break;
	}
	if(text != ""){
		var form = document.createElement('form');
		form.action = "../muscle/MuscleEnumerate.php";
		form.method = "POST";
		document.body.append(form);
		form.addEventListener('formdata', (e) => {
			var fd = e.formData;
			
			// データをセット
			fd.set('part[]', text);
		});
		form.submit();
	}
	
}

function moveOnBackCanvas(x, y)
{
	let id = judgeBackPart(x, y);
	if(id == undefined) return;
	//以下に画像上にマウスが存在する時の処理を記述
}

/*
* 与えられた座標の位置が透明かどうかを、frontCanvasArrayの要素すべてに対して判定する
* 引数；x,y はクリックしたマウスの座標
* 戻り値 ：クリックした場所が透明でない画像が描写されているキャンバスのid (string)
*/
function judgeFrontPart(x, y)
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

function judgeBackPart(x, y)
{
	let result;
	backCanvasArray.forEach(canvas => {
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