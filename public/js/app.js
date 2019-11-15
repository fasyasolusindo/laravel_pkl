$("#pilih_barang").change(function() {
  $.ajax({
    url: '/info/' + $(this).val(),
    type: 'get',
    data: {},
    success: function(data) {
      if (data.success == true) {
        $("#pilih_barang").value = data.info;
      } else {
        alert('Cannot find info');
      }

    },
    error: function(jqXHR, textStatus, errorThrown) {}
  });
});