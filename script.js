$(function() {
  
    function toggleChangeBtn() {
      var slideIndex = $('.slide').index($('.active'));
      $('.change-btn').show();
      if (slideIndex == 0) {
        $('.prev-btn').hide();
      } else if (slideIndex == $('.slide').length-1) {
        $('.next-btn').hide();
      }
    }
    
    $('.index-btn').click(function() {
      $('.active').removeClass('active');
      var clickedIndex = $('.index-btn').index($(this));
      $('.slide').eq(clickedIndex).addClass('active');
      toggleChangeBtn();
    });
    
    $('.change-btn').click(function() {
      var $displaySlide = $('.active');
      $displaySlide.removeClass('active');
      if ($(this).hasClass('next-btn')) {
        $displaySlide.next().addClass('active');
      } else {
        $displaySlide.prev().addClass('active');
      }
      toggleChangeBtn();
    });

    $('.faq-list-item').click(function() {
        var $answer = $(this).find('.answer');
        if($answer.hasClass('open')) { 
          $answer.removeClass('open');
          $answer.slideUp();
          $(this).find('span').text('+');
          
        } else {
          $answer.addClass('open');
           $answer.slideDown();
          $(this).find('span').text('-');
          
        }
      });
  });
