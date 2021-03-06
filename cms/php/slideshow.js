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

    $('.delete_slide').click(function() {
      var id = this.id;
      swal({
        title: "Bent u zeker dat u wilt verwijderen?",
        text: "U zal de gegevens nooit meer terug krijgen",
        type: "warning",  
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Verwijderen",
        cancelButtonText: "Annuleren",
        closeOnConfirm: false
      }, function(isConfirm) {
        if (isConfirm) {
          swal("Verwijdert!", "De gebruiker is verwijdert.", "success");
          $.ajax({
            url: 'php/delete_slide.php',
            type: 'Post',
            dataType: 'Json',
            data: {
              id:id
            },
            success:function(){
              console.log('deleted');
              setTimeout(function(){
             location.reload();
            }, 10)}
          });
        } else {
          swal("Geanuleerd!", "De gebruiker is niet verwijderd.", "success");
        }

      });

    });
  })

// $(document).ajaxStop(function(){
//     window.location.reload();
// });