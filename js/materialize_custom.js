/**
 * @file
 * JS for Materialize.
 */
(function ($, Backdrop, window, document, undefined) {

  // Show dropdown on hover.
  Backdrop.behaviors.materialize_select = {
    attach: function(context, setting) {
    alert("hi");
var thing = $('.form-select');
console.log(thing);
$('.form-select').addClass('browser-default');
    }
  }

})(jQuery, Backdrop, this, this.document);
