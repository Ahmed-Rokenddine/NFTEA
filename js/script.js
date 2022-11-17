const header = document.querySelector("header");

window.addEventListener ("scroll", function() {
	header.classList.toggle ("sticky", window.scrollY > 0);
});

let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
	menu.classList.toggle('bx-x');
	navbar.classList.toggle('open');
};

window.onscroll = () => {
	menu.classList.remove('bx-x');
	navbar.classList.remove('open');
};
window.addEventListener("scroll", function() {showFunction();showFunction2()});

function showFunction() {
	if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
		document.getElementById("toptexts2").style.display = "block";
	} else {
		document.getElementById("toptexts2").style.display = "none";
	}
}
function showFunction2() {
	if (document.body.scrollTop > 3300 || document.documentElement.scrollTop > 3300) {
		document.getElementById("cover").style.display = "none";
	} else {
		document.getElementById("cover").style.display = "block";
	}
}


