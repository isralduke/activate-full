setTimeout(function(){var e=$("#nav").offset().top,t=500;$(window).scroll(function(){console.log("scroll"),$(this).scrollTop()>e?($("#nav").addClass("on"),$(".about").addClass("padding"),console.log("nav")):($("#nav").removeClass("on"),$(".about").removeClass("padding"))})},1e3);var mySVG=document.getElementById("rocket-svg");mySVG.addEventListener("load",function(){var e=this.getSVGDocument(),t=e.getElementById("flame");TweenMax.to(t,.1,{scaleY:"1.4",repeat:-1},"start"),TweenMax.to(mySVG,.02,{rotation:"+=.4",repeat:-1},"start")}),mySVG.data=mySVG.data,$(document).ready(function(){$("#switch").click(function(){$("#navItems li").slideToggle(250)})});