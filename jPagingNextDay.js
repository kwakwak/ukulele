$(document).ready(function(){  
     
        d=1;
        lastStop=0;
        dayNum= eventByDay[1];


    
    stop=parseInt(dayNum)+parseInt(lastStop);
    start=lastStop;  
    
    
    $('#content').children().css('display', 'none').slice(start,stop).css('display', 'block');  

    $('#lastStop').val(stop);  
});  

function next(){ 

    d++;
    lastStop=$('#lastStop').val();
    dayNum=  eventByDay[d];
      if (isNaN(dayNum)){
          location.reload(true);
      }
    
    stop=parseInt(dayNum)+parseInt(lastStop);
    start=lastStop;  
    
    
    $('#content').children().css('display', 'none').slice(start,stop).css('display', 'block');  

    $('#lastStop').val(stop);   
}