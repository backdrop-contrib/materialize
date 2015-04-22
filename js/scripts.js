/**
 * @file
 * JS for Materialize.
 */
(function ($, Backdrop, window, document, undefined) {

  // Show dropdown on hover.
  Backdrop.behaviors.materialize_dropdown = {
    attach: function(context, setting) {
      $('.dropdown').once('materialize-dropdown', function(){
        // Show dropdown on hover.
        $(this).mouseenter(function(){
          $(this).addClass('open');
        });
        $(this).mouseleave(function(){
          $(this).removeClass('open');
        });
      });
    }
  }

  $(document).ready(function() {

// run Javascript on page load here
console.log("Welcome to the console");

  });
})(jQuery, Backdrop, this, this.document);
