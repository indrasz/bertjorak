<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy</title>

</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Noto+Sans:wght@400;700&display=swap");

    :root {
        --dark-1: #101d2e;
        --dark-2: #0f1c2d;
        --dark-3: #1e2a39;
        --grey-1: #6f7781;
        --grey-2: #626a7f;
        --black: #000000;
        --dull-purple: #7f31ff;
        --strong-purple: #8f00ff;
        --soft-purple: #f9faff;
        --noto-sans: 'Noto Sans', sans-serif;
        --montserrat: 'Montserrat', sans-serif;
        --poppins: 'Poppins', sans-serif;
        ;
    }

    body {
        margin: 0;
        padding: 0;
        background-image: url('frontend/images/egocentric-bertjorak.png');
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .privacy-box {
        max-width: 600px;
        background-color: white;
        border-radius: 20px;
        color: black;
        font-family: var(--montserrat);
        padding: 60px 30px;
    }

    .privacy-text {
        padding: 0 20px;
        height: 400px;
        overflow-y: auto;
        font-size: 14px;
        font-weight: 500;
        color: black;
    }

    .privacy-text::-webkit-scrollbar {
        width: 2px;
        background-color: grey;
    }

    .privacy-text::-webkit-scrollbar-thumb {
        background-color: blueviolet;
    }

    .privacy-text h2 {
        text-transform: uppercase;
    }

    .privacy-box h4 {
        font-size: 13px;
        text-align: center;
        padding: 0 40px;
    }

    .privacy-box h4 span {
        color: blueviolet;
    }

    .buttons {
        display: flex;

        align-items: center;
        justify-content: center;
    }

    .btn {
        height: 50px;
        width: calc(50% - 6px);
        border: 0;
        border-radius: 20px;
        font-size: 19px;
        font-weight: 500;
        color: white;
        transition: .3s linear;
    }

    .blue-btn {
        text-align: center;
        background-color: blueviolet;
        font-family: var(--montserrat);
    }

    .gray-btn {
        background-color: #282828;
        font-family: var(--montserrat);
    }

    .btn:hover {
        opacity: .6;
    }
</style>

<body>
    <div class="privacy-box">
        <div class="privacy-text">
            <h2>Privacy Policy</h2>

            <p>Last updated : 2023-05-15</p>

            <p>Hi welcome to bertjorak!</p>

            <p>At Bertjorak, accessible from www.bertjorak.com, one of our main priorities is the privacy of our
                visitors. This Privacy Policy document contains types of information that is collected and recorded by
                Bertjorak and how we use it.</p>
            <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to
                contact us.</p>

            <h2>Log Files</h2>
            <p>Bertjorak follows a standard procedure of using log files. These files log visitors when they visit
                websites. All hosting companies do this and a part of hosting services' analytics. </p>
            <p>The information collected by log files include internet protocol (IP) addresses, browser type, Internet
                Service Provider (ISP), date and time stamp, referring / exit pages, and possibly the number of clicks.
            </p>
            <p>These are not linked to any information that is personally identifiable. The purpose of the information
                is for analyzing trends, administering the site, tracking users' movement on the website, and gathering
                demographic information.</p>

            <h2>Children's Information</h2>
            <p>Another part of our priority is adding protection for children while using the internet. We encourage
                parents and guardians to observe, participate in, and / or monitor and guide their online activity.</p>
            <p>Bertjorak does not knowingly collect any Personal Identifiable Information from children under the age of
                13. If you think that your child provided this kind of information on our website, we strongly encourage
                you to contact us immediately and we will do our best efforts to promptly remove such information from
                our records.</p>
            <h2>Online Privacy Policy Only</h2>
            <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with
                regards to the information that they shared and/or collect in Bertjorak. This policy is not applicable
                to any information collected offline or via channels other than this website.</p>


        </div>
        <h4>I Agree to the <span>Privacy Policy</span> and I read the Privacy Notice</h4>
        <div class="buttons">
            <a href="{{ url('/register') }}" class="btn blue-btn">
                <button class="btn blue-btn">Accept</button>
            </a>
        </div>
    </div>
</body>

</html>
