function SendMail() {
    var params = {
        from_name : document.getElementById("fullname").value,
        email_id : document.getElementById("email_id").value,
        subject : document.getElementById("subject").value,
        message : document.getElementById("message").value
    };
    emailjs.send("service_vgzvb3h", "template_uu1wour", params).then(function (res) {
        alert("Deine Email wurde erfolgreich versendet... " + res.status);
    });
}