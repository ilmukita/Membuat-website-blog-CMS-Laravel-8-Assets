file_picker_callback: function(callback, value, meta) {
   let x = window.innerWidth || document.documentElement.clientWidth || document
      .getElementsByTagName('body')[0].clientWidth;
   let y = window.innerHeight || document.documentElement.clientHeight || document
      .getElementsByTagName('body')[0].clientHeight;

   let cmsURL = /* route */ + '?editor=' + meta.fieldname;
   if (meta.filetype == 'image') {
      cmsURL = cmsURL + "&type=Images";
   } else {
      cmsURL = cmsURL + "&type=Files";
   }

   tinyMCE.activeEditor.windowManager.openUrl({
      url: cmsURL,
      title: 'Filemanager',
      width: x * 0.8,
      height: y * 0.8,
      resizable: "yes",
      close_previous: "no",
      onMessage: (api, message) => {
         callback(message.content);
      }
   });
}
