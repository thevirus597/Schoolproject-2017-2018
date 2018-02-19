$(document).ready(function() {
  var table = $('.usertable').DataTable({
    "paging": true,
    "bLengthChange": false,
    "ordering": true,
    "info": true,
    "language": {
      "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Dutch.json"
    }
  });

  $('.delete').click(function(event) {
    var data = table.row($(this).parents('tr')).data();
    var id = data[0];   
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
          url: 'php/delete_user.php',
          type: 'POST',
          data: {
            id: id
          },
          success: function() {
            console.log('hey');
            setTimeout(function() {
              $('.content').load('usertable.php');
            }, 10);
          }
        });
      } else {
        swal("Geanuleerd!", "De gebruiker is niet verwijderd.", "success");
      }

    });
  });


  // Klant info in Modal
  $('.update').click(function(event) {
    var data = table.row($(this).parents('tr')).data();
    var id = data[0];
    $.ajax({
      url: 'php/fetch_user.php',
      type: 'POST',
      dataType: "json",
      data: {
        id: id
      },
      success: function(data) {
        $('.name').val(data.name);
        $('.surname').val(data.surname);
        $('.username').val(data.username);
        $('.id').val(data.id);
        $('.level').val(data.user_level);
        $('.password').val(data.password);
        $('.image-tn').attr('src',data.photo);
        $('#update_data_Modal').modal('show');
      }
    });


  });

  
});

