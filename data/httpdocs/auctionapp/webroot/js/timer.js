document.addEventListener('DOMContentLoaded', function () {
    var Timer = function (endMessage, outputDestination) {
        this.endMessage = endMessage;
        this.outputDestination = outputDestination;
    };

    Timer.prototype.countDown = function () {
        var oneDay = 24 * 60 * 60 * 1000;
        var countDownTimer = document.getElementById(this.outputDestination);
        var endMessage = this.endMessage;
        var currentTimeCD = new Date();
        var untilFinishTime = new Date();
        var finDay = 0;
        var finHour = 0;
        var finMin = 0;
        var finSec = 0;

        //終了時間を取得
        var bidendTime = document.getElementById('bidendtime');
        var endTime = bidendTime.dataset.val;

        //終了時間をミリ秒に変換
        var endCalDate = Date.parse(endTime);
        //現在時間をミリ秒に変換
        var currentCalDate = Date.parse(currentTimeCD);
        //1秒ごとに処理を実行
        setInterval(calculateTime, 1000);

        //残り時間算出
        function calculateTime() {
            currentTimeCD = new Date();
            //現在時間をミリ秒に変換
            var currentCalDate = Date.parse(currentTimeCD);
            //残り時間をミリ秒に変換
            untilFinishTime = endCalDate - currentCalDate;
            if (currentCalDate <= endCalDate) {
                finDay = Math.floor(untilFinishTime / oneDay);
                finHour = Math.floor((untilFinishTime % oneDay) / (60 * 60 * 1000));
                finMin = Math.floor((untilFinishTime % oneDay) / (60 * 1000)) % 60;
                finSec = Math.floor((untilFinishTime % oneDay) / 1000) % 60 % 60;
            }
            showTime();
        }

        //表示
        function showTime() {
            if (currentCalDate <= endCalDate) {
                countDownTimer.innerHTML = 'あと' + finDay + '日' + finHour + '時間' + finMin + '分' + finSec + '秒' + 'で終了';
            } else {
                countDownTimer.innerHTML = endMessage;
            }
        }
    }

    var myTimer = new Timer('終了しました', 'timer');
    myTimer.countDown();
}, false)
