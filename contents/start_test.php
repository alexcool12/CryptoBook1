<div class="service_content">
    <div class="container" >
        <div class="row" style='padding: 15px;'>
            <?php
                if($_GET['test_id'] === null || $_GET['test_id'] == '')
                {
                    print('<script>window.location = "/tests"</script>');
                    exit();
                }
               
            
                $sql = 'SELECT * FROM test WHERE id='.$_GET['test_id'].';';
                $result = mysqli_query($link, $sql);
                
                while ($t = mysqli_fetch_array($result)) 
                {
            ?>
                <div id='theo'>
                    <h1 style='margin-bottom: 50px; width: 100%; text-align: center;'><?php echo $t['name'] ; ?></h1>
                    <p style='text-align: justify;'>
                        <?php echo $t['description'] ; ?>
                    </p>
                
                    <hr>
                    <div style='width: 100; display: flex; flex-direction: row; content-align: center; align-items: center; justify-content: center;'>
                        <button onclick="open_menu();"  style='background-color: #ff5722; border: 1px solid #ff5722; color: #fff; border-radius: 5px;'>
                            Начать тестирование
                        </button>
                    </div>
                    <hr>
                </div>
                <div id='node-answer' style='transition: .3s ease-in-out; transform: scaleY(0); position: absolute;'>
                    <h1 class='center'>Вопросы по теме:</h1>
                    <?php
                        $sql_question = 'SELECT * FROM question WHERE fortest='.$t['id'].';';
                        $result_question = mysqli_query($link, $sql_question);
                        
                        while ($q = mysqli_fetch_array($result_question)) 
                        {
                        ?>
                            <h3><?php echo $q['theoria']; ?></h3>
                            <div class='ask' data-id="<?php echo $q['id']; ?>" style='display: flex; flex-direction: column; width: 100%; justify-content: center; align-items: center;'>
                                <?php
                                    $sql_answ = 'SELECT * FROM answer WHERE forquestion='.$q['id'].';';
                                    $result_answ = mysqli_query($link, $sql_answ);
                                    
                                    while ($a = mysqli_fetch_array($result_answ)) 
                                    {
                                        ?>
                                            <div style='cursor: pointer; width: 100%; text-align: center; border: 1px dotted #333; margin-top: 5px;' class='checker line-<?php echo $q['id']; ?>' isTrue=<?php echo $a['istrue']; ?> ><?php echo $a['text']; ?></div>
                                        <?php
                                    }   
                                ?>
                            </div>
                        <?php
                        }
                        ?>
                    <div style='width: 100%; text-align: center; margin-top: 50px; font-size: 125%;'>
                        Результат: <span id='res'>0/0</span>
                    </div>
                </div>
                
            
            <?php 
                }
            ?>
        </div>
    </div>
</div>

<script>
    const open_menu = () => {
        let node = document.getElementById('node-answer'),
            node_theo = document.getElementById('theo');
        node_theo.style.transition = '.3s ease-in-out';
        node_theo.style.transform = 'scaleY(0)';
        node_theo.style.position = 'absolut';
        
        node.style.transform = 'scaleY(1)';
        node.style.position = 'static';
    };

    window.start_tests = () => {
        window.answers_node = document.getElementById('answers');
        window.answers = {};
        for(let element of document.getElementsByClassName('ask'))
        {
            window.answers[element.getAttribute('data-id')] = null;
        }
        
        document.getElementsByTagName('nav')[0].style.backgroundColor = "#25258E";
        let node_res = document.getElementById('res');
        node_res.innerText = '0/'+Object.keys(window.answers).length;
        
        for(let b of document.getElementsByClassName('checker'))
        {
            b.onclick = (e) => {
                let node = e.target,
                    ans = node.parentElement.getAttribute('data-id');
                    
                    
                let node_res = document.getElementById('res');
                
                node.style.transition = '.1s ease-in-out';
                
                if(node.getAttribute('isTrue') == '1')
                {
                    node.style.color = 'white';
                    node.style.backgroundColor = 'rgba(0, 120, 0, 0.5)';
                    node.style.border = 'none';
                    node.parentElement.innerHTML = node.outerHTML;
                    if(window.answers[ans] == null)
                    {
                        window.answers[ans] = true;
                    }
                }
                else
                {
                    node.style.color = 'white';
                    node.style.backgroundColor = 'rgba(120, 0, 0, 0.5)';
                    node.style.border = 'none';
                    node.parentElement.innerHTML = node.outerHTML;
                    if(window.answers[ans] == null)
                    {
                        window.answers[ans] = false;
                        //alert('Повторите теорию и повторите тестирование');
                        //window.location.href = window.location.href;
                    }
                }
                let right_anwswers = Object.keys(window.answers).reduce(
                    (p, e) => {
                        if(window.answers[e])
                        {
                            return p+1;
                        }
                        else
                        {
                            return p;
                        }
                    }, 0
                );
                
                node_res.innerText = right_anwswers+'/'+Object.keys(window.answers).length;
                
                
                let flag = true;
                for(let k of Object.keys(window.answers))
                {
                    if(window.answers[k] == null)
                    {
                        flag = false;
                    }
                }
                if(flag && right_anwswers != Object.keys(window.answers).length)
                {
                    alert('Попробуйте пройти тест еще раз');
                }
                
            };
        }
    };
    
    window.pull_functions.push(window.start_tests);
</script>