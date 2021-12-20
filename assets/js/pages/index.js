const $g = gsap
const $gs = ScrollTrigger
const nn = Linear.easeNone
const exo = Expo.easeOut
const exi = Expo.easeInOut

/* sparks */
document.querySelectorAll('[data-spark]').forEach(o => {
    let id = o.getAttribute('id')
    let color = o.getAttribute('data-spark')
    particlesJS(id,{particles:{number:{value:500,density:{enable:!0,value_area:2e3}},color:{value:color},opacity:{value:.8,random:!0,anim:{enable:!1,speed:1,opacity_min:.1,sync:!1}},size:{value:2,random:!0,anim:{enable:!0,speed:4,size_min:.01,sync:!1}},line_linked:{enable:!1,distance:200,color:"#ffffff",opacity:.4,width:1},move:{enable:!0,speed:3,direction:"top",random:!0,straight:!1,out_mode:"out",bounce:!1,attract:{enable:!1,rotateX:600,rotateY:1200}}},interactivity:{detect_on:"canvas",events:{onhover:{enable:!1,mode:"bubble"},onclick:{enable:!1,mode:"repulse"},resize:!0},modes:{grab:{distance:400,line_linked:{opacity:.5}},bubble:{distance:400,size:1,duration:.3,opacity:1,speed:2},repulse:{distance:200,duration:.4},push:{particles_nb:2},remove:{particles_nb:1}}},retina_detect:!0});
})

/* gsap */

// const Batch = elts => {
//     $g.set(elts, {opacity:0,y:50})
//     $gs.batch(elts, {
//         onEnter: batch => $g.to(batch, 1, {opacity:1,y:0,ease:Power2.easeOut,stagger:{each:.5},overwrite:true})
//     })
// }
// Batch("[data-show]")

$g.fromTo('#ix .bg > div', {y:'0%'}, {y:'30%',ease:nn,scrollTrigger:{
    trigger: '#ix',
    start: 'top top',
    end: 'bottom top',
    scrub: true
}})

$g.fromTo('.tkbc-kxa .bg > div', {y:'0%'}, {y:'25%',ease:nn,scrollTrigger:{
    trigger: '.tkbc-kxa',
    start: 'top bottom',
    end: 'bottom top',
    scrub: true
}})
$g.fromTo('.tkbc-kxa .tok picture', 2, {y:'100%',opacity:0}, {y:'0',opacity:1,ease:Power2.easeOut,scrollTrigger:{
    trigger: '.tkbc-kxa',
    start: 'top 70%',
}})

$g.fromTo('.tkbc-kxs .bg > div', {y:'0%'}, {y:'50%',ease:nn,scrollTrigger:{
    trigger: '.tkbc-kxs',
    start: 'top bottom',
    end: 'bottom top',
    scrub: true
}})
$g.fromTo('.tkbc-kxs .tok picture', 2, {y:'100%',opacity:0}, {y:'0',opacity:1,ease:Power2.easeOut,scrollTrigger:{
    trigger: '.tkbc-kxs',
    start: 'top 70%',
}})

$g.fromTo('#pa .bg > div', {y:'-25%'}, {y:'25%',ease:nn,scrollTrigger:{
    trigger: '#pa',
    start: 'top bottom',
    end: 'bottom top',
    scrub: true
}})

/* trailer */

const controlVideo = vidcontrol => {
    let div = document.getElementById("tra-yt")
    let $i = div.getElementsByTagName("iframe")[0].contentWindow
    $i.postMessage('{"event":"command","func":"' + vidcontrol + '","args":""}', '*')
}
const openTra = () => {
    controlVideo('playVideo')
    $html.classList.add('openTra')
}
const closeTra = () => {
    controlVideo('stopVideo')
    $html.classList.remove('openTra')
}

const controlGp = vidcontrol => {
    let div = document.getElementById("tra-yt-gp")
    let $i = div.getElementsByTagName("iframe")[0].contentWindow
    $i.postMessage('{"event":"command","func":"' + vidcontrol + '","args":""}', '*')
}
const openTraGp = () => {
    controlGp('playVideo')
    $html.classList.add('openTraGp')
}
const closeTraGp = () => {
    controlGp('stopVideo')
    $html.classList.remove('openTraGp')
}
