var elements = document.getElementsByName('hover')


for (let i = 0; i < elements.length; i++) {
	var element = document.getElementById('preview')
	elements[i].onmousemove = function (event) {
		element.style.opacity = 1;
		if (element.children[0].attributes.src.value != 'Assets/images/' + elements[i].attributes.img.value) {
			element.children[0].attributes.src.value = 'Assets/images/' + elements[i].attributes.img.value;
		}
		element.style.top = event.pageY + 'px';
		element.style.left = event.pageX + 'px';
	}
	elements[i].onmouseout = function (event) {
		element.style.opacity = 0;
	}
}