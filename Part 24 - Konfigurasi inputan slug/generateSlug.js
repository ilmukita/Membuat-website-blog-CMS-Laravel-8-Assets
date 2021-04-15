function generateSlug(value){
     return value.trim()
      .toLowerCase()
      .replace(/[^a-z\d-]/gi, '-')
      .replace(/-+/g, '-').replace(/^-|-$/g, "");
} 

