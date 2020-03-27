<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .title{
                font-size:20px;
            }
            .let4px{
                letter-spacing: 4px;
            }
            /* style for list info client 1*/
            .info-client1 p{
                width:100%;
                clear: both;
            }
            .info-client1 span.title-info-client1{
                width:35%;
                float:left;
                display:block;
                line-height: 25px;
            }
            .info-client1 span.content-info-client1{
                width:65%;
                float:left;
                display:block;
                border:1px solid #333;
                height:25px;
                line-height: 23px;
            }
        </style>

    </head>
    <body>
        <div class="content">
            <div class="logo">
            </div>
            <div class="title">
                <span class="let4px">Personal</span><br/>
                <span>Financial Records</span>
            </div>
            <div class="">All information collected in this financial review will be held in the strictest confidence.</div>
            <div class="info-client1">
                <p><span class="title-info-client1">Name of Client 1:</span><span class="content-info-client1">{{ $data->nameClient }}</span></p>
                <p><span class="title-info-client1">Name of Client 2:</span><span class="content-info-client1"></span></p>
                <p><span class="title-info-client1">Date of Review:<br/>(DD/MM/YYYY)</span><span class="content-info-client1"></span></p>
                <p><span class="title-info-client1">Name of Representative:</span><span class="content-info-client1">{{ $data->nameUserAdd }}</span></p>
                <p><span class="title-info-client1">MAS Representative No:</span><span class="content-info-client1"></span></p>
                <p><span class="title-info-client1">LFA Code:</span><span class="content-info-client1"></span></p>
                <p><span class="title-info-client1">Handphone:</span><span class="content-info-client1"></span></p>
            </div>
        </div>
</body>
</html>