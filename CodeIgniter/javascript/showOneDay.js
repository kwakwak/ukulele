$(document).ready(function(){
    lastDay=$('#lastDay').val();
    day=$('#currentDay').val();
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
    $('#date').html(day+"/1/13");
}