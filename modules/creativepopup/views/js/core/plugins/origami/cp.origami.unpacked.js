/*! Creative Popup - https://creativepopup.webshopworks.com
 * @author    WebshopWorks
 * @copyright 2018-2020 WebshopWorks
 * @license   One Domain Licence
 * Not allowed to resell or redistribute this software */

(function($){

	window._creativePopup.plugins.origami = function( ls, $slider, sliderUID, userSettings ){

		var or = this;

		or.pluginData = {
			version: '1.2',
			requiredLSVersion: '1.6.1'
		};

		or.pluginDefaults = {
			opacity : 0.25,
			maxTiles : 4
		};

		or.init = function(){
			or.extendCreativePopup();
		};

		or.extendCreativePopup = function(){

			ls.transitions.slide.origami = {

				start: function(){

					ls.slider.ceilRatio = Math.ceil( ls.slider.width / ls.slider.height );
					this.blocksNum = ls.slider.ceilRatio > or.pluginDefaults.maxTiles ? or.pluginDefaults.maxTiles : ls.slider.ceilRatio;
					this.blocksNum = Math.floor( Math.random() * this.blocksNum ) + 1;

					this.addBlocks();
				},

				getDirection: function( index ){

					var curDir = this.lastDir;

					while( this.lastDir == curDir ){

						if( this.blocksNum > 1 ){

							if( index === 0 ){
								curDir = ['right','top','right','bottom'][Math.floor( Math.random()*4 )];
							}else if( index == this.blocksNum - 1 ){
								curDir = ['left','top','left','bottom'][Math.floor( Math.random()*4 )];
							}else{
								curDir = ['top','bottom'][Math.floor( Math.random()*2 )];
							}
						}else{
							curDir = ['left','top','right','bottom'][Math.floor( Math.random()*4 )];
						}
					}

					this.lastDir = curDir;
					return curDir;
				},

				addBlocks: function(){

					// CREATE: blocks with even number of width
					var	newWidth = ls.slider.width % 2 === 0 ? ls.slider.width : ls.slider.width + 1,
						blockWidth = newWidth / this.blocksNum % 2 === 0 ? newWidth / this.blocksNum : newWidth / this.blocksNum - newWidth / this.blocksNum % 2,
						blockHeight = ls.slider.height % 2 === 0 ? ls.slider.height : ls.slider.height + 1,
						curBlockLeft = 0;

					for( var index=0; index<this.blocksNum; index++ ){

						var	zIndex = this.blocksNum - Math.abs( Math.floor( this.blocksNum / 2 ) - index ) - Math.floor( this.blocksNum / 2 ),
							curDir = this.getDirection( index ),
							curBlockWidth = blockWidth;

						if( newWidth / this.blocksNum % 2 !== 0 && index % 2 === 0 ){
							if( ( newWidth - blockWidth * this.blocksNum ) / 2 < this.blocksNum ){
								curBlockWidth += 2;
							}
						}

						// last block
						if( index === this.blocksNum - 1 && curBlockLeft + curBlockWidth !== newWidth ){
							curBlockWidth = newWidth - curBlockLeft;
						}

						if( index === this.blocksNum - 1 && newWidth !== ls.slider.width ){
							curBlockLeft -= 1;
						}

						var curBlock = ls.transitions.slide.origami.createBlock( 'cp-origami-' + curDir, curBlockWidth, blockHeight, curBlockLeft, 0 ).data( { 'direction' : curDir } );

						curBlock.css({
							zIndex: zIndex
						});

						this.appendTiles( curBlock, curBlockLeft, curDir, index );

						curBlockLeft += curBlockWidth;
					}

					// START: origami slide transition
					ls.transitions.slide.start();
				},

				createBlock: function( className, width, height, left, top ){

					var curBlock = $('<div>').addClass( 'cp-origami-block ' + className ).css({
						width : width,
						height : height,
						left : left,
						top : top
					}).appendTo( ls.transitions.slide.$wrapper );

					return curBlock;
				},

				appendTiles: function( curBlock, curBlockLeft, curDir, index ){

					// APPEND: slide transition wrapper into layers wrapper
					ls.transitions.slide.$wrapper.prependTo( ls.slider.$layersWrapper );

					var style;

					switch( curDir ){
						case 'left':
						case 'right':
							style = { width : curBlock.width() / 2 };
						break;
						case 'top':
						case 'bottom':
							style = { height : curBlock.height() / 2 };
						break;
					}

					// CREATE: four tiles in every block
					var	t1 = $( '<div>' ).css( style ).addClass( 'cp-origami-tile cp-origami-cur' ).appendTo( curBlock ),
						t2 = $( '<div>' ).css( style ).addClass( 'cp-origami-tile cp-origami-cur' ).appendTo( t1 ),
						t3 = $( '<div>' ).css( style ).addClass( 'cp-origami-tile cp-origami-next' ).appendTo( t2 ),
						t4 = $( '<div>' ).css( style ).addClass( 'cp-origami-tile cp-origami-next' ).appendTo( t3 );

					curBlock.find( '.cp-origami-tile' ).each(function(){

						var	curNext = $(this).hasClass( 'cp-origami-next' ) ? 'next' : 'current',
							curImgHolder = $('<div>').addClass( 'cp-origami-image-holder' ).appendTo( $(this) );

						// SET: slide background image positions iside tiles
						if( ls.slides[curNext].data.$background ){

							var	p = $(this).parent(),
								marginLeft,
								marginTop;

							switch( curBlock.data( 'direction' ) ){

								case 'left':
									switch( curNext ){
										case 'current':
											marginLeft = $(this).position().left;
											while( !p.is( '.cp-origami-block' ) ){
												marginLeft += p.position().left;
												p = p.parent();
											}
										break;
										case 'next':
											marginLeft = 0;
											while( !p.is( '.cp-origami-cur' ) ){
												marginLeft += p.position().left;
												p = p.parent();
											}
										break;
									}
									marginLeft = -curBlockLeft - marginLeft;
								break;

								case 'right':
									switch( curNext ){
										case 'current':
											marginLeft = - $(this).position().left;
											while( !p.is( '.cp-origami-block' ) ){
												marginLeft -= p.position().left;
												p = p.parent();
											}
										break;
										case 'next':
											marginLeft = $(this).position().left;
											while( !p.is( '.cp-origami-cur' ) ){
												marginLeft -= p.position().left;
												p = p.parent();
											}
										break;
									}
									marginLeft =  -curBlockLeft + marginLeft;
								break;

								case 'top':
									switch( curNext ){
										case 'current':
											marginTop = - $(this).position().top;
											while( !p.is( '.cp-origami-block' ) ){
												marginTop -= p.position().top;
												p = p.parent();
											}
										break;
										case 'next':
										marginTop = 0;
											while( !p.is( '.cp-origami-cur' ) ){
												marginTop -= p.position().top;
												p = p.parent();
											}
										break;
									}
									marginLeft = -curBlockLeft;
								break;

								case 'bottom':
									switch( curNext ){
										case 'current':
											marginTop = - $(this).position().top;
											while( !p.is( '.cp-origami-block' ) ){
												marginTop -= p.position().top;
												p = p.parent();
											}
										break;
										case 'next':
											marginTop = $(this).position().top;
											while( !p.is( '.cp-origami-cur' ) ){
												marginTop -= p.position().top;
												p = p.parent();
											}
										break;
									}
									marginLeft = -curBlockLeft;
								break;
							}

							// APPLY: style settings
							var	kbFromTo = 'from',
								curNextSlide = curNext === 'current' ? ls.transitions.curSlide : ls.transitions.nextSlide,
								slideBGData = curNextSlide.data.$background.data( ls.defaults.init.dataKey ),
								slideBGKenBurnsData = slideBGData.kenBurns[kbFromTo],
								BGSrc = curNextSlide.data.$background ? ls.functions.getURL( curNextSlide.data.$background ) : false,
								curImg = $( '<img>' ).appendTo( curImgHolder ).attr( 'src', BGSrc ).css({
									width: slideBGData.responsive.width,
									height: slideBGData.responsive.height,
									'-webkit-filter': slideBGData.responsive.filter,
									filter: slideBGData.responsive.filter,
									marginLeft: marginLeft,
									marginTop: marginTop,
									outline: '1px solid transparent'
								});

								switch( curNext ){
									case 'current':
										curImg.css({
											'-ms-transform': 'translateX(' + ( slideBGData.responsive.x ) + 'px) translateY(' + ( slideBGData.responsive.y ) + 'px)' + slideBGData.responsive.kbRotation + slideBGData.responsive.kbScale,
											'-webkit-transform': 'translateX(' + ( slideBGData.responsive.x ) + 'px) translateY(' + ( slideBGData.responsive.y ) + 'px)' + slideBGData.responsive.kbRotation + slideBGData.responsive.kbScale,
											transform: 'translateX(' + ( slideBGData.responsive.x ) + 'px) translateY(' + ( slideBGData.responsive.y ) + 'px)' + slideBGData.responsive.kbRotation + slideBGData.responsive.kbScale
										});
									break;
									case 'next':
										curImg.css({
											'-ms-transform': 'translateX(' + ( slideBGData.responsive.x ) + 'px) translateY(' + ( slideBGData.responsive.y ) + 'px) rotate(' + slideBGKenBurnsData.rotation + 'deg) scale(' + slideBGKenBurnsData.scale + ')',
											'-webkit-transform': 'translateX(' + ( slideBGData.responsive.x ) + 'px) translateY(' + ( slideBGData.responsive.y ) + 'px) rotate(' + slideBGKenBurnsData.rotation + 'deg) scale(' + slideBGKenBurnsData.scale + ')',
											transform: 'translateX(' + ( slideBGData.responsive.x ) + 'px) translateY(' + ( slideBGData.responsive.y ) + 'px) rotate(' + slideBGKenBurnsData.rotation + 'deg) scale(' + slideBGKenBurnsData.scale + ')'
										});
									break;
								}

							// APPEND: element for emulating shadows / lights
							$( '<div>' ).addClass( 'cp-light' ).appendTo( curImgHolder );
						}
					});

					this.setTransition( curBlock, curDir, t1, t2, t3, t4, index );
				},

				setTransition: function( curBlock, curDir, t1, t2, t3, t4, index ){

					var	tl = curBlock.find( '.cp-light' ).addClass( 'cp-black' ),
						t1l = t1.find( '> .cp-origami-image-holder > img' ),
						t2l = t2.find( '> .cp-origami-image-holder > img' ),
						t3l = t3.find( '> .cp-origami-image-holder > img' ),
						t4l = t4.find( '> .cp-origami-image-holder > img' ),
						duration = 2,
						halfDuration = duration / 2,
						easing = ls.gsap.Cubic.easeInOut,
						o = or.pluginDefaults.opacity,
						o2 = o * 1.5;

					switch( curDir ){

						case 'left':

							// Transition of tiles
							ls.transitions._slideTransition.to( t1[0], duration, {
								ease: easing,
								rotationY: 90
							}, 0 ).to( t2[0], duration, {
								ease: easing,
								rotationY: -180
							}, 0 ).fromTo( t3[0], duration, {
								rotationY: 130
							},{
								ease: easing,
								rotationY: 90
							}, 0 ).fromTo( t4[0], duration, {
								rotationY: 90
							},{
								ease: easing,
								rotationY: 0
							}, halfDuration );

						break;

						case 'right':

							// Transition of tiles
							ls.transitions._slideTransition.to( t1[0], duration, {
								ease: easing,
								rotationY: -90
							}, 0 ).to( t2[0], duration, {
								ease: easing,
								rotationY: 180
							}, 0 ).fromTo( t3[0], duration, {
								rotationY: -130
							},{
								ease: easing,
								rotationY: -90
							}, 0 ).fromTo( t4[0], duration, {
								rotationY: -90
							},{
								ease: easing,
								rotationY: 0
							}, halfDuration );

						break;

						case 'top':

							// Transition of tiles
							ls.transitions._slideTransition.to( t1[0], duration, {
								ease: easing,
								rotationX: -90
							}, 0 ).to( t2[0], duration, {
								ease: easing,
								rotationX: 180
							}, 0 ).fromTo( t3[0], duration, {
								rotationX: -130
							},{
								ease: easing,
								rotationX: -90
							}, 0 ).fromTo( t4[0], duration, {
								rotationX: -90
							},{
								ease: easing,
								rotationX: 0
							}, halfDuration );

						break;

						case 'bottom':

							// Transition of tiles
							ls.transitions._slideTransition.to( t1[0], duration, {
								ease: easing,
								rotationX: 90
							}, 0 ).to( t2[0], duration, {
								ease: easing,
								rotationX: -180
							}, 0 ).fromTo( t3[0], duration, {
								rotationX: 130
							},{
								ease: easing,
								rotationX: 90
							}, 0 ).fromTo( t4[0], duration, {
								rotationX: 90
							},{
								ease: easing,
								rotationX: 0
							}, halfDuration );

						break;
					}

					// Transition of lights
					ls.transitions._slideTransition.to( t1l[0], duration, {
						ease: easing,
						opacity: o2
					}, 0 ).to( t2l[0], duration, {
						ease: easing,
						opacity: o
					}, 0 ).fromTo( t3l[0], duration, {
						opacity: o2
					},{
						ease: easing,
						opacity: 1
					}, 0 ).fromTo( t4l[0], duration, {
						opacity: o2
					},{
						ease: easing,
						opacity: 1
					}, halfDuration );
				}
			};

			ls.transitions.slide.select.slideTransitionType = function(){
				if( ls.slides.next.data.transitionorigami && ls.browser.supports3D ){
					if( ( ls.transitions.nextSlide.data.transition3d || ls.transitions.nextSlide.data.transition2d ) && ( Math.floor(Math.random() * 2) + 1 ) === 1 ){
						ls.transitions.slide.normal.select.transitionType();
					}else{
						ls.transitions.slide.origami.start();
					}
				}else{
					ls.transitions.slide.normal.select.transitionType();
				}
			};
		};
	};

})(jQuery);