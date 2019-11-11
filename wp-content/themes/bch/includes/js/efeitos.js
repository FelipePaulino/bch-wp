$(document).ready(function(){
		$('.banner-topo').slick({
		dots: false,
		arrows:false,      
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		fade: true,
		 cssEase: 'linear',
		autoplaySpeed: 8000,
  responsive: [
    {
      breakpoint: 480,
      settings: {
		dots: false,
		arrows:false,      
		slidesToShow: 1,
		slidesToScroll: 1,
		 cssEase: 'linear',
		 fade: true,
		autoplaySpeed: 5000,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
	$('.carrosel-parceiros').slick({
		dots: true,
		arrows:false,      
		infinite: true,
		slidesToShow: 7,
		slidesToScroll: 7,
		autoplay: true,
		fade: false,
		 cssEase: 'linear',
		autoplaySpeed: 8000,
  responsive: [
    {
      breakpoint: 480,
      settings: {
		dots: false,
		arrows:false,      
		slidesToShow: 2,
		slidesToScroll: 2,
		 cssEase: 'linear',
		autoplaySpeed: 5000,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
			$('.carrosel-encontros').slick({
		dots: false,
		arrows:true,      
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 4,
		autoplay: true,

		autoplaySpeed: 8000,
  responsive: [
    {
      breakpoint: 480,
      settings: {
		dots: false,
		arrows:false,      
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		fade: true,
		 cssEase: 'linear',
		autoplaySpeed: 5000,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
		$('.linhas-conteudo').slick({
		dots: false,
		arrows:false,      
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		fade: true,
		 cssEase: 'linear',
		autoplaySpeed: 8000,
  responsive: [
    {
      breakpoint: 480,
      settings: {
		dots: false,
		arrows:false,      
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		fade: true,
		 cssEase: 'linear',
		autoplaySpeed: 5000,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
$('.depoimentos').slick({
	centerMode:true,
	centerPadding:'0',
	variableWidth:true,
	dots:false,
	arrows:false,
	autoplay:true,
	autoplaySpeed:9000,
	focusOnSelect:true,
	slidesToShow:3,
	slidesToScroll: 3,
	responsive:[
		{
			breakpoint:768,
			settings:{
				arrows:false,
				centerMode:true,
				centerPadding:'0',
				slidesToShow:3
			}
			},
			{
				breakpoint:480,
				settings:{
					arrows:false,
					centerMode:true,
					centerPadding:'0',
					slidesToShow:1}
			}
		]
	});

});


$('.slider-for').slick({
  centerMode: true,
  arrows:true,
  slidesToShow: 3,
  dots:false,
  focusOnSelect:true,
	asNavFor:'.slider-nav',
	responsive:[
		{
			breakpoint:768,
			settings:{
				centerMode:true,
				centerPadding:'0',
				slidesToShow:1
			}
			},
			{
				breakpoint:480,
				settings:{
					centerMode:true,
					centerPadding:'0',
					slidesToShow:1}
			}
		]
	});
$('.slider-nav').slick({
	slidesToShow:6,
	slidesToScroll:6,
	asNavFor:'.slider-for',
	dots:false,
	arrows:true,
	centerMode:false,
	focusOnSelect:true,
	responsive:[
		{
			breakpoint:768,
			settings:{
				centerMode:true,
				centerPadding:'0',
				slidesToShow:2
			}
			},
			{
				breakpoint:480,
				settings:{
					centerMode:true,
					centerPadding:'0',
					slidesToShow:2}
			}
		]
	});


		

  /**
   * forEach implementation for Objects/NodeLists/Arrays, automatic type loops and context options
   *
   * @private
   * @author Todd Motto
   * @link https://github.com/toddmotto/foreach
   * @param {Array|Object|NodeList} collection - Collection of items to iterate, could be an Array, Object or NodeList
   * @callback requestCallback      callback   - Callback function for each iteration.
   * @param {Array|Object|NodeList} scope=null - Object/NodeList/Array that forEach is iterating over, to use as the this value when executing callback.
   * @returns {}
   */
    var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
      forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener("click", function() {
          this.classList.toggle("is-active");
        }, false);
      });
    }


$(function(){
	$('.hamburger').click(function(){
		$('.menu').toggleClass('ativo');
		$('body').toggleClass('trava');
		$('.redes').toggleClass('redes-ativo');
	})

});