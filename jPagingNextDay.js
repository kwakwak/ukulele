$(document).ready(function(){  
     
        d=1;
        lastStop=0;
        dayNum= $('#1').val()


    
    stop=parseInt(dayNum)+parseInt(lastStop);
    start=lastStop;  
    
    
    $('#content').children().css('display', 'none').slice(start,stop).css('display', 'block');  

    $('#lastStop').val(stop);  
});  

function next(){ 

    d++;
    lastStop=$('#lastStop').val();
    dayNum= $('#'+d).val(); 
      if (isNaN(dayNum)){
          location.reload(true);
      }
    
    stop=parseInt(dayNum)+parseInt(lastStop);
    start=lastStop;  
    
    
    $('#content').children().css('display', 'none').slice(start,stop).css('display', 'block');  

    $('#lastStop').val(stop);   
}