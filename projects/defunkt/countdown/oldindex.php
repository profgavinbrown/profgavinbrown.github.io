

<script>

numMinutes = 0.5;

var val = "<?php echo $_GET['m']; ?>";

if ( val != "" ) {
  numMinutes = parseFloat(val);
}


var end = new Date( new Date().getTime() + numMinutes*60000);

    var _tenthsecond = 100;
    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

function dec2bin(dec)
{
    if(dec > 0) {
        return dec.toString(2);
    }
    else {
        //make the number positive
        dec = Math.abs(dec);
        //get the first compliment
        var res = dec ^ parseInt((new Array(dec.toString(2).length+1)).join("1"),2);
        //get the second complimet
        return (res+1).toString(2);
    }
}

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
	
	document.getElementById('countdown').style.background="#660099";

            document.getElementById('countdown').innerHTML = '<br>Welcome to...<br><br>The School of Computer Science<br><br>Open Day and Tech Fair !!<br><br>';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);
        var tenthseconds = Math.floor((distance % _second) / _tenthsecond);

        document.getElementById('countdown').innerHTML = '';
//        document.getElementById('countdown').innerHTML = days + 'days ';
//        document.getElementById('countdown').innerHTML += hours + 'hrs ';
        document.getElementById('countdown').innerHTML += minutes + 'm ';
        document.getElementById('countdown').innerHTML += seconds + '.';
        document.getElementById('countdown').innerHTML += tenthseconds + 's<br><br><br>';

        document.getElementById('countdown').innerHTML += padDigits(dec2bina(minutes),5) + ' : '; //mins
        document.getElementById('countdown').innerHTML += padDigits(dec2bina(seconds), 6) + ' . '; //secs
        document.getElementById('countdown').innerHTML += padDigits(dec2bina(tenthseconds), 4) + ' '; //tenthsec

        document.getElementById('countdown').innerHTML += '<br><br><br>';

        document.getElementById('countdown').innerHTML += (dec2hex(minutes)) + ' : '; //mins
        document.getElementById('countdown').innerHTML += (dec2hex(seconds)) + ' . '; //secs
        document.getElementById('countdown').innerHTML += (dec2hex(tenthseconds)) + ' '; //tenthsec

    }

function dec2bina(dec){
    return (dec >>> 0).toString(2);
}

function dec2hex(n){
    n = parseInt(n); var c = 'ABCDEF';
    var b = n / 16; var r = n % 16; b = b-(r/16); 
    b = ((b>=0) && (b<=9)) ? b : c.charAt(b-10);    
    return ((r>=0) && (r<=9)) ? b+''+r : b+''+c.charAt(r-10);
}

function padDigits(number, digits) {
    return Array(Math.max(digits - String(number).length + 1, 0)).join(0) + number;
}

timer = setInterval(showRemaining, 100);


</script>


<body bgcolor=black>
<center><br><Br><br><br><br><br>

<FONT color=white FACE="courier" size=7>
  <div id="countdown"></div>
</FONT>

