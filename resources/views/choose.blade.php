<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>انتخاب محصول</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('favicon.ico') }}" rel="icon" type="image/x-icon">
</head>
<body class="overflow-hidden d-flex align-items-center justify-content-center">
<style>
    .has-error {
        border-bottom: 2px solid red;
    }

    .error-message {
        color: red;
        margin-top: 5px;
    }
</style>

<div class="container mt-5 max-w-[350px] text-center">
    <h3 class="text-center mb-3">لطفا شناسه محصول را وارد کنید</h3>

    <form action="{{ route('product.choose') }}" method="post">
        @csrf

        <div class="mb-3">
            <input type="text" id="product_id" name="product_id" class="form-control text-center" inputmode="numeric" required>
            <div id="product_id-error" class="error-message"></div>
        </div>

        <button type="submit" id="submitBtn" class="btn btn-primary w-100" disabled>تایید شناسه</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#product_id').on('input', function () {
            // Remove non-numeric characters
            var sanitizedValue = $(this).val().replace(/[^0-9]/g, '');

            // Display error message if input is invalid
            if ($(this).val() !== sanitizedValue) {
                $('#product_id-error').text('لطفا شناسه معتبر متشکل از اعداد انگلیسی وارد کنید!');
                $(this).addClass('has-error');
                $('#submitBtn').prop('disabled', true); // Disable the submit button
            } else {
                $('#product_id-error').text('');
                $(this).removeClass('has-error');
                $('#submitBtn').prop('disabled', false); // Enable the submit button
            }

        });
    });
</script>

</body>
</html>
