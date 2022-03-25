<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" type=text/css href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <form class="container" id="registerform" style="width: 30%;">
        <h1>Register</h1>
        <div class="row mb-3">
            <label for="inputusername3" class="col-sm-2 col-form-label">Username:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="user" id="inputusername3" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="inputEmail3" required>
            </div>
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Gender:</legend>
            <div class="col-sm-10">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gen" value="male" id="flexRadioDefault1"
                        required>
                    <label class="form-check-label" for="flexRadioDefault1">Male </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gen" value="female" id="flexRadioDefault2"
                        required>
                    <label class="form-check-label" for="flexRadioDefault2">Female</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gen" value="other" id="flexRadioDefault3"
                        required>
                    <label class="form-check-label" for="flexRadioDefault3">Other</label>
                </div>
            </div>
            </div>
        </fieldset>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Language:</legend>
            <div class="col-sm-10">
                <div class="form-check form-check-inline" id="inlineCheckbox">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="lang[]" value="hindi"
                        checked>
                    <label class="form-check-label" for="inlineCheckbox1">Hindi</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="lang[]" value="
                            english" checked>
                    <label class="form-check-label" for="inlineCheckbox2">English</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="lang[]" value="punjabi"
                        checked>
                    <label class="form-check-label" for="inlineCheckbox3">Punjabi</label>
                </div>
            </div>
           
        </fieldset>
        <div class="row mb-3">
            <label for="inputimg3" class="col-sm-2 col-form-label">Image:</label>
            <div class="col-sm-10">
                <input type="file" id="inputimg3" class="form-control" name="uploadfile">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" id="inputPassword3" required>
            </div>
        </div>
        <button class="btn btn-primary mb-2" type="button" id="signupbtn">SignUp</button>
    </form>


    <script>
    jQuery('#signupbtn').on('click', function() {
        var formdata = jQuery("#registerform").serialize();
        //   console.log(formdata);
        jQuery.ajax({
            url: "insert.php",
            type: "post",
            data: formdata,
            success: function(data) {
                alert(data);
            }
        });
    });
    </script>
</body>
</html>