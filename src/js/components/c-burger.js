import '../plugins/jquery.toggle-all';

(function ($) {
  // SIDEBAR MEBU
  $('.js-c-burger').toggleAll({
    notCloseClass: '',
    uniqueString: 'c-tes',
    open: function ($this) {
      $this.closest('body').addClass('active--c-menu');
    },
    close: function ($this) {
      $this.closest('body').removeClass('active--c-menu');
    },
  });
})(jQuery);
