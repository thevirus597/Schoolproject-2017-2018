$(document).ready(function() {

    // Klant info in Modal
    $('.update_slide').click(function(event) {
      var slide_id = 0;
      var slide_url = "";
      var slide_caption = "";

      slide_id = $(this).attr('id');
      slide_url = $('#slide_url_' + slide_id).attr('src');
      slide_caption = $('#slide_caption_' + slide_id).text();
      
      if (slide_id != 0 && slide_url != "" && slide_caption != "") {
        $('#slide_modal_id').val(slide_id);
        $('#slide_modal_caption').val(slide_caption);
        $('#slide_modal_image').attr('src', slide_url);
        $('#id').val(slide_id);
      }
    });
  });