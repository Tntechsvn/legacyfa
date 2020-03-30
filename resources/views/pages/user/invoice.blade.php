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
            <div class="content-section2">
                <div class="title2">Important Notice to Client</div>
                <div class="aboutus1">
                    <h3>About Legacy FA Private Limited</h3>
                    <p>Legacy FA Private Limited ("Legacy FA") is a Licensed Financial Adviser authorised under the Financial Advisers Act ("FAA") to conduct the following regulated activities:</p>
                    <ul>
                        <li>Advising others, either directly or through publications or writings, and whether in electronic, print or other form, concerning the following investment products, other than -<br/>
                        (i) in the manner specified in paragraph 2 of the Second Schedule to the Financial Advisers Act (Cap. 110); or<br/>
                        (ii) advising on corporate finance within the meaning of the Securities and Futures Act (Cap. 289)
                            <ul>
                                <li>Life policies</li>
                                <li>Collective investment schemes</li>
                            </ul>    
                        </li>
                        <li>Advising others by issuing or promulgating research analyses or research reports, whether in electronic, print or other form, concerning the following investment products
                            <ul>
                                <li>Life policies</li>
                                <li>Collective investment schemes</li>
                            </ul>
                        </li>
                        <li>Marketing of any collective investment scheme</li>
                        <li>Arranging of any contract of insurance in respect of life policies</li>  
                    </ul>
                    <p>For full range of our services and list of our product partners, please visit our website at www.legacyfa-asia.com.</p>
                </div>
                <div class="aboutus1">
                    <p>Your Legacy FA Representative is issued with a Representative Number by the Monetary Authority of Singapore (MAS) to conduct regulated activities under the Financial Advisers Act and is authorized to arrange contracts and provide advice on the following products:</p>
                    <ul>
                        <li>Life Insurance</li>
                        <li>Health Insurance</li>
                        <li>Investment-linked Plans</li>
                        <li>Collective Investment Schemes (e.g. Unit Trust)</li>
                    </ul>
                    <p>Your Legacy FA Representative must have sufficient information before making a suitable recommendation. The information that you provide on your investment objectives, financial situation and your particular needs will be the basis on which advice and recommendation(s) will be given. If there have been any changes in your circumstances since completing this 'Personal Financial Record', please notify your Legacy FA Representative as it may affect the needs analysis process. The recommendations made for you may not be appropriate in the event of a partial or inaccurate completion of this 'Personal Financial Record'.</p>
                    <p>All the information provided in your 'Personal Financial Record' is strictly confidential and is only to be used for the purpose of gathering information to recommend suitable products and services, and not be used for any other purposes.</p>
                </div>
            </div>
        </div>
        <div class="content-section3">
            <div class="section1">
                <h1>Section 1. Personal Information</h1>
                <h3>1.1 Client(s) Information</h3>
            </div>
        </div>
</body>
</html>