$(document).ready(function(){  
      $(document).on('click', '#btnLoad', function(){  
           var lastid = $(this).data('id');  
           $('#btnLoad').html('Loading...');  
           $.ajax({  
                url:"loaddata.php",  
                method:"POST",  
                data:{
                    lastid:lastid,
                },  
                dataType:"text",  
                success:function(data)  
                {  
                     if(data != '')  
                     {  
                          $('#btnLoad').remove();  
                          $('#board').append(data);  
                     }  
                     else  
                     {  
						    $('#btnLoad').remove();  
                          $('#board').append('<h4>No more data to show</h4>');  
                     }  
                }  
           });  
      });  
 }); 