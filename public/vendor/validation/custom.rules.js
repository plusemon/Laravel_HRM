jQuery.validator.addMethod(
    "validDOB",
    function(value, element) {
        var from = value.split("-"); // DD MM YYYY
        // var from = value.split("/"); // DD/MM/YYYY
        var day = from[2];
        var month = from[1];
        var year = from[0];
        var age = 18;
        var mydate = new Date();
        mydate.setFullYear(year, month-1, day);

        var currdate = new Date();
        var setDate = new Date();

        setDate.setFullYear(mydate.getFullYear() + age, month-1, day);

        if ((currdate - setDate) > 0){
            return true;
        }else{
            return false;
        }
    },
    "Age must be 18 years old"
);
