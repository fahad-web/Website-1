  $('#sr').keyup(function(){
   var search = $('#sr').val();
   
   $.ajax({
    url:"search.php",
    data:"usersearch="+search,
    success:function(data){
        $('#feedback').html(data);
    }
   }); 
});