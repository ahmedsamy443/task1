<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title> التطبيق البعدي</title>

    <script src="https://kit.fontawesome.com/28ae82ec32.js"></script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../w3.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../Fonts/EARLY_ACCESS.css" rel="stylesheet" />
    <link href="LevelStyle.css" rel="stylesheet" />
    <link href="css/Bootstratp.min.css" rel="stylesheet" />
    <link href="../css/loading.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <!-- <script src="../js/CountDownTimer.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        #ahmed {
            border: 1px solid black;
            width: 1300px;
            height: 85px;
            margin-right: 120px;
            text-align: center;
            margin-top: 20px;

        }

        .ques,
        #questions,#question2 {
            width: 80%;
            height: 450;
            border: 1px solid black;
            background-color: #f7f3e3;
            padding: 20px;
            font-weight: bold;
            font-size: 20px;
            position: relative;
            margin-right: 130px;
        }
    </style>

</head>

<body dir="rtl">

    <div id="ahmed" style="background-color:#80808057;">
        <div class="row" style="padding: 15px;">
            <div style="color:#08089e;font-family:Verdana;font-weight:bold;font-size:25px;" class="col-sm-3" id="timer"> المدة الزمنية : <span id="lblCtime" style="color:08089e;font-family:Verdana;font-weight:bold;font-size:25px;"></span> </div>
            <div style="color:#08089e;font-family:Verdana;font-weight:bold;font-size: 27px;" class="col-sm-6"> الاختبار التحصيلى للمعارف المرتبطة بمهارات البرمجة بلغة سكراتش
            </div>
            <div class="col-sm-3">
                <div style="margin-top: 10px;" class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="40">100</div>
                </div>
            </div>

        </div>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div id="ques" class="ques">
        <div id="UpdatePanel3">

            <div id="Q1panel">
                <div class="text-right" style="padding-right: 1px">
                    <h1 style="font-weight: bold;"> السؤال الأول : اختر الإجابة الصحيحة مما يلى: </h1>
                </div>
                <div class="center">
                    <div>
                        <h3 style="color: #ef03ff; font-size:30px;font-weight: bold;" id="txt-quest"></h3>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio1" value="">
                        <label style="font-size: 25px;margin-right:10px" id="a" class="form-check-label"> apache_get_modules </label>
                    </div><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio2" value="">
                        <label style="font-weight: bold;font-size: 25px;margin-right:10px" id="b" class="form-check-label">samy </label>
                    </div><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio3" value="">
                        <label style="font-weight: bold;font-size: 25px;margin-right:10px" id="c" class="form-check-label">sdsd </label>
                    </div><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio4" value="">
                        <label style="font-weight: bold ;font-size: 25px;margin-right:10px" ; id="d" class="form-check-label">asdasd </label>
                    </div><br>
                </div>
            </div>

        </div>
        <div id="buttonshow">
            <button id='previous' style="display: none;" style='float:right' class='btn btn-primary btn-lg'>السابق </button>
            <button id="next" style="margin-right: 100px;" class="btn btn-success btn-lg">التالى </button>
        </div>
    </div>
    <div id="questions" hidden>
        <div id="UpdatePanel3">

            <div id="Q1panel">
                <div class="text-right" style="padding-right: 1px">
                    <h1 style="font-weight: bold;">السوال الثاني </h1>
                </div>
                <div class="center">
                    <div>
                        <h3 style="color: #ef03ff; font-size:30px;font-weight: bold;">رتب مشروع برمجة اعماق البحار </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6"><img src="./images/سؤال28.gif" alt="this slowpoke moves" style="width: 500px; height:400px" />
                </div>
                <div class="col-sm-6">

                    <table>
                        <tr>
                            <td style="padding: 10px;"><input class="ahmed" type="text" id="hello1" data-index="0"  size="1"></td>
                            <td><img src="./images//لبنات الاختبار6666//24.jpg" alt="this slowpoke moves" </td>

                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input class="ahmed" type="text" data-index="1" size="1"></td>
                            <td><img src="./images/لبنات الاختبار6666/51.jpg" alt="this slowpoke moves" </td>

                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="2" class="ahmed"></td>
                            <td><img src="./images/لبنات الاختبار6666/52.jpg" alt="this slowpoke moves" </td>

                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="3" class="ahmed"></td>
                            <td><img src="./images/لبنات الاختبار6666/53.jpg" alt="this slowpoke moves" </td>

                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="4" class="ahmed"></td>
                            <td><img src="./images/لبنات الاختبار6666/31.jpg" alt="this slowpoke moves" </td>

                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="5" class="ahmed"></td>
                            <td><img src="./images/لبنات الاختبار6666/55.jpg" alt="this slowpoke moves" </td>

                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="6" class="ahmed"></td>
                            <td><img src="./images/لبنات الاختبار6666/56.jpg" alt="this slowpoke moves" </td>

                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="7" class="ahmed"></td>
                            <td><img src="./images/لبنات الاختبار6666/57.jpg" alt="this slowpoke moves" </td>

                        </tr>
                    </table>
                </div>

            </div>

        </div>
        <div id="buttonshow">
            <button id='previous' style="display: none;" style='float:right' class='btn btn-primary btn-lg'>السابق </button>
            <button id="next" style="margin-right: 100px;" class="btn btn-success btn-lg">التالى </button>
        </div>
    </div>


    <div id="question2" hidden>
        <div id="UpdatePanel3">

            <div id="Q1panel">
                <div class="text-right" style="padding-right: 1px">
                    <h1 style="font-weight: bold;"> : السوال الثاني </h1>
                </div>
                <div class="center">
                    <div>
                        <h3 style="color: #ef03ff; font-size:30px;font-weight: bold;">رتب اللبنات الاتية لتصميم حوار القط سكراتش على فترات زمنية مختلفة باستخدام اوامر الرسائل المختلفة ليظهر الاتى وذلك عند :</div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6"><img src="./images/gggggggggggggg.PNG" alt="this slowpoke moves" style="width: 500px; height:400px" />
                </div>
                <div class="col-sm-6">

                    <table>
                        <tr>
                            <td style="padding: 10px;"><input class="ahmed11" type="text" id="hello1" data-index="0"  size="1"></td>
                            <td><img src="./images//لبنات الاختبار6666//81.jpg" alt="this slowpoke moves" </td>

                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input class="ahmed11" type="text" data-index="1" size="1"></td>
                            <td><img src="./images/لبنات الاختبار6666/75.jpg" alt="this slowpoke moves" </td>

                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="2" class="ahmed11"></td>
                            <td><img src="./images/لبنات الاختبار6666/39.jpg" alt="this slowpoke moves" </td>

                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="3" class="ahmed11"></td>
                            <td><img src="./images/لبنات الاختبار6666/77.jpg" alt="this slowpoke moves" </td>

                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="4" class="ahmed11"></td>
                            <td><img src="./images/لبنات الاختبار6666/78.jpg" alt="this slowpoke moves" </td>

                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="5" class="ahmed11"></td>
                            <td><img src="./images/لبنات الاختبار6666/80.jpg" alt="this slowpoke moves" </td>

                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="6" class="ahmed11"></td>
                            <td><img src="./images/لبنات الاختبار6666/82.jpg" alt="this slowpoke moves" </td>

                        </tr>
                        <tr>
                            <td style="padding: 10px;"><input type="text" size="1" data-index="7" class="ahmed11"></td>
                            <td><img src="./images/لبنات الاختبار6666/73.jpg" alt="this slowpoke moves" </td>

                        </tr>
                    </table>
                </div>

            </div>

        </div>
        <div id="buttonshow">
            <button id='previous' style="display: none;" style='float:right' class='btn btn-primary btn-lg'>السابق </button>
            <button id="finish" style="margin-right: 100px;" class="btn btn-success btn-lg">انهاء </button>
        </div>
    </div>



    <script type="text/javascript">
        function startTimer(duration, display) {
            var timer = duration,
                minutes, seconds;
            setInterval(function() {

                if (--timer < 0) {
                    get_result();
                    //timer = duration;
                } else {
                    minutes = parseInt(timer / 60, 10);
                    seconds = parseInt(timer % 60, 10);

                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;

                    display.textContent = minutes + ":" + seconds;

                }
            }, 1000);


        }

        window.onload = function() {
            var fiveMinutes = 60 * 50,
                display = document.querySelector('#lblCtime');
            startTimer(fiveMinutes, display);
            setTimeout(function() {
                $("#ques").hide();
                Swal.fire({
                    icon: 'error',
                    title: 'عزيزي الطالب',
                    text: 'بة وا',
                })
            }, fiveMinutes * 1000);


        };

        //variables
        var qObj = {};
        var qArr = new Array();
        var clicked, count = 0;
        var last_score = 0;

        console.log(' score=' + last_score);
        //0: false 1: true- type 0:t/f 1:mcq
        qObj = {
            id: '1',
            type: '1',
            question: ' يستخدم برنامج Scratch  فى ..............',
            ansA: ' عمل قصص تفاعلية.',
            ansB: 'تصميم رسومات متحركة.',
            ansC: ' تركيب اللبنات مع بعضها البعض',
            ansD: ' جميع ماسبق يعد صحيحاً',
            correct: ' جميع ماسبق يعد صحيحاً',
            selected: ''
        };
        qArr.push(qObj);
        qObj = {
            id: '2',
            type: '1',
            question: ' يمكنك تشغيل برنامج Scratch وجهاز الكمبيوتر متصل بـــ............',
            ansA: 'الطابعة',
            ansB: 'الانترنت',
            ansC: 'ماسح االضوئى.',
            ansD: "السماعات",
            correct: 'الانترنت',
            selected: ''
        };
        qArr.push(qObj);
        qObj = {
            id: '3',
            type: '1',
            question: 'يوجد فى منطقة  ..........اللبنات المستخدمة فى المشروع.',
            ansA: ' التكبير',
            ansB: ' الكائنات',
            ansC: 'المنصة',
            ansD: 'البرمجة',
            correct: 'البرمجة',
            selected: ''
        };
        qArr.push(qObj);
        qObj = {
            id: '4',
            type: '1',
            question: 'منطقة .............يظهر عليها نتيجة مشروعك.',
            ansA: 'المنصة',
            ansB: ' البرمجه',
            ansC: ' شريط القوائم',
            ansD: 'الكائنات',
            correct: 'المنصة',
            selected: ''
        };
        qArr.push(qObj);
        qObj = {
            id: '5',
            type: '1',
            question: 'منطقة .............يظهر عليها نتsdsdsdasdasdيجة مشروعك.',
            ansA: 'المنصة',
            ansB: ' البرمجه',
            ansC: ' شريط القوائم',
            ansD: 'الكائنات',
            correct: 'المنصة',
            selected: ''
        };
        qArr.push(qObj);
        qObj = {
            id: '6',
            type: '1',
            question: 'منطقة .............يظهر sssssssssssssss نتيجة مشروعك.',
            ansA: 'المنصة',
            ansB: ' البرمجه',
            ansC: ' شريط القوائم',
            ansD: 'الكائنات',
            correct: 'المنصة',
            selected: ''
        };
        qArr.push(qObj);



        //init questions 
        //count++;
        var quesnum = 1;
        //console.log(' count=' + qArr[count].question);
        var result = qArr[count - 1]; //qArr.find(x => Number(x.id) === count-1).question;
        var ans = new Array();
        document.getElementById("txt-quest").innerHTML = '<span>' + quesnum + '-' + qArr[0].question + '</span>';
        document.getElementById("a").innerHTML = qArr[0].ansA
        document.getElementById("b").innerHTML = qArr[0].ansB
        document.getElementById("c").innerHTML = qArr[0].ansC
        document.getElementById("d").innerHTML = qArr[0].ansD
        // document.getElementById("a").textContent = document.getElementById('radio1').value;
        //document.getElementById("b").textContent =  document.getElementById('radio2').value;
        // document.getElementById("c").textContent =  document.getElementById('radio3').value;
        // document.getElementById("d").textContent =  document.getElementById('radio4').value;
        //console.log(document.querySelectorAll("input[name='flexRadioDefault']:checked")[0].value)
      //  console.log(document.getElementById('radio1').value)
        var next = document.getElementById("next");
        var previous = document.getElementById("previous")
       // var score = 0;
       
      

        next.addEventListener("click", function(e) {

            if (qArr.length >= 1) {
                $("#previous").css('display', 'inline');

            }

            if (!document.querySelectorAll("input[name='flexRadioDefault']:checked")[0]) {
                e.preventDefault();

                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'من فضلك اختر اجابة للسوال',
                })

            } else

            {
                document.getElementById('radio1').value = document.getElementById("a").textContent;
                document.getElementById('radio2').value = document.getElementById("b").textContent;
                document.getElementById('radio3').value = document.getElementById("c").textContent;
                document.getElementById('radio4').value = document.getElementById("d").textContent;
               // console.log(document.querySelectorAll("input[name='flexRadioDefault']:checked")[0].value)


                if (document.querySelectorAll("input[name='flexRadioDefault']:checked")[0].value == qArr[0].correct) {
                    ++last_score;
                }

                //console.log("lastscore = " +last_score)
                qArr.shift();
                console.log(last_score)
                if ( qArr.length == 2) {

                    
                    document.getElementById("ques").innerHTML = document.getElementById("questions").innerHTML;
                    $("#previous").css('display', 'inline');
                    var anser = [1, 6, 4, 8, 2, 3, 5, 7]
                    var compre = [];
                    var result = 0;
                  // console.log(last_score)
                    $(".ahmed").keyup(function() {
                        compre[$(this).data("index")]=$(this).val();
                       // console.log("hah "+ compre.length,compre);
                    });

                    document.getElementById("next").addEventListener("click",function()
                    {
                        for(let i = 0;i<8;i++)
                        {
                            if(anser[i]==compre[i])
                            {
                                result+=1;
                            }
                        }
                        last_score+=result;
                        console.log(last_score)
                        document.getElementById("ques").innerHTML = document.getElementById("question2").innerHTML;
                        $("#previous").css('display', 'inline');
                        var answer2 = [5,1,4,6,8,2,3,7];
                        var comapre2=[];
                        var result2=0;
                        $(".ahmed11").keyup(function()
                        {
                            comapre2[$(this).data("index")]=$(this).val();
                        })
                        document.getElementById("finish").addEventListener("click",function()
                        {
                            for(let j = 0;j<8;j++)
                        {
                            if(answer2[j]==comapre2[j])
                            {
                                result2+=1;
                            }
                        }
                        last_score+=result2;
                        
                        //alert(last_score)

                        })

                        document.getElementById("finish").addEventListener("click",function()
                    {
                       // alert("ahmed")
                        if (last_score === 4) {
                        document.getElementById('ques').innerHTML =
                        '<div id="Q1pane11">' +
                            '<div class="center" style="padding: 0px">' +
                            '<div class="text-center">' +
                            '<div class="row justify-content-center" style="width: 100%">' +
                            '<img id="img_gold" src="images/try-10.jpg" style="height:400px;width:400px;">' +
                            '</div>' +
                            '<div class="row">' +
                            '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>' +
                            '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>' +
                            '</div>' +
                            '</div>' +
                            '<div class="row justify-content-center" style="border: none">' +
                            '<input type="submit" name="Btn_return" value=" تسليم" id="Btn_return" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'/evan/dashboard.php\',\'_self\');">' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                    } else {
                        document.getElementById('ques').innerHTML =
                        '<div id="Q1pane11">' +
                            '<div class="center" style="padding: 0px">' +
                            '<div class="text-center">' +
                            '<div class="row justify-content-center" style="width: 100%">' +
                            '<img id="img_gold" src="images/Gold.png" style="height:400px;width:400px;">' +
                            '</div>' +
                            '<div class="row">' +
                            '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>' +
                            '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>' +
                            '</div>' +
                            '</div>' +
                            '<div class="row justify-content-center" style="border: none">' +
                            '<input type="submit" name="Btn_return" value=" تسليم" id="Btn_return" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'/evan/dashboard.php\',\'_self\');">' +
                            '</div>' +
                            '</div>' +
                            '</div>';

                    }

                     
                        
                    })

                    })
                   
                    

                }

                
                
                document.getElementById("txt-quest").innerHTML = '<span>' + '. ' + qArr[0].question + '</span>';
                document.getElementById("a").innerHTML = qArr[0].ansA
                document.getElementById("b").innerHTML = qArr[0].ansB
                document.getElementById("c").innerHTML = qArr[0].ansC
                document.getElementById("d").innerHTML = qArr[0].ansD

                emptychioces();


            }
        })

        function emptychioces() {
            var ele = document.getElementsByName("flexRadioDefault")
            for (i = 0; i < ele.length; i++) {
                ele[i].checked = false;
            }
        }
        /*
                function answer_click(clicked_id) {

                    if (count === 39) {
                        ans.push(clicked_id);
                        if (clicked_id === result.correct) last_score += 1;
                        get_result();
                    } else {
                        ans.push(clicked_id);
                        if (clicked_id === result.correct) last_score += 1;

                        count++;
                        document.getElementById("txt-num").textContent = count + " / 39";
                        var x = count * 2.5;
                        document.getElementById("progBar").style.width = x + "%";

                        result = qArr[count - 1];
                        if (result.type === '1') {
                            document.getElementById('UpdatePanel3').innerHTML =
                                '<div id="Q1panel">' +
                                '<div class="text-right" style="padding-right: 30px">' +
                                '<h3> عزيزي التلميذ ...اختر الاجابة الصحيحة<br />' +
                                '</div>' +
                                '<div class="center">' +
                                '<div class="text-center">' +
                                '<h3 id="txt-quest" class="text-center"></h3>' +
                                '</div>' +
                                '<div class="row center" style="border: none; style="height: 40px;"">' +
                                '<div class="col-12" >' +
                                '<button name="ImageButton1" id="a" onclick="answer_click(this.id)" class="btn btn-success btn-lg" style="width:200px;" ></button>' +
                                '</div>' +
                                '<div class="col-12" >' +
                                '<button name="ImageButton1" id="b" onclick="answer_click(this.id)" class="btn btn-success " style="width:200px;" ></button>' +
                                '</div>' + '</div>' +
                                '<div class="row center" style="height: 40px; border: none;">' +
                                '<div class="col-12" >' +
                                '<button name="ImageButton1" id="c" onclick="answer_click(this.id)" class="btn btn-success btn-lg" style="width:200px;" ></button>' +
                                '</div>' +
                                '<div class="col-12" >' +
                                '<button name="ImageButton1" id="d" onclick="answer_click(this.id)" class="btn btn-success btn-lg" style="width:200px;" ></button>' +
                                '</div>' +
                                '</div>' +
                                '<div class="row"><br /><br /><br /></div>' +
                                '</div>' +
                                '</div>';

                            //qArr.find(x => x.id === count);
                            document.getElementById("txt-quest").innerHTML = '<span>' + result.id + '. ' + result.question + '</span>';
                            document.getElementById("a").innerHTML = result.ansA;
                            document.getElementById("b").innerHTML = result.ansB;
                            document.getElementById("c").innerHTML = result.ansC;
                            document.getElementById("d").innerHTML = result.ansD;

                        } else {

                            //qArr.find(x => x.id === count);
                            document.getElementById("txt-quest").innerHTML = '<span>' + result.id + '. ' + result.question + '</span>';
                        }


                    }
                    //alert(i+'/'+temp_score + '/' + last_score);

                }



        */

        // var result_clicked = false;
        // var retry = 0;
        function get_result() {


            var url = new URL(window.location.href);
            if (url.searchParams !== "") {
                retry = url.searchParams.get("r");
            }

            db_query();

            //retry++;
            //alert('re: '+retry+'score: '+last_score);
            if (qArr.length < 1) {

                if (last_score === 4) {
                    document.getElementById('#ques').innerHTML =
                        '<div id="Q1pane11">' +
                        '<div class="center" style="padding: 0px">' +
                        '<div class="text-center">' +
                        '<div class="row justify-content-center" style="width: 100%">' +
                        '<img id="img_gold" src="images/try-10.jpg" style="height:400px;width:400px;">' +
                        '</div>' +
                        '<div class="row">' +
                        '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>' +
                        '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>' +
                        '</div>' +
                        '</div>' +
                        '<div class="row justify-content-center" style="border: none">' +
                        '<input type="submit" name="Btn_return" value=" تسليم" id="Btn_return" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'/evan/dashboard.php\',\'_self\');">' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                } else {
                    document.getElementById('#ques').innerHTML =
                        '<div id="Q1pane11">' +
                        '<div class="center" style="padding: 0px">' +
                        '<div class="text-center">' +
                        '<div class="row justify-content-center" style="width: 100%">' +
                        '<img id="img_gold" src="images/Gold.png" style="height:400px;width:400px;">' +
                        '</div>' +
                        '<div class="row">' +
                        '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>' +
                        '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>' +
                        '</div>' +
                        '</div>' +
                        '<div class="row justify-content-center" style="border: none">' +
                        '<input type="submit" name="Btn_return" value=" تسليم" id="Btn_return" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'/evan/dashboard.php\',\'_self\');">' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                }
            }

            //           }else if(last_score === 5){
            //             document.getElementById('UpdatePanel3').innerHTML =        
            //                 '<div id="Q1pane11">'+
            //                     '<div class="center" style="padding: 0px">'+
            //                         '<div class="text-center">'+
            //                             '<div class="row justify-content-center" style="width: 100%">'+
            //                                 '<img id="img_gold" src="images/nat.png" style="height:400px;width:400px;">'+
            //                             '</div>'+
            //                             '<div class="row">'+
            //                                 '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>'+
            //                                 '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>'+
            //                             '</div>'+
            //                         '</div>'+
            //                         '<div class="row justify-content-center" style="border: none">'+
            //                             '<input type="submit" name="Btn_retry" value="أعد المحاولة" id="Btn_retry" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'quest4_new.php?r=\'+retry,\'_self\');">'+
            //                             '<input type="submit" name="Btn_return" value=" التالي" id="Btn_return" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'/evan/dashboard.php\',\'_self\');">'+  
            //                         '</div>'+
            //                     '</div>'+
            //                 '</div>';
            //           }else if(last_score === 4){
            //             document.getElementById('UpdatePanel3').innerHTML =        
            //                 '<div id="Q1pane11">'+
            //                     '<div class="center" style="padding: 0px">'+
            //                         '<div class="text-center">'+
            //                             '<div class="row justify-content-center" style="width: 100%">'+
            //                                 '<img id="img_gold" src="images/plat.png" style="height:400px;width:400px;">'+
            //                             '</div>'+
            //                             '<div class="row">'+
            //                                 '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>'+
            //                                 '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>'+
            //                             '</div>'+
            //                         '</div>'+
            //                         '<div class="row justify-content-center" style="border: none">'+
            //                             '<input type="submit" name="Btn_retry" value="أعد المحاولة" id="Btn_retry" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'quest4_new.php?r=\'+retry,\'_self\');">'+
            //                             '<input type="submit" name="Btn_return" value=" التالي" id="Btn_return" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'/evan/dashboard.php\',\'_self\');">'+  
            //                         '</div>'+
            //                     '</div>'+
            //                 '</div>';
            //           }
            //         else{ 
            //             if(retry<4) {
            //                 document.getElementById('UpdatePanel3').innerHTML =        
            //                 '<div id="Q1pane11">'+
            //                     '<div class="center" style="padding: 0px">'+
            //                         '<div class="text-center">'+
            //                             '<div class="row justify-content-center" style="width: 100%">'+
            //                                 '<img id="img_gold" src="images/try-f.jpg" style="height:400px;width:400px;">'+
            //                             '</div>'+
            //                             '<div class="row">'+
            //                                 '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>'+
            //                                 '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>'+
            //                             '</div>'+
            //                         '</div>'+
            //                         '<div class="row justify-content-center" style="border: none">'+
            //                             '<input type="submit" name="Btn_retry" value="أعد المحاولة" id="Btn_retry" class="btn btn-primary" style="font-size:XX-Large;" onclick="window.open(\'quest4_new.php?r=\'+retry,\'_self\');">'+
            //                         '</div>'+
            //                     '</div>'+
            //                 '</div>';
            //             }else{

            //                 document.getElementById('UpdatePanel3').innerHTML =        
            //                 '<div id="Q1pane11">'+
            //                     '<div class="center" style="padding: 0px">'+
            //                         '<div class="text-center">'+
            //                             '<div class="row justify-content-center" style="width: 100%">'+
            //                                 '<img id="img_gold" src="images/try-d.jpg" style="height:400px;width:400px;">'+
            //                             '</div>'+
            //                             '<div class="row">'+
            //                                 '<div class="col-6"><h3><span id="Lbl_totalCorrect"></span></h3></div>'+
            //                                 '<div class="col-6"><h3><span id="Lbl_totalMark"> </span></h3></div>'+
            //                             '</div>'+
            //                         '</div>'+
            //                         '<div class="row justify-content-center" style="border: none">'+
            // '<input type="submit" name="btn_ans" value="عرض الأجوبة" id="btn_ans" class="btn btn-primary" onclick="window.open(\'sol4_new.php?a1=\'+ ans[0] +\'&a2=\'+ans[1] +\'&a3=\'+ans[2]+\'&a4=\'+ans[3]+\'&a5=\'+ans[4]+\'&a6=\'+ans[5]+\'&a7=\'+ans[6]+\'&a8=\'+ans[7]+\'&a9=\'+ans[8]+\'&a10=\'+ans[9] ,\'_self\' );" >'+
            //                         '</div>'+
            //                     '</div>'+
            //                 '</div>';
            //             }             
            // document.getElementById("Lbl_totalCorrect").textContent= 'الاسئلة الصحيحة :' + last_score;
            // document.getElementById("Lbl_totalMark").textContent= 'الأسئلة الخاطئة :' + (6-last_score);               



        }



        function db_query() {

            var time = document.getElementById("lblCtime").textContent.replace(":", ".");
            var wimg;
            if (last_score === 4) wimg = '4';
            // else if(last_score===5) wimg='2';
            // else if(last_score===4) wimg='3';

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 5 && this.status == 200) {
                    //document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "query6.php?score=" + last_score /*+ "&try=" + retry*/ + "&time=" + time + "&wimg=" + wimg + "", true);
            xmlhttp.send();



        }
    </script>
    <style>
        #a,
        #b,
        #c,
        #d {
            background-color: white;
            color: black;
            border: 0px;
        }

        .form-check-input {
            transform: scale(2);


        }
    </style>

</body>

</html>