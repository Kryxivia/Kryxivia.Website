!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):t.MagicGrid=e()}(this,function(){"use strict";var t=function(t){if(!t)throw new Error("No config object has been provided.");"boolean"!=typeof t.useTransform&&(t.useTransform=!0),"number"!=typeof t.gutter&&(t.gutter=25),t.container||e("container"),t.items||t.static||e("items or static")},e=function(t){throw new Error("Missing property '"+t+"' in MagicGrid config")},i=function(t){var e=t[0];for(var i of t)i.height<e.height&&(e=i);return e},n=function(e){t(e),e.container instanceof HTMLElement?(this.container=e.container,this.containerClass=e.container.className):(this.containerClass=e.container,this.container=document.querySelector(e.container)),this.items=this.container.children,this.static=e.static||!1,this.size=e.items,this.gutter=e.gutter,this.maxColumns=e.maxColumns||!1,this.useMin=e.useMin||!1,this.useTransform=e.useTransform,this.animate=e.animate||!1,this.started=!1,this.init()};return n.prototype.init=function(){if(this.ready()&&!this.started){this.container.style.position="relative";for(var t=0;t<this.items.length;t++){var e=this.items[t].style;e.position="absolute",this.animate&&(e.transition=(this.useTransform?"transform":"top, left")+" 0.2s ease")}this.started=!0}},n.prototype.colWidth=function(){return this.items[0].getBoundingClientRect().width+this.gutter},n.prototype.setup=function(){var t=this.container.getBoundingClientRect().width,e=this.colWidth(),i=Math.floor(t/e)||1,n=[];this.maxColumns&&i>this.maxColumns&&(i=this.maxColumns);for(var s=0;s<i;s++)n[s]={height:0,index:s};return{cols:n,wSpace:t-i*e+this.gutter}},n.prototype.nextCol=function(t,e){return this.useMin?i(t):t[e%t.length]},n.prototype.positionItems=function(){var t=this.setup(),e=t.cols,i=t.wSpace,n=0,s=this.colWidth();i=Math.floor(i/2);for(var o=0;o<this.items.length;o++){var r=this.nextCol(e,o),a=this.items[o],h=r.height?this.gutter:0,c=r.index*s+i+"px",u=r.height+h+"px";this.useTransform?a.style.transform="translate("+c+", "+u+")":(a.style.top=u,a.style.left=c),r.height+=a.getBoundingClientRect().height+h,r.height>n&&(n=r.height)}this.container.style.height=n+"px"},n.prototype.ready=function(){return!!this.static||this.items.length>=this.size},n.prototype.getReady=function(){var t=this,e=setInterval(function(){t.container=document.querySelector(t.containerClass),t.items=t.container.children,t.ready()&&(clearInterval(e),t.init(),t.listen())},100)},n.prototype.listen=function(){var t=this;if(this.ready()){var e;window.addEventListener("resize",function(){e||(e=setTimeout(function(){t.positionItems(),e=null},200))}),this.positionItems()}else this.getReady()},n});const $html=document.querySelector('html')
const $body=document.querySelector('body')
const ifMobile=()=>{if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp| netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck| ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c| k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50| p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]| c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))){return!0}else{return!1}}
const fixClass=(y)=>{y>0?$body.classList.add('fx'):$body.classList.remove('fx')
y>80?$body.classList.add('fxdo'):$body.classList.remove('fxdo')}
window.addEventListener('scroll',()=>fixClass(window.scrollY))
document.querySelectorAll('.bn.disabled').forEach(bn=>bn.addEventListener('click',e=>e.preventDefault()))
document.getElementById('bnv').addEventListener('click',()=>{$body.classList.toggle('onav')});setTimeout(()=>{let magicGrid=new MagicGrid({container:'.grid',animate:!1,gutter:20,static:!0,useMin:!0});magicGrid.listen()},100)