<script>
    var formData = new FormData();
    // Append the form data to the FormData object
    formData.append("pipewatch_id", $("#pipewatch_id").val());
    
    var picture_detected_files = $("#picture_detected")[0].files;
    var picture_corrective_files = $("#picture_corrective")[0].files;
    var picture_currently_files = $("#picture_currently")[0].files;
    if (picture_detected_files.length > 0) {
        for (var i = 0; i < picture_detected_files.length; i++) {
            formData.append("picture_detected[]", picture_detected_files[i]);
        }
    }

    if (picture_corrective_files.length > 0) {
        for (var i = 0; i < picture_corrective_files.length; i++) {
            formData.append("picture_corrective[]", picture_corrective_files[i]);
        }
    }

    if (picture_currently_files.length > 0) {
        for (var i = 0; i < picture_currently_files.length; i++) {
            formData.append("picture_currently[]", picture_currently_files[i]);
        }
    }

    var send_data = {
        "url": "<?php echo base_url('') ?>",
        "method": "POST",
        "data": formData,
        "contentType": false,
        "processData": false
    }
    console.log(send_data);

    $.ajax(send_data).done(function(response) {
        console.log(response);
        if (response.code == "0x0000-00000") {
            // $(".alert_modal_response").text(response.message);
            // $("#loading").fadeOut("slow");
            // $(".conten-hide").fadeIn("slow");
            location.reload();
        } else if (response.code == "0x0000-00000") {
            $("#loading").fadeOut("slow");
            $(".conten-hide").fadeIn("slow");
            $(".alert_modal_response").text(response.message);
            $('#alert_modal').modal('show');
        } else if (response.code == "0x0000-00001") {
            $(".alert_modal_response").text(response.message);
            $('#alert_modal').modal('show');
        } else if (response.code == "0x0000-00002") {
            $(".alert_modal_response").text(response.message);
            $('#alert_modal').modal('show');
        } else if (response.code == "0x0000-00003") {
            $(".alert_modal_response").text(response.message);
            $('#alert_modal').modal('show');
        } else if (response.code == "8x0000-00000") {
            $(".alert_modal_response").text(response.message);
            $('#alert_modal').modal('show');
        } else if (response.code == "9x0000-00000") {
            $(".alert_modal_response").text(response.message);
            $('#alert_modal').modal('show');
        } else if (response.code == "0x8000-00000") {
            $(".alert_modal_response").text(response.message);
            $('#alert_modal').modal('show');
        } else if (response.code == "0x9000-00000") {
            $(".alert_modal_response").text(response.message);
            $('#alert_modal').modal('show');
        }


    });
    return false;
</script>