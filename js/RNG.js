var styleElem = document.head.appendChild(document.createElement("style"));

elements = document.querySelectorAll('.RNG');

for (let i = 0; i < elements.length; i++) {
	const element = elements[i];
	element.style.top = Math.round(Math.random() * (100 - 0) + 0) + "%";
	element.style.left = Math.round(Math.random() * (100 - 0) + 0) + "%";

	const animationDelay = Math.round(Math.random() * (10000 - 200) + 200) + "ms";
	element.style.animationDelay = animationDelay
	styleElem.innerHTML += ".shooting_star:nth-child(" + i + ")::before {animation-delay: " + animationDelay + ";}";
	styleElem.innerHTML += ".shooting_star:nth-child(" + i + ")::after {animation-delay: " + animationDelay + ";}";
}