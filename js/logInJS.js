function logInAjax() {
    var username = document.getElementsByName("username")[0].value;
    var password = document.getElementsByName("password")[0].value;
    
    $.ajax({
        type: "POST",
        url: 'ajaxLogin.php',
        data: "username=" + username + "&password=" + password,
        success: function (data)
        {
            if (data === 'app') {
                alert('Log In Successful');
                window.location = 'applicantHomepage.php';
            } else if (data === 'rev') {
                alert('Log In Successful');
                window.location = 'reviewerHomepage.php';
            } else {
                alert('Invalid Credentials');
            }
        }
    });
}