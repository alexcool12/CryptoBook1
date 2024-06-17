

        <div class="page_header" data-parallax-bg-image="assets/img/market-fon1.jpg" data-parallax-direction="">
            <div class="header-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="haeder-text">
                                <h1>Список криптовалют</h1>
                                <p>На данной странице продемонстрированы все списки валют, доступных для просмотра на нашем сервисе</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="currency-pricing-info">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 center" > 
                        <h3>Для ознакомления с криптовалютами представлена таблица, которая содержит список из топ-10 монет.</h3>
                        <p>Под таблицей даны определения основным характеристикам. </p> 
                    </div>
                </div>
            </div>
        </div>

        <div class="currency-table" >
            <div class="with-nav-tabs currency-tabs">
                <div class="tab-header">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href=# data-toggle="tab">Список криптовалют</a></li>
                    </ul>
                </div>
                <div class="container">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="crypto" style='width: 100%; overflow-x: scroll'>
                            <table class="table table-striped table-hover nowrap" >
                                <thead>
                                    <tr>
                                        <th>Название</th>
                                        <th>Индекс</th>
                                        <th>Цена</th>
                                        <th>Капитализация</th>
                                        <th>Макс. кол-во</th>
                                        <th>Изменение</th>
                                    </tr>
                                </thead>
                                <script>
                                    window.start_render = () => {
                                        let tbody_node = document.getElementById('tables');
                                            
                                        for(let line of tbody_node.getElementsByTagName('tr'))
                                        {
                                            let start_symbol = line.getElementsByTagName('td')[1].innerText;
                                            
                                           
                                            fetch("https://api.binance.com/api/v3/ticker/24hr?symbol="+start_symbol+"USDT")
                                            .then((response) => { return response.json()})
                                            .then((json) => {
                                                line.getElementsByTagName('td')[2].innerText = '$'+parseFloat(json.askPrice);
                                                line.getElementsByTagName('td')[3].innerText = parseInt(json.volume);
                                                
                                                line.getElementsByTagName('td')[5].innerText = json.priceChangePercent+'%';

                                                console.log(parseFloat(json.priceChangePercent));
                                                if(parseFloat(json.priceChangePercent) >= 0.0)
                                                {
                                                    line.getElementsByTagName('td')[5].setAttribute('style','color: rgb(0, 222, 85)');
                                                } else {
                                                    line.getElementsByTagName('td')[5].setAttribute('style','color: rgb(235, 64, 52)');
                                                }
                                            });
                                        }

                                     
                                    };
                                    
                                    window.pull_functions.push(window.start_render);
                                </script>
                                <tbody id="tables">
                                    <tr data-href="https://bitcoin.org/ru/">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="assets/img/coin-logo/BTC.svg" class="img-responsive" alt="">
                                                </div>
                                                <span class="item_name_value">Bitcoin</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">BTC</span></td>
                                        <td><span class="value_price">$28000</span></td>
                                        <td><span class="value_cap">$550 B</span></td>
                                        <td><span class="value_max_quantity">21 M</span></td>
                                        <td><span class="value_d1_return percent_positive">+3.08%</span></td>
                                    </tr>
                                    <tr data-href="https://ethereum.org/ru/">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="assets/img/coin-logo/ETH.svg" class="img-responsive" alt="">
                                                </div>
                                                <span class="item_name_value">Ethereum</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">ETH</span></td>
                                        <td><span class="value_price">$1800</span></td>
                                        <td><span class="value_cap">$225 B</span></td>
                                        <td><span class="value_max_quantity">Unlimited</span></td>
                                        <td><span class="value_d1_return percent_positive">+3.82%</span></td>
                                    </tr>
                                    <tr data-href="https://ripple.com/">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="assets/img/coin-logo/XRP.svg" class="img-responsive" alt="">
                                                </div>
                                                <span class="item_name_value">Ripple</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">XRP</span></td>
                                        <td><span class="value_price">$0.5</span></td>
                                        <td><span class="value_cap">$26 B</span></td>
                                        <td><span class="value_max_quantity">100 B</span></td>
                                        <td><span class="value_d1_return percent_negative">-2.04%</span></td>
                                    </tr>
                                    <tr data-href="https://litecoin.org/ru/">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="assets/img/coin-logo/LTC.svg" class="img-responsive" alt="">
                                                </div>
                                                <span class="item_name_value">Litecoin</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">LTC</span></td>
                                        <td><span class="value_price">$90</span></td>
                                        <td><span class="value_cap">$6.6 B</span></td>
                                        <td><span class="value_max_quantity">84 M</span></td>
                                        <td><span class="value_d1_return percent_positive">+5.53%</span></td>
                                    </tr>
                                    <tr data-href="https://www.bnbchain.org/en">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="assets/img/coin-logo/bnb.svg" class="img-responsive" alt="">
                                                </div>
                                                <span class="item_name_value">Binance Coin</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">BNB</span></td>
                                        <td><span class="value_price">$306</span></td>
                                        <td><span class="value_cap">$47.8 B</span></td>
                                        <td><span class="value_max_quantity">Unlimited</span></td>
                                        <td><span class="value_d1_return percent_positive">+4.2%</span></td>
                                    </tr>
                                    <tr data-href="https://dogechain.dog/">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="assets/img/coin-logo/doge.svg" class="img-responsive" alt="">
                                                </div>
                                                <span class="item_name_value">Dogecoin</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">DOGE</span></td>
                                        <td><span class="value_price">$0.07</span></td>
                                        <td><span class="value_cap">$10 B</span></td>
                                        <td><span class="value_max_quantity">Unlimited</span></td>
                                        <td><span class="value_d1_return percent_positive">+1.93%</span></td>
                                    </tr>
                                    <tr data-href="https://uniswap.org/">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="assets/img/coin-logo/uni.svg" class="img-responsive" alt="">
                                                </div>
                                                <span class="item_name_value">Uniswap</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">UNI</span></td>
                                        <td><span class="value_price">$5.02</span></td>
                                        <td><span class="value_cap">$2.09 B</span></td>
                                        <td><span class="value_max_quantity">Unlimited</span></td>
                                        <td><span class="value_d1_return percent_negative">-2.25%</span></td>
                                    </tr>
                                    <tr data-href="https://polygon.technology/">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="assets/img/coin-logo/matic.svg" class="img-responsive" alt="">
                                                </div>
                                                <span class="item_name_value">Polygon</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">MATIC</span></td>
                                        <td><span class="value_price">$0.89</span></td>
                                        <td><span class="value_cap">$8.3 B</span></td>
                                        <td><span class="value_max_quantity">10 B</span></td>
                                        <td><span class="value_d1_return percent_positive">+6.7%</span></td>
                                    </tr>
                                    <tr data-href="https://solana.com/ru">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="assets/img/coin-logo/sol.svg" class="img-responsive" alt="">
                                                </div>
                                                <span class="item_name_value">Solana</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">SOL</span></td>
                                        <td><span class="value_price">$20.9</span></td>
                                        <td><span class="value_cap">$8.2 B</span></td>
                                        <td><span class="value_max_quantity">Unlimited</span></td>
                                        <td><span class="value_d1_return percent_negative">-2.21%</span></td>
                                    </tr>
                                    <tr data-href="https://arbitrum.io/">
                                        <td>
                                            <div class="logo-name">
                                                <div class="item-logo">
                                                    <img src="assets/img/coin-logo/arb.svg" class="img-responsive" alt="">
                                                </div>
                                                <span class="item_name_value">Arbitrum</span>
                                            </div>
                                        </td>
                                        <td><span class="value_ticker">ARB</span></td>
                                        <td><span class="value_price">$1.16</span></td>
                                        <td><span class="value_cap">$1.48 B</span></td>
                                        <td><span class="value_max_quantity">Unlimited</span></td>
                                        <td><span class="value_d1_return percent_negative">-2.05%</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="currency-pricing-info" style='padding: 15px;'>
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1"> 
                        <h3>Определения основных характеристик</h3> 
                        <ol type="1" class='decimal-ol'>
                            <li>
                                <b>Название</b> - Имя криптовалюты или токена. Обычно это уникальное название, по которому криптовалюта узнаваема.
                            </li>
                            <li>
                                <b>Индекс</b> - Уникальный код или символ, который представляет криптовалюту на биржах и в информационных системах. Обычно это краткое обозначение названия криптовалюты.
                            </li>
                            <li>
                                <b>Цена</b> - Текущая стоимость одной единицы криптовалюты, измеренная в фиатной валюте (в данном случае в долларах). Цена постоянно изменяется в зависимости от рыночных условий.
                            </li>
                            <li>
                                <b>Капитализация</b> -  Общая рыночная стоимость всех единиц данной криптовалюты. Рассчитывается как произведение текущей цены на общее количество единиц валюты в обращении на рынке.
                            </li>
                            <li>
                                <b>Максимальное количество</b> - Количество единиц криптовалюты, которое когда-либо может быть создано. Этот показатель помогает оценить потенциал дефицита и спроса на криптовалюту (например, у Bitcoin максимальное количество — 21 миллион единиц).
                            </li>
                            <li>
                                <b>Изменение</b> - Процентное изменение цены криптовалюты за определенный период времени. В данной таблице показывается изменение цены за день.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="calculate">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="section_title">
                            <h3><span>Калькулятор криптовалют</span></h3>
                            <p>При помощи данного инструмента, вы можете посмотреть актуальные курсы криптовалют</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content">
                    <div class="col-sm-4">
                        <div class="bitcoin-sack">
                            <img src="assets/img/calculate-img.png" class="img-responsive center-block" alt="">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="exchange-content">
                            <form class="form-inline exchange-form" action="/action_page.php">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <select id="from-symb" class="selectpicker" data-width="80px">
                                        </select>
                                    </div>
                                    <input id="from-value" type="text" class="form-control">
                                </div>
                                <script>
                                    const make_price = () => {
                                        let start = document.getElementById('from-symb').value,
                                            to = document.getElementById('to-symb').value;

                                        fetch("https://api.binance.com/api/v3/ticker/price?symbol="+start+to)
                                        .then((response) => { return response.json()})
                                        .then((json) => {
                                            let from_value = document.getElementById('from-value').value,
                                                to_value_node = document.getElementById('to-value');
                                            to_value_node.value = from_value * json.price;
                                        });
                                    };
                                </script>
                                <div class="exchange-btn" onclick="make_price()">
                                    <span class="lnr lnr-arrow-right"></span>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <select id="to-symb" class="selectpicker" data-width="80px">
                                            <option>USDT</option>
                                        </select>
                                    </div>
                                    <input id="to-value" type="text" class="form-control">
                                </div>
                                
                            </form>
                            <div class="exchange-info">
                                <h4>Как это работает?</h4>
                                <p>Принцип работы данного сервиса прост. Вы выбираете из списка монету, которую хотите поменять, и так же монету, на которую хотите поменять.
                                    Система сама высчитает для вас актуальный курс монеты.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
            let tbody_node = document.getElementById('tables'),
                coin_select_node = document.getElementById('from-symb');
            for(let line of tbody_node.getElementsByTagName('tr'))
            {
                let start_symbol = line.getElementsByTagName('td')[1].innerText;
                
                let tm_option = document.createElement('option');
                tm_option.innerText = start_symbol;
                coin_select_node.appendChild(tm_option);
            }
        </script>
 