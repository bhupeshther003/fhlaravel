
//  scrolling effect  on page 
window.addEventListener("scroll", () => {


	var pagetop = $(document).scrollTop();
	var pagebottom = pagetop + $(window).height();
	let content = $('.rows');

	for (var i = 0; i < content.length; i++) {
		let cont = content[i];

		if ($(cont).position().top < pagebottom) {
			// cont.classList.add('active');
			$(cont).addClass('active')
		} else {
			$(cont).removeClass('active');
		}
	}

})

// window.onload = function (){ 
// 	alert("Hi there");
// 	}

//  page scrolldown then the visible and  the work  then they sent to upward direction

window.onscroll = function () { scrollFunction() };

function scrollFunction() {
	var scrollToTopButton = document.getElementById("scrollToTopButton");
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		scrollToTopButton.style.display = "block";
	} else {
		scrollToTopButton.style.display = "none";
	}
}

function scrollToTop() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}

// brightness features 

function toggleMode() {
	var body = document.body;
	var modeIcon = document.getElementById("toggleModeButton");

	body.classList.toggle("dark-mode");

	if (body.classList.contains("dark-mode")) {
	  modeIcon.src="{{ asset('js\sun.png') }}";
	} else {
	  modeIcon.src="\js/sun.png";
	}
  }

  
function loadGoogleTranslate(){ 
	new google.translate.TranslateElement("google_element"); 
   }
