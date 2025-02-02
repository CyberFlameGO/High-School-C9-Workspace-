var FIXED_NAV = true;

$(document).ready(function() 
{
	$(window).scroll(function () 
	{ 
		if(!FIXED_NAV)
				return;
		if ($(window).scrollTop() >= 120)
				$('#navbar').removeClass('hidden');
		if ($(window).scrollTop() < 120) 
				$('#navbar').addClass('hidden');
	});
});

!function(e){"use strict";var t,n;n={},e.fn.jParticle=function(n){return this.each(function(i,a){"object"==typeof a.sandbox&&e(a).removeJParticle(),a.sandbox=t(a,n)}),this},e.fn.removeJParticle=function(){return this.each(function(e,t){t.sandbox&&(t.sandbox.remove(),delete t.sandbox)}),this},e.fn.freezeJParticle=function(){return this.each(function(e,t){t.sandbox&&t.sandbox.freeze()}),this},e.fn.unfreezeJParticle=function(){return this.each(function(e,t){t.sandbox&&t.sandbox.unfreeze()}),this},t=function(t,i){var a,o;return a={},a.canvas={},a.mouse={},a.particles=[],a.isAnimated=!1,a.initialize=function(e,t){a.initParams(t),a.initHTML(e),a.initParticles(),a.initEvents(),a.initAnimation()},a.initParams=function(t){t&&t.color&&(!t.particle||t.particle&&!t.particle.color)&&(t.particle||(t.particle={}),t.particle.color=t.color),a.params=e.extend({particlesNumber:50,linkDist:100,createLinkDist:150,disableLinks:!1,disableMouse:!1,background:"green",color:"green",width:null,height:null,linksWidth:1},t)},a.initHTML=function(t){var n;n=a.canvas,n.container=e(t),n.element=e("<canvas/>"),n.context=n.element.get(0).getContext("2d"),n.container.append(n.element),n.element.css("display","block"),n.element.get(0).width=a.params.width?a.params.width:n.container.width(),n.element.get(0).height=a.params.height?a.params.height:n.container.height(),n.element.css("background",a.params.background)},a.resize=function(e,t){e&&(canvas.element.get(0).width=e),t&&(canvas.element.get(0).height=t)},a.initParticles=function(){var e,t;for(e=0,t=a.params.particlesNumber;t>e;e+=1)a.particles.push(o(a.canvas.element.get(0),a.params.particle))},a.initEvents=function(){a.canvas.element.mouseenter(function(){a.mouse.hoverCanvas=!0,a.isAnimated||a.draw()}),a.canvas.element.mouseleave(function(){a.mouse.hoverCanvas=!1}),a.canvas.element.mousemove(function(t){a.mouse=e.extend(a.mouse,n.getMousePosition(t,a.canvas.element[0]))})},a.initAnimation=function(){window.requestAnimFrame=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.ORequestAnimationFrame||window.msRequestAnimationFrame||function(e){setTimeOut(e,1e3/60)},a.isAnimated=!0,a.draw()},a.draw=function(){var e,t,n,i,o,r;for(e=0,n=a.particles.length,i=a.canvas,i.context.clearRect(0,0,i.element.get(0).width,i.element.get(0).height);n>e;e+=1)if(o=a.particles[e],a.isAnimated&&o.update(),o.draw(),!a.params.disableMouse&&a.mouse.hoverCanvas&&a.drawLink(o.getPosition("x"),o.getPosition("y"),a.mouse.x,a.mouse.y),!a.params.disableLinks)for(t=e+1;n>t;t+=1)r=a.particles[t],a.drawLink(o.getPosition("x"),o.getPosition("y"),r.getPosition("x"),r.getPosition("y"));a.requestID=window.requestAnimFrame(a.draw)},a.drawLink=function(e,t,i,o){var r;n.getDistance(e,t,i,o)<=a.params.createLinkDist&&(r=a.canvas.context,r.save(),r.beginPath(),r.lineWidth=a.params.linksWidth,r.moveTo(e,t),r.lineTo(i,o),r.globalAlpha=a.getOpacityLink(e,t,i,o),r.strokeStyle=a.params.color,r.lineCap="round",r.stroke(),r.closePath(),r.restore())},a.getOpacityLink=function(e,t,i,o){var r,s,c,u;return r=n.getDistance(e,t,i,o),c=a.params.linkDist,u=a.params.createLinkDist,s=c>=r?1:r>u?0:1-100*(r-c)/(u-c)/100},a.freeze=function(){a.isAnimated&&(a.isAnimated=!1)},a.unfreeze=function(){a.isAnimated||(a.isAnimated=!0)},a.remove=function(){a.canvas.element.remove()},o=function(t,i){var a;return a={},a.canvas={},a.vector={},a.initialize=function(t,n){a.params=e.extend({color:"white",minSize:2,maxSize:4,speed:60},n),a.setCanvasContext(t),a.initSize(),a.initPosition(),a.initVectors()},a.initPosition=function(){a.x=n.getRandNumber(0+a.radius,a.canvas.element.width-a.radius),a.y=n.getRandNumber(0+a.radius,a.canvas.element.height-a.radius)},a.initSize=function(){a.size=n.getRandNumber(a.params.minSize,a.params.maxSize),a.radius=a.size/2},a.initVectors=function(){do a.vector.x=n.getRandNumber(-a.params.speed/60,a.params.speed/60,!1),a.vector.y=n.getRandNumber(-a.params.speed/60,a.params.speed/60,!1);while(0==a.vector.x||0==a.vector.y)},a.setCanvasContext=function(e){var t;if(a.canvas.element=e,t=e.getContext("2d"),"object"!=typeof t||"object"!=typeof t.canvas)throw"Error: Can't set canvas context to Particle because context isn't a CanvasRenderingContext2D object.";a.canvas.context=t},a.draw=function(){var e=a.canvas.context;e.beginPath(),e.arc(a.x,a.y,a.size/2,0,2*Math.PI),e.fillStyle=a.params.color,e.fill(),e.closePath()},a.update=function(){a.x+=a.vector.x,a.y+=a.vector.y,(0>a.x-a.radius||a.x+a.radius>a.canvas.element.width)&&(a.vector.x=-a.vector.x),(0>a.y-a.radius||a.y+a.radius>a.canvas.element.height)&&(a.vector.y=-a.vector.y)},a.getPosition=function(e){return"string"==typeof e&&"x"!=e&&"y"!=e&&(e=null),"string"==typeof e?a[e]:{x:a.x,y:a.y}},a.initialize(t,i),{getPosition:a.getPosition,update:a.update,draw:a.draw}},a.initialize(t,i),{remove:a.remove,freeze:a.freeze,unfreeze:a.unfreeze,resize:a.resize}},n.getRandNumber=function(e,t,n){var i;return null==e&&(e=0),null==t&&(t=10),null==n&&(n=!0),i=Math.random()*(t-e)+e,n?Math.round(i):i},n.getDistance=function(e,t,n,i){return Math.sqrt(Math.pow(n-e,2)+Math.pow(i-t,2))},n.getMousePosition=function(t,n){var i;return"undefined"==typeof n&&(n=e("body")[0]),i=n.getBoundingClientRect(),{x:t.clientX-i.left,y:t.clientY-i.top}}}(jQuery);

function particleCreator()
{
	$(".jumbotron").jParticle({
		background: "",
		color: "#ecf0f1",
		particlesNumber: ( $( window ).width() / 18)
	});
}

$( window ).resize(particleCreator);


var CONFIG = (function() {
		 var private =
							[
								{
									name: 'Github',
									href: 'https://github.com/Bevelio/',
									description: '@Bevelio'
								},
								
								{
									name: 'Linkined',
									href: 'https://www.linkedin.com/in/heath-campbell-6bb497125?trk=hp-identity-name',
									description: '@HeathCampbell'
								}
							];

		 return {
				get: function(name) { return private[name]; },
				size: function(i) { return private.length; }
		};
})();

$(document).ready(function(){
		if (document.createStyleSheet)
			document.createStyleSheet('style.css');
		else 
			$("head").append($("<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700' type='text/css' media='screen' />"));
});


var indexOfScroller = 1; 

function update()
{
	var detail= CONFIG.get(indexOfScroller);
	indexOfScroller = ++indexOfScroller % CONFIG.size();
	if(detail == null) return;
	$(".scroller").fadeOut(300, function() 
					{ 
							$(".scroller").html("<li><h1>" + detail.name + "</h1><p><a href=" + detail.href +" target=\"_blank\">" + detail.description + "</a></p></li>");
							$(".scroller").fadeIn(); 
					});
	
}

setInterval(update, 3000);
particleCreator();
