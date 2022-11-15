<form id="frmEnviarCorreoPcs" method="post">
    @csrf
    <!-- {{ csrf_field() }} -->

    <div class="cta-form mt-none-10">

        <div class="from-group-wrapper mt-10">
            <div class="form-group mt-10">
                <label for="name"><i class="fal fa-user"></i></label>
                <input name="name" type="text" id="name" placeholder="Enter your name" required>
            </div>

            <div class="form-group mt-10">
                <label for="number"><i class="fal fa-phone"></i></label>
                <input id="number" tabindex="5" type="tel" name="phone" placeholder="Phone Number" required>
            </div>

        </div>

        <div class="from-group-wrapper mt-10">
            <div class="form-group mt-10">
                <label for="mail"><i class="fal fa-envelope"></i></label>
                <input name="email" type="email" id="mail" placeholder="Enter your email" required>
            </div>

        </div>

        <div class="from-group-wrapper mt-10">
            <div class="form-group">
                <label for="sub"></label>
                <textarea id="subject" name="subject" rows="3" required>Your Message...
         </textarea>

            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="site-btn boxed">Submit Request</button>
        </div>
</form>
</div>





<script>
    $("#frmEnviarCorreoPcs").on("submit", function(e) {
        e.preventDefault();
        var formData = new FormData(document.getElementById("frmEnviarCorreoPcs"));
        var route = "{{ asset('/services') }}";
        var token = $("#token").val();
        $.ajax({
                url: route,
                type: "POST",
                dataType: "json",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            })
            .done(function(resp) {
                if (resp.tipo == "success") {
                    toastr["success"](resp.mensaje, resp.titulo);
                }

            })
            .fail(function(data) {
                if (data.responseJSON) {
                    $.each(data.responseJSON.errors, function(key, value) {
                        $('#' + key + 'Validation').html(value);
                        $('#' + key).addClass("is-invalid")
                        toastr["error"](value, "Error");
                    });
                }
                if (data.status == 500) {
                    swal.fire({
                        title: 'Error...',
                        text: 'Error with the message server, please try again later',
                        icon: 'error',
                        buttons: false,
                        timer: 7500,
                        showCancelButton: false,
                        showConfirmButton: false,
                    });
                }
            });
    });
</script>
