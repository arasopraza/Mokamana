
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
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
  });


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




//* FILTER GALERI
const categoryTitle = document.querySelectorAll('.category-title');
const allCategoryPosts = document.querySelectorAll('.all');

for(let i = 0; i < categoryTitle.length; i++){
    categoryTitle[i].addEventListener('click', filterPosts.bind(this, categoryTitle[i]));
}

function filterPosts(item){
    changeActivePosition(item);
    for(let i = 0; i < allCategoryPosts.length; i++){
        if(allCategoryPosts[i].classList.contains(item.attributes.id.value)){
            allCategoryPosts[i].style.display = "block";
        } else {
            allCategoryPosts[i].style.display = "none";
        }
    }
}

function changeActivePosition(activeItem){
    for(let i = 0; i < categoryTitle.length; i++){
        categoryTitle[i].classList.remove('active-filter');
    }
    activeItem.classList.add('active-filter');
};


// ANIMASI ON SCROLL CSS
AOS.init({
    duration: 1200
});



//* onlaod result

function loadfunction(){
    
    var Pcari = document.getElementById('pcari');
    var Loadindex = document.getElementById('loader-index');
    Pcari.style.display="none";
    Loadindex.style.display="block";  
}

//*cardbody tab hotel
var cardbody = document.getElementById('cardbody');

function cardbodyhilang(){
    cardbody.style.display="none";
}

function cardbodymuncul(){
    cardbody.style.display="block";
}


//* replace text hotel & wisata
var Photel = document.getElementById('hotel');
var Pwisata = document.getElementById('wisata');
var Hasiltext = document.getElementById('ket-hasil');

Photel.onclick = function(){
    var res = Hasiltext.replace(/wisata/gi, "hotel");
    document.getElementById('ket-hasil').innerHTML = res;
    alert('tuh bisa');
}

Pwisata.onclick = function(){
    var res = Hasiltext.replace(/hotel/gi, "wisata");
    document.getElementById('ket-hasil').innerHTML = res;
    alert('tuh bisa');
}

