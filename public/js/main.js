
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





