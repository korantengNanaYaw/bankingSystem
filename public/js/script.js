





function loginAjax() {


        $.ajax(
            {
                type: "POST",
                url: "/EbankingRegister/",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (data) {
                    console.log(data);

                    //loopReservations("");

                },

                error: function (msg) {
                    console.log(msg);
                    //alert(msg.responseText);
                }
            });
    }
$("#acclogin").submit(function(stay){
    var formdata = $(this).serialize(); // here $(this) refere to the form its submitting
    $.ajax({
        type: 'POST',
        url: "/EbankingLogin",
        data: formdata, // here $(this) refers to the ajax object not form
        success: function (data) {

            console.log(data.phone)

            if(data != "does not exist"){


                $('#myModal #modalheaderMessage').html(  "A confirmation code has been sent to   " + ' <span  style="color:green">   ' +  data.phone +  '   </span> '   + " ,enter code to continue ");


                console.log("modal must toggle here somwhere")
                $('#myModal').modal('toggle');

            }else{

                alert("Account does not Exist")
            }


           // alert(data);
        },
    });
    stay.preventDefault();
});
function verifyPin(code){


    console.log(code)
    $.ajax({
        type: 'GET',
        url: "/verifyLoginCode/"+code,
        dataType: 'json',
        success: function (data) {

          console.log(data);


            if(data == 1){

                window.location.href = "dashboard/";

            }else{



            }




            // alert(data);
        },
    });

    
}

function resendPin(){

    $.ajax({
        type:'GET',
        url: "/resendPin/",
        dataType: 'json',
        success: function (data) {

            console.log(data);







            // alert(data);
        },
    });

}