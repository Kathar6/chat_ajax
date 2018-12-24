function ajax(){
    let req = new XMLHttpRequest();
    req.onreadystatechange = function(){
        if(req.readyState === 4 && req.status ===  200){
            document.getElementById("cajachat").innerHTML = req.responseText;
        }
    }
    req.open("GET", 'chat.php', true);
    req.send();
};
setInterval(function(){ajax();},1000);