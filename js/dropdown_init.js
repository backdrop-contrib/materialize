/**
 * @file
 * JS for Materialize.
 */
(function($, Backdrop, window, document, undefined) {

  $(document).ready(function() {
    // run Javascript on page load here

    Backdrop.settings.materializedropdown = "1";

    $(".dropdown-content").each(function(index) {
      var theid = "dropdown" + index;
      $(this).attr('id', theid);
    });

    $(".dropdown-button").each(function(index) {
      var theattr = "dropdown" + index;
      $(this).data('superhero_one', theattr).attr('data-activates', theattr);
    });

  });
})(jQuery, Backdrop, this, this.document);
