
//* HIDE NAVBAR ON SCROLL DOWN

var prevScrollpos = window.pageYOffset;
window.onscroll = function(){
    
    var currentScrollpos =  window.pageYOffset;
    if(prevScrollpos > currentScrollpos){
        document.getElementById("navbar").style.top= "0";
    }
    else{
        document.getElementById("navbar").style.top="-100px";
    }

    prevScrollpos = currentScrollpos;
}

//* tab Search box

var tabs_index = 0; 

$($('.clicktab')[tabs_index]).children().children().removeClass('grayscale') 

$('input.tabs-radio').change(function(){                    
    $($('input.tabs-radio')[tabs_index]).attr('checked', false);           
    tabs_index = $('input.tabs-radio').index(this); 
    $(this).attr('checked', true);       
});         


$('.clicktab').on('click', function(){        
    for (const x of $('.clicktab') ){        
        $(x).children().children().addClass('grayscale')        
    }
    $(this).children().children().removeClass('grayscale')        
});


//* clear text search input
// var clear = document.getElementById('clear_search');
// var search = document.getElementById('search_hotel');

// search.oninput = function(){
//     if(search.value === ""){
//         clear.style.display="none";
//     }else{
//         clear.style.display="flex";
//     }
// }

var btn_del;

$('.searchinput').on('input', function(e){
    for (const x of $('.del')) {    
        // $(x).css('display', 'none');  
        $(x).hide();    
    }    
    btn_del = $(this).parent().parent().find('button.del');
    btn_del.css('display', 'flex');    
    btn_del.on('click', function(){
        $(this).parent().parent().find('input.searchinput').val('');        
        btn_del.hide();
    })
})


//* tooltips
// $(document).ready(function(){
//     $('[data-toggle="tooltip"]').tooltip();   
//   });


$(document).ready(function() {
    $("body").tooltip({ selector: '[data-toggle=tooltip]' });
});
// $(function(){
// $('body').tooltip({ selector: '[data-toggle="tooltip"]' });
// });


//* Detail page Hotel & wisata //SLIDER PRODUCT IMAGE
let position_img = 0;

$('div.img-bawah > img').on('click', function(e){                
    $('#product_img').attr('src', $(e)[0].target.src);        
    for (const x of $('div.img-bawah > img')) {    
        $(x).removeClass('active');        
    }
    $(this).addClass('active');       
    set_position();         
});

function set_position(){
    for (const x of $('div.img-bawah > img')) {    
        position_img++;
        if($(x).hasClass('active')){
            break;            
        }                
    }   
}

$('#btn_slide_right').on('click', function(){
    position_img++;        
    set_img(position_img);
})

function set_img(i){    
    var i = i;
    if(i >= $('div.img-bawah > img').length){
        i = 0;
        position_img = 0;
    }
    $('#product_img').attr('src', $($('div.img-bawah > img')[i]).attr('src'));
}

$('#btn_slide_left').on('click', function(){
    position_img--;        
    set_img(position_img);
})

//* DATE RANGE PICKER
$(function() {
    $('input[name="daterange"]').daterangepicker({
      opens: 'left'
    }, function(start, end, label) {
      console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
  });




