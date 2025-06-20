(function ($, Drupal) {
  Drupal.behaviors.crudTheme = {
    attach: function (context, settings) {
      $('.container h1', context).once('animated').each(function () {
        $(this).hide().fadeIn(1000);
      });

      $('form', context).submit(function () {
        alert('Formulaire soumis !');
      });
    }
  };
})(jQuery, Drupal);
