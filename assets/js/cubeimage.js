// <![CDATA[
var specifyimage=new Array() //Imágenes
specifyimage[0]="assets/img/descarga.jpg"
specifyimage[1]="assets/img/playa6.jpg"
specifyimage[2]="assets/img/tv.jpg"
var delay=5000 //En milisegundos,1000=1segundo
var count =1;

var cubeimage=new Array()
for (i=0;i<specifyimage.length;i++){
  cubeimage[i]=new Image()
  cubeimage[i].src=specifyimage[i]
}

function movecube(){
  if (window.createPopup)
    cube.filters[0].apply()
  document.images.cube.src=cubeimage[count].src;
  if (window.createPopup)
    cube.filters[0].play()
  count++;
  if (count==cubeimage.length)
    count=0;
  setTimeout("movecube()",delay)
}

window.onload=new Function("setTimeout('movecube()',delay)")
// ]]>
