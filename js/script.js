$(function() {

  var objForAnim = {
    magicClasses: ['spaceInUp', 'spaceInRight', 'spaceInLeft', 'spaceInDown', 'swap', 'vanishIn', 'perspectiveDownRetourn', 'perspectiveUpRetourn', 'slideUpRetourn', 'slideDownRetourn', 'slideLeftRetourn', 'slideRightRetourn'],
    inEffects: ['flash', 'pulse', 'flip', 'fadeInUp', 'fadeInDown', 'fadeInLeft', 'fadeInRight', 'fadeInRightBig', 'fadeInLeftBig'],
    getRandClass: function(arr) {
      var max = arr.length - 1,
        rand = Math.floor(Math.random() * (max + 1));
      return arr[rand];
    }
  }

  $('h1').not('.text0').each(function() {
    var $this = $(this);
    $this.textillate({
      autoStart: false,
      in: {
        effect: objForAnim.getRandClass(objForAnim.inEffects)
      },
      out: {
        effect: 'def',
        delayScale: 0,
        delay: 0,
        callback: function() {}
      }
    });
  });

  $(".post2").onepage_scroll({
    pagination: false,
    afterMove: function() {

      $('.wrap').not('#0').each(function() {
        var $this = $(this),
          randomClass = objForAnim.getRandClass(objForAnim.magicClasses);

        if ($('body, html').scrollTop() + $(window).height() > $this.offset().top) {
          if (!$this.hasClass('magictime')) {
            $this.addClass('magictime ' + randomClass);
            $this.data('magicClass', randomClass);
            $this.find('h1').textillate('start');
          }
        } else {
          $this.removeClass('magictime ' + $this.data('magicClass')).removeData('magicClass');
        }
      });
      
    }
  });

});