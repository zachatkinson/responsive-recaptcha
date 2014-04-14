<html>
<head>
    <title>Responsive ReCAPTCHA Demo</title>
    <style>
        /* Make reCAPTCHA image responsive (override inline/embedded styles). */
        div#recaptcha_widget{width:100% !important;}
        form{width: 100%;}
        @media(min-width: 481px){
            form{
                min-width: 460px;
                max-width: 460px;
                margin: 0 auto;

            }
        }
        input, textarea{width :100%;}
        div#recaptcha_image{width:100% !important;height:auto !important;}
        div#recaptcha_image > img{width:100% !important;}
    </style>
</head>
<body>
<p>Welcome to the responsive ReCAPTCHA demo. Resize your window or view this page with different devices to see how the ReCAPTCHA behaves based on viewport size. No styling outside of responsive sizing has been added to keep the code lean and ready for re-use. </p>

<script type="text/javascript">
    var RecaptchaOptions = {
        theme : 'custom',
        custom_theme_widget: 'recaptcha_widget'
    };
</script>

<form action="verify.php" method="post">
    <label for="email">Email</label><br />
    <input type="email" name="email" id="email" required placeholder="Email" tabindex="1" /><br />
    <label for="subject">Subject</label><br />
    <input type="text" name="subject" id="subject"  placeholder="Subject" required tabindex="2" /><br />
    <label for="comments">Comments</label><br />
    <textarea placeholder="Questions or comments." id="comments" name="comments" tabindex="3" required="required"></textarea><br />
    <div id="recaptcha_widget" style="display:none">

        <div id="recaptcha_image"></div>
        <div class="recaptcha_only_if_incorrect_sol" style="color:red">Incorrect please try again<br /></div>

        <label for="recaptcha_response_field" class="recaptcha_only_if_image">Enter the words above:<br /></label>
        <label for="recaptcha_response_field" class="recaptcha_only_if_audio">Enter the numbers you hear:<br /></label>

        <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" tabindex="4" />

        <div><a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a></div>
        <div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
        <div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>

        <div><a href="javascript:Recaptcha.showhelp()">Help</a></div>
        <div>Proudly using <a href="http://www.google.com/recaptcha" target="_blank">Google ReCAPTCHA</a></div>
    </div>


    <script type="text/javascript"
            src="http://www.google.com/recaptcha/api/challenge?k=your_public_key">
    </script>
    <noscript>
        <iframe src="http://www.google.com/recaptcha/api/noscript?k=your_public_key"
                height="300" width="500" frameborder="0"></iframe><br>
        <textarea name="recaptcha_challenge_field" rows="3" cols="40">
        </textarea>
        <input type="hidden" name="recaptcha_response_field" value="manual_challenge">
    </noscript>
    <input type="submit" name="submit" value="Submit" tabindex="5" />
</form>
</body>
</html>
