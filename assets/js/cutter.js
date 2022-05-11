function cutter(data) {
	if (data){
		for (let y = 0; y < data.length; y++){
			const el = document.querySelectorAll(data[y].selector)
			for (let i = 0; i < el.length; i++) {
				const fact = el[i].innerText.length
				if (data[y].limit && fact > data[y].limit){
					let text = el[i].innerText
					if (data[y].adaptive){
						const firstPart = text.substring(0, data[y].adaptive)
						const secondPart = text.substring(data[y].adaptive)
						const newSecondPart = '<span class="dots">...</span>' + '<span class="hidden-txt">' + secondPart + '</span>'
						text = firstPart + newSecondPart
					}
					const result = text.slice(0, data[y].limit) + '...'
					el[i].innerHTML = result
				} else {
					console.log('limit is not found')
				}
			}
		}
	} else {
		console.log('data is not found')
	}
}
const data = [
	{selector: '.inner-content', limit: 305, adaptive: 117},
	{selector: '.slice-title', limit: 64},
	{selector: '.slice-paragraf', limit: 117},
]
cutter(data)