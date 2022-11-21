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
window.addEventListener("scroll", function() {showFunction();showFunction2();showFunction3();showFunction4()});

function showFunction() {
	if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
		document.getElementById("toptexts2").style.display = "block";
	} else {
		document.getElementById("toptexts2").style.display = "none";
	}
}
function showFunction8() {
	if (document.body.scrollTop > 1300 && document.body.scrollTop < 1500  || document.documentElement.scrollTop > 1300 && document.documentElement.scrollTop < 1500) {
		document.getElementById("undertaker").style.display = "block";
	} else {
		document.getElementById("undertaker").style.display = "none";
	}
}
function showFunction2() {
	if (document.body.scrollTop > 3260 || document.documentElement.scrollTop > 3260) {
		document.getElementById("cover").style.display = "none";
	} else {
		document.getElementById("cover").style.display = "block";
	}
}
function showFunction3() {
	if (document.body.scrollTop > 3020 || document.documentElement.scrollTop > 3020) {
		document.getElementById("single").style.display = "block";
	} else {
		document.getElementById("single").style.display = "none";
	}
}
function showFunction4() {
	if (document.body.scrollTop > 3220 || document.documentElement.scrollTop > 3220) {
		document.getElementById("single2").style.display = "block";
	} else {
		document.getElementById("single2").style.display = "none";
	}
}




