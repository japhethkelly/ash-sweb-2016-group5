function submitAjax() {
    if (confirm('Do You Want To Save Your Progress ?')) {
        var fd = new FormData();

        for (var i = 1; i <= 6; i++) {
            if (document.getElementById("upload" + i).value !== "") {
                var file_data = $("#upload" + i)[0].files;
                fd.append("upload" + i, file_data[0]);
            }
        }

        var other_data = $('form').serializeArray();
        $.each(other_data, function (key, input) {
            fd.append(input.name, input.value);
        });
        $.ajax({
            url: 'ajaxFormSubmit.php',
            data: fd,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function (data) {
                alert(data);
            }
        });
    }
}