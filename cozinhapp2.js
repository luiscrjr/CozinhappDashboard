var i = 0;

$(function() {
    startRefresh();
});

function fn60sec() {
    // runs every 60 sec and runs on init.
	i=i+1;
	alert("teste"+i);
}
fn60sec();
setInterval(fn60sec, 1*1000);