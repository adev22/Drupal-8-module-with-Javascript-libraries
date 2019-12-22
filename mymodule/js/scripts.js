
/**
 * @file
 * Contains JS function
 */

(function ($, Drupal) {
  Drupal.behaviors.mymodule = {
    attach: function (context, settings) {
      $('.btn').once('mymodule').append( '<button class="button">Click to alert</button>' );
      $('.button', context).click(function () {
        var message = prompt(" Enter your name :");
        alert( 'Hello , ' + message );
      });
    }
  };
})(jQuery, Drupal);