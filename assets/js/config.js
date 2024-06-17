window.config_task = {
    1: {
        name_test: 'Общее понятие криптовалют', 
        final_text: 'Поздравляю с успешным прохождением теста по теме: "Общее понятие криптовалют"',
        tasks: [
            {
                name: 'Общее понятие криптовалют', 
                infos: 'Криптовалюта — разновидность цифровой валюты, учёт внутренних расчётных единиц которой обеспечивает децентрализованная платёжная система (нет внутреннего или внешнего администратора или какого-либо его аналога), работающая в полностью автоматическом режиме. Сама по себе криптовалюта не имеет какой-либо особой материальной или электронной формы — это просто число, обозначающее количество данных расчётных единиц, которое записывается в соответствующей позиции информационного пакета протокола передачи данных и зачастую даже не подвергается шифрованию, как и вся иная информация о транзакциях между адресами системы.<br>Термин криптовалюта закрепился после публикации статьи o системе Биткойн «Crypto currency» (Криптографическая валюта), опубликованной в 2011 году в журнале Forbes. При этом и создатель биткойна, и многие другие авторы использовали термин «электронная наличность» (англ. electronic cash).<br>Платёж (передача криптовалюты между адресами) происходит без посредников, и он необратим — нет механизма отмены подтверждённой операции, даже если платёж был отправлен на ошибочный или несуществующий адрес, или когда транзакцию сделали сторонние лица, которым стал известен закрытый ключ. Информация о транзакциях не шифруется и доступна в открытом виде на сайтах, которые обозревают блоки. Пример такого сайта: https://etherscan.io/.<br>Криптовалюту ни на конкретном адресе, ни в целом никто не может заблокировать, даже временно, она всегда в распоряжении владельца закрытого ключа к данному адресу. Правда, технология мультиподписи позволяет добровольно привлечь третью сторону и реализовать «обратимые транзакции», которые могут происходить против воли одной из сторон. С помощью таких подписей, не доброжелательные создатели монет, которыми вы могли пользоваться довольно давно, при разрешении от вашего кошелька на обмены могут отправить ваши средства на свои кошельки, и вернуть их, к сожалению, никак не получится. Чтобы предотвратить такие операции, рекомендуется использовать сервисы по отмене разрешений подписей, например https://revoke.cash/ru.',
                questions: [
                    {text: 'Начать тест', trueth: true}
                ]
            },
            {
                name: 'Вопрос 1', 
                infos: 'Если вы купите монетку биткоин у продавца на рынке за 5000 рублей, сколько денег вы получите на свой крипто-кошелёк?',
                questions: [
                    {text: '0 рублей', trueth: true},
                    {text: '100 рублей', trueth: false},
                    {text: '28000 долларов', trueth: false},
                    {text: 'Миллиард миллионов', trueth: false}
                ]
            },
            {
                name: 'Вопрос 2', 
                infos: 'Можно ли написать в поддержку создателей биткоина, и попросить вернуть случайно отправленные не на тот адрес кошелька монеты?',
                questions: [
                    {text: 'Конечно можно, и нужно', trueth: false},
                    {text: 'Нет, это не имеет смысла, так как все подтверждённые операции являются необратимыми', trueth: true},
                    {text: 'Да, нужно попытать удачу', trueth: false},
                    {text: 'Да, пусть вернут мне мои деньги', trueth: false}
                ]
            },
            {
                name: 'Вопрос 3', 
                infos: 'Какое название имел биткоин при своём создании?',
                questions: [
                    {text: 'Electronic cash', trueth: true},
                    {text: 'Crypto currency', trueth: false},
                    {text: 'Bitcoin payment', trueth: false},
                    {text: 'Paypal currency', trueth: false}
                ]
            },
            {
                name: 'Вопрос 4', 
                infos: 'Для чего создан сервис revoke.cash?',
                questions: [
                    {text: 'Вернуть украденные средства', trueth: false},
                    {text: 'Что это такое?', trueth: false},
                    {text: 'Наверное для чего-то и нужен', trueth: false},
                    {text: 'Этот сервис создан для отмены подписей, предоставленных вами для третьих лиц', trueth: true}
                ]
            }
            ,
            {
                name: 'Вопрос 5', 
                infos: 'Что предоставляет сервис etherscan?',
                questions: [
                    {text: 'Это обозреватель блокчейна криптовалюты Eth, благодаря которому можно узнать информацию о блоках, адресах и т.д.', trueth: true},
                    {text: 'Это сканер, который помогает найти новые монеты и заработать', trueth: false},
                    {text: 'Как мне кажется, это ненужный сервис и его нужно заблокировать', trueth: false},
                    {text: 'Это официальный сайт криптовалюты Eth', trueth: false}
                ]
            }
        ]
    },
    2: {
        name_test: 'Разновидность криптовалют', 
        final_text: 'Поздравляю с успешным прохождением теста по теме: "Разновидность криптовалют"',
        tasks: [
            {
                name: 'Разновидность криптовалют', 
                infos: 'Все виды криптовалют условно можно разделить на три основных типа: биткоин, альткоины, токены. Каждая из этих групп имеет свои особенности.<br>Биткоин это первая криптовалюта, которая до сих пор остается ведущей цифровой монетой по рыночной капитализации, и занимает около 45 процентов рыночных торгов. Она представляет собой глобальную децентрализованную систему электронных платежей, которая позволяет пользователям совершать транзакции между собой без участия посредников, таких как банки или другие финансовые организации.<br>Альткоины — это все криптовалюты, кроме биткоина, их доля на рынке составляет около 55 процентов. Это название происходит от сочетания двух английских слов alternative и coin, то есть альтернативная монета.<br>Согласно сайту Coinmarketcap.com, который отслеживает цены на криптовалюты, в мире существует более 20 тыс. альткоинов. Самый популярный из них – Ethereum, который охватывает почти 19% криптовалютного рынка. Базовая структура у биткоина и альткоина одинаковая, но альктоины пытаются избавиться от недостатков биткоина, например долгое обрабатывание блоков (Биткоин обрабатывает блок в течении 10 минут, а Ethereum обрабатывает блоки каждые 15 секунд). <br>К основным альткоинам относят Ethereum, Ripple (XRP), Binance coin (BNB), Litecoin, Polygon (Matic).<br>Токен — это цифровой актив, который работает на основе блокчейна другой криптовалюты. Токены обычно создаются на основе платформы блокчейна, такой как Ethereum, и представляют собой децентрализованные цифровые активы, которые можно использовать в различных целях. <br>Самым известным и используемым токеном является стейблкоин USDT. Этот токен привязан к стоимости доллара в соотношении 1:1. Это означает, что за каждый выпущенный токен USDT в обращении должна быть соответствующая резервная сумма в долларах на банковских счетах компании Tether.<br>Так же к токенам относятся и нашумевшие NFT (Non-fungible token – невзаимозаменяемый токен). Их достоверность подтверждается адресом смарт-контракта создателя, к которому они относятся.',
                questions: [
                    {text: 'Начать тест', trueth: true}
                ]
            },
            {
                name: 'Вопрос 1', 
                infos: 'Какие существуют виды криптовалют?',
                questions: [
                    {text: 'Биткоин, альткоин, токен', trueth: true},
                    {text: 'Биткоин, альбкоин, токен', trueth: false},
                    {text: 'Коиналь, битбоин, нотек', trueth: false},
                    {text: 'Боткоин, битбоинг, токен', trueth: false}
                ]
            },
            {
                name: 'Вопрос 2', 
                infos: 'Какой самый популярный альткоин?',
                questions: [
                    {text: 'Binance coin', trueth: false},
                    {text: 'Ripple', trueth: false},
                    {text: 'Polygon', trueth: false},
                    {text: 'Ethereum', trueth: true}
                ]
            },
            {
                name: 'Вопрос 3', 
                infos: 'Одинаковая ли базовая структура у биткоина и альткоинов?',
                questions: [
                    {text: 'Да', trueth: true},
                    {text: 'Нет', trueth: false}
                ]
            }
            ,
            {
                name: 'Вопрос 4', 
                infos: 'Какой самый известный токен?',
                questions: [
                    {text: 'TUSD', trueth: false},
                    {text: 'USDT', trueth: true},
                    {text: 'USDC', trueth: false},
                    {text: 'BUSD', trueth: false}
                ]
            }
        ]
    },
    3: {
        name_test: 'Обмен криптовалюты', 
        final_text: 'Поздравляю с успешным прохождением теста по теме: "Обмен криптовалюты"',
        tasks: [
            {
                name: 'Обмен криптовалюты', 
                infos: 'Существуют два способа обмены криптовалюта, на площадках CEX и DEX. CEX - это централизованная биржа криптовалют. Как следует из названия, управление и администрирование такой биржей лежат на плечах одной организации, которая выступает в качестве посредника между двумя сторонами. Вы можете обменивать одни монеты на другие или покупать их в обмен на фиатные, то есть реальные деньги. <br>DEX – это децентрализованная биржа криптовалют. Такая биржа создана на технологии блокчейна. Децентрализованная биржа использует смарт-контракты для торговли между людьми. Такие биржи не имеют посредника, они функционируют как одноранговые обмены. Все ваши обмены происходят с помощью вашего кошелька, к которому никто кроме вас доступа не имеет. Активы никогда не удерживаются, а транзакции совершаются на основе смарт-контрактов и записываются в блокчейне.<br>Главное отличие между CEX и DEX заключается в том, что на централизованных биржах вы должны пройти процедуру KYC (Know your client – знай своего клиента), или проще говоря идентификацию по паспортным данным. А также эти биржи имеют полный контроль над вашими средствами, и могут их заблокировать в любой момент. На децентрализованных биржах вам не нужно проходить идентификацию, и ваши средства находятся под вашим контролем, поскольку операции происходят только с помощью использования вашего крипто-кошелька, к которому доступ имеете только вы.',
                questions: [
                    {text: 'Начать тест', trueth: true}
                ]
            },
            {
                name: 'Вопрос 1', 
                infos: 'Что такое CEX?',
                questions: [
                    {text: 'Централизованная биржа', trueth: true},
                    {text: 'Децентрализованная биржа', trueth: false}
                ]
            },
            {
                name: 'Вопрос 2', 
                infos: 'Дайте определение понятию децентрализованная биржа',
                questions: [
                    {text: 'Это биржа, которая является третьей стороной и имеет полный доступ к вашим средствам.', trueth: true},
                    {text: 'Это контролирующий орган, который следит за вашими действиями в сфере криптовалют.', trueth: false},
                    {text: 'Это биржа, которая создана на основе блокчейна, и которая использует в своей функциональности смарт-контракты.', trueth: false},
                    {text: 'Это сервис, в котором можно создать свой крипто-кошелёк', trueth: false}
                ]
            },
            {
                name: 'Вопрос 3', 
                infos: 'Как переводится аббревиатура KYC?',
                questions: [
                    {text: 'Знай себя самого', trueth: false},
                    {text: 'Сделай себя сам', trueth: false},
                    {text: 'Знай своего клиента', trueth: true},
                    {text: 'Привет как дела', trueth: false}
                ]
            }
        ]
    }
}


window.price_tables = {
    
}