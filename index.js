let burger = document.getElementById('burger')
let scroll = document.getElementById('scroll-off')
let menu = document.getElementById('slide-menu')

burger.addEventListener('click', ()=> {
	burger.classList.toggle('active')
	scroll.classList.toggle('active')
	menu.classList.toggle('active')
})

