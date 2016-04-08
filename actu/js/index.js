$(document).ready(function(){
  var carousel = new rjCarousel('[data-carousel]', 'ul:last-child li', 3, 500);
});

function rjCarousel(target, slide, visibleSlides, speed) {
  this.parent = $(target);
  this.child = $(target).find(slide);
  this.visibleSlides = visibleSlides;
  this.slides = this.child.length;
  this.current = 0;
  this.speed = speed;
  this.timeout;
  this.controls();
  this.changeSlides();
}
rjCarousel.prototype = {
  constructor: rjCarousel,
  controls: function() {
    var _this = this;
    this.parent
      .on('click', '.next', function() {
        _this.nextSlide();
      })
      .on('click', '.previous', function() {
        _this.previousSlide();
      });
  },
  nextSlide: function() {
    if (!this.inMotion()) {
      this.current = (this.slides - (this.visibleSlides) > this.current) ? this.current + 1 : this.slides - (this.visibleSlides);
      this.changeSlides();
    }
  },
  previousSlide: function() {
    if (!this.inMotion()) {
      this.current = (0 < this.current) ? this.current - 1 : 0;
      this.changeSlides();
    }
  },
  inMotion: function() {
    var _this = this;
    if (this.parent.hasClass('inmotion')) {
      return true;
    } else {
      clearTimeout(this.timeout);
      this.parent.addClass('inmotion');
      this.timeout = setTimeout(function() {
        _this.parent.removeClass('inmotion');
      }, this.speed);
      return false;
    }
  },
  changeSlides: function() {
    var _this = this;
    var count = 0;
    this.child.each(function() {
      console.log(this);
      $(this).removeClass('left visible right');
      if ($(this).index() < _this.current) {
        $(this).css('left', -(100 / _this.visibleSlides) + '%');
      } else if ($(this).index() > (_this.current + _this.visibleSlides - 1)) {
        $(this).css('left', '100%');
      } else {
        $(this).css('left', ((100 / _this.visibleSlides) * count) + '%');
        count++;
      }
    });
  }
  
};