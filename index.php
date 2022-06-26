<html>
    <head>
        <title>Lines to Comma Converter Online</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/custom.css" />
        <link rel="icon" type="image/x-icon" href="/img/lines-to-commas-favicon.png" />
        <link rel="apple-touch-icon" href="/img/lines-to-commas-favicon.png" />
        <meta name='description' content="Convert multiple lines to comma separated string | Convert multiple commas string to mutiple lines."/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="container">
            <div class="row mt-50 mb-50">
                <div class="col-md-12">
                    <img src="img/lines-to-comma-logo.png" />
                    <p>This converter will convert multi-line text into comma separated or any other special charater separated single line of text.</p>
                    <!--<ul>-->
                    <!--    <li>-->
                    <!--        <select class="form-control">-->
                    <!--            <option value=""></option>-->
                    <!--        </select>-->
                    <!--    </li>-->
                    <!--</ul>-->
                </div>
                <div class="col-md-12 mb-30">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3724557629304393"
                    crossorigin="anonymous"></script>
                    <!-- LineToComma_1 -->
                    <ins class="adsbygoogle"
                    style="display:block;width:100%;text-align:center;"
                    data-ad-client="ca-pub-3724557629304393"
                    data-ad-slot="1730760706"
                    data-ad-format="auto"
                    data-full-width-responsive="true"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <div class="col-md-5 ">
                    <textarea class="input-text" placeholder="Enter your text to convert multi lines to comma separated string." id="input-text"></textarea>
                </div>
                <div class="col-md-2 align-center v-align-center">
                    <img src='/img/two-arrows.png' class='toggle-btn' id='toggle-btn' />
                </div>
                <div class="col-md-5">
                    <textarea class="output-div" id="output"></textarea>
                </div>
                
                <div class="col-md-12 mt-30">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3724557629304393"
                     crossorigin="anonymous"></script>
                    <!-- LineToComma_2 -->
                    <ins class="adsbygoogle"
                     style="display:block,width:100%;"
                     data-ad-client="ca-pub-3724557629304393"
                     data-ad-slot="5654527999"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                    <script>
                     (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <div class="col-md-12 mt-30 text-center">
                    Crafted with Love by <a href='https://dhananjayvaidya.com?ref=lines-to-comma' target="_blank">Dhananjay Vaidya</a>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script>
        var action = 1;
        $("#input-text").keyup(function(){
            inputData = $(this).val();
            if (action==1){
                outputData = replaceLineComma(inputData);
            }else{
                outputData = replaceCommaLine(inputData);
            }
            $('#output').val(htmlencode(outputData));
        });
        $("#toggle-btn").click(function(){
            action = (action == 1? 2:1);
            inputData = $('#input-text').val()
            if (action == 1){
                outputData = replaceLineComma(inputData);
                $('#input-text').attr('placeholder','Enter your text to convert multi lines to comma separated string.');
            }else{
                outputData = replaceCommaLine(inputData);
                $("#input-text").attr('placeholder','Enter your text to convert comma separated string to multi lines string');
            }
            $('#output').val(htmlencode(outputData));
        });
            function replaceLineComma(data) {
                //convert string to array and remove whitespace
                let dataToArray = data.split("\n").map(item => item.trim());
                //convert array to string replacing comma with new line
                return dataToArray.join(",");
            }
            function replaceCommaLine(data) {
                //convert string to array and remove whitespace
                let dataToArray = data.split(",").map(item => item.trim());
                //convert array to string replacing comma with new line
                return dataToArray.join("\n");
            }
            function htmlencode(str) {
                return str.replace(/[&<>"']/g, function($0) {
                    return "&" + {"&":"amp", "<":"lt", ">":"gt", '"':"quot", "'":"#39"}[$0] + ";";
                });
            }
        </script>
    </body>
</html>