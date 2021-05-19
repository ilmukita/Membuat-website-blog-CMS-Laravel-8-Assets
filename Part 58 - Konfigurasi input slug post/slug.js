$("").change(function (event) {
  $("").val(
    event.target.value
      .trim()
      .toLowerCase()
      .replace(/[^a-z\d-]/gi, "-")
      .replace(/-+/g, "-")
      .replace(/^-|-$/g, "")
  );
});
