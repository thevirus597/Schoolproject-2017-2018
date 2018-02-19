$(document).ready(function() {
  var table = $('.table').DataTable({
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
          url: 'php/delete_deal.php',
          type: 'POST',
          data: {
            id: id
          },
          success: function() {
            console.log('hey');
            setTimeout(function() {
              $('.content').load('dealstable.php');
            }, 10);
          }
        });
      } else {
        swal("Geanuleerd!", "De gebruiker is niet verwijderd.", "success");
      }

    });
  });

  $('.update').click(function(event) {
    var data = table.row($(this).parents('tr')).data();
    var id = data[0];
    $.ajax({
      url: 'php/fetch_deals.php',
      type: 'POST',
      dataType: "json",
      data: {
        id: id
      },
      success: function(data) {
      	$('.id').val(data.id);
        $('.name').val(data.deal_naam);
        $('.about_deal').val(data.over_deal);
        $('.image-tn').attr('src',"../"+data.photo_path);
        $('#edit_deal_Modal').modal('show');
      }
    });
  });

  
});

