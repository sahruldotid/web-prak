// var path = window.location;

// $(document).ready(function(){
//    $("#submitForm").on("change", function(){
//       var formData = new FormData(this);
//       var files = $('#file')[0].files[0];
//       var person = $('#personID').text();
//       var filename = $('input[type=file]').val().replace(/.*(\/|\\)/, '');
//       formData.append('file', files)
//       formData.append('person', person);
//       $.ajax({
//          url  : path+"upload",
//          type : "POST",
//          cache: false,
//          contentType : false,
//          processData: false,
//          data: formData,
//          success:function(response){
//             $("#profile").attr("src",path+"images/"+person+'/'+filename);
            
//          },
//          error:function(response){
//           alert("Failed to upload images");
//          }
//       });
//    });
// });