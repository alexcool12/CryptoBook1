class App{
    
    constructor(){
        
    }

    readTextFile = (file) => {
        var rawFile = new XMLHttpRequest();
        rawFile.open("GET", file, false);
        rawFile.onreadystatechange = function ()
        {
            if(rawFile.readyState === 4)
            {
                if(rawFile.status === 200 || rawFile.status == 0)
                {
                    let readed_file = rawFile.responseText;
                    return readed_file;
                }
            }
        }
        rawFile.send(null);
        return null;
    };
}