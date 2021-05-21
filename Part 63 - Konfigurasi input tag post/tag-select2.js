//select2 tag
$('').select2({
   theme: 'bootstrap4',
   language: "",
   allowClear: true,
   ajax: {
      url: "",
      dataType: 'json',
      delay: 250,
      processResults: function(data) {
         return {
            results: $.map(data, function(item) {
               return {
                  text: item.title,
                  id: item.id
               }
            })
         };
      }
   }
});
