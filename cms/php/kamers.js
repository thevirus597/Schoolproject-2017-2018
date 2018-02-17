$(document).ready(function() {
  var table = $('.kamerstable').DataTable({
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
      url: 'php/delete_kamer.php',
      type: 'POST',
      data: {
        id: id
      },
      success: function() {
        console.log('hey');
        setTimeout(function() {
          $('.content').load('php/roomtable.php');
        }, 10);
      }
    });

    
  });


  // Klant info in Modal
  $('.update').click(function(event) {
    var data = table.row($(this).parents('tr')).data();
    var id = data[0];
    $.ajax({
      url: 'php/fetch_kamers.php',
      type: 'POST',
      dataType: "json",
      data: {
        id: id
      },
      success: function(data) {
        $('.kamertype').val(data.kamertype);
        $('.prijs').val(data.prijs);
        $('.kamerinfo').val(data.kamer_info);
        $('.id').val(data.id);
        $('.bedden').val(data.bedden);
        $('.image-tn').attr('src',"../"+data.photo_path);
        $('#edit_kamer_Modal').modal('show');
      }
    });


  });
  });