$("").tinymce({
  relative_urls: false,
  language: "en",
  plugins: [
    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
    "searchreplace wordcount visualblocks visualchars code fullscreen",
    "insertdatetime media nonbreaking save table directionality",
    "emoticons template paste textpattern",
  ],
  toolbar1: "fullscreen preview",
  toolbar2:
    "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
});