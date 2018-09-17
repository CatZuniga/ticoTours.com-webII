$(document).ready(function(){  
    $('.view_data').click(function(){ 
        
         var id = $(this).attr("id");  
         console.log(id ); 
         $.ajax({  
              url: 'http://localhost/ticorides/assets/getuser.php',  
              method:"post",  
              data:{id:id},  
              success:function(data){  
                   $('#user_profile').html(data);  
                   $('#view-modal').modal("show");  
              }  
         });  
    });  


    $('.view_ride').click(function(){ 
        
         var id = $(this).attr("id");  
         console.log(id ); 
         $.ajax({  
              url: 'http://localhost/ticorides/assets/getride.php',  
              method:"post",  
              data:{id_ride:id},  
              success:function(data){  
                   $('#ride').html(data);  
                   $('#view-ride').modal("show");  
              }  
         });  
    });  
    
});  
