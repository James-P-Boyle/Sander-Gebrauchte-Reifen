// function isInView(elementId){
// 	const element = document.querySelector(`#${elementId}`)
// 	if (!element) {
// 	  return false
// 	}
// 	const rect = element.getBoundingClientRect()
// 	const windowHeight = window.innerHeight || document.documentElement.clientHeight
// 	const windowWidth = window.innerWidth || document.documentElement.clientWidth

// 	const vertInView = rect.top <= windowHeight && rect.top + rect.height >= 0
// 	const horInView = rect.left <= windowWidth && rect.left + rect.width >= 0

// 	return vertInView && horInView
// }

// function addTailwindClassWhenInView(ids, removeClass, animationClass) {
// 	const elements = ids.map(id => document.querySelector(`#${id}`)).filter(Boolean)

// 	function handleScroll() {
// 	  const allInView = elements.every(element => isInView(element.id))
// 	  if (allInView) {
// 		window.removeEventListener('scroll', handleScroll)
// 	  }

// 	  elements.forEach(element => {
// 		if (isInView(element.id)) {
// 			element.classList.remove(removeClass)
// 		  	element.classList.add(animationClass)
// 		}
// 	  })
// 	}

// 	handleScroll()
// 	window.addEventListener('scroll', handleScroll)
//   }

//   const ids = [
// 	'hero',
// 	'gallery',
// 	'about',
// 	'feature',
// 	'contact'
//   ]

//   const animationClass = 'animate-translateInLeft'
//   const removeClass = '-translate-x-full'

//   addTailwindClassWhenInView(ids, removeClass, animationClass)

// // example section: <section id="hero" class="mx-auto py-14 my-14 lg:py-20 lg:my-20 container px-2 lg:px-8 -translate-x-full">
// // when the section is in view, i want to animate the slide in, -translate-x-full to translate-x-0