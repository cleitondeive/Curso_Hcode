/*Script Js Relogio hx-totoriais*/
/*
function startTime() {
     var today=new Date();
     var h=today.getHours();
     var m=today.getMinutes();
     var s=today.getSeconds();
     // add a zero in front of numbers<10
     m=checkTime(m);
     s=checkTime(s);
     document.getElementById('txt').innerHTML=h+":"+m+":"+s;
     t=setTimeout('startTime()',500);
 }

 function checkTime(i){
 if (i<10) {
     i="0" + i;
 }
     return i;
 }







 function startTime(){
 	var hoje=new Date();

 	var h=hoje.getHours();
 	var m=hoje.getMinutes();
 	var s=hoje.getSeconds();

 	//add o zero na frente do numero<10
 	m=checkTime(m);
 	s=checkTime(s);

 	document.getElementById('rel').innerHTML = h+":"+m+":" +s;
 	tempo=setTimeout('startTime()',1000);


 }

function checkTime(i){
 	if (i<10) {
 		i="0" + i;
 	}

 	return i;

 }

 */

 /*

window.setInterval('startTime()',1000);

 function startTime(){
  var hoje = new Date();

  var h=hoje.getHours();
  var m=hoje.getMinutes();
  var s=hoje.getSeconds();

  if (h < 10) {
  	h= "0"+h;
  }

  if (m < 10) {
  	m= "0"+m;
  }

  if (s < 10) {
  	s= "0"+s;

  }

 document.getElementById('rel').innerHTML = h+":"+m+":" +s;



 }


 */


window.setInterval("relogio()",1000);

function relogio(){
  var relogio = new Date();

  var h=relogio.getHours();
  var m=relogio.getMinutes();
  var s=relogio.getSeconds();

  if (h < 10) {
    h= "0"+ h;
  }

  if (m < 10) {
    m= "0"+ m;
  }
  if (s < 10) {
    s= "0"+ s;
  }

  document.getElementById('rel').innerHTML = h+":"+m+":"+ s;

}



