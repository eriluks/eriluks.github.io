//Code copied from: but edited to suit my site
//http://www.siteforinfotech.com/2014/02/how-to-create-digital-clock-in-javascript.html 

function startTime()
{
var today=new Date()
var h=today.getHours()
var m=today.getMinutes()
var s=today.getSeconds()


//to add a zero in front of numbers<10

m=checkTime(m)
s=checkTime(s)

document.getElementById('clock').innerHTML=h+":"+m+":"+s
t=setTimeout('startTime()', 500)
}

function checkTime(i)
{
if (i<10)
{ i="0" + i}
return i
}

window.onload=startTime;