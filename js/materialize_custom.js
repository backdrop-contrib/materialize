/**
 * @file
 * JS for Materialize.
 */
(function ($, Backdrop, window, document, undefined) {

  // Show dropdown on hover.
  Backdrop.behaviors.materialize_select = {
    attach: function(context, setting) {

$('.l-content').css('opacity', '.1');
Materialize.fadeInImage('.l-content');
$('.form-select').addClass('browser-default');

if (screen.width > 599)
{
$('.node.view-mode-teaser').addClass('card-panel hoverable');
}

$('p').addClass('flow-text');
$('footer').addClass('page-footer');
$('input').addClass('validate');
    }
  }

})(jQuery, Backdrop, this, this.document);
