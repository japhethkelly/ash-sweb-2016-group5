function formValidation()
{

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
//function userid_validation(uid, mx, my)
//{
//    var uid_len = uid.value.length;
//    if (uid_len == 0 || uid_len >= my || uid_len < mx)
//    {
//        alert("User Id should not be empty / length be between " + mx + " to " + my);
//        uid.focus();
//        return false;
//    }
//    return true;
//}
//function passid_validation(passid, mx, my)
//{
//    var passid_len = passid.value.length;
//    if (passid_len == 0 || passid_len >= my || passid_len < mx)
//    {
//        alert("Password should not be empty / length be between " + mx + " to " + my);
//        passid.focus();
//        return false;
//    }
//    return true;
//}
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
    