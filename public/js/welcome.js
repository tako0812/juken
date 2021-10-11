$('#timer').yycountdown({
    endDateTime   : '2020/07/24 00:00:00'
  });
  
  $('#timer2').yycountdown({
    startDateTime : '2020/07/23 23:59:55',
    endDateTime   : '2020/07/24 00:00:00',
    unit          : {d: '日', h: '時間', m: '分', s: '秒'},
    complete      : function(_this){
                     _this.find('.yycountdown-box').fadeOut();
                     }
  });