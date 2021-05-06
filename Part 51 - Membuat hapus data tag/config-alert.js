Swal.fire({
   title: "title",
   text: "message",
   icon: 'warning',
   allowOutsideClick: false,
   showCancelButton: true,
   cancelButtonText: "Cancel",
   reverseButtons: true,
   confirmButtonText: "Yes",
}).then((result) => {
   if (result.isConfirmed) {
      // todo: process of deleting categories
   }
});


