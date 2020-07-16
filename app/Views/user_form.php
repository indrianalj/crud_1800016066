<!DOCTYPE html>
<html>

<head>
    <title>Simple Login Form Template | Tutorial Jinni</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: #3498db;
            margin: 0 auto 0 auto;
            width: 100%;
            text-align: center;
            margin: 20px 0px 20px 0px;
        }

        p {
            font-size: 12px;
            text-decoration: none;
            color: #ffffff;
        }

        h1 {
            font-size: 1.5em;
            color: #525252;
        }

        .box {
            background: white;
            width: 300px;
            border-radius: 6px;
            margin: 0 auto 0 auto;
            padding: 0px 0px 70px 0px;
            border: #2980b9 4px solid;
        }

        .username {
            background: #ecf0f1;
            border: #ccc 1px solid;
            border-bottom: #ccc 2px solid;
            padding: 8px;
            width: 250px;
            color: #AAAAAA;
            margin-top: 10px;
            font-size: 1em;
            border-radius: 4px;
        }

        .button {
            background: #2ecc71;
            width: 125px;
            padding-top: 5px;
            padding-bottom: 5px;
            color: white;
            border-radius: 4px;
            border: #27ae60 1px solid;
            margin-top: 20px;
            margin-bottom: 20px;
            float: left;
            margin-left: 88px;
            font-weight: 800;
            font-size: 0.8em;
        }

        .button:hover {
            background: #2CC06B;
        }

        .fpwd {
            color: #f1c40f;
            text-decoration: underline;
        }

        #absoluteCenteredDiv {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            width: 400px;
            height: 300px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="absoluteCenteredDiv">
        <form action="<?= base_url('login/login_action'); ?>" method="POST">
            <div class="box">
                <h1>Login Form</h1>
                <input class="username" id="username" name="username" type="text" placeholder="User Name">
                <input class="username" id="password" name="password" type="password" placeholder="Password">

                <div><button class="button" type="submit">
                        Login
                    </button>
                </div>

            </div>
            <div class="text-center p-t-90">
                <p>
                    <?php if (!empty(session()->getFlashdata('gagal'))) { ?>
                        <div class="alert alert-warning">
                            <?= session()->getFlashdata('gagal') ?>
                        </div>
                    <?php } ?>
                </p>
            </div>
        </form>
        <p>Forgot your password? <a class="fpwd" href="#">Click Here!</a></p>
    </div>
</body>

</html>