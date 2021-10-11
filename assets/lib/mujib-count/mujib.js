var cur_lang='bn';console.clear();function CountdownTracker(label,value){var el=document.createElement('span');el.className='mim__piece';el.innerHTML='<b class="mim__mim_c mim_c"><b class="mim_c__top"></b><b class="mim_c__bottom"></b><b class="mim_c__back"><b class="mim_c__bottom"></b></b></b>'+
'<span class="mim__slot">'+label+'</span>';this.el=el;var top=el.querySelector('.mim_c__top'),bottom=el.querySelector('.mim_c__bottom'),back=el.querySelector('.mim_c__back'),backBottom=el.querySelector('.mim_c__back .mim_c__bottom');this.update=function(val){val=('০'+val).slice(-2);if(val!==this.currentValue){if(this.currentValue>=0){back.setAttribute('data-value',this.currentValue);bottom.setAttribute('data-value',this.currentValue);}
this.currentValue=val;top.innerText=this.currentValue;backBottom.setAttribute('data-value',this.currentValue);this.el.classList.remove('flip');void this.el.offsetWidth;this.el.classList.add('flip');}}
this.update(value);}
function getTimeRemaining(endtime){var t=Date.parse(endtime)-Date.parse(new Date());if(cur_lang=='bn'){return{'Total':t,'দিন.':Math.floor(t/(1000*60*60*24)),'ঘণ্টা.':Math.floor((t/(1000*60*60))%24),'মিনিট.':Math.floor((t/1000/60)%60),'সেকেন্ড.':Math.floor((t/1000)%60)};}else if(cur_lang=='en'){return{'Total':t,'Days':Math.floor(t/(1000*60*60*24)),'Hours':Math.floor((t/(1000*60*60))%24),'Minutes':Math.floor((t/1000/60)%60),'Seconds':Math.floor((t/1000)%60)};}}
function defineBangla(val){var EnlishToBanglaNumber={'0':'০','1':'১','2':'২','3':'৩','4':'৪','5':'৫','6':'৬','7':'৭','8':'৮','9':'৯'};String.prototype.getDigitBanglaFromEnglish=function(){var retStr=this;for(var x in EnlishToBanglaNumber){retStr=retStr.replace(new RegExp(x,'g'),EnlishToBanglaNumber[x]);}
return retStr;};var english_number=''+val;var bangla_converted_number=english_number.getDigitBanglaFromEnglish();return bangla_converted_number;}
function getTime(){var t=new Date();return{'Total':t,'Hours':t.getHours()%12,'Minutes':t.getMinutes(),'Seconds':t.getSeconds()};}
function Clock(countdown,callback){countdown=countdown?new Date(Date.parse(countdown)):false;callback=callback||function(){};var updateFn=countdown?getTimeRemaining:getTime;this.el=document.createElement('div');this.el.className='mim';var trackers={},t=updateFn(countdown),key,timeinterval;for(key in t){if(key==='Total'){continue;}
trackers[key]=new CountdownTracker(key,defineBangla(t[key]));this.el.appendChild(trackers[key].el);}
var i=0;function updateClock(){timeinterval=requestAnimationFrame(updateClock);if(i++%10){return;}
var t=updateFn(countdown);if(t.Total<0){cancelAnimationFrame(timeinterval);for(key in trackers){trackers[key].update(0);}
callback();return;}
for(key in trackers){trackers[key].update(defineBangla(t[key]));}}
setTimeout(updateClock,500);}
var deadline=new Date("Mar 17, 2020 00:01:01");var c=new Clock(deadline,function(){alert('countdown complete')});document.getElementById('countdown_block').appendChild(c.el);(function()
{var c;var ctx;var width;var height;var axes=[];var wanderers=[];var colors=["#FFCC00","#66CCF0","#FF0033","#99CC33"];window.onload=function()
{c=document.getElementById("canvas");ctx=c.getContext("2d");window.onresize=onResize;window.onmousedown=onMouseDown;onResize();setInterval(update,50);}
function onResize(e)
{width=336;height=280;c.width=width;c.height=height;reset();}
function reset()
{axes=[];var random=500;var cols=30;for(var i=0;i<cols;i++)
{var a=new point(width/cols*i+random*Math.random(),0);var b=new point(width/cols*i+random*Math.random(),height);axes.push(new Axe(a,b));}
var rows=20;for(var i=0;i<rows;i++)
{var a=new point(0,height/rows*i+random*Math.random());var b=new point(width,height/rows*i+random*Math.random());axes.push(new Axe(a,b));}
wanderers=[];for(var i=0;i<colors.length*3;i++)
{wanderers.push(new wanderer(Math.random()*width,Math.random()*height,0,Math.random()+.5,colors[i%colors.length]));}}
function onMouseDown()
{reset();}
function update()
{ctx.fillStyle="rgba(255,255,255,.25)";ctx.globalCompositeOperation="lighten";ctx.fillRect(0,0,width,height);ctx.globalCompositeOperation="source-over";ctx.strokeStyle="rgba(16,16,16,.01 )";for(var j=0;j<axes.length;j++)axes[j].draw(ctx);for(var i=0;i<wanderers.length;i++)
{var hull=[];var pp_hull=[];var p=wanderers[i];p.update(width,height);ctx.beginPath();ctx.fillStyle=p.color;ctx.arc(p.x,p.y,8,0,Math.PI*2,true);ctx.fill();ctx.closePath();for(var j=0;j<axes.length;j++)
{var axe=axes[j];var r=axe.reflect(p);ctx.beginPath();ctx.fillStyle=p.color;ctx.arc(r.x,r.y,2,0,Math.PI*2,true);ctx.fill();ctx.closePath();}}}
var Axe=function(a,b){this.a=a;this.b=b;}
Axe.prototype={draw:function(ctx){ctx.beginPath();ctx.moveTo(this.a.x,this.a.y);ctx.lineTo(this.b.x,this.b.y);ctx.stroke();ctx.closePath();},reflect:function(p){return utils.reflect(p,this.a,this.b);}}
var wanderer=function(x,y,a,s,color){this.x=x||0;this.y=y||0;this.a=a||0;this.s=s||1;this.color=color||"#000";}
wanderer.prototype={update:function(width,height)
{with(this)
{a+=(Math.random()-.5)*10/180*Math.PI;x+=Math.cos(a)*s;y+=Math.sin(a)*s;if(x<0||y<0||x>width||y>height)a+=Math.PI/180;}}}
var point=function(x,y){this.x=x||0;this.y=y||0;}
var utils=function(){};utils.reflect=function(p,a,b)
{var pp=utils.project(p,a,b,false);return new point(p.x+(pp.x-p.x)*2,p.y+(pp.y-p.y)*2);}
utils.project=function(p,a,b,asSegment)
{var dx=b.x-a.x;var dy=b.y-a.y;if(asSegment&&dx==0&&dy==0){return a;}
var t=((p.x-a.x)*dx+(p.y-a.y)*dy)/(dx*dx+dy*dy);if(asSegment&&t<0)return a;if(asSegment&&t>1)return b;return new point(a.x+t*dx,a.y+t*dy);}})();