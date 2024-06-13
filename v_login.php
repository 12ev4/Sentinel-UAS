<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: radial-gradient(ellipse at bottom, #0d1d31 0%, #0c0d13 100%);
            overflow: hidden;
        }

        .stars {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 120%;
            transform: rotate(-45deg);
        }

        .star {
            --star-color: var(--primary-color);
            --star-tail-length: 6em;
            --star-tail-height: 2px;
            --star-width: calc(var(--star-tail-length) / 6);
            --fall-duration: 9s;
            --tail-fade-duration: var(--fall-duration);
            position: absolute;
            top: var(--top-offset);
            left: 0;
            width: var(--star-tail-length);
            height: var(--star-tail-height);
            color: var(--star-color);
            background: linear-gradient(45deg, currentColor, transparent);
            border-radius: 50%;
            filter: drop-shadow(0 0 6px currentColor);
            transform: translate3d(104em, 0, 0);
            animation: fall var(--fall-duration) var(--fall-delay) linear infinite, tail-fade var(--tail-fade-duration) var(--fall-delay) ease-out infinite;
        }

        @media screen and (max-width: 750px) {
            .star {
                animation: fall var(--fall-duration) var(--fall-delay) linear infinite;
            }
        }

        .star:nth-child(1) {
            --star-tail-length: 5228494036.0100002289em;
            --top-offset: 31300939480.9700012207vh;
            --fall-duration: 1910483292.8210000992s;
            --fall-delay: 3423624868.2540001869s;
        }

        .star:nth-child(2) {
            --star-tail-length: 4303204864.970000267em;
            --top-offset: 2979926462.8499999046vh;
            --fall-duration: 4366920924.8699998856s;
            --fall-delay: 4708686801.5979995728s;
        }

        .star:nth-child(3) {
            --star-tail-length: 4925659975.8100004196em;
            --top-offset: 60061630062.4499969482vh;
            --fall-duration: 10489722213.7019996643s;
            --fall-delay: 4124837822.5380001068s;
        }

        .star:nth-child(4) {
            --star-tail-length: 377783772.1100000143em;
            --top-offset: 16475489684.2299995422vh;
            --fall-duration: 4600967078.0620002747s;
            --fall-delay: 5697041637.1990003586s;
        }

        .star:nth-child(5) {
            --star-tail-length: 5105651681.7399997711em;
            --top-offset: 147361079534.4899902344vh;
            --fall-duration: 2781941083.5830001831s;
            --fall-delay: 16625248388.6030006409s;
        }

        .star:nth-child(6) {
            --star-tail-length: 3284412358.1799998283em;
            --top-offset: 137480550880.4200134277vh;
            --fall-duration: 7797865753.720000267s;
            --fall-delay: 8809067948.7129993439s;
        }

        .star:nth-child(7) {
            --star-tail-length: 723598650.6299999952em;
            --top-offset: 132114394718.4600067139vh;
            --fall-duration: 3223686683.5809998512s;
            --fall-delay: 5586286352.7779998779s;
        }

        .star:nth-child(8) {
            --star-tail-length: 1858374976.8499999046em;
            --top-offset: 166522574492.3900146484vh;
            --fall-duration: 6659005035.2299995422s;
            --fall-delay: 4093733652.4320001602s;
        }

        .star:nth-child(9) {
            --star-tail-length: 2661831129.8800001144em;
            --top-offset: 156178295367.9100036621vh;
            --fall-duration: 10053670164.4710006714s;
            --fall-delay: 10433525638.2390003204s;
        }

        .star:nth-child(10) {
            --star-tail-length: 1977242143.7200000286em;
            --top-offset: 163167190487.5400085449vh;
            --fall-duration: 8893919124.8409996033s;
            --fall-delay: 9339806147.2259998322s;
        }

        .star:nth-child(11) {
            --star-tail-length: 4024670835.1399998665em;
            --top-offset: 196392312067.4800109863vh;
            --fall-duration: 12691820824.9780006409s;
            --fall-delay: 3597191063.1380000114s;
        }

        .star:nth-child(12) {
            --star-tail-length: 5037945950.2899999619em;
            --top-offset: 191416104596.4899902344vh;
            --fall-duration: 6743565348.2670001984s;
            --fall-delay: 8194906808.7399997711s;
        }

        .star:nth-child(13) {
            --star-tail-length: 4359152498.9099998474em;
            --top-offset: 53228139181.6900024414vh;
            --fall-duration: 7663947353.7060003281s;
            --fall-delay: 322465103.2860000134s;
        }

        .star:nth-child(14) {
            --star-tail-length: 1189115015em;
            --top-offset: 164835827934.6000061035vh;
            --fall-duration: 8070251065.7069997787s;
            --fall-delay: 17825629194.6809997559s;
        }

        .star:nth-child(15) {
            --star-tail-length: 2656172962.3800001144em;
            --top-offset: 155119209969.9599914551vh;
            --fall-duration: 4003234022.4869999886s;
            --fall-delay: 13211786556.5510005951s;
        }

        .star:nth-child(16) {
            --star-tail-length: 893138011.25em;
            --top-offset: 124620869340.8500061035vh;
            --fall-duration: 9871202108.1959991455s;
            --fall-delay: 15905425463.5079994202s;
        }

        .star:nth-child(17) {
            --star-tail-length: 1134574723em;
            --top-offset: 146316661103.0899963379vh;
            --fall-duration: 6584134206.8380002975s;
            --fall-delay: 14161989957.3899993896s;
        }

        .star:nth-child(18) {
            --star-tail-length: 2799680427.7699999809em;
            --top-offset: 123925494010.2700042725vh;
            --fall-duration: 6475082204.5329999924s;
            --fall-delay: 13249259073.4279994965s;
        }

        .star:nth-child(19) {
            --star-tail-length: 1311013792.5em;
            --top-offset: 11150611649.6700000763vh;
            --fall-duration: 687436003.574000001s;
            --fall-delay: 5899647745.7840003967s;
        }

        .star:nth-child(20) {
            --star-tail-length: 37726233.700000003em;
            --top-offset: 144777815333.8999938965vh;
            --fall-duration: 7461468368.8319997787s;
            --fall-delay: 1256077815.2219998837s;
        }

        .star:nth-child(21) {
            --star-tail-length: 956033405.5099999905em;
            --top-offset: 83579335297.8200073242vh;
            --fall-duration: 1519639897.1099998951s;
            --fall-delay: 1825920603.8029999733s;
        }

        .star:nth-child(22) {
            --star-tail-length: 1431157319.4700000286em;
            --top-offset: 103907184879.5200042725vh;
            --fall-duration: 2832674335.7160000801s;
            --fall-delay: 1695814904.5339999199s;
        }

        .star:nth-child(23) {
            --star-tail-length: 650122326.2699999809em;
            --top-offset: 211812180000.0899963379vh;
            --fall-duration: 7662024279.2469997406s;
            --fall-delay: 10323508797.6550006866s;
        }

        .star:nth-child(24) {
            --star-tail-length: 804734621.5099999905em;
            --top-offset: 196609555589.6600036621vh;
            --fall-duration: 352014831.3610000014s;
            --fall-delay: 5151718210.3090000153s;
        }

        .star:nth-child(25) {
            --star-tail-length: 3278705240.6599998474em;
            --top-offset: 75920117452.6199951172vh;
            --fall-duration: 10386216779.670999527s;
            --fall-delay: 2128817270.4409999847s;
        }

        .star:nth-child(26) {
            --star-tail-length: 590358134.4199999571em;
            --top-offset: 1786180100.1500000954vh;
            --fall-duration: 738641792.4500000477s;
            --fall-delay: 2915595600.4070000648s;
        }

        .star:nth-child(27) {
            --star-tail-length: 1080342350.2699999809em;
            --top-offset: 112589634537.6699981689vh;
            --fall-duration: 1805967980.5050001144s;
            --fall-delay: 13099115090.5310001373s;
        }

        .star:nth-child(28) {
            --star-tail-length: 1509003260.1600000858em;
            --top-offset: 1624788462.5999999046vh;
            --fall-duration: 4787666343.420999527s;
            --fall-delay: 21276531800.436000824s;
        }

        .star:nth-child(29) {
            --star-tail-length: 371255580.8799999952em;
            --top-offset: 14213595117.3899993896vh;
            --fall-duration: 7345880617.4169998169s;
            --fall-delay: 8941908681.4580001831s;
        }

        .star:nth-child(30) {
            --star-tail-length: 2754533203.3499999046em;
            --top-offset: 62241616439.2900009155vh;
            --fall-duration: 9098998583.0550003052s;
            --fall-delay: 3316418518.6909999847s;
        }

        .star:nth-child(31) {
            --star-tail-length: 4794475789.6499996185em;
            --top-offset: 106786161948.4400024414vh;
            --fall-duration: 5238488695.9589996338s;
            --fall-delay: 18964013081.6870002747s;
        }

        .star:nth-child(32) {
            --star-tail-length: 4388701867.9799995422em;
            --top-offset: 155538727717.5400085449vh;
            --fall-duration: 11297950269.9309997559s;
            --fall-delay: 17375308017.0660018921s;
        }

        .star:nth-child(33) {
            --star-tail-length: 2717448869.5em;
            --top-offset: 56018357275.5999984741vh;
            --fall-duration: 7730649440.8680000305s;
            --fall-delay: 12810228974.8080005646s;
        }

        .star:nth-child(34) {
            --star-tail-length: 2190635566.7199997902em;
            --top-offset: 182532297704.6300048828vh;
            --fall-duration: 6660039163.5559997559s;
            --fall-delay: 15790659158.0249996185s;
        }

        .star:nth-child(35) {
            --star-tail-length: 2512489302.5199999809em;
            --top-offset: 210664997793.3399963379vh;
            --fall-duration: 11441636335.6180000305s;
            --fall-delay: 11835594501.1060009003s;
        }

        .star:nth-child(36) {
            --star-tail-length: 3168990635.6799998283em;
            --top-offset: 200697015394.7699890137vh;
            --fall-duration: 7849128036.0100002289s;
            --fall-delay: 10226618049.5489997864s;
        }

        .star:nth-child(37) {
            --star-tail-length: 4130910021.3299999237em;
            --top-offset: 122891060377.25vh;
            --fall-duration: 4095268214.9629998207s;
            --fall-delay: 19129906599.3800010681s;
        }

        .star:nth-child(38) {
            --star-tail-length: 3950046238.4899997711em;
            --top-offset: 51100055794.6299972534vh;
            --fall-duration: 1144581645.8180000782s;
            --fall-delay: 9143050063.5849990845s;
        }

        .star:nth-child(39) {
            --star-tail-length: 5005846373.529999733em;
            --top-offset: 20141978596.4599990845vh;
            --fall-duration: 3214029532.3239998817s;
            --fall-delay: 1918646525.4679999352s;
        }

        .star:nth-child(40) {
            --star-tail-length: 2613089239.0799999237em;
            --top-offset: 89902794580.5200042725vh;
            --fall-duration: 12830190880.811000824s;
            --fall-delay: 4140351593.7600002289s;
        }

        .star:nth-child(41) {
            --star-tail-length: 2654458112.8099999428em;
            --top-offset: 13615029466.8099994659vh;
            --fall-duration: 280537328.42900002s;
            --fall-delay: 5527728127.5410003662s;
        }

        .star:nth-child(42) {
            --star-tail-length: 3384112331.7300000191em;
            --top-offset: 9269694476.7600002289vh;
            --fall-duration: 7871554997.2139997482s;
            --fall-delay: 13749679220.438999176s;
        }

        .star:nth-child(43) {
            --star-tail-length: 3020526818.8699998856em;
            --top-offset: 56513282663.1900024414vh;
            --fall-duration: 7973639304.4300003052s;
            --fall-delay: 16758130775.5130004883s;
        }

        .star:nth-child(44) {
            --star-tail-length: 971007970.1299999952em;
            --top-offset: 200549056800.3900146484vh;
            --fall-duration: 6413401970.2069997787s;
            --fall-delay: 4422755811.3579998016s;
        }

        .star:nth-child(45) {
            --star-tail-length: 359573948.0099999905em;
            --top-offset: 192119396718.6700134277vh;
            --fall-duration: 1752555725.9460000992s;
            --fall-delay: 14863027674.1520004272s;
        }

        .star:nth-child(46) {
            --star-tail-length: 971421409.7999999523em;
            --top-offset: 4052853344.8099999428vh;
            --fall-duration: 7234139464.9949998856s;
            --fall-delay: 5092753664.4440002441s;
        }

        .star:nth-child(47) {
            --star-tail-length: 3110203145.0700001717em;
            --top-offset: 28370105526.8800010681vh;
            --fall-duration: 1628788965.5899999142s;
            --fall-delay: 14446202325.7849998474s;
        }

        .star:nth-child(48) {
            --star-tail-length: 435247292.9399999976em;
            --top-offset: 176765661498.6700134277vh;
            --fall-duration: 4606123335.2950000763s;
            --fall-delay: 17970844144.7239990234s;
        }

        .star:nth-child(49) {
            --star-tail-length: 1660016428.75em;
            --top-offset: 149848128414.5100097656vh;
            --fall-duration: 8114642509.0480003357s;
            --fall-delay: 10147853023.8339996338s;
        }

        .star:nth-child(50) {
            --star-tail-length: 3405434342.4800000191em;
            --top-offset: 51313639450.8600006104vh;
            --fall-duration: 6850231490.9949998856s;
            --fall-delay: 19149569895.5130004883s;
        }

        .star::before,
        .star::after {
            position: absolute;
            content: '';
            top: 0;
            left: calc(var(--star-width) / -2);
            width: var(--star-width);
            height: 100%;
            background: linear-gradient(45deg, transparent, currentColor, transparent);
            border-radius: inherit;
            animation: blink 2s linear infinite;
        }

        .star::before {
            transform: rotate(45deg);
        }

        .star::after {
            transform: rotate(-45deg);
        }

        @keyframes fall {
            to {
                transform: translate3d(-30em, 0, 0);
            }
        }

        @keyframes tail-fade {

            0%,
            50% {
                width: var(--star-tail-length);
                opacity: 1;
            }

            70%,
            80% {
                width: 0;
                opacity: 0.4;
            }

            100% {
                width: 0;
                opacity: 0;
            }
        }

        @keyframes blink {
            50% {
                opacity: 0.6;
            }
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            z-index: 10;
            background-color: whitesmoke;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 141, 218, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .container:hover {
            box-shadow: 0 0 20px rgba(65, 201, 226, 0.4);
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        button:hover {
            background-color: rgb(172, 226, 225);
        }

        @media (max-width: 768px) {
            .gif-container {
                max-width: 50%;
            }
        }
    </style>
</head>

<body>
    <div class="stars">
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
    </div>


    <div class="container">
        <h2>Login</h2>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger" role="alert">
                Tidak ada user Ini!
            </div>
        <?php endif; ?>

        <form id="loginForm" action="v_login_process.php" method="POST">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <a href="v_register.php" class="btn">I Don't have account</a>
            <a href="index.php" class="btn">Home</a>

            <button id="btnLogin" type="submit">Login</button>
        </form>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>

</html>