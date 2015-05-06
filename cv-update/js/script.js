/*jshint devel:true */

// $(document).load(function() {
//   $('.work-experience').velocity({opacity:1, backgroundColor: "red"},{duration:500, delay:300});
// });

$(document).ready(function() {


// fade in right side
$('.work-experience').velocity({opacity:1, backgroundColor: "red"},{duration:800, delay:1000});

// set SVG for download
var stroke = $('.stroke-left, .stroke-right');
var arrow =$('#main-path');
var btmLine = $('#dl-line');
TweenLite.to(arrow,0,{y: -4, drawSVG:'66% 100%'});
TweenLite.to(stroke,0,{drawSVG:'100% 100%'});


  function animateSection(expandSection, expandBtn, expandHeight, state){

    // open
    if (state === 'open'){
    expandSection.velocity({ height:expandHeight, paddingTop:20, paddingBottom:20, marginTop: 20, marginBottom: 10, opacity: 1 },{ duration:500,
      // toggle clickable states
      begin: function(){ expandBtn.removeClass('clickable');},
      complete: function(){ expandBtn.addClass('clickable'); }
      });
      // return data
      expandSection.data({active:true});

    // close  
    } else {

      expandSection.velocity({height:0, opacity: 0, paddingTop:0, paddingBottom:0, marginTop: 0, marginBottom: 0,},{duration:500,
        begin: function(){
          expandBtn.removeClass('clickable');
        },
        complete: function(){
          expandBtn.addClass('clickable');
        }
        });
      // return data
      expandSection.data({active:false});
    } // end of conditional statement
  } // end of function

  function animateReference(svg, expandSection, expandBtn, expandHeight, state){

  var dot = svg.find('.dot');
  var path = svg.find('.main-path');


  // open
  if (state === 'open'){
    dot.each(function(i){
      var el = $(this);
      TweenLite.to(el,0.3,{y:-4, ease: Back.easeOut.config(5), delay:0.1 * i});
      TweenLite.to(el,0.3,{y:-1, ease: Back.easeOut.config(5), delay: 0.75 + (0.1 * i)});
    });
    setTimeout(function(){
      TweenLite.to( path, 1, {
        onStart: function(){
          TweenLite.to( dot, 0.3 ,{opacity:0});
        },
        onComplete: animateSection(expandSection, expandBtn, expandHeight , 'open'),
        ease: Back.easeInOut.config(1.5),
        drawSVG:'120 100%',
        y: -1
      });
    },1400);

    // close
    } else {

      TweenLite.to( path ,1,{
      onStart: animateSection(expandSection, expandBtn, expandHeight, 'close'),
      onComplete : function(){
        TweenLite.to(dot,0.3,{opacity:1});
      },
      ease: Back.easeInOut.config(1.5),
      drawSVG:'0 90',
      y: 0
      });
    }
  }

  var refArticle = $('.include-references');
  refArticle.each(function(){
    var el = $(this);
    var expandBtn = el.find('.ref-btn');
    expandBtn.addClass('clickable');
    var expandSection = el.find('.ref-expand');
    var expandHeight  = expandSection.outerHeight();

    // set up SVG
    var svgEl = el.find('svg');
    var mainPath = svgEl.find('.main-path');
    TweenLite.to(mainPath,0,{drawSVG:'0 90'});

    // collapse section & setup
    expandSection.velocity({height:0, opacity:0},{duration:0});
    expandSection.data({active:false});

    // click function for expanding
    expandBtn.click(function() {
      if (expandBtn.hasClass('clickable')){
        // open
        if (expandSection.data('active') === false){
          animateReference(svgEl, expandSection, expandBtn, expandHeight, 'open');

        // close
        } else {
          animateReference(svgEl, expandSection, expandBtn, expandHeight, 'close');
        }
      } // end clickable conditional statement
    });
});



var nav = $('nav');
nav.find('ul li').each(function(){
  var el = $(this);
  var textEl = el.find('span.text-span');
  var icon = el.find('span.icon-li-container');
  var iconWidth = icon.outerWidth();
  icon.data({active:false});
  if (el.hasClass('hidden-li')){
    el.data({active:false, typed: false});
  }
  console.log( el.data() );
  el.click(function(){
    var listEl = $(this);
    // hidden content
    if ( listEl.hasClass('hidden-content') ){
      var hiddenEL = listEl.next('li');
      var typeThis = hiddenEL.attr('typed-text');

      if (hiddenEL.data('typed') === false && hiddenEL.data('active') === false){
      hiddenEL.velocity({opacity:1, height: 18, paddingTop:6, paddingBottom:6},{
          visibility: 'visible', 
          duration: 500,
          complete: function(){
            hiddenEL.typed({
              strings: [typeThis],
              typeSpeed: 30,
              startDelay: 100,
              showCursor: false,
              onStringTyped: function(){
                hiddenEL.data({typed:true, active:true});
              }
            });
          }
        });
    // collapse active element
    } else if (hiddenEL.data('typed') === true && hiddenEL.data('active')){
      console.log('run2');
      hiddenEL.data({typed:true, active:false});
      hiddenEL.velocity({opacity:0, height: 0, paddingTop:0, paddingBottom:0},{visibility: 'hidden', duration: 500});
    // expand already typed li
    } else {
      console.log('run3');
      hiddenEL.data({typed:true, active:true});
      hiddenEL.velocity({opacity:1, height: 18, paddingTop:6, paddingBottom:6},{visibility: 'visible', duration: 500});
    }

    // icon
    } else if (listEl.hasClass('download')) {
      var link = "resume.pdf"
      var fileName = "Resume: Matt Wujek.pdf"
      if (icon.data('active') === false){
        icon.data({active: true});
        icon.velocity({opacity: 1,},{duration:300, visibility: 'visible'});
        var goDown = TweenLite.to(arrow,0.25,{
            y: 0,
            ease: Back.easeInOut.config(5),
            onComplete : function(){
              TweenLite.to(btmLine,0.5,{drawSVG:'0% 100%'});
              TweenLite.to(stroke,0.3,{drawSVG:'100% 0%', opacity:0,
            onComplete : function(){
                goDown.reverse();
              }
              });
            } // end of complete function
            }).delay(0.3); // end of tween

          setTimeout(function(){
              TweenLite.to(arrow,1,{y: 4,drawSVG:'0% 12%',ease: Back.easeOut.config(1)});
              setTimeout(function(){
                TweenLite.to(btmLine,0.3,{ drawSVG:'50% 50%'});
              },200);
            },1500);
          // reset all
          setTimeout(function(){
            // reset data
            // fade and reset icon
            icon.velocity({opacity: 0,},{duration:300, visibility: 'hidden',
              complete: function(){
                icon.data({active:false});
                TweenLite.to(btmLine,0,{ delay: 1, drawSVG:'0% 100%'});
                TweenLite.to(arrow,0,{delay: 1, y: -4, drawSVG:'66% 100%'});
                TweenLite.to(stroke,0,{delay: 1, opacity: 1, drawSVG:'100% 100%'});
                //window.open(link, '_blank');
              }
            });
            // go to link
          },3000);
        // reset
      }
    // null
    } else {

    }
  });



}); // end each for nav list elements


}); // end ready

//     $('.accordion h3.buttons').click(function() {
//       var btn = $(this);
//       if(expanded ===false){
//         expanded = true;
//         button.velocity({top:20},{
//           duration:300,
//           easing: 'easeInCubic',
//           begin: function(){
//             refText.velocity({top:-20}, {
//               duration:200,
//               complete: function(){
//                 refText.empty();
//                 button.toggleClass('expanded');
//                 refText.html('close');

//               }
//               }).velocity('reverse', {duration:200});
//           }
//         })
//         .velocity('reverse',{duration:300});

//         $accordion.velocity({ height: accordionH },{
//           duration: 800,
//           easing : "easeInSine",
//           visibility: "visible",
//         });


//       }else{
//         expanded = false;
//         $accordion.velocity({ height: 0 },{duration: 400, easing : "easeInSine", visibility: "visible"});
//         button.velocity({top:-20},{
//           duration:300,
//           easing: 'easeInCubic',
//           begin: function(){
//             refText.velocity({top:20}, {
//               duration:200,
//               complete: function(){
//                 console.log('change text');
//                 refText.empty();
//                 button.toggleClass('expanded');
//                 refText.html('references &#43;');

//               }
//               }).velocity('reverse', {duration:200});
//           }
//         })
//         .velocity('reverse',{duration:300});

//       }
//     }); // end of click
// }); // end of ready
