import { gsap} from 'gsap'
import { ScrollToPlugin } from 'gsap/ScrollToPlugin'
import { ScrollTrigger } from 'gsap/ScrollTrigger'

gsap.registerPlugin( ScrollTrigger ,ScrollToPlugin)

var gee = window.gee || $.fn.gene




gee.hook('topBtn', me => {
	console.log(456)
	gsap.from(me,{
		duration: .8,
		x: '200',
		scrollTrigger:{
			trigger: 'body', 
			start: 'top -200',
			toggleActions: 'play none none reverse',
		}
	})

	me.on('click',()=>{
		gsap.to(window,{duration:1,scrollTo:0})
	})
})