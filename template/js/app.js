const $html = document.querySelector('html')
const $body = document.querySelector('body')
const $g = gsap
const $gs = ScrollTrigger
const nn = Linear.easeNone
const exo = Expo.easeOut
const exi = Expo.easeInOut

/* if mobile */

const ifMobile = () => {
    if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp| netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck| ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c| k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50| p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]| c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
        return true
    } else {
        return false
    }
}

/* smooth scrollbar initialize */

const fixClass = (y) => {

    y > 0 ? $body.classList.add('fx') : $body.classList.remove('fx')
    y > 80 ? $body.classList.add('fxdo') : $body.classList.remove('fxdo')

}

if (ifMobile()) {

    scrollToPos = (pos) => {
        window.scrollTo(0, pos)
    }

    $html.classList.add('mob')
    window.addEventListener('scroll', () => fixClass(window.scrollY))

} else {

    class EdgeEasingPlugin extends Scrollbar.ScrollbarPlugin {
        constructor() {
            super(...arguments)
            this._remainMomentum = {
                x: 0,
                y: 0,
            }
        }

        transformDelta(delta) {
            const {limit, offset,} = this.scrollbar
            const x = this._remainMomentum.x + delta.x
            const y = this._remainMomentum.y + delta.y
            this.scrollbar.setMomentum(Math.max(-offset.x, Math.min(x, limit.x - offset.x)), Math.max(-offset.y, Math.min(y, limit.y - offset.y)))
            return {x: 0, y: 0}
        }

        onRender(remainMomentum) {
            Object.assign(this._remainMomentum, remainMomentum)
        }
    }

    EdgeEasingPlugin.pluginName = 'edgeEasing'

    Scrollbar.use(EdgeEasingPlugin)

    let damping
    navigator.userAgent.toLowerCase().indexOf('firefox') > -1 ? damping = .1 : damping = .08

    const $s = Scrollbar.init(document.querySelector('#app'), {
        damping: damping,
        alwaysShowTracks: false,
        delegateTo: document,
        direction: true,
    })

    scrollToPos = (pos) => {
        $s.scrollTo(0, pos, 1000)
    }

    document.getElementById('smooth-scrollbar-style').remove()

    $gs.scrollerProxy('body', {
        scrollTop(value) {
            arguments.length ? $s.scrollTop = value : !1
            return $s.scrollTop
        }
    })

    $s.addListener($gs.update)
    $s.addListener((status) => {

        let y = status.offset.y
        let x = status.offset.x

        document.querySelector('#hb').style.top = y+'px'
        document.querySelector('#hc').style.top = y+'px'
        document.querySelector('#n').style.top = y+'px'
        document.querySelector('.scroll-content').style.left = x+'px'

        fixClass(y)

    })

    $g.defaults({ease: nn})
    $g.config({nullTargetWarn: false})

    // // scrollbar grabbing
    // $('.scrollbar-track-y').on('mousedown', () => $body.addClass('grab'))

    // $('*').on('mouseup', () => {
    //     $body.hasClass('grab') ? $body.removeClass('grab') : !1
    // })

    // direction scroll
    function checkDirection(e) {
        checkScrollDirectionIsUp(e) ? $body.classList.remove('down') : $body.classList.add('down')
    }

    document.body.addEventListener('wheel', checkDirection)
    const checkScrollDirectionIsUp = (e) => {
        if (e.wheelDelta) {
            return e.wheelDelta > 0
        }
        return e.deltaY < 0
    }

}

/* sparks */

particlesJS("particles-js",{particles:{number:{value:300,density:{enable:!0,value_area:2e3}},color:{value:"#fd7907"},opacity:{value:.8,random:!0,anim:{enable:!1,speed:1,opacity_min:.1,sync:!1}},size:{value:2,random:!0,anim:{enable:!0,speed:4,size_min:.01,sync:!1}},line_linked:{enable:!1,distance:500,color:"#ffffff",opacity:.4,width:1},move:{enable:!0,speed:3,direction:"top",random:!0,straight:!1,out_mode:"out",bounce:!1,attract:{enable:!1,rotateX:600,rotateY:1200}}},interactivity:{detect_on:"canvas",events:{onhover:{enable:!1,mode:"bubble"},onclick:{enable:!1,mode:"repulse"},resize:!0},modes:{grab:{distance:400,line_linked:{opacity:.5}},bubble:{distance:400,size:1,duration:.3,opacity:1,speed:2},repulse:{distance:200,duration:.4},push:{particles_nb:2},remove:{particles_nb:1}}},retina_detect:!0});

particlesJS("particles-js-2",{particles:{number:{value:300,density:{enable:!0,value_area:2e3}},color:{value:"#b24bf9"},opacity:{value:.8,random:!0,anim:{enable:!1,speed:1,opacity_min:.1,sync:!1}},size:{value:2,random:!0,anim:{enable:!0,speed:4,size_min:.01,sync:!1}},line_linked:{enable:!1,distance:500,color:"#ffffff",opacity:.4,width:1},move:{enable:!0,speed:3,direction:"top",random:!0,straight:!1,out_mode:"out",bounce:!1,attract:{enable:!1,rotateX:600,rotateY:1200}}},interactivity:{detect_on:"canvas",events:{onhover:{enable:!1,mode:"bubble"},onclick:{enable:!1,mode:"repulse"},resize:!0},modes:{grab:{distance:400,line_linked:{opacity:.5}},bubble:{distance:400,size:1,duration:.3,opacity:1,speed:2},repulse:{distance:200,duration:.4},push:{particles_nb:2},remove:{particles_nb:1}}},retina_detect:!0});


/* swiper */

    new Swiper('[data-swiper="partners"]', {
        navigation: {
            nextEl: '.next-partners',
            prevEl: '.prev-partners'
        },
        speed:1000,
        slidesPerView:1,
        slidesPerGroup:1,
        spaceBetween:40,
        parallax: true,
        breakpoints: {
            1000: {
                slidesPerView: 4,
                slidesPerGroup: 4,
                speed:2000
            },
            700: {
                slidesPerView: 3,
                slidesPerGroup: 3,
                speed:1500
            },
            450: {
                slidesPerView: 2,
                slidesPerGroup: 2,
                spaceBetween:30,
                speed:1000
            }
        }
    })

/* onav */

document.getElementById('bnv').addEventListener('click', () => {
    $body.classList.toggle('onav')
})

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

/* gsap */

$g.defaults({ease:nn})

let t

// home

t = $g.timeline({scrollTrigger:{
    trigger: '#ix',
    start: 'top top',
    end: 'bottom top',
    scrub: true
}})
t.fromTo('#ix .bgi', 1, {y:'0%',opacity:1}, {y:'25%',opacity:0}, 'a')
t.fromTo('#ix .bot-ix-b img', 1, {y:'0%'}, {y:'15%'}, 'a')

// token

t = $g.timeline({scrollTrigger:{
    trigger: '#tk',
    start: 'top bottom',
    end: 'bottom top',
    scrub: true
}})
t.fromTo('#tk .bg > div', 1, {y:'-15%'}, {y:'15%'}, 'a')

// home

t = $g.timeline({scrollTrigger:{
    trigger: '#do',
    start: 'top bottom',
    end: 'bottom top',
    scrub: true
}})
t.fromTo('#do .down-ix-b img', 1, {y:'15%'}, {y:'0%'}, 'a')
t.fromTo('#do .bgi', 1, {y:'-20%',opacity:.5}, {y:'20%',opacity:1}, 'a')

document.addEventListener('click', () => {
    if(localStorage.getItem('trailer') != 'ok'){
        openTra()
        localStorage.setItem('trailer', 'ok')
    }
})

// countdown

document.querySelectorAll('[data-countdown]').forEach(l => {

    let date = l.getAttribute('data-countdown')
    let cnt = l.getAttribute('data-link-cnt')
    let end = new Date(date).getTime()

    let seconds = 1000
    let minutes = seconds * 60
    let hours = minutes * 60
    let days = hours * 24

    let x = setInterval(() => {
        let now = new Date().getTime()
        const difference = end - now

        if (difference < 0) {
            clearInterval(x)
            l.innerHTML = "Buy now !"
            document.getElementById(cnt).classList.add('go')
            return
        }
        daysEl = Math.floor(difference / days)
        hoursEl = Math.floor( (difference % days) / hours )
        if(hoursEl < 10){ hoursEl = '0'+hoursEl }
        minutesEl = Math.floor( (difference % hours) / minutes )
        if(minutesEl < 10){ minutesEl = '0'+minutesEl }
        secondsEl = Math.floor( (difference % minutes) / seconds )
        if(secondsEl < 10){ secondsEl = '0'+secondsEl }

        l.innerHTML = daysEl+':'+hoursEl+':'+minutesEl+':'+secondsEl

    }, seconds)

})

