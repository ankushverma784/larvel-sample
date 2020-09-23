
$(document).ready(function() {
    $('#uploadButton').on('click',function(evt){
         evt.preventDefault();
         $('#fileUploadInput').click();
        
        });

        //  console.log('test');
        // this.openpageshow = $('#fileUploadInput').val();
        // this.(#show) = $('#fileUploadInput').val();
        $("#uploadButton").change(function(){
            var text = $('#fileUploadInput').val();
            $('#showFileName').val(text);
        });
       
        
             $( "#uploadeButton" ).change(function( event ) {
                  event.preventDefault();   
                 var filevar=document.getElementById("file").files[0];   
                 var reader=new FileReader() ;
                 console.log(filevar.name);
                 console.log(filevar.size);
                 console.log(filevar.type);
                 var file_contents= reader.readAsArrayBuffer(filevar);
                 console.log(file_contents);      
    
            });   
     
    

   

});
