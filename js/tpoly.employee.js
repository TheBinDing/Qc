(function ( $ ) {
    if (top.location != location) {
        top.location.href = document.location.href ;
    }

    $('#data_1 .input-group.date').datepicker({
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true
    });
    $('#working').datepicker({
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true
    });

    $("#Bank1").click(function(){
        $('#Bank').prop('disabled',true);
        $('#BankBranch').prop('disabled',true);
        $('#AccountNumber').prop('disabled',true);
    });
    $("#Bank2").click(function(){
        $('#Bank').prop('disabled',false);
        $('#BankBranch').prop('disabled',false);
        $('#AccountNumber').prop('disabled',false);
    });
    $('#People1').click(function(){
        $('#PeopleCard').css('display', '');
        $('#dataCard').css('display', '');
        $('#PeoplePass').css('display', 'none');
        $('#dataPass').css('display', 'none');
    })
    $('#People2').click(function(){
        $('#PeopleCard').css('display', 'none');
        $('#dataCard').css('display', 'none');
        $('#PeoplePass').css('display', '');
        $('#dataPass').css('display', '');
    })
    $('#Status2').click(function(){
        $('#dataBlacklist').css('display', '');
    })
    $('#Status1').click(function(){
        $('#dataBlacklist').css('display', 'none');
    })
} (jQuery));