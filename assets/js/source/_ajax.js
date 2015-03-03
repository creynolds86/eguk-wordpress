(function($) {

  var buttonText;

  $(function() {

    if ($('#shoutbox-form').length) {

      function scroll_to_last_shout() {

        var $wrapper  = $('#shoutbox .wrapper'),
            $scrollTo = $wrapper.find('article:last-child');

        $('#shoutbox .wrapper').animate({
          scrollTop: $scrollTo.offset().top - $wrapper.offset().top + $wrapper.scrollTop()
        });
      }

      function shoutbox_ajax() {

        $.ajax({
          type: 'POST',
          dataType: 'html',
          url: shoutboxObject.ajaxUrl,
          data: { 
            'action': 'ajax-shoutbox-get-new-post'
          },
          success: function(content) {

            $('#shoutbox .wrapper').html(content);

            $('#shoutbox-form .btn').removeAttr('disabled')
                                    .text(buttonText);

            $('#shoutbox-form textarea').val('');

          },
          complete: function() {

            scroll_to_last_shout();

          }
        });
      }

      scroll_to_last_shout();

      $('#shoutbox-form').on('submit', function(e) {

        e.preventDefault();

        if ( $('#shoutbox-form textarea').val() ) {

          $.ajax({
            type: 'POST',
            dataType: 'json',
            url: shoutboxObject.ajaxUrl,
            data: { 
              'action':   'ajax-shoutbox-create-post',
              'message':  $('#shoutbox-form textarea').val(),
              'security': $('#shoutbox-form #security').val()
            },
            beforeSend: function(data) {

              buttonText = $('#shoutbox-form .btn').text();

              $('#shoutbox-form .btn').attr('disabled', 'disabled')
                                      .text(shoutboxObject.loadingMessage);
            },
            complete: function(data) {

              shoutbox_ajax();

            }
          });
        }
      });

      setInterval(shoutbox_ajax(), 1400);
    }
  });
})(jQuery);
