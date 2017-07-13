
/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */



$(document).ready(function () {

    function validForm(value) {
        var arrayErrors = [];
        // var value="             07/05/2017 09:54          ";

        var value = value.trim();

        if (value.length === 0) { /// input empty
            arrayErrors["dd"] = ["empty"];
            arrayErrors["m"] = ["empty"];
            arrayErrors["yyyy"] = ["empty"];
            arrayErrors["hh"] = ["empty"];
            arrayErrors["mm"] = ["empty"];
            //  arrayErrors["ss"] = ["empty"];
            //console.debug(arrayErrors);
            return arrayErrors;
        }


        var myArray = value.split(" ");
        var date = myArray[0];
        var time = myArray[1];
        var arrayDate = date.split("/");
        var dd = arrayDate[0]; // day
        //console.log("day is: "+dd);
        var m = arrayDate[1];//month
        //console.log("month is: "+m);
        var yyyy = arrayDate[2]; // years
        //console.log("years is: "+yyyy);
        var arrayTime = time.split(":");
        var hh = arrayTime[0]; //hours
        //console.log("hours is: "+hh);
        var mm = arrayTime[1]; // minute
        //console.log("minute is: "+mm);
        //var ss = arrayTime[2]; //seconds
        //console.log("seconds is: "+ss);

        function isInteger(value) {
            if (isNaN(value)) {
                return false;
            }
            var x = parseFloat(value);
            return (x | 0) === x;
        }

        function isNotEmpty(value) {
            var value = value.trim();
            if (value != "") {
                return true;
            }
            return false;
        }

        /// validation day
        if (!isNotEmpty(dd)) {
            arrayErrors["dd"] = ["empty"];
        }
        if ((isInteger(dd)) && (  parseInt(dd, 10) <= 31) && (1 <= parseInt(dd, 10) )) {/*console.log("valid day");*/
        }
        else {
            arrayErrors["dd"] = ["invalid"];
            /*console.log("invalid day");*/
        }
        /// validation month
        if (!isNotEmpty(m)) {
            arrayErrors["m"] = ["empty"];
        }
        if ((isInteger(m)) && (  parseInt(m, 10) <= 12) && (1 <= parseInt(m, 10) )) {/*console.log("valid month");*/
        }
        else {
            arrayErrors["m"] = ["invalid"];
            /*console.log("invalid month");*/
        }
        /// validation years
        if (!isNotEmpty(yyyy)) {
            arrayErrors["yyyy"] = ["empty"];
        }
        if ((isInteger(yyyy)) && (  parseInt(yyyy, 10) <= 2100) && (2000 <= parseInt(yyyy, 10) )) {/*console.log("valid years");*/
        }
        else {
            arrayErrors["yyyy"] = ["invalid"];
            /*console.log("invalid years");*/
        }
        /// validation hours
        if (!isNotEmpty(hh)) {
            arrayErrors["hh"] = ["empty"];
        }
        if ((isInteger(hh)) && (  parseInt(hh, 10) <= 24) && (0 <= parseInt(hh, 10) )) {/*console.log("valid hours");*/
        }
        else {
            arrayErrors["hh"] = ["invalid"];
            /*console.log("invalid hours");*/
        }
        /// validation minute
        if (!isNotEmpty(mm)) {
            arrayErrors["mm"] = ["empty"];
        }
        if ((isInteger(mm)) && (  parseInt(mm, 10) <= 60) && (0 <= parseInt(mm, 10) )) {/*console.log("valid minute");*/
        }
        else {
            arrayErrors["mm"] = ["invalid"];
            /*console.log("invalid minute");*/
        }
        /// validation seconds
        if (!isNotEmpty(ss)) {
            arrayErrors["ss"] = ["empty"];
        }
        if ((isInteger(ss)) && (  parseInt(ss, 10) <= 60) && (0 <= parseInt(ss, 10) )) {/*console.log("valid seconds");*/
        }
        // else {
        //     arrayErrors["ss"] = ["invalid"];
        //     /*console.log("invalid seconds");*/
        // }
        // console.debug(arrayErrors);
        return arrayErrors;
    }




    $("div#step1-actions a").click(function () {
        $("div#step1-span_choose_rdv span").css({"color": "#787878"});
        var selectedDate = $("div#datetimepicker5 input").val();
        var selectedDate = selectedDate.trim();

        var btns1= $("form#bookingForm div.form-group__field input:radio").eq(0);
        var btns2= $("form#bookingForm div.form-group__field input:radio").eq(1);
        if($(btns1).is(':checked')){
            var type ="NOUVELLE CONSULTATION ";
        }
        else if($(btns2).is(':checked')){
            var type ="RENOUVELLEMENT TRAITEMENT";
        }

        if (selectedDate.length === 0) {
            $("div#step1-span_choose_rdv span").css({"color": "red"});

            return false;
        }

        else{
            var selectedDate = selectedDate.replace("/", "-");
            var selectedDate = selectedDate.replace("/", "-");
            $.ajax({
                type: 'get',
                datatype: "json",
                url: Routing.generate('valider_RDV', {'date': selectedDate,'type':type}),
                beforeSend: function () {

                },
                success: function (data) {

                    data = JSON.parse(data);
                }
            });
        }

    });



});