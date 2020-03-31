<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('css/all.css')}}">
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
            .havecheck span{
                width:20px;
                height:20px;
                text-align: center;
                line-height:20px;
                display: inline-block;
                border:1px solid #333;
            }

            @font-face {
                font-family: 'fontawesome3';
                src: url('fonts/fontawesome-webfont.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
            }
            .fa {
                display: inline;
                font-style: normal;
                font-variant: normal;
                font-weight: normal;
                font-size: 14px;
                line-height: 1;
                font-family: FontAwesome;
                font-size: inherit;
                text-rendering: auto;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
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
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Client 1</th>
                            <th>Client 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Title</td>
                            <td class="havecheck">
                                <i class="far fa-check-square"></i>Dr
                                <i class="far fa-square"></i>Mdm
                                <i class="far fa-square"></i>Mr
                                <i class="far fa-square"></i>Ms
                                <i class="far fa-square"></i>Mrs
                            </td>
                            <td class="havecheck">
                                <i class="far fa-square"></i>Dr
                                <i class="far fa-square"></i>Mdm
                                <i class="far fa-square"></i>Mr
                                <i class="far fa-check-square"></i>Ms
                                <i class="far fa-square"></i>Mrs
                            </td>
                        </tr>
                        <tr>
                            <td>Name<br/><i>(as in NRIC / Passport)</i></td>
                            <td>Ng Zhao Wei</td>
                            <td>Chai Peiyu Jessie</td>
                        </tr>
                        <tr>
                            <td>Relationship toClient 1</td>
                            <td></td>
                            <td><i class="far fa-check-square"></i>Spouse
                                <i class="far fa-square"></i>Child
                                <i class="far fa-square"></i>Parent
                                <i class="far fa-square"></i>Others:............
                            </td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td><i class="far fa-check-square"></i>Male
                                <i class="far fa-square"></i>Female
                            </td>
                            <td><i class="far fa-square"></i>Male
                                <i class="far fa-check-square"></i>Female
                            </td>
                        </tr>
                        <tr>
                            <td>NRIC/Passport No.</td>
                            <td>S9021762C</td>
                            <td>S9027905Z</td>
                        </tr>
                        <tr>
                            <td>Nationality</td>
                            <td>Singaporean</td>
                            <td>Singaporean</td>
                        </tr>
                        <tr>
                            <td>Residency Status<br/>
                                <i>(To fill up if nationality is not Singaporean)</i>
                            </td>
                            <td><i class="far fa-square"></i>Singapore PR
                                <i class="far fa-square"></i>Employment Pass
                                <i class="far fa-square"></i>S-Pass
                                <i class="far fa-square"></i>Work Permit
                                <i class="far fa-square"></i>Dependant's Pass
                                <i class="far fa-square"></i>Student Pass
                                <i class="far fa-square"></i>Others: N/A
                            </td>
                            <td><i class="far fa-square"></i>Singapore PR
                                <i class="far fa-square"></i>Employment Pass
                                <i class="far fa-square"></i>S-Pass
                                <i class="far fa-square"></i>Work Permit
                                <i class="far fa-square"></i>Dependant's Pass
                                <i class="far fa-square"></i>Student Pass
                                <i class="far fa-square"></i>Others: N/A
                            </td>
                        </tr>
                        <tr>
                            <td>Date of Birth<br/>
                                <i>(DD/MM/YYYY)</i>
                            </td>
                            <td>20-06-1990</td>
                            <td>17-07-1990</td>
                        </tr>
                        <tr>
                            <td>Marital Status</td>
                            <td>
                                <i class="far fa-square"></i>Single
                                <i class="far fa-check-square"></i>Married
                                <i class="far fa-square"></i>Widowed
                                <i class="far fa-square"></i>Divorced
                            </td>
                            <td>
                                <i class="far fa-square"></i>Single
                                <i class="far fa-check-square"></i>Married
                                <i class="far fa-square"></i>Widowed
                                <i class="far fa-square"></i>Divorced
                            </td>
                        </tr>
                        <tr>
                            <td>Smoker</td>
                            <td><i class="far fa-square"></i>Yes
                                <i class="far fa-check-square"></i>No
                            </td>
                            <td><i class="far fa-square"></i>Yes
                                <i class="far fa-check-square"></i>No
                            </td>
                        </tr>
                        <tr>
                            <td>Employment Status</td>
                            <td>
                                <i class="far fa-square"></i>Full Time
                                <i class="far fa-check-square"></i>Part Time
                                <i class="far fa-square"></i>Self-Employed
                                <i class="far fa-square"></i>Retired
                                <i class="far fa-square"></i>Unemployed
                                <i class="far fa-square"></i>Others:............
                            </td>
                            <td>
                                <i class="far fa-square"></i>Full Time
                                <i class="far fa-check-square"></i>Part Time
                                <i class="far fa-square"></i>Self-Employed
                                <i class="far fa-square"></i>Retired
                                <i class="far fa-square"></i>Unemployed
                                <i class="far fa-square"></i>Others:............
                            </td>
                        </tr>
                        <tr>
                            <td>Occupation<br/> 
                                <i>(If Retired, please indicate previous occupation)</i>
                            </td>
                            <td>Associate Manager</td>
                            <td>E-Commerce Sales & Marketing</td>
                        </tr>
                        <tr>
                            <td>Company Name</td>
                            <td>LegacyFA Pte Ltd</td>
                            <td>Modern Link Pte Ltd</td>
                        </tr>
                        <tr>
                            <td>Business Nature</td>
                            <td>Financial Services</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Annual Income Range (S$)</td>
                            <td>
                                <i class="far fa-square"></i>0 - 29,999
                                <i class="far fa-square"></i>30,000 - 49,999
                                <i class="far fa-check-square"></i>50,000 - 99,999
                                <i class="far fa-square"></i>100,000 - 149,999
                                <i class="far fa-square"></i>150,000 - 299,999
                                <i class="far fa-square"></i>300,000 & above
                            </td>
                            <td>
                                <i class="far fa-square"></i>0 - 29,999
                                <i class="far fa-square"></i>30,000 - 49,999
                                <i class="far fa-check-square"></i>50,000 - 99,999
                                <i class="far fa-square"></i>100,000 - 149,999
                                <i class="far fa-square"></i>150,000 - 299,999
                                <i class="far fa-square"></i>300,000 & above
                            </td>
                        </tr>
                        <tr>
                            <td>Contact Details</td>
                            <td>
                                <p><span class="title-number">Home:</span><span class="infonumber"></span></p>
                                <p><span class="title-number">Mobile:</span><span class="infonumber">9777 2795</span></p>
                                <p><span class="title-number">Office:</span><span class="infonumber"></span></p>
                                <p><span class="title-number">Fax:</span><span class="infonumber"></span></p>
                            </td>
                            <td>
                                <p><span class="title-number">Home:</span><span class="infonumber"></span></p>
                                <p><span class="title-number">Mobile:</span><span class="infonumber">9680 7570</span></p>
                                <p><span class="title-number">Office:</span><span class="infonumber"></span></p>
                                <p><span class="title-number">Fax:</span><span class="infonumber"></span></p>
                            </td>
                        </tr>
                        <tr>
                            <td>E-mail Address <br />
                                <i>(Compulsory for Investment Products)</i>
                            </td>
                            <td>ngz.weiwei@gmail.com</td>
                            <td>jessiechai90@gmail.com</td>
                        </tr>
                        <tr>
                            <td>Residential Address</td>
                            <td>Blk 717 Woodlands Drive 70, #05-110, Singapore 730717</td>
                            <td>Blk 717 Woodlands Drive 70, #05-110, Singapore 730717</td>
                        </tr>
                        <tr>
                            <td>Mailing Address <br/>
                                <i>(If different from Residential Address)</i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="section2 section-step">
                <h3>1.1 Client(s) Information</h3>
                <h5>Would you like your Dependant(s) to be taken into consideration for the Needs Analysis and Recommendation(s)?</h5>
                <p><i class="far fa-square"></i>Yes
                <i class="far fa-check-square"></i>No   (please complete the details below)</p>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Relationship</th>
                            <th>Date of Birth</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Years to Support</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><i class="far fa-square"></i>M
                                <i class="far fa-square"></i>F</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><i class="far fa-square"></i>M
                                <i class="far fa-square"></i>F</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><i class="far fa-square"></i>M
                                <i class="far fa-square"></i>F</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><i class="far fa-square"></i>M
                                <i class="far fa-square"></i>F</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><i class="far fa-square"></i>M
                                <i class="far fa-square"></i>F</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><i class="far fa-square"></i>M
                                <i class="far fa-square"></i>F</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="section3 section-step">
                <h3>1.3 Client Accompaniment Assessment</h3>
                <table>
                    <thead>
                        <th></th>
                        <th>Client 1</th>
                        <th>Client 2</th>
                    </thead>
                    <tbody>
                        <tr>
                        
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</body>
</html>