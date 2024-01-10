	
    /*-------------------------
		Carousel & Pop up
	----------------------------*/		
	$(document).ready(function() {
		var owl = $('.owl-carousel');
		owl.owlCarousel({
		  items: 4,
		  center: true,
		  responsive: {
			  0: {
				  items: 2
			  },
			  576: {
				  items: 2
			  },					
			  992: {
				  items: 4
			  },
			  1200: {
				  items: 4
			  }
		  },
		  loop: true,
		  margin: 15,
		  nav: true,
		  navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
		  autoplay: false,
		  autoplayTimeout: 2000,
		  autoplayHoverPause: true,
		});
	  });	
			
    /*-------------------------
		Collapsible
	----------------------------*/			
	var coll = document.getElementsByClassName("collapsible");
	var i;
	
	for (i = 0; i < coll.length; i++) {
	  coll[i].addEventListener("click", function() {
		this.classList.toggle("active");
		//var content = this.nextElementSibling;
		if (this.innerHTML === "Read more.") {
    		this.innerHTML = "Read less.";
  		} else {
    		this.innerHTML = "Read more.";
  		}
	
		var content = document.getElementById("collapse");
		if (content.style.display === "block") {
		  content.style.display = "none";
		} else {
		  content.style.display = "block";
		}
	  });
	};

	/*-------------------------
		Counter
	----------------------------*/	
	var a = 0;
	$(window).scroll(function() {
	
	const classExists = document.getElementsByClassName(
	'num-stats'
	).length > 0;

	if (classExists) {
	  var oTop = $('.num-stats').offset().top - window.innerHeight;
	  if (a == 0 && $(window).scrollTop() > oTop) {
		$('.counter').each(function() {
		  var $this = $(this),
			countTo = $this.attr('data-number');
		  $({
			countNum: $this.text()
		  }).animate({
			  countNum: countTo
			},
	
			{
			  duration: 3000,		// 3 seconds
			  easing: 'swing',
			  step: function() {
				//$this.text(Math.ceil(this.countNum));
				$this.text(Math.ceil(this.countNum).toLocaleString('en'));
			  },
			  complete: function() {
				$this.text(Math.ceil(this.countNum).toLocaleString('en'));
				//alert('finished');
			  }
	
			});
		});
		a = 1;
	  }
	}
	
	});	


	/*---------------------------
		Display toggle main container
	----------------------------*/	
	if ( $.trim( $('.global-container').text() ).length == 0 ) {
		document.getElementById("main-cont").style.display = 'none';
	}
