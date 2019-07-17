var JsDiff=function(){function v(e){return{newPos:e.newPos,components:e.components.slice(0)}}function n(e){for(var n=[],t=0;t<e.length;t++)e[t]&&n.push(e[t]);return n}var e=function(e){this.ignoreWhitespace=e};e.prototype={diff:function(e,n){if(n===e)return[{value:n}];if(!n)return[{value:e,removed:!0}];if(!e)return[{value:n,added:!0}];n=this.tokenize(n),e=this.tokenize(e);var t=n.length,o=e.length,r=t+o,i=[{newPos:-1,components:[]}],s=this.extractCommon(i[0],n,e,0);if(i[0].newPos+1>=t&&o<=s+1)return i[0].components;for(var u=1;u<=r;u++)for(var l=-1*u;l<=u;l+=2){var d,a=i[l-1],f=i[l+1];s=(f?f.newPos:0)-l,a&&(i[l-1]=void 0);var p=a&&a.newPos+1<t,h=f&&0<=s&&s<o;if(p||h){!p||h&&a.newPos<f.newPos?(d=v(f),this.pushComponent(d.components,e[s],void 0,!0)):((d=v(a)).newPos++,this.pushComponent(d.components,n[d.newPos],!0,void 0));s=this.extractCommon(d,n,e,l);if(d.newPos+1>=t&&o<=s+1)return d.components;i[l]=d}else i[l]=void 0}},pushComponent:function(e,n,t,o){var r=e[e.length-1];r&&r.added===t&&r.removed===o?e[e.length-1]={value:this.join(r.value,n),added:t,removed:o}:e.push({value:n,added:t,removed:o})},extractCommon:function(e,n,t,o){for(var r=n.length,i=t.length,s=e.newPos,u=s-o;s+1<r&&u+1<i&&this.equals(n[s+1],t[u+1]);)s++,u++,this.pushComponent(e.components,n[s],void 0,void 0);return e.newPos=s,u},equals:function(e,n){var t=/\S/;return!(!this.ignoreWhitespace||t.test(e)||t.test(n))||e===n},join:function(e,n){return e+n},tokenize:function(e){return e}};var t=new e,o=new e(!0),r=new e;o.tokenize=r.tokenize=function(e){return n(e.split(/(\s+|\b)/))};var i=new e(!0);i.tokenize=function(e){return n(e.split(/([{}:;,]|\s+)/))};var P=new e;return P.tokenize=function(e){return e.split(/^/m)},{Diff:e,diffChars:function(e,n){return t.diff(e,n)},diffWords:function(e,n){return o.diff(e,n)},diffWordsWithSpace:function(e,n){return r.diff(e,n)},diffLines:function(e,n){return P.diff(e,n)},diffCss:function(e,n){return i.diff(e,n)},createPatch:function(e,n,t,o,r){var i=[];i.push("Index: "+e),i.push("==================================================================="),i.push("--- "+e+(void 0===o?"":"\t"+o)),i.push("+++ "+e+(void 0===r?"":"\t"+r));var s=P.diff(n,t);function u(e){return e.map(function(e){return" "+e})}function l(e,n,t){var o=s[s.length-2],r=n===s.length-2,i=n===s.length-3&&(t.added!==o.added||t.removed!==o.removed);/\n$/.test(t.value)||!r&&!i||e.push("\\ No newline at end of file")}s[s.length-1].value||s.pop(),s.push({value:"",lines:[]});for(var d=0,a=0,f=[],p=1,h=1,v=0;v<s.length;v++){var c=s[v],g=c.lines||c.value.replace(/\n$/,"").split("\n");if(c.lines=g,c.added||c.removed){if(!d){var m=s[v-1];d=p,a=h,m&&(d-=(f=u(m.lines.slice(-4))).length,a-=f.length)}f.push.apply(f,g.map(function(e){return(c.added?"+":"-")+e})),l(f,v,c),c.added?h+=g.length:p+=g.length}else{if(d)if(g.length<=8&&v<s.length-2)f.push.apply(f,u(g));else{var w=Math.min(g.length,4);i.push("@@ -"+d+","+(p-d+w)+" +"+a+","+(h-a+w)+" @@"),i.push.apply(i,f),i.push.apply(i,u(g.slice(0,w))),g.length<=4&&l(i,v,c),a=d=0,f=[]}p+=g.length,h+=g.length}}return i.join("\n")+"\n"},applyPatch:function(e,n){for(var t=n.split("\n"),o=[],r=!1,i=!1,s="I"===t[0][0]?4:0;s<t.length;s++)if("@"===t[s][0]){var u=t[s].split(/@@ -(\d+),(\d+) \+(\d+),(\d+) @@/);o.unshift({start:u[3],oldlength:u[2],oldlines:[],newlength:u[4],newlines:[]})}else"+"===t[s][0]?o[0].newlines.push(t[s].substr(1)):"-"===t[s][0]?o[0].oldlines.push(t[s].substr(1)):" "===t[s][0]?(o[0].newlines.push(t[s].substr(1)),o[0].oldlines.push(t[s].substr(1))):"\\"===t[s][0]&&("+"===t[s-1][0]?r=!0:"-"===t[s-1][0]&&(i=!0));var l=e.split("\n");for(s=o.length-1;0<=s;s--){for(var d=o[s],a=0;a<d.oldlength;a++)if(l[d.start-1+a]!==d.oldlines[a])return!1;Array.prototype.splice.apply(l,[d.start-1,+d.oldlength].concat(d.newlines))}if(r)for(;!l[l.length-1];)l.pop();else i&&l.push("");return l.join("\n")},convertChangesToXML:function(e){for(var n,t=[],o=0;o<e.length;o++){var r=e[o];r.added?t.push("<ins>"):r.removed&&t.push("<del>"),t.push((n=r.value,void 0,n.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,"&quot;"))),r.added?t.push("</ins>"):r.removed&&t.push("</del>")}return t.join("")},convertChangesToDMP:function(e){for(var n,t=[],o=0;o<e.length;o++)n=e[o],t.push([n.added?1:n.removed?-1:0,n.value]);return t}}}();"undefined"!=typeof module&&(module.exports=JsDiff);



Object.defineProperty(HTMLMediaElement.prototype, 'playing', {
    get: function() {
        return !!(this.currentTime > 0 && !this.paused && !this.ended && this.readyState > 2);
    }
})

class Alice {

    constructor()
    {
        this.d = '';
        this.h = '';
        this.m = '';
        this.audio ;
        this.speak ;
        this.matchWithCommands = false;
        // $.getScript(location.origin+'/js/AliceChatBot/js/voice-assistant.js', function(){
        //     alert('script loaded');
        // });
    }


    random_answer(array)
    {
        this.num = Math.floor(Math.random() * array.length - 1) + 1;
        array[this.num].answer();
    }


    written_test(comands, my_comand)
    {
        $('.message-input').attr('disabled',true)
        this.insertMessage();
        this.defaultComands(comands);
        this.command_execution(comands, my_comand);
    }


    AppendAliceChatOnPage()
    {
        $(document).ready(function() {
            $('body').append(`
                <div class="chat">
                    <div class="chat-title">
                        <div class="action_bl"><i class="fas fa-compress-arrows-alt close-mini-chat modal-open"></i></div>
                        <h1 style="font-size: 16px;">Alisa</h1>
                        <h2>Admin</h2>
                        <figure class="avatar"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZkOCJp6CJDD3wDu2oipP_po0CcZMm7641Z2WfdGToaGu4F8GB" /></figure>
                    </div>
                    <div class="messages"><div class="messages-content"></div></div>
                    <div class="message-box">
                        <textarea type="text" class="message-input" placeholder="Type message..."></textarea>
                        <button type="submit" class="message-submit">Send</button>
                    </div>
                </div>
            `);
        })
    }


    //Alice chat functional START -----------------------------------

    aliceAnswerMessage(text = '',not_found_comand = false) {

        if ( text != '' ){

            if (not_found_comand === true) {
                $('.message-input').attr('disabled',true)
            }

            $(`<div class="message loading new">
                    <figure class="avatar"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZkOCJp6CJDD3wDu2oipP_po0CcZMm7641Z2WfdGToaGu4F8GB" /></figure>
                    <span></span>
                </div>
            `).appendTo($('.mCSB_container'));

            Alice.updateScrollbar();

            setTimeout(function() {

                $('.message.loading').remove();
                $('<div class="message new"><figure class="avatar"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZkOCJp6CJDD3wDu2oipP_po0CcZMm7641Z2WfdGToaGu4F8GB" /></figure>' + text + '</div>').appendTo($('.mCSB_container')).addClass('new');
                Alice.updateScrollbar();
                $('.message-input').attr('disabled',false)

            }, 1000 + (Math.random() * 20) * 100);


        } else{

            if ($('.message-input').val() != '') {
                $('.message-input').attr('disabled',false)
                return false;
            }

        }

    }


    AppendAliceChatFUNCTIONALOnPage(){

        $(document).ready(function() {
            $('.messages-content').mCustomScrollbar();
        });

        this.aliceAnswerMessage('Привет,я Алиса.Чем могу помочь');

        $(document).on('click','.close-mini-chat',function(){
            $('.chat').toggleClass('beeg-chat');
        })



        $(document).on('click','.message-submit',function(){
            let val = $('.message-input').val();
            alice.written_test(comands,val)
            $('.message-input').val(null);
        })


        $(window).on('keydown', function(e) {
            if (e.which == 13) {
                let val = $('.message-input').val();
                alice.written_test(comands,val)
                $('.message-input').val(null);
            }
        })

    }


   static updateScrollbar() {

       $('.messages-content').mCustomScrollbar("update").mCustomScrollbar('scrollTo', 'bottom', {
            scrollInertia: 5,
            timeout: 0
        });

   }




    insertMessage() {

        this.msg = $('.message-input').val();

        if ($.trim(this.msg) == '') {
            return false;
        }

        $('<div class="message message-personal">' + this.msg + '</div>').appendTo($('.mCSB_container')).addClass('new');

        Alice.updateScrollbar();
        Alice.aliceAnswerMessage;

    }



     Encrypt(theText) {
        this.output = new String;
        this.Temp = new Array();
        this.Temp2 = new Array();
        this.TextSize = theText.length;
        for (let i = 0; i < this.TextSize; i++) {
            this.rnd = Math.round(Math.random() * 122) + 68;
            this.Temp[i] = theText.charCodeAt(i) + this.rnd;
            this.Temp2[i] = this.rnd;
        }
        for (let i = 0; i < this.TextSize; i++) {
            this.output += String.fromCharCode(this.Temp[i], this.Temp2[i]);
        }
        return this.output;
    }

    Decrypt(theText) {
        this.output = new String;
        this.Temp = new Array();
        this.Temp2 = new Array();
        this.TextSize = theText.length;
        for (let i = 0; i < this.TextSize; i++) {
            this.Temp[i] = theText.charCodeAt(i);
            this.Temp2[i] = theText.charCodeAt(i + 1);
        }
        for (let i = 0; i < this.TextSize; i = i+2) {
            this.output += String.fromCharCode(this.Temp[i] - this.Temp2[i]);
        }
        return this.output;
    }






    /*=======|****|=========================== */
    /* A.A.A.      Alice chat functional END   */
    /*=======|****|=========================== */

    command_execution(comands, my_comand) {

        for (let key in comands) {

            /*======= :|:================ */
            /* A.A.A.      Double Tag     */
            /*======= :|:================ */

            if (key.indexOf('||') > -1) {
                this.two_comands_arr = key.split('||')
                if (this.two_comands_arr.length > 1) {
                    if (this.two_comands_arr.indexOf(my_comand) != -1) {
                        comands[key]();
                        this.matchWithCommands = true;
                    }
                }
            }
            /*======= :|:================ */
            /* A.A.A.      Many Tag       */
            /*======= :|:================ */

            if (key.indexOf('*') > -1) {
                if (key.split('*').length > 1) {
                    this.diff = JsDiff.diffChars(key, my_comand);
                    this.data = []
                    this.res1 = '';
                    this.res2 = '';
                    this.keyfirstWord = key.replace(/ .*/, '');
                    this.mycomandfirstWord = my_comand.replace(/ .*/, '');

                    for (let j = 0; j < this.diff.length; j++) {
                        if (this.diff[j].added != true) { this.res1 += this.diff[j].value; }
                        if (this.diff[j].value != '*' ) { this.res2 += this.diff[j].value; }
                        if (this.diff[j].added == true) { this.data.push(this.diff[j].value); }
                    }
                    if (this.res2 == my_comand && this.mycomandfirstWord == this.keyfirstWord) {
                        comands[key](this.data);
                        this.matchWithCommands = true;
                    }
                }
                else { continue; }
            }





            else {

                if ( key.indexOf('{') > -1 && key.indexOf('}') > -1 || key.indexOf('}') > -1 && key.indexOf('{') > -1) {

                    /* A.A.A.|     | Encrypt and Decrypt Command  */
                    /*=======| *** |============================= */

                    key == '{}' ? this.encryptDecrypt('{','}',my_comand,comands,key) : this.encryptDecrypt('}','{',my_comand,comands,key);
                }


                /* A.A.A. | *** |  Single Command  */
                /*========| *** |================ */

                if ( my_comand == key ){
                    comands[key]();
                    this.matchWithCommands = true;
                }

            }
        }


        /* A.A.A. | *** |  if the command is not found, activate input again.*/
        /*========| *** |=================================================== */

        if (this.matchWithCommands === false){
            $('.message-input').attr('disabled',false);
            this.aliceAnswerMessage('Пожалуйста,повторите вопрос',true);
        }
        this.matchWithCommands = false;
    }

    encryptDecrypt(a,b,my_comand,comands,key)
    {
        this.com = my_comand.split('');
        if ( this.com[0] == a && this.com[this.com.length -1] == b ){
            this.com[0] = '';
            this.com[this.com.length -1] = '';
            this.answer = this.com.join('');
            comands[key](this.answer);
            this.matchWithCommands = true;
        }
    }


    defaultComands(comands) {

        comands['перезагрузить||обновить||обнови страницу||обновить страницу||перезагрузи страницу'] = () => {
            this.aliceAnswerMessage('команда принята,обновляю страницу')
            console.log('команда принята обновляю страницу')
            setTimeout(() => {
                location.reload()
            }, 3000)
        }

        comands['открой новую вкладку||открой новое окно'] = () => {
            window.open('https://www.google.com/')
            this.aliceAnswerMessage('новая вкладка открыта')
        }

        comands["кто твой создатель||кто тебя создал"] = () => {
            this.aliceAnswerMessage("Мой создатель, Артём Арменович")
        }
        comands["начнем"] = () => {
            this.aliceAnswerMessage("чем желаете заняться?")
        }
        comands["перевод слова *"] = (data) => {
            window.open(
                `https://translate.google.com/#view=home&op=translate&sl=ru&tl=en&text=${encodeURIComponent(data[0])}`
            )
            this.aliceAnswerMessage(`выполняю перевод слова,${data[0]}`)
        }
        comands["найди в интернете *"] = (data) => {
            if (data.length > 0) {
                window.open(`http://www.google.com/search?q=${encodeURIComponent(data[0])}`)
                this.aliceAnswerMessage(`найдены следующие результаты по запросу,${data[0]}`)
            } else {
                this.aliceAnswerMessage('команда не выполнена.пожалуйста,введите ключевые слова для поиска')
            }
        }


        comands['сколько будет * * *'] = (data) => {
            var number_one, number_two, action
            if (data.length == 3) {
                if (data[0] == 'пять' || data[0] == '5') {
                    number_one = '5'
                } else if (data[0] == 'два' || data[0] == '2') {
                    number_one = '2'
                } else {
                    number_one = data[0]
                }
                if (data[2] == 'пять' || data[2] == '5') {
                    number_two = '5'
                } else if (data[2] == 'два' || data[2] == '2') {
                    number_two = '2'
                } else {
                    number_two = data[2]
                }
                if (data[1] == 'x' || data[1] == 'умножить' || data[1] == '*' || data[1] == 'умножить на ') {
                    action = '*';
                } else if (data[1] == 'делить' || data[1] == 'разделить' || data[1] == '/') {
                    action = '/';
                } else if (data[1] == 'плюс' || data[1] == '+') {
                    action = '+';
                } else if (data[1] == 'минус' || data[1] == '-') {
                    action = '-';
                } else {
                    action = '*';
                }
                try {
                    let result = `${number_one} ${action} ${number_two}`.replace(/D/g, '');
                    this.aliceAnswerMessage('результат' + eval(result))
                } catch (err) {
                    this.aliceAnswerMessage('не могли бы вы говорить более четко')
                }
            }
        }
        comands['выйди из сайта'] = () => {
            location.href = '/logout'
        }

        comands['{}'] = (data) => {
            this.aliceAnswerMessage(this.Encrypt(data))
        }

        comands['}{'] = (data) => {
            console.log('decrypt')
            this.aliceAnswerMessage(this.Decrypt(data));
        }


    }

}
