$(document).ready(function(){  

    //hide all the elements inside content div  
      // $('#content').children().css('display', 'none');  
  
});  
  
function showDay(start,stop){  

    //hide all children elements of content div, get specific items and show them  
    $('#content').children().css('display', 'none').slice(start-1,stop).css('display', 'block');  
 
}  