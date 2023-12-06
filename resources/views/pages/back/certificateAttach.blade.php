<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Certificate</title>
    <style type="text/css">
        #image {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        #id{
            position: absolute;
            bottom: 26.4%;
            left: 37%;
            font-weight: 600;
            font-size: 13px;
        }
        #valid{
            position: absolute;
            bottom: 32%;
            left: 35.5%;
            font-weight: 600;
            font-size: 13px;
        }
        #expiration{
            position: absolute;
            bottom: 29%;
            left: 34.5%;
            font-weight: 600;
            font-size: 13px;
        }
        #container{
            position: relative;
        }
        #holder{
            position: absolute;
            top: 31%;
            width: 100%;
            text-align: center;
            font-size: 50px;
            font-weight: 600;
        }
    </style>
</head>
<body>

<div id="container">
    <img src="https://irish-safetytraining.com/images/certificate/certificate.jpg" id="image" alt="">
    <div id="holder">{{$holder->name}}</div>
    <div id="id">{{$certificate[0]->unique_id}}</div>
    <div id="valid">{{$certificate[0]->valid_from}}</div>
    <div id="expiration">{{$certificate[0]->expiration_date}}</div>
</div>

</body>
</html>
