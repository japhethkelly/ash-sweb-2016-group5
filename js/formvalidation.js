/*
 * 
 * @author Japheth Kelly
 * @type Boolean
 * This javascript file validates data entered into the form
 */
var stopVal = false;
function formValidation()
{
    if (!stopVal) {
        stopVal = false;
        var dat = document.irbForm.date;
        var pin = document.irbForm.princinvest;
        var cpin = document.irbForm.coprincinvest1;
        var pid = document.irbForm.princinvestdept;
        var pip = document.irbForm.princinvestphone;
        var dal = document.irbForm.deadline;
        var pass = false;

        if (allLetter(pin))
        {

            if (allLetter(cpin))
            {
                if (allLetter(pid))
                {
                    if (allnumeric(pip))
                    {

                        if (validateDate(dal))
                        {
                            pass = true;
                        }
                    }
                }
            }
        }
        if (pass == true) {
            return true;
        } else {
            return false;
        }
    }
}
function avoidValidation() {
    stopVal = true;
}

function allLetter(uname)
{
    var letters = /^[A-Za-z]+$/;
    if (uname.value.match(letters))
    {
        return true;
    } else
    {
        alert('Username must have alphabet characters only');
        uname.focus();
        return false;
    }
}
function allnumeric(uzip)
{
    var numbers = /^[0-9]+$/;
    if (uzip.value.match(numbers))
    {
        uzip.style.borderColor = "green";
        return true;
    } else
    {
        alert('Please Enter Numbers Only');
        uzip.style.borderColor = "red";
        uzip.focus();
        return false;
    }
}

function validateDate(dob)
{

    var IsoDateRe = new RegExp("^([0-9]{4})-([0-9]{2})-([0-9]{2})$");
    var matches = IsoDateRe.test(dob.value);
    if (matches === false) {
        alert(matches);
        dob.focus();
        return false;
    } else {
        return true;
    }

}




