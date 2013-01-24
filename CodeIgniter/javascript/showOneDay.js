$(document).ready(function(){
    nowDate = new Date();
    
    month= nowDate.getMonth()+1;
    year=  nowDate.getFullYear();
    
    lastDay=$('#lastDay').val();
    day=$('#currentDay').val();
    if (day==0) day = nowDate.getDate();
    show();
});

function next() {
    day++;
    if (day>lastDay) day=1;
    show();
}
function previous() {
    day--;
    if (day==0) day=lastDay;
    show();
}
function show(){
    $('p[id]').css('display', 'none');
    $('p[id='+day+']').css('display', 'block');
    $('#date').html(day+"/"+month+"/"+year);
}