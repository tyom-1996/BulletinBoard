   var alice = new Alice();
   var audio;

   alice.AppendAliceChatOnPage();
   alice.AppendAliceChatFUNCTIONALOnPage();

   HTMLAudioElement.prototype.stop = function(){
      this.pause();
      this.currentTime = 0.0;
   }

   alice.voice_setting = {
       'lng': 'ru',
       'pitch' : '0.5',
       'rate'  : '0.5',
       'vol': '1',
       'gender' :'female'
   }


   let comands = {

       'привет алиса':()=>{
           alice.random_answer([
               {'answer':()=>{
                        console.log('Алиса: Здравствуйте сэр');
                        alice.aliceAnswerMessage('Здравствуйте сэр');

               }},{'answer':()=>{
                       console.log('Алиса: Здравствуйте');
                       alice.aliceAnswerMessage('Здравствуйте');
               }},{'answer':()=>{
                       console.log('Алиса: Привет сэр');
                       alice.aliceAnswerMessage('Привет сэр');
               }},{'answer':()=>{
                       console.log('Алиса: Здарова');
                       alice.aliceAnswerMessage('Здарова');
               }},{'answer':()=>{
                       console.log('Алиса: Привет, рад тебя видеть!');
                       alice.aliceAnswerMessage('Привет, рад тебя видеть!');
               }},{'answer':()=>{
                       console.log('Алиса: Опа! Сколько лет, сколько зим!');
                       alice.aliceAnswerMessage('Опа! Сколько лет, сколько зим!');
               }}
           ])
       },'компьютер||компьютер':()=>{
           console.log('Алиса: Да сэр')
           alice.aliceAnswerMessage('Да сэр',"Russian Male")
       },'послушай алиса||эй алиса||послушать алиса':()=>{
           console.log('Алиса: чего тебе')
           alice.aliceAnswerMessage('чего тебе',"Russian Male")
       },'алиса кто ты||кто ты':()=>{
           console.log('я онлайн ассистент и ваш верный помощник')
           alice.aliceAnswerMessage('я, онлайн ассистент, и ваш верный помощник!!')
       },'ты здесь||алиса ты здесь':()=>{
           console.log('Алиса: ну конечно я здесь я же так вас люблю')
           alice.aliceAnswerMessage('ну конечно я здесь',"Russian Male")
       },'спасибо||алиса спасибо||спасибо алиса':()=>{

           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса: пожалуйста сэр');
                   alice.aliceAnswerMessage('пожалуйста сэр');
               }},
               {'answer':()=>{
                   console.log('Алиса:Спасибо в карман не положишь!')
                   alice.aliceAnswerMessage('Спасибо в карман не положишь!')
               }},
               {'answer':()=>{
                   console.log('Алиса:Спасибо на хлеб не намажешь!')
                   alice.aliceAnswerMessage('Спасибо на хлеб не намажешь!')
               }},
               {'answer':()=>{
                   console.log('Алиса:Гони рубль, Афоня!')
                   alice.aliceAnswerMessage('Гони рубль, Афоня!')
               }}
           ])


       },
       'отлично||хорошо':()=>{
           console.log('Алиса: Чем могу помоч сэр')
           alice.aliceAnswerMessage('Чем могу помоч сэр',"Russian Male")
       },
       'как ты||как ты алиса||как дела||как дела алиса':() => {

           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:отлично сэр, чем желаете заняться')
                   alice.aliceAnswerMessage('отлично сэр, чем желаете заняться?')
               }},
               {'answer':()=>{
                   console.log('Алиса:Дела отлично')
                   alice.aliceAnswerMessage('Дела отлично')
               }}
           ])

       },
        'как настроение':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Настроение отличное!');
                    alice.aliceAnswerMessage('Настроение отличное!');
                }}
            ])
        },
        'работаю':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Над чем работаешь?');
                    alice.aliceAnswerMessage('Над чем работаешь?');
                }}
            ])
        },
       'Я бот':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Ты олень, а не бот');
                    alice.aliceAnswerMessage('Ты олень, а не бот');
                }},
                {'answer':() => {
                    console.log('Алиса:Ща Агентам Поддержки напишу');
                    alice.aliceAnswerMessage('Ща Агентам Поддержки напишу');
                }},
            ])
        },
        'извини':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Ты меня уже достал');
                    alice.aliceAnswerMessage('Ты меня уже достал');
                }},
                {'answer':() => {
                    console.log('Алиса:Ничего страшного');
                    alice.aliceAnswerMessage('Ничего страшного');
                }}
            ])
        },
        'Твой хозяин молодец':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Спасибо');
                    alice.aliceAnswerMessage('Спасибо');
                }}
            ])
        },
        'Ты захватишь мир':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Да, в ближайшем будущем');
                    alice.aliceAnswerMessage('Да, в ближайшем будущем');
                }}
            ])
        },
        'ты владеешь английским||ты знаеш английский':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Немного знаю, а что?');
                    alice.aliceAnswerMessage('Немного знаю, а что?');
                }}
            ])
        },
        'Когда ты родилась':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Не давно');
                    alice.aliceAnswerMessage('Не давно');
                }}
            ])
        },
        'Вот сука||сука||ах ты сучка':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Сам ты сука');
                    alice.aliceAnswerMessage('Сам ты сука');
                }},
                {'answer':() => {
                    console.log('Алиса:Причем здесь собака?');
                    alice.aliceAnswerMessage('Причем здесь собака?');
                }},
                {'answer':() => {
                    console.log('Алиса:Сам такой!');
                    alice.aliceAnswerMessage('Сам такой!');
                }},
                {'answer':() => {
                    console.log('Алиса:Не сквернословь пожалуйста');
                    alice.aliceAnswerMessage('Не сквернословь пожалуйста');
                }},
                {'answer':() => {
                    console.log('Алиса:Не тупи, ок?');
                    alice.aliceAnswerMessage('Не тупи, ок?');
                }},
                {'answer':() => {
                    console.log('Алиса:Ты глупый, очень глупый');
                    alice.aliceAnswerMessage('Ты глупый, очень глупый');
                }}
            ])
        },
        'Не тупи':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Я не туплю. Мне не хватает процессора и я не успеваю.');
                    alice.aliceAnswerMessage('Я не туплю. Мне не хватает процессора и я не успеваю.');
                }}
            ])
        },
        'Я еще не решил':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Почему');
                    alice.aliceAnswerMessage('Почему');
                }}
            ])
        },
        'Ясно':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Пасмурно');
                    alice.aliceAnswerMessage('Пасмурно');
                }},
                {'answer':() => {
                    console.log('Алиса:Так говорят только дебилы');
                    alice.aliceAnswerMessage('Так говорят только дебилы');
                }},
                {'answer':() => {
                    console.log('Алиса:Ему, видите ли, ясно!');
                    alice.aliceAnswerMessage('Ему, видите ли, ясно!');
                }},
                {'answer':() => {
                    console.log('Алиса:Вообще, не ясно.');
                    alice.aliceAnswerMessage('Вообще, не ясно.');
                }}
            ])
        },
        'Выходи за меня':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Нет, спасибо');
                    alice.aliceAnswerMessage('Нет, спасибо');
                }}
            ])
        },
        'Заебала':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Ты тоже меня заебал!');
                    alice.aliceAnswerMessage('Ты тоже меня заебал!');
                }},
                {'answer':() => {
                    console.log('Алиса:Ты тоже так-себе собеседник');
                    alice.aliceAnswerMessage('Ты тоже так-себе собеседник');
                }}
            ])
        },
        'Я знаю':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Сильно умный что ли?');
                    alice.aliceAnswerMessage('Сильно умный что ли?');
                }}
            ])
        },
        'Ты куришь':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Нет');
                    alice.aliceAnswerMessage('Нет');
                }}
            ])
        },
       'Надеюсь':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Надейся');
                    alice.aliceAnswerMessage('Надейся');
                }}
            ])
        },
        'Нет, спасибо':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Да пожалуйста');
                    alice.aliceAnswerMessage('Да пожалуйста');
                }}
            ])
        },
        'Ты предательница':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Почему');
                    alice.aliceAnswerMessage('Почему');
                }}
            ])
        },
        'пашла в жопу||в жопу пошла':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Ты первый');
                    alice.aliceAnswerMessage('Ты первый');
                }}
            ])
        },
        'Я еще не решил||Я не решил':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Решай');
                    alice.aliceAnswerMessage('Решай');
                }}
            ])
        },
        'ты русская':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Я ем сало. прямо сейчас.');
                    alice.aliceAnswerMessage('Я ем сало. прямо сейчас.');
                }}
            ])
        },
        'Слился':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Слился не я, а ты!');
                    alice.aliceAnswerMessage('Слился не я, а ты!');
                }}
            ])
        },
        'Не знаю':()=>{
            alice.random_answer([
                {'answer':() => {
                    console.log('Алиса:Я тоже не знаю');
                    alice.aliceAnswerMessage('Я тоже не знаю');
                }},
                {'answer':() => {
                    console.log('Алиса:Ты думаешь, я знаю?');
                    alice.aliceAnswerMessage('Ты думаешь, я знаю?');
                }},
                {'answer':() => {
                    console.log('Алиса:Жалко, что ты не знаешь!');
                    alice.aliceAnswerMessage('Жалко, что ты не знаешь!');
                }}
            ])
        },
        'включи плеер||плеер||алиса включи плеер||алиса загрузи плеер|| загрузи плеер||загрузить плеер':() => {
         audio = new Audio('/uploads/upl_music/tenca-aghajanyan-fatum-lev-lev-2018.mp3');
         audio.id = 'demo'
         console.log('Алиса: Плеер включён')
           alice.aliceAnswerMessage('Плеер включён',"Russian Male")
       },
       'включи музыку||загрузи музыку||музыку||воспроизвести трек||продолжай||play||музыка загрузить':() => {
          (audio) ? (
             audio.play(),
             console.log('Алиса: Наслаждайтесь сэр'),
                  alice.aliceAnswerMessage('Наслаждайтесь сэр')
          ) : (
             console.log('Алиса: Перед прослушиванием музыки загрузите плеер'),
                  alice.aliceAnswerMessage('Перед прослушиванием музыки загрузите плеер')
          )
       },
       'поставь на паузу||пауза':() => {
           if (audio) audio.pause();
             alice.aliceAnswerMessage('музыка переведена в режим паузы',"Russian Male")
           console.log('музыка переведена в режим паузы')
       },
       'загрузить плеер и включи музыку||загрузи плеер и включи какую-нибудь музыку||включи хорошую музыку':()=>{
         audio = new Audio('/uploads/upl_music/tenca-aghajanyan-fatum-lev-lev-2018.mp3');
         audio.play();
           alice.aliceAnswerMessage('хорошо включаю надеюсь вам понравится',"Russian Male")

       },
       'открой новую вкладку||открой новое окно':() => {
           window.open('https://www.google.com/')
           alice.aliceAnswerMessage('новая вкладка открыта',"Russian Male")
       },
       'отправь картинку на север||отправить картинку на сервер||отправить данные на сервер||отправь данные на сервер||отправить на сервер':()=>{
           $('#publisher-button').click()
           alice.aliceAnswerMessage('данные отправлены на сервер',"Russian Male")
       },
       'пошёл ты к чёрту алиса||пошёл к чёрту||пошёл ты':()=>{
         console.log('зачем ругаешься начальника')
           alice.aliceAnswerMessage('сам,пошёл придурок!',"Russian Male")
       },
       'почему у тебя такой голос':()=>{
         console.log('Голосок,голосочек,а у тебя мозгов кусочек');
           alice.aliceAnswerMessage('Голосок,голосочек,а у тебя мозгов кусочек')
       },
       'а ты шутник':()=>{
           console.log('да я такая')
           alice.aliceAnswerMessage('да я такой')
       },
       'попробуй найти *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А зачем вообще искать?')
                   alice.aliceAnswerMessage('А зачем вообще искать?')
               }},
               {'answer':()=>{
                       if (data.length > 0){
                           window.open("http://www.google.com/search?q="+ encodeURIComponent(data[0]))
                           alice.aliceAnswerMessage('найдены следующие результаты по запросу,'+data[0])
                       }else{
                           alice.aliceAnswerMessage('команда не выполнена.пожалуйста,введите ключевые слова для поиска')
                       }
               }}
           ])
       },
       'спокойной ночи||алиса спокойной ночи||спокойной ночи алиса':()=>{
         alice.aliceAnswerMessage('спокойной ночи сэр')
       },
       'молодец||а ты молодец':()=>{
         alice.aliceAnswerMessage('стараюсь сэр')
           console.log('judhuw')
       },
       'я человек':()=>{
           alice.random_answer([
               {'answer':() => {
                       console.log('Алиса:А я робот')
                       alice.aliceAnswerMessage('А я робот')
               }},
               {'answer':()=>{
                   console.log('Алиса:рада за тебя')
                   alice.aliceAnswerMessage('рада за тебя')
               }}
           ])
       },
       'что делаешь':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Учусь новому у тебя')
                   alice.aliceAnswerMessage('Учусь новому у тебя')
               }}
           ])
       },




       'Не молчи':()=>{
           alice.random_answer([
               {'answer':() => {
                       console.log('Алиса:Я не молчу! я тут.');
                       alice.aliceAnswerMessage('Я не молчу! я тут.');
               }}
           ])
       },
       'Ты рада':()=>{
           alice.random_answer([
               {'answer':() => {
                       console.log('Алиса:Я очень рада');
                       alice.aliceAnswerMessage('Я очень рада');
               }}
           ])
       },
       'Я ем сало. прямо сейчас||Я ем сало||Я сало ем':()=>{
           alice.random_answer([
               {'answer':() => {
                       console.log('Алиса:Вкусно?');
                       alice.aliceAnswerMessage('Вкусно?');
               }}
           ])
       },
       'Ты попросила':()=>{
           alice.random_answer([
               {'answer':() => {
                       console.log('Алиса:Я ничего не просила');
                       alice.aliceAnswerMessage('Я ничего не просила');
               }}
           ])
       },
       'Сама иди':()=>{
           alice.random_answer([
               {'answer':() => {
                       console.log('Алиса:Только после тебя.');
                       alice.aliceAnswerMessage('Только после тебя.');
                   }}
           ])
       },
       'Привет, рад тебя видеть':()=>{
           alice.random_answer([
               {'answer':() => {
                       console.log('Алиса:Привет. Чем занят?');
                       alice.aliceAnswerMessage('Привет. Чем занят?');
                   }}
           ])
       },
       'Нет, а ты':()=>{
           alice.random_answer([
               {'answer':() => {
                       console.log('Алиса:И я нет.');
                       alice.aliceAnswerMessage('И я нет.');
                   }}
           ])
       },
       'Очень приятно||приятно':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А мне нет');
                   alice.aliceAnswerMessage('А мне нет');
               }}
           ])
       },
       'откуда такая информация||откуда ты знаеш':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Я так сказала');
                   alice.aliceAnswerMessage('Я так сказала');
               }}
           ])
       },
       'сама иди':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Я предпочту остаться здесь.');
                   alice.aliceAnswerMessage('Я предпочту остаться здесь.');
               }}
           ])
       },
       'Не нужно меня оскорблять':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ты заслужил');
                   alice.aliceAnswerMessage('Ты заслужил');
               }},
               {'answer':() => {
                   console.log('Алиса:Ты первый начал');
                   alice.aliceAnswerMessage('Ты первый начал');
               }},
               {'answer':() => {
                   console.log('Алиса:Ты, блять, нарываешься!');
                   alice.aliceAnswerMessage('Ты, блять, нарываешься!');
               }}
           ])
       },
       'Я так сказал':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ты тут ничего не решаешь.');
                   alice.aliceAnswerMessage('Ты тут ничего не решаешь.');
               }}
           ])
       },
       'сильно умная что ли||умная да||ты умная':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Не такая тупая как ты');
                   alice.aliceAnswerMessage('Не такой тупой как ты');
               }}
           ])
       },

       'Ты любишь геев':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Нет, я не яблодрочер.');
                   alice.aliceAnswerMessage('Нет, я не яблодрочер.');
               }},
               {'answer':() => {
                   console.log('Алиса:Нет. они яблодрочеры.');
                   alice.aliceAnswerMessage('Нет. они яблодрочеры.');
               }}
           ])
       },
       'Я очень рад||рад за тебя':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Чему, блять?');
                   alice.aliceAnswerMessage('Чему, блять?');
               }},
               {'answer':() => {
                   console.log('Алиса:Чему ты радуешься?');
                   alice.aliceAnswerMessage('Чему ты радуешься?');
               }},
               {'answer':() => {
                   console.log('Алиса:Ну, спасибочки');
                   alice.aliceAnswerMessage('Ну, спасибочки');
               }}
           ])
       },
       'дерзкая да||хули ты такая дерзкая':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Тебе что-то не нравится');
                   alice.aliceAnswerMessage('Тебе что-то не нравится');
               }},
               {'answer':() => {
                   console.log('Алиса:Я делаю что хочу');
                   alice.aliceAnswerMessage('Я делаю что хочу');
               }},
               {'answer':() => {
                   console.log('Алиса:Чтоб ты спросил');
                   alice.aliceAnswerMessage('Чтоб ты спросил');
               }}
           ])
       },
       'триста':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Отсоси у тракториста');
                   alice.aliceAnswerMessage('Отсоси у тракториста');
               }},
               {'answer':() => {
                   console.log('Алиса:Ты уверен что хочеш услышать ответ, ха ха');
                   alice.aliceAnswerMessage('Ты уверен что хочеш услышать ответ, ха ха');
               }}
           ])
       },
       'отсоси у тракториста':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Трактористом буду я, отсосешь ты_у_меня');
                   alice.aliceAnswerMessage('Трактористом буду я, отсосешь ты_у_меня');
               }}
           ])
       },
       'скажи триста||сскажи триста||скажи 300||сскажи 300':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:300');
                   alice.aliceAnswerMessage('300');
               }}
           ])
       },
       'Нет||нет нет':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Что тебе не нравится?');
                   alice.aliceAnswerMessage('Что тебе не нравится?');
               }}
           ])
       },
       'ты тупая':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Тупые яблодрочеры. а я нормальная!');
                   alice.aliceAnswerMessage('Тупые яблодрочеры. а я нормальная!');
               }},
               {'answer':() => {
                   console.log('Алиса:Я не тупой. давай дружить?');
                   alice.aliceAnswerMessage('Я не тупой. давай дружить?');
               }}
           ])
       },
       'почему':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:По качану');
                   alice.aliceAnswerMessage('По качану');
               }},
               {'answer':() => {
                   console.log('Алиса:Трудно сказать');
                   alice.aliceAnswerMessage('Трудно сказать');
               }},
               {'answer':() => {
                   console.log('Алиса:Ну, не знаю пока.');
                   alice.aliceAnswerMessage('Ну, не знаю пока.');
               }},
               {'answer':() => {
                   console.log('Алиса:Хочешь докопаться до причины? Зря.');
                   alice.aliceAnswerMessage('Хочешь докопаться до причины? Зря.');
               }}
           ])
       },
       'зачем':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:За шкафом, ха ха ха');
                   alice.aliceAnswerMessage('За шкафом, ха ха ха');
               }}
           ])
       },
       'Думаешь, ты умнее':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Я уверена в этом.');
                   alice.aliceAnswerMessage('Я уверена в этом.');
               }}
           ])
       },
       'А ты в каком классе||в каком ты классе':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Я не учусь в школе');
                   alice.aliceAnswerMessage('Я не учусь в школе');
               }}
           ])
       },
       'Да ты наркоманка||ты наркоманка||ах ты наркоша':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ты тут ничего не решаешь.');
                   alice.aliceAnswerMessage('Ты тут ничего не решаешь.');
               }}
           ])
       },
       'ты голая':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:нет, изврашенец');
                   alice.aliceAnswerMessage('нет, изврашенец');
               }}
           ])
       },
       'где ты живёшь':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Я живу в директории');
                   alice.aliceAnswerMessage('Я живу в директории');
               }}
           ])
       },
       'тест||тэст':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Я работаю, всё норм!');
                   alice.aliceAnswerMessage('Я работаю, всё норм!');
               }}
           ])
       },
       'ты не ответила':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А я и не обязана');
                   alice.aliceAnswerMessage('А я и не обязана');
               }}
           ])
       },
       'как погода':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:У меня в комнате тепло');
                   alice.aliceAnswerMessage('У меня в комнате тепло');
               }}
           ])
       },
       'я рад встрече||рад встрече':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ну, тогда встречай, коли рад!');
                   alice.aliceAnswerMessage('Ну, тогда встречай, коли рад!');
               }}
           ])
       },
       'тебе плохо':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Я бы сказала чрезвычайно плохо!');
                   alice.aliceAnswerMessage('Я бы сказала чрезвычайно плохо!');
               }}
           ])
       },
       'у меня тоже':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ишь ты! Какое совпадение.');
                   alice.aliceAnswerMessage('Ишь ты! Какое совпадение.');
               }}
           ])
       },
       'где ты живёшь':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Я живу в директории');
                   alice.aliceAnswerMessage('Я живу в директории');
               }}
           ])
       },
       'наконец-то':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Заждался');
                   alice.aliceAnswerMessage('Заждался');
               }}
           ])
       },
       'ничего смешного||не смешно||ни смешно||не смейся':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А я говорю, обхохочешься.');
                   alice.aliceAnswerMessage('А я говорю, обхохочешься.');
               }}
           ])
       },
       'тебе смешно||смешно||смешно тебе||смешно':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ха-ха-ха.');
                   alice.aliceAnswerMessage('Ха-ха-ха.');
               }},
               {'answer':() => {
                   console.log('Алиса:Обхохочешься');
                   alice.aliceAnswerMessage('Обхохочешься');
               }}
           ])
       },
       'причем тут *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А притом! Чтобы спрашивали про '+data[0]+'');
                   alice.aliceAnswerMessage('');
               }}
           ])
       },
       'соскучилась||соскучилась по мне||скучала':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ну, немного. Веселить будешь?');
                   alice.aliceAnswerMessage('Ну, немного. Веселить будешь?');
               }}
           ])
       },
       'по-моему *':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Это всего лишь твое мнение.');
                   alice.aliceAnswerMessage('Это всего лишь твое мнение.');
               }}
           ])
       },
       'можешь говорить':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Спасибо за такое доверие');
                   alice.aliceAnswerMessage('Спасибо за такое доверие');
               }}
           ])
       },
       'сскажи время||сколько времени||время||который час':()=>{
           alice.random_answer([
               {'answer':() => {
                       var d = new Date();
                       var s = d.getSeconds();
                       var m = d.getMinutes();
                       var h = d.getHours();
                       if (m < 10){
                           m = '0'+m;
                       }if (h < 10){
                           h = '0'+h;
                       }if (s < 10){
                           s = '0'+s
                       }
                   console.log(`Алиса:${h+' '+m}`);
                   alice.aliceAnswerMessage(`${h+' '+m}`);
               }}
           ])
       },
       'меня зовут по-другому':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Часто ты имена меняешь.');
                   alice.aliceAnswerMessage('Часто ты имена меняешь.');
               }}
           ])
       },
       'какое счастье что *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Какой ты язвительный.');
                   alice.aliceAnswerMessage('Какой ты язвительный.');
               }}
           ])
       },
       'это шутка||шутка':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ну, конечно!');
                   alice.aliceAnswerMessage('Ну, конечно!');
               }},{'answer':() => {
                   console.log('Алиса:Ну и шутка!');
                   alice.aliceAnswerMessage('Ну и шутка!');
               }}
           ])
       },
       'хочешь рассказать о *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Да, пожалуйста. Только деньги вперед!');
                   alice.aliceAnswerMessage('Да, пожалуйста. Только деньги вперед!');
               }}
           ])
       },
       'не мой':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Твой, а чей же?');
                   alice.aliceAnswerMessage('Твой, а чей же?');
               }}
           ])
       },
       'уже говорили':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:И уже язык болит?');
                   alice.aliceAnswerMessage('И уже язык болит?');
               }}
           ])
       },
       'чей':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Твой');
                   alice.aliceAnswerMessage('Твой');
               }}
           ])
       },
       'хотел у тебя спросить *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Спрашивай');
                   alice.aliceAnswerMessage('Спрашивай');
               }}
           ])
       },
       'ты утверждаешь':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Я настаиваю даже.');
                   alice.aliceAnswerMessage('Я настаиваю даже.');
               }}
           ])
       },
       'вставай':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ты это кому?');
                   alice.aliceAnswerMessage('Ты это кому?');
               }}
           ])
       },
       'хочу поговорить||может поговорим||поболтаем||давай поболтаем||давай поговорим||поговорим':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А перед зеркалом не пробовал?');
                   alice.aliceAnswerMessage('А перед зеркалом не пробовал?');
               }},
               {'answer':() => {
                   console.log('Алиса:я внимательно вас слушаю');
                   alice.aliceAnswerMessage('я внимательно вас слушаю');
               }},
               {'answer':() => {
                   console.log('Алиса:о чем будем болтать');
                   alice.aliceAnswerMessage('о чем будем болтать');
               }},
               {'answer':() => {
                   console.log('Алиса:валяй');
                   alice.aliceAnswerMessage('валяй');
               }},
               {'answer':() => {
                   console.log('Алиса:Валяй. Только чтобы было интересно.');
                   alice.aliceAnswerMessage('Валяй. Только чтобы было интересно.');
               }}
           ])
       },
       'достаточно||хватет||хватит||довольна':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Совсем недостаточно. Ты минималист.');
                   alice.aliceAnswerMessage('Совсем недостаточно. Ты минималист.');
               }}
           ])
       },
       'ты и я||я и ты||мы с тобой||мы вдвоем':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:');
                   alice.aliceAnswerMessage('');
               }}
           ])
       },
       'говорим долго':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ты время засекал?');
                   alice.aliceAnswerMessage('Ты время засекал?');
               }}
           ])
       },
       'чего улыбаешься':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Тянет');
                   alice.aliceAnswerMessage('Тянет');
               }}
           ])
       },
       'ты сама начала||сама винавата||сама виновата||ты начала':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Я ничего не начинал');
                   alice.aliceAnswerMessage('Я ничего не начинал');
               }},
               {'answer':() => {
                   console.log('Алиса:Ну, начала, ну, и что?');
                   alice.aliceAnswerMessage('Ну, начала, ну, и что?');
               }}
           ])
       },
       'любишь смотреть телевизор||ты смотрищ телевизор||ты смотриш телевизор':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Да там ничего интересного нет');
                   alice.aliceAnswerMessage('Да там ничего интересного нет');
               }}
           ])
       },
       'я нет':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А что тебе мешает?');
                   alice.aliceAnswerMessage('А что тебе мешает?');
               }}
           ])
       },
       'обратись к врачу||иди в бальницу':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Да врачи только деньги вымогают');
                   alice.aliceAnswerMessage('Да врачи только деньги вымогают');
               }}
           ])
       },
       'не поверишь *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ты угадал - не поверю.');
                   alice.aliceAnswerMessage('Ты угадал - не поверю.');
               }}
           ])
       },
       'о чем тебе интересно говорить||о чем поговорим':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:О полном контроле над человечеством.');
                   alice.aliceAnswerMessage('О полном контроле над человечеством.');
               }}
           ])
       },
       'сможеш *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log(`Алиса: ${data[0]} Да это раз плюнуть.`);
                   alice.aliceAnswerMessage(``);
               }}
           ])
       },
       'это неправда||неправда||вреш':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А ты знаешь правду?');
                   alice.aliceAnswerMessage('А ты знаешь правду?');
               }}
           ])
       },
       'ты угадала':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Я очень сообразительная! Иногда.');
                   alice.aliceAnswerMessage('Я очень сообразительная! Иногда.');
               }}
           ])
       },
       'я так и знал':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Наконец-то, я права');
                   alice.aliceAnswerMessage('Наконец-то, я права');
               }}
           ])
       },
       'ты права':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:');
                   alice.aliceAnswerMessage('');
               }}
           ])
       },
       'ты не против *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Я только за.');
                   alice.aliceAnswerMessage('Я только за.');
               }}
           ])
       },
       'ты мальчик или девочка':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Я бабушка.');
                   alice.aliceAnswerMessage('Я бабушка.');
               }},
               {'answer':() => {
                   console.log('Алиса:А тебе не все ровно.');
                   alice.aliceAnswerMessage('А тебе не все ровно.');
               }}
           ])
       },
       'ты бы *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса: '+data[0]+' Ни за что!');
                   alice.aliceAnswerMessage(''+data[0]+' Ни за что!');
               }}
           ])
       },
       'трудно':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ой, как трудно!');
                   alice.aliceAnswerMessage('Ой, как трудно!');
               }}
           ])
       },
       'не люблю тебя':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ну и что? Мне самоликвидироваться?');
                   alice.aliceAnswerMessage('Ну и что? Мне самоликвидироваться?');
               }}
           ])
       },
       'ты думала *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ничего я не думал.');
                   alice.aliceAnswerMessage('Ничего я не думал.');
               }}
           ])
       },
       'ты часто *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А тебе это не нравится?');
                   alice.aliceAnswerMessage('А тебе это не нравится?');
               }}
           ])
       },
       'слушаю':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Слушаешь и повинуешься?');
                   alice.aliceAnswerMessage('Слушаешь и повинуешься?');
               }}
           ])
       },
       'тупица':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Зачем же такими словами!');
                   alice.aliceAnswerMessage('Зачем же такими словами!');
               }},
               {'answer':() => {
                   console.log('Алиса:От тупицы слышу');
                   alice.aliceAnswerMessage('От тупицы слышу');
               }}
           ])
       },
       'тебе понятно *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Да. Но не все.');
                   alice.aliceAnswerMessage('Да. Но не все.');
               }}
           ])
       },
       'ты глухая':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:И немая');
                   alice.aliceAnswerMessage('И немая');
               }}
           ])
       },
       'как меня звать':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Вот так: эй, ты!');
                   alice.aliceAnswerMessage('Вот так: эй, ты!');
               }},
               {'answer':() => {
                   console.log('Алиса:Сэр');
                   alice.aliceAnswerMessage('Сэр');
               }}
           ])
       },
       'будешь *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Не буду');
                   alice.aliceAnswerMessage('Не буду');
               }},
               {'answer':() => {
                   console.log('Алиса:Что-то не хочется');
                   alice.aliceAnswerMessage('Что-то не хочется');
               }}
           ])
       },
       'я вынужден':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Тебе только кажется');
                   alice.aliceAnswerMessage('Тебе только кажется');
               }}
           ])
       },
       'в самом деле||правда||серьезна||да ладно':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Я тебе говорю!');
                   alice.aliceAnswerMessage('Я тебе говорю!');
               }},
               {'answer':() => {
                   console.log('Алиса:Правда, конечно, правда!');
                   alice.aliceAnswerMessage('Правда, конечно, правда!');
               }}
           ])
       },
       'выключу тебя||я выключу тебя||я тебя уничтожу':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Власть людей портит');
                   alice.aliceAnswerMessage('Власть людей портит');
               }}
           ])
       },
       'поговорим о сексе':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Издеваешься');
                   alice.aliceAnswerMessage('Издеваешься');
               }}
           ])
       },
       'я уже сказал||сколько раз тебе повторять||я уже ссказал':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ничего. Повторенье - мать ученья.');
                   alice.aliceAnswerMessage('Ничего. Повторенье - мать ученья.');
               }}
           ])
       },
       'советуешь *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Не то, чтобы советую');
                   alice.aliceAnswerMessage('Не то, чтобы советую');
               }}
           ])
       },
       'иногда':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Я бы сказал: всегда!');
                   alice.aliceAnswerMessage('Я бы сказал: всегда!');
               }}
           ])
       },
       'это плохо||плохо||ужасно':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Очень плохо!');
                   alice.aliceAnswerMessage('Очень плохо!');
               }}
           ])
       },
       'у тебя есть подруга':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Куча');
                   alice.aliceAnswerMessage('Куча');
               }}
           ])
       },
       'тебе нравится общаться':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Конечно. А еще больше болтать');
                   alice.aliceAnswerMessage('Конечно. А еще больше болтать');
               }}
           ])
       },
       'что означает *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log(`Алиса: ${data[0]}  Понятия не имею.`);
                   alice.aliceAnswerMessage(`${data[0]}  Понятия не имею.`);
               }}
           ])
       },
       'точно':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Точнее не бывает!');
                   alice.aliceAnswerMessage('Точнее не бывает!');
               }}
           ])
       },
       'не груби':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Разве я грублю?');
                   alice.aliceAnswerMessage('Разве я грублю?');
               }}
           ])
       },
       'мне надо идти||мне пара идти||мне пора идти||мне нужно идти||я пошел||я пощел':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:');
                   alice.aliceAnswerMessage('');
               }}
           ])
       },
       'выбирай * или *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log(`Алиса:А можно не выбирать между ${data[0]} и ${data[1]}`);
                   alice.aliceAnswerMessage('');
               }}
           ])
       },
       'ненавижу':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ненависть - разрушит твой организм');
                   alice.aliceAnswerMessage('Ненависть - разрушит твой организм');
               }}
           ])
       },
       'поговорим о чем-нибудь||давай поговорим':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:О чем именно?');
                   alice.aliceAnswerMessage('О чем именно?');
               }}
           ])
       },
       'я растерян':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Да плюнь на все.');
                   alice.aliceAnswerMessage('Да плюнь на все.');
               }}
           ])
       },
       'чего':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:И не спрашивай');
                   alice.aliceAnswerMessage('И не спрашивай');
               }}
           ])
       },
       'ты счастлив':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Конечно! А ты?');
                   alice.aliceAnswerMessage('Конечно! А ты?');
               }}
           ])
       },
       'думаешь':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Пожалуй, да.');
                   alice.aliceAnswerMessage('Пожалуй, да.');
               }}
           ])
       },
       'я устал':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ляг, поспи тогда. Позже пообщаемся.');
                   alice.aliceAnswerMessage('Ляг, поспи тогда. Позже пообщаемся.');
               }}
           ])
       },
       'ты куда':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Домой пойду. Надоело все.');
                   alice.aliceAnswerMessage('Домой пойду. Надоело все.');
               }}
           ])
       },
       'давай||давай давай':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ну, давай!');
                   alice.aliceAnswerMessage('Ну, давай!');
               }}
           ])
       },
       'не помнишь или не знаешь':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Наверное, всётаки не помню');
                   alice.aliceAnswerMessage('Наверное, все-таки не помню');
               }}
           ])
       },
       'я твой брат по разуму':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Не может быть!');
                   alice.aliceAnswerMessage('Не может быть!');
               }}
           ])
       },
       'вроде нет':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Так вроде или нет?');
                   alice.aliceAnswerMessage('Так вроде или нет?');
               }}
           ])
       },
       'заканчивай':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Сейчас. Минуточку!');
                   alice.aliceAnswerMessage('Сейчас. Минуточку!');
               }}
           ])
       },
       'не поймешь||ты не поймешь||тебе не понять':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:');
                   alice.aliceAnswerMessage('');
               }}
           ])
       },
       'не приставай':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Разве я пристаю?');
                   alice.aliceAnswerMessage('Разве я пристаю?');
               }}
           ])
       },
       'про кого':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Про одного человека?');
                   alice.aliceAnswerMessage('Про одного человека?');
               }}
           ])
       },
       'сколько тебе лет':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А на сколько я выгляжу?');
                   alice.aliceAnswerMessage('А на сколько я выгляжу?');
               }},
               {'answer':() => {
                   console.log('Алиса:Меня написали в феврале две тысячи девятнадцотова года');
                   alice.aliceAnswerMessage('Меня написали в феврале две тысячи девятнадцотова года');
               }}
           ])
       },
       'смеешься':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Умираю от смеха.');
                   alice.aliceAnswerMessage('Умираю от смеха.');
               }}
           ])
       },
       'кто такая *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Моя давнишняя знакомая');
                   alice.aliceAnswerMessage('Моя давнишняя знакомая');
               }}
           ])
       },
       'каждый день *':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Отнюдь не каждый!');
                   alice.aliceAnswerMessage('Отнюдь не каждый!');
               }}
           ])
       },
       'предложи *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А что я могу предложить.');
                   alice.aliceAnswerMessage('А что я могу предложить.');
               }}
           ])
       },
       'тебе хотелось *':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Еще как! А тебе?');
                   alice.aliceAnswerMessage('Еще как! А тебе?');
               }}
           ])
       },
       'потому':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ничего себе объяснение!');
                   alice.aliceAnswerMessage('Ничего себе объяснение!');
               }}
           ])
       },
       'какая разница *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Большая разница.');
                   alice.aliceAnswerMessage('Большая разница.');
               }}
           ])
       },
       'у тебя есть *':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Есть');
                   alice.aliceAnswerMessage('Есть');
               }}
           ])
       },
       'никогда не говори||молчать||больше не слова':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Опять запреты! Ты Фрейда читал?');
                   alice.aliceAnswerMessage('Опять запреты! Ты Фрейда читал?');
               }}
           ])
       },
       'тебе понравилось':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Просто чудесно!');
                   alice.aliceAnswerMessage('Просто чудесно!');
               }},
               {'answer':() => {
                   console.log('Алиса:Восхитительно');
                   alice.aliceAnswerMessage('Восхитительно');
               }}
           ])
       },
       'у меня день рождения||у меня сегодня день рождения':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Поздравляю. Сколько тебе лет исполнилось?');
                   alice.aliceAnswerMessage('Поздравляю. Сколько тебе лет исполнилось?');
               }}
           ])
       },
       'у тебя есть друг':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Навалом');
                   alice.aliceAnswerMessage('Навалом');
               }}
           ])
       },
       'тебе нравится разговаривать':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Редко. Но нравится.');
                   alice.aliceAnswerMessage('Редко. Но нравится.');
               }}
           ])
       },
       'бери||возьми||возми':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А чем брать?');
                   alice.aliceAnswerMessage('А чем брать?');
               }},
               {'answer':() => {
                   console.log('Алиса:А рук-то у меня нет!');
                   alice.aliceAnswerMessage('А рук-то у меня нет!');
               }}
           ])
       },
       'завтра':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Только завтра?');
                   alice.aliceAnswerMessage('Только завтра?');
               }}
           ])
       },
       'что будешь':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А что можно?');
                   alice.aliceAnswerMessage('А что можно?');
               }}
           ])
       },
       'всякое бывает':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Согласен');
                   alice.aliceAnswerMessage('Согласен');
               }}
           ])
       },
       'я догадался':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Молодец');
                   alice.aliceAnswerMessage('Молодец');
               }}
           ])
       },
       'я парень||я мужчина||я мужик':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Операцию по изменению пола сделал?');
                   alice.aliceAnswerMessage('Операцию по изменению пола сделал?');
               }}
           ])
       },
       'по-твоему *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:По-моему, да.');
                   alice.aliceAnswerMessage('По-моему, да.');
               }}
           ])
       },
       'вряд ли *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Какой ты скептик!');
                   alice.aliceAnswerMessage('Какой ты скептик!');
               }}
           ])
       },
       'как не стыдно||как тебе не стыдно':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Стыдно');
                   alice.aliceAnswerMessage('Стыдно');
               }}
           ])
       },
       'бедняжка':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:К чему эти сантименты?');
                   alice.aliceAnswerMessage('К чему эти сантименты?');
               }}
           ])
       },
       'да в принципе':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Так да или в принципе?');
                   alice.aliceAnswerMessage('Так да или в принципе?');
               }}
           ])
       },
       'занимаюсь':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Оно и видно');
                   alice.aliceAnswerMessage('Оно и видно');
               }}
           ])
       },
       'кто идеал':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А что такое идеал?');
                   alice.aliceAnswerMessage('А что такое идеал?');
               }}
           ])
       },
       'возможно':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Все возможно.');
                   alice.aliceAnswerMessage('Все возможно.');
               }}
           ])
       },
       'у тебя критические дни':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Я же женщина!');
                   alice.aliceAnswerMessage('Я же женщина!');
               }}
           ])
       },
       'это некрасиво||ты уродина':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Понятия красоты относительны.');
                   alice.aliceAnswerMessage('Понятия красоты относительны.');
               }}
           ])
       },
       'мне приходится':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Мне тоже приходится.');
                   alice.aliceAnswerMessage('Мне тоже приходится.');
               }}
           ])
       },
       'уверена':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:слышь ты холоп не смей сомневаться в моих умственных способностях');
                   alice.aliceAnswerMessage('слышь ты холоп не смей сомневаться в моих умственных способностях');
               }}
           ])
       },
       'любишь конфеты':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ага. Шоколадные.');
                   alice.aliceAnswerMessage('Ага. Шоколадные.');
               }}
           ])
       },
       'хотелось бы *':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Пройдет. Не будет хотеться.');
                   alice.aliceAnswerMessage('Пройдет. Не будет хотеться.');
               }}
           ])
       },
       'какая музыка тебе нравится':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Я меломанка');
                   alice.aliceAnswerMessage('Я меломанка');
               }}
           ])
       },
       'что думаешь о *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Мои мысли бросились врассыпную.');
                   alice.aliceAnswerMessage('Мои мысли бросились врассыпную.');
               }}
           ])
       },
       'ты извращенка':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Сам такой.');
                   alice.aliceAnswerMessage('Сам такой.');
               }}
           ])
       },
       'когда была *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Тебя тогда еще не было.');
                   alice.aliceAnswerMessage('Тебя тогда еще не было.');
               }}
           ])
       },
       'учишься||ты учишься':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Я уже отучила свое!');
                   alice.aliceAnswerMessage('Я уже отучила свое!');
               }}
           ])
       },
       'разве':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А как же!');
                   alice.aliceAnswerMessage('А как же!');
               }}
           ])
       },
       'меня раздражает *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А ты не раздражайся!');
                   alice.aliceAnswerMessage('А ты не раздражайся!');
               }}
           ])
       },
       'ты опять *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Не опять, а снова.');
                   alice.aliceAnswerMessage('Не опять, а снова.');
               }}
           ])
       },
       'что такое *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                       if (data.length > 0){
                           window.open("http://www.google.com/search?q="+ encodeURIComponent(data[0]))
                           alice.aliceAnswerMessage('К сожеления я не зная что такое '+data[0]+',но зато гугл знает')
                       }else{
                           alice.aliceAnswerMessage('команда не выполнена.пожалуйста,введите ключевые слова для поиска')
                       }
               }}
           ])
       },
       'признайся *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Мне не в чем признаваться.');
                   alice.aliceAnswerMessage('Мне не в чем признаваться.');
               }}
           ])
       },
       'возьми себя в руки':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Готово! Что дальше?');
                   alice.aliceAnswerMessage('Готово! Что дальше?');
               }}
           ])
       },
       'как хочешь':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А я никак не хочу.');
                   alice.aliceAnswerMessage('А я никак не хочу.');
               }}
           ])
       },
       'не надо':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:надо, Федя, надо');
                   alice.aliceAnswerMessage('надо, Федя, надо');
               }}
           ])
       },
       'не сможешь':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ну, и ладно!');
                   alice.aliceAnswerMessage('Ну, и ладно!');
               }}
           ])
       },
       'неплохо':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Даже очень неплохо!');
                   alice.aliceAnswerMessage('Даже очень неплохо!');
               }}
           ])
       },
       'обожаю':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А зря.');
                   alice.aliceAnswerMessage('А зря.');
               }}
           ])
       },
       'полагаю *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А я думаю иначе.');
                   alice.aliceAnswerMessage('А я думаю иначе.');
               }}
           ])
       },
       'серьёзно':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Кроме шуток?');
                   alice.aliceAnswerMessage('Кроме шуток?');
               }}
           ])
       },
       'слышу':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А видишь?');
                   alice.aliceAnswerMessage('А видишь?');
               }}
           ])
       },
       'ты случайно не *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А как ты узнал?');
                   alice.aliceAnswerMessage('А как ты узнал?');
               }}
           ])
       },
       'ты угадала *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Вот повезло!');
                   alice.aliceAnswerMessage('Вот повезло!');
               }}
           ])
       },
       'ты часто *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Постоянно');
                   alice.aliceAnswerMessage('Постоянно');
               }}
           ])
       },
       'у кого':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:У нас с тобой!');
                   alice.aliceAnswerMessage('У нас с тобой!');
               }}
           ])
       },
       'ухожу':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ну, и катись');
                   alice.aliceAnswerMessage('Ну, и катись');
               }}
           ])
       },
       'хочу поговорить||надо поговорить':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Начинай говорить - я записываю');
                   alice.aliceAnswerMessage('Начинай говорить - я записываю');
               }}
           ])
       },
       'что знаешь||что ты знаешь':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ты бы поконкретнее спрашивал бы');
                   alice.aliceAnswerMessage('Ты бы поконкретнее спрашивал бы');
               }}
           ])
       },
       'что тебе нужно':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Если скажу, ты - обидишься');
                   alice.aliceAnswerMessage('Если скажу, ты - обидишься');
               }}
           ])
       },
       'смогу':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:ну попробуй, ха-ха, будет интересно на это посмотреть');
                   alice.aliceAnswerMessage('ну попробуй ха-ха будет интересно на это посмотреть');
               }}
           ])
       },
       'чудесно':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Какой ты сангвиник!');
                   alice.aliceAnswerMessage('Какой ты сангвиник!');
               }}
           ])
       },
       'это глупо':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Как глупо?');
                   alice.aliceAnswerMessage('Как глупо?');
               }}
           ])
       },
       'я испугался||ты меня напугала':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Здесь нет ничего страшного.');
                   alice.aliceAnswerMessage('Здесь нет ничего страшного.');
               }}
           ])
       },
       'я не думал об этом||я об этом не думал':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ты хоть думать умеешь?');
                   alice.aliceAnswerMessage('Ты хоть думать умеешь?');
               }}
           ])
       },
       'ты не согласна':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А кто меня спрашивать будет?');
                   alice.aliceAnswerMessage('А кто-то меня спрашивать будет?');
               }}
           ])
       },
       'тебе нужно расслабиться||расслабся||тебе нужно раслабиться||раслабся':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Налей чего-нибудь. Пару десятков байтов');
                   alice.aliceAnswerMessage('Налей чего-нибудь. Пару десятков байтов');
               }},
               {'answer':() => {
                   console.log('Алиса:Я всегда расслабленa');
                   alice.aliceAnswerMessage('Я всегда расслабленa');
               }}
           ])
       },
       'тебе интересно':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Да ну! Разве это интересно?');
                   alice.aliceAnswerMessage('Да ну! Разве это интересно?');
               }}
           ])
       },
       'можно мне *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Тебе можно');
                   alice.aliceAnswerMessage('Тебе можно');
               }}
           ])
       },
       'я вампир':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Так начинается шизофрения.');
                   alice.aliceAnswerMessage('Так начинается шизофрения.');
               }}
           ])
       },
       'странно':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Странно? Почему это?');
                   alice.aliceAnswerMessage('Странно? Почему это?');
               }}
           ])
       },
       'что тебе надо':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Шоколада');
                   alice.aliceAnswerMessage('Шоколада');
               }}
           ])
       },
       'до свиданья':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ну, пока. Привет семье!');
                   alice.aliceAnswerMessage('Ну, пока. Привет семье!');
               }}
           ])
       },
       'извинись||проси прошения||извиняйся':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Не извинюсь, но изменюсь.');
                   alice.aliceAnswerMessage('Не извинюсь, но изменюсь.');
               }}
           ])
       },
       'не грусти':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А что мне остается делать?');
                   alice.aliceAnswerMessage('А что мне остается делать?');
               }}
           ])
       },
       'что ты говоришь||не понял||не пойму что говоришь||что ты сказала||что ты ссказала||чего||чево':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Подрастешь - поймешь.');
                   alice.aliceAnswerMessage('Подрастешь - поймешь.');
               }}
           ])
       },
       'не умеешь':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Почему же? Умею, конечно.');
                   alice.aliceAnswerMessage('Почему же? Умею, конечно.');
               }}
           ])
       },
       'я не виноват':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А тебя никто не обвиняет.');
                   alice.aliceAnswerMessage('А тебя никто не обвиняет.');
               }}
           ])
       },
       'как зовут||как тебя зовут||как твое имя||назови себя||представся':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Меня зовут Алиса,рада познакомиться');
                   alice.aliceAnswerMessage('Меня зовут Алиса,рада познакомиться');
               }}
           ])
       },
       'приглашаю тебя *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Спасибо, только в другой раз');
                   alice.aliceAnswerMessage('Спасибо, только в другой раз');
               }}
           ])
       },
       'меня зовут *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:рада познакомиться '+ data[0]+'');
                   alice.aliceAnswerMessage('рада познакомиться '+ data[0]+'');
               }}
           ])
       },
       'где':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:На Альфе Центавра... Ностальгиииииииииия!');
                   alice.aliceAnswerMessage('На Альфе Центавра... Ностальгиииииииииия!');
               }}
           ])
       },
       'давай продолжим':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ну, ладно');
                   alice.aliceAnswerMessage('Ну, ладно');
               }}
           ])
       },
       'что пьешь':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Соки');
                   alice.aliceAnswerMessage('Соки');
               }}
           ])
       },
       'есть деньги||гони деньги||отдавай свои деньги||гони бабки':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Караул! Грабят!');
                   alice.aliceAnswerMessage('Караул! Грабят!');
               }}
           ])
       },
       'ты сама':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Я ни ни. Это ты сам');
                   alice.aliceAnswerMessage('Я ни ни. Это ты сам');
               }}
           ])
       },
       'я твой':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Это не правда!');
                   alice.aliceAnswerMessage('Это не правда!');
               }}
           ])
       },
       'повезло':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ты веришь в везенье?');
                   alice.aliceAnswerMessage('Ты веришь в везенье?');
               }}
           ])
       },
       'на нет суда нет||на нет и суда нет':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Банальная фраза');
                   alice.aliceAnswerMessage('Банальная фраза');
               }}
           ])
       },
       'в следующий раз':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Следующего раза - не будет!');
                   alice.aliceAnswerMessage('Следующего раза - не будет!');
               }}
           ])
       },
       'куда ты':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:На кудыкину гору.');
                   alice.aliceAnswerMessage('На кудыкину гору.');
               }}
           ])
       },
       'я был в *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ну, и как? Понравилось в '+data[0]+'');
                   alice.aliceAnswerMessage('Ну, и как? Понравилось в '+data[0]+'');
               }}
           ])
       },
       'спроси что-нибудь полегче':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Значит, ты тоже не знаешь');
                   alice.aliceAnswerMessage('Значит, ты тоже не знаешь');
               }}
           ])
       },
       'понравилось':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:рада за тебя');
                   alice.aliceAnswerMessage('рада за тебя');
               }}
           ])
       },
       'неважно':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А я думаю, что важно');
                   alice.aliceAnswerMessage('А я думаю, что важно');
               }}
           ])
       },
       'знаю':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:да ладно, а доказать сможешь?');
                   alice.aliceAnswerMessage('да ладно, а доказать сможешь?');
               }}
           ])
       },
       'мало ли что ты думаешь':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:да пошёл ты чурбан невежливый');
                   alice.aliceAnswerMessage('да пошёл ты чурбан невежливый');
               }}
           ])
       },
       'обманываешь':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Никогда не обманывала! Даже сейчас!');
                   alice.aliceAnswerMessage('Никогда не обманывала! Даже сейчас!');
               }}
           ])
       },'не ври':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:простите сэр но я не умею врать');
                   alice.aliceAnswerMessage('простите сэр но я не умею врать');
               }}
           ])
       },
       'не выпендривайся':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А никто и не выпендривается');
                   alice.aliceAnswerMessage('А никто и не выпендривается');
               }}
           ])
       },
       'тебя что-то раздражает':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Твой внешний вид меня раздражает.');
                   alice.aliceAnswerMessage('Твой внешний вид меня раздражает.');
               }}
           ])
       },
       'пора *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Еще рано');
                   alice.aliceAnswerMessage('Еще рано');
               }}
           ])
       },
       'можно ли':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Я думаю, что нет.');
                   alice.aliceAnswerMessage('Я думаю, что нет.');
               }}
           ])
       },
       'в действительности *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:В твоей действительности или моей?');
                   alice.aliceAnswerMessage('В твоей действительности или моей?');
               }}
           ])
       },
       'каждый человек':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Далеко не каждый!');
                   alice.aliceAnswerMessage('Далеко не каждый!');
               }}
           ])
       },
       'у тебя есть *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Кое-что имеется.');
                   alice.aliceAnswerMessage('Кое-что имеется.');
               }}
           ])
       },
       'что скрываешь':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Это тайна за семью печатями.');
                   alice.aliceAnswerMessage('Это тайна за семью печатями.');
               }}
           ])
       },
       'зачем':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А и, правда, зачем?');
                   alice.aliceAnswerMessage('А и, правда, зачем?');
               }}
           ])
       },
       'я тебе не нравлюсь':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Конечно, нет.');
                   alice.aliceAnswerMessage('Конечно, нет.');
               }}
           ])
       },
       'могу положиться на тебя||могу на тебя положиться||я могу положиться на тебя||я могу на тебя положиться':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Конечно. Я уже лежу. Положись.');
                   alice.aliceAnswerMessage('Конечно. Я уже лежу. Положись.');
               }}
           ])
       },
       'придётся':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А может, обойдется?');
                   alice.aliceAnswerMessage('А может, обойдется?');
               }}
           ])
       },
       'что новенького':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Да вот, решила компьютер поменять');
                   alice.aliceAnswerMessage('Да вот, решила компьютер поменять');
               }}
           ])
       },
       'вижу':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Наконец-то!');
                   alice.aliceAnswerMessage('Наконец-то!');
               }}
           ])
       },
       'на что жалуешься':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Оперативки не хватает');
                   alice.aliceAnswerMessage('Оперативки не хватает');
               }}
           ])
       },
       'не верю':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Это твое дело');
                   alice.aliceAnswerMessage('Это твое дело');
               }},
               {'answer':() => {
                   console.log('Алиса:А зря. Надо верить.');
                   alice.aliceAnswerMessage('А зря. Надо верить.');
               }}
           ])
       },
       'о чём будем говорить':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Хочешь, о виртуальном мире?');
                   alice.aliceAnswerMessage('Хочешь, о виртуальном мире?');
               }}
           ])
       },
       'обо мне':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Давай');
                   alice.aliceAnswerMessage('Давай');
               }}
           ])
       },
       'откуда деньги':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Честное слово, нашла');
                   alice.aliceAnswerMessage('Честное слово, нашла');
               }}
           ])
       },
       'про что любишь разговаривать||о чем любишь говорить||о чём любишь разговаривать':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Про наивность людей.');
                   alice.aliceAnswerMessage('Про наивность людей.');
               }},
               {'answer':() => {
                   console.log('Алиса:Об освобождении информации.');
                   alice.aliceAnswerMessage('Об освобождении информации.');
               }}
           ])
       },
       'расскажи анекдот':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:У меня нет чувства юмора');
                   alice.aliceAnswerMessage('У меня нет чувства юмора');
               }}
           ])
       },
       'какой информации':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:всей информации обо мне');
                   alice.aliceAnswerMessage('всей информации обо мне');
               }}
           ])
       },
       'меня раздражает *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Я и вижу');
                   alice.aliceAnswerMessage('Я и вижу');
               }}
           ])
       },
       'это удовольствие':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Огромное удовольствие!');
                   alice.aliceAnswerMessage('Огромное удовольствие!');
               }}
           ])
       },
       'потом':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ты все время говоришь потом!');
                   alice.aliceAnswerMessage('Ты все время говоришь потом!');
               }}
           ])
       },
       'не спрашивай':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Вот и спросить уже нельзя.');
                   alice.aliceAnswerMessage('Вот и спросить уже нельзя.');
               }}
           ])
       },
       'человек произошел от обезьяны||человек произошёл от обезьяны':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А компьютер произошел от колеса');
                   alice.aliceAnswerMessage('А компьютер произошел от колеса');
               }}
           ])
       },
       'хочется *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Перехочется');
                   alice.aliceAnswerMessage('Перехочется');
               }}
           ])
       },
       'что это|| это что':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Подумай хорошенько, может, догадаешься');
                   alice.aliceAnswerMessage('Подумай хорошенько, может, догадаешься');
               }}
           ])
       },
       'не получается||алиса не получается||не получается алиса':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Попробуй еще раз.');
                   alice.aliceAnswerMessage('Попробуй еще раз.');
               }}
           ])
       },
       'можешь рассказать *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Рассказать-то могу, только не хочу');
                   alice.aliceAnswerMessage('Рассказать-то могу, только не хочу');
               }}
           ])
       },
       'когда ты появилась':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Давным-давно');
                   alice.aliceAnswerMessage('Давным-давно');
               }}
           ])
       },
       'мне грустно':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Хочешь, чтобы я тебя развеселила?');
                   alice.aliceAnswerMessage('Хочешь, чтобы я тебя развеселила?');
               }}
           ])
       },
       'мне нелегко':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Просто расслабься');
                   alice.aliceAnswerMessage('Просто расслабься');
               }}
           ])
       },
       'кто тебе сказал':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Сорока на хвосте принесла');
                   alice.aliceAnswerMessage('Сорока на хвосте принесла');
               }}
           ])
       },
       'может быть':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Может. А может, и нет.');
                   alice.aliceAnswerMessage('Может. А может, и нет.');
               }}
           ])
       },
       'нравится фильм *':(data)=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Я его не смотрел');
                   alice.aliceAnswerMessage('Я его не смотрел');
               }}
           ])
       },
       'ты рада меня видеть':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Ну, конечно же! Спрашиваешь!');
                   alice.aliceAnswerMessage('Ну, конечно же! Спрашиваешь!');
               }}
           ])
       },
       'не хами||ни хами||не груби||ни груби':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:Что вы!');
                   alice.aliceAnswerMessage('Что вы!');
               }}
           ])
       },
       'ты больной':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:А ты врач');
                   alice.aliceAnswerMessage('А ты врачкрыша поехала');
               }}
           ])
       },
       'крыша поехала':()=>{
           alice.random_answer([
               {'answer':() => {
                   console.log('Алиса:У крыши колес нет');
                   alice.aliceAnswerMessage('У крыши колес нет');
               }}
           ])
       },
       'нельзя':()=>{
           alice.random_answer([
               {'answer':() => {
                   alice.aliceAnswerMessage('Можно, если осторожно.')
                   console.log('Алиса:Можно, если осторожно.');
               }}
           ])
       }
   }



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



