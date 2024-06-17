class Tasks{
    constructor(){
        console.log('Start task exam');
        this.task_info = window.config_task;
        this.worst_answer = 0;
        this.good_answer = 0;
    }

    start = (_id) => {

        let current_task = this.task_info[_id];
        this.current_task_id = 0;

        let start_task = current_task.tasks[0];
        
        let background = document.createElement('div');
        background.onclick = this.close;
        background.style.position = 'fixed';
        
        background.style.left = 0;
        background.style.right = 0;
        background.style.top = 0;
        background.style.bottom = 0;

        background.style.backgroundColor = 'rgba(0, 0, 0, 0.2)';
        document.getElementsByTagName('body')[0].appendChild(background);
        this.backgroud = background;

        this.main_node = document.createElement('div');
        document.getElementsByTagName('body')[0].appendChild(this.main_node);

        let title  = document.createElement('h2');
        title.innerText = start_task.name;
        title.style.borderBottom = '1px solid black';
        title.style.textAlign = 'center';
        this.main_node.appendChild(title);

        let body = document.createElement('div');
        body.innerHTML = start_task.infos;
        body.style.borderBottom = '1px solid black';
        this.main_node.appendChild(body);

        this.main_node.style.padding = '20px';
        this.main_node.style.width = '50%';
        this.main_node.style.minHeight = '200px';
        this.main_node.style.maxHeight = '500px';
        this.main_node.style.backgroundColor = '#f3f3f3';
        this.main_node.style.borderRadius = '10px';
        this.main_node.style.position = 'fixed';
        this.main_node.style.marginLeft = '25%';
        this.main_node.style.top = '100px';
        this.main_node.style.overflow = 'scroll';

        for(let question of start_task.questions)
        {
            let question_node = document.createElement('div');
            question_node.style.width = '90%';
            question_node.style.borderLeft = '1px solid black'; 
            question_node.style.borderTop = '1px solid black';
            question_node.style.borderBottom = '1px solid black';
            question_node.style.borderRadius = '5px ';
            question_node.style.padding= '5px';
            question_node.style.margin = '5px';
            question_node.style.cursor = 'pointer';
            question_node.innerText = question.text;
            
            question_node.onclick = (e, params={id:_id, question:question, node: question_node}) => {
                params['event'] = e;
                this.next(params);
            };

            this.main_node.appendChild(question_node);
        }

    };

    next = (params) => {
        if(params.question.trueth)
        {
            params.node.style.background = 'rgb(0, 120, 0)';
            this.main_node.innerHTML = '';
            this.current_task_id += 1;
            console.log(this.current_task_id );
            console.log(this.task_info[params.id].tasks.length);
            if(this.current_task_id >= this.task_info[params.id].tasks.length)
            {
                let test = this.task_info[params.id];
                let title = document.createElement('div');
                title.innerText = test.name_test;
                this.main_node.appendChild(title);
                
                let final = document.createElement('div');
                if (this.worst_answer == 0){
                    final.innerText = test.final_text;
                } else {
                    final.innerText = "Вы не прошли тестирование!";
                }
                this.main_node.appendChild(final);

                let count_question = document.createElement('div');
                count_question.innerHTML = 'Количество неправильных ответов: <span style="color: rgb(128,0,0)">'+this.worst_answer+'</span>';
                this.main_node.appendChild(count_question);

                let good_question = document.createElement('div');
                good_question.innerHTML = 'Количество вопросов: '+(this.task_info[params.id].tasks.length - 1);
                this.main_node.appendChild(good_question);

                let close_btn = document.createElement('button');
                close_btn.onclick = this.close;
                close_btn.innerText = '[Закрыть]';
                this.main_node.appendChild(close_btn);
                

                return;
            }

            let start_task = this.task_info[params.id].tasks[this.current_task_id];
            

            let title  = document.createElement('h2');
            title.innerText = start_task.name;
            title.style.borderBottom = '1px solid black';
            title.style.textAlign = 'center';
            this.main_node.appendChild(title);

            let body = document.createElement('div');
            body.innerHTML = start_task.infos;
            body.style.borderBottom = '1px solid black';
            this.main_node.appendChild(body);

            this.main_node.style.padding = '20px';
            this.main_node.style.width = '50%';
            this.main_node.style.minHeight = '200px';
            this.main_node.style.maxHeight = '500px';
            this.main_node.style.backgroundColor = '#f3f3f3';
            this.main_node.style.borderRadius = '10px';
            this.main_node.style.position = 'fixed';
            this.main_node.style.marginLeft = '25%';

            for(let question of start_task.questions)
            {
                let question_node = document.createElement('div');
                question_node.style.width = '90%';
                question_node.style.borderLeft = '1px solid black'; 
                question_node.style.borderTop = '1px solid black';
                question_node.style.borderBottom = '1px solid black';
                question_node.style.borderRadius = '5px ';
                question_node.style.padding= '5px';
                question_node.style.margin = '5px';
                question_node.style.cursor = 'pointer';
                question_node.innerText = question.text;
                let id = params.id;
                question_node.onclick = (e, params={id:id, question:question, node: question_node}) => {
                    params['event'] = e;
                    this.next(params);
                };

                this.main_node.appendChild(question_node);
            }
        }
        else
        {
            params.node.style.background = 'rgb(120, 0, 0)';
            this.worst_answer += 1;
        }
    };

    close = () => {
        this.main_node.remove();
        this.backgroud.remove();
        this.worst_answer = 0;
        this.good_answer = 0;
    };

}


window.tasker = new Tasks();