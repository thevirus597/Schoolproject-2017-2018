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
        $.ajax({
          url: 'php/delete_user.php',
          type: 'POST',
          data: {
            id: id
          },
          success: function() {
            console.log('hey');
            setTimeout(function() {
              $('.content').load('php/usertable.php');
            }, 10);
          }
        });

      
    });


  // Klant info in Modal
  $('.update').click(function(event) {
    var data = table.row($(this).parents('tr')).data();
    var id = data[0];
    $.ajax({
      url: 'php/fetch.php',
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
        $('#update_data_Modal').modal('show');
      }
    });


  });
});

