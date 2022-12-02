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
window.addEventListener("scroll", function() {showFunction();showFunction2();showFunction3();showFunction4();showFunction5();showFunction6()});

function showFunction() {
	if (document.body.scrollTop > 350 || document.documentElement.scrollTop > 350) {
		document.getElementById("toptexts2").style.display = "block";
	} else {
		document.getElementById("toptexts2").style.display = "none";
	}
}
function showFunction5() {
	if (document.body.scrollTop > 650 || document.documentElement.scrollTop > 650) {
		document.getElementById("toptexts3").style.display = "block";
	} else {
		document.getElementById("toptexts3").style.display = "none";
	}
}
function showFunction6() {
	if (document.body.scrollTop > 850 || document.documentElement.scrollTop > 850) {
		document.getElementById("toptexts4").style.display = "block";
	} else {
		document.getElementById("toptexts4").style.display = "none";
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
	if (document.body.scrollTop > 3410 || document.documentElement.scrollTop > 3410) {
		document.getElementById("cover").style.display = "none";
	} else {
		document.getElementById("cover").style.display = "block";
	}
}
function showFunction3() {
	if (document.body.scrollTop >  3200  || document.documentElement.scrollTop >  3200 ) {
		document.getElementById("single").style.display = "block";
	} else {
		document.getElementById("single").style.display = "none";
	}
}
function showFunction4() {
	if (document.body.scrollTop > 3398 || document.documentElement.scrollTop > 3398) {
		document.getElementById("single2").style.display = "block";
	} else {
		document.getElementById("single2").style.display = "none";
	}
}

// about toggler
let abt1 = document.querySelector('.abt1');
let more1 = document.querySelector('.more1');
let abt2 = document.querySelector('.abt2');
let more2 = document.querySelector('.more2');
let abt3 = document.querySelector('.abt3');
let more3 = document.querySelector('.more3');


abt1.addEventListener('click', function() {
    more1.classList.toggle('show-more')
})
abt2.addEventListener('click', function() {
    more2.classList.toggle('show-more')
})
abt3.addEventListener('click', function() {
    more3.classList.toggle('show-more')
})





