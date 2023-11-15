var res = document.querySelector('.active');
res.style.backgroundColor = "#8C3826";
res.style.color = "white";

function lastD() {
    const date = new Date(document.lastModified);
    const month = date.getMonth() + 1
    $('footer').append('<span>Last Modified: ' + date.getFullYear() + '/' + month + '/' + date.getDate() + '</span>');
}
lastD();

//alert is only shown once
$(document).ready(function() {
    // was working on sessions variables to show only show once per session. NOT WORKING YET
    sessionStorage.setItem('alertShown', false);
    $('#mug-club').mouseover(function() {
        if(sessionStorage.getItem('alertShown') != 'true') {
            alert('JavaJam Mug Club Members get a 10% discount on each cup of coffee!');
            sessionStorage.setItem('alertShown', true);
        }
    });
});
var popUpShown = false
console.log(popUpShown);

if(popUpShown === false) {
    $(document).ready(function() {
        $('#sb-btn').click(function() {
            const uinput = $('#age-input').val();
            try {
                result = Number(uinput);
            } catch(error) {
                console.log('error converting string.')
            }
            // probably not the best way to do this but it works. 
            if(result === 0) {
                $('#in-title').text('Please enter an integer:');
            } else {
                checkAge(result);
                popUpShown = true
                $('#pop-up').hide();
                console.log(popUpShown);
            }
        });
    });
}


function checkAge(age) {
    if(age >= 65) {
        $('#mp').append(' Free Friday Coffee Night for Seniors!');
    } else {
        $('#mp').append(" Enjoy Music and Make Memories!");
    }
}

