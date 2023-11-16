function getinfo(){
    if($("#re").val()==''){alert ('Upload poster');}
    else{
        if($("#e1").val()==''){
            alert('add Information');
        }
        else{
            if($("#d").val()==''){ alert('choose date');}
            else{
                 localStorage.setItemById("re");
                 localStorage.setItemById("e1");
                 localStorage.setItemById("ssssd");
                  window.location.href="evenlogg.html";
            }
        }
    }
    
}