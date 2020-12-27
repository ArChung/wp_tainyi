import './qaItem.scss'

var gee = window.gee || $.fn.gene
window.gee = gee

gee.hook('onQaClick', me => {
	console.log(465)
	me.toggleClass('active')
})