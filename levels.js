function setup(){
    let mainDiv = document.createElement("div");
    var lvl = 1;
    mainDiv.id = "mainDiv";
    document.body.appendChild(mainDiv);
    for(var i = 0; i<2; i++)
    {
        for(var j = 0; j<4; j++)
        {
            let div = document.createElement("div");
            mainDiv.appendChild(div);
            if(lvl == 1)
            {
                div.className = "levelActive";
                div.innerHTML = lvl;
            }
            else
            {
                div.className = "levelDisabled";
                let img = document.createElement("img");
                img.src = "images/locked.png";
                img.id = "locked";
                div.innerHTML = lvl;
                div.appendChild(img);
                console.log("ok");
            }
            lvl++;
        }
    }
}
setup();