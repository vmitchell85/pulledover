<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="Pulled Over records your audio and notifies your friends when you get pulled over.">
        <meta name="author" content="Matt Stauffer">
        <meta name="viewport" content="width=device-width">

        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

        <style>
            html { font-size: 12px; }
            .logo { clear: both; width: auto; display: block; margin-top: 8rem; }
            @media only screen and (min-width: 600px) {
                html { font-size: 16px; }
                .logo { clear: none; margin-top: 3rem; }
                .logo img { max-width: 100%; }
            }
            p, li { font-size: 1.375rem; }
            .the-goal, .call-now { font-size: 1.75rem; }
        </style>

        <title>Pulled Over</title>
    </head>
    <body>
        <div class="container">
            <div class="header clearfix row col-md-8 col-md-push-2">
                <nav class="pull-right" style="margin-top: 1em;">
                    <a class="btn btn-primary btn-lg" href="/register">Sign Up</a>
                    <a class="btn btn-default btn-lg" href="/login">Sign In</a>
                </nav>
                <h1 class="logo"><img src="pulledover-logo.png"></h1>
            </div>

            <div class="row col-md-8 col-md-push-2">
                <p class="well the-goal"><strong>What does it do?</strong><br>Pulled Over is a phone number (<a href="tel:+18443116837">1-844-311-OVER</a>) provided for free to any registered users. Save the number on your phone, and call it on speakerphone next time you're being pulled over by the police and worried for your safety. Once you hang up, it will send a recording of everything that happened to you and your friends.</p>

                <p class="well the-goal"><strong>What's the goal?</strong><br>To provide a free app that is simple to set up and allows you to turn it on when you get pulled over. It will notify your friends or family, start recording audio, and hopefully also capture geographic coordinates.</p>

                <p><strong>The reason</strong>: I've talked to a lot of people very close to me, especially women of color, who are legitimately terrified of what might happen if they get pulled over by a cop in the U.S. (and no, not all cops are bad, etc. etc., but this is still a completely legitimate fear). While this tool can't alleviate that terror, I hope it can at least be a first step towards helping.</p>
                <p><strong>How it will eventually work</strong>: That's still up on the air, but my dream: A mobile app with a big red button. Press the button, it texts your friends with your location. Then it records everything until you stop it (with a passcode). After it's disabled, it'll text you and your friends a link to the recording.</p>

                <p><strong>Questions:</strong></p>
                <ul>
                    <li><strong>How can I help?</strong> If you're a coder, make some <a href="http://github.com/mattstauffer/pulledover">pull requests</a> (or if you're a mobile developer, message me at <a href="http://twitter.com/stauffermatt">@stauffermatt</a>). If you have money and want to support this, message me at <a href="http://twitter.com/stauffermatt">@stauffermatt</a></li>
                    <li><strong>How you can you afford this?</strong> Right now I'm just going to cover it. If people abuse it I may have to shut it down. If it gets legitimately popular I may seek sponsorship from like-minded people (not advertisers, but people who care about civil liberties).</li>
                    <li><strong>When will the real app be ready?</strong> As soon as I can make time for it. I'll be adding to it incrementally every day as quickly as I can find free time. I don't plan to make money from this, though, so it can't take too much time from my day job.</li>
                </ul>
                <br><hr><br>
                <p class="footer">Built by <a href="http://mattstauffer.co/">Matt Stauffer</a>, powered by <a href="http://twilio.com/">Twilio</a> and <a href="http://laravel.com/">Laravel</a>.<br>source on <a href="http://github.com/mattstauffer/pulledover">GitHub.com/mattstauffer/pulledover</a></p>
            </div>
        </div>
        @if (app()->environment() === 'production')
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-65620560-1', 'auto');
          ga('send', 'pageview');
        </script>
        @endif
    </body>
</html>
