$(document).ready(function(){

        $.getJSON("news.json", function(datas){
            var arraylen = datas.length;            

            for(var i = 0; i < arraylen; i++){
                var obj = datas[i];
                
                $(".articles").append("<div id='card" + i + "'></div>");
                $("#card" + i).append("<h2 id='title" + i + "'></h2>");
                $("#card" + i).append("<small id='small" + i + "'></small>");
                $("#card" + i).append("<p id='content" + i + "'></p>");
                $("#card" + i).append("<a href='#rep" + i + "' rel='modal:open'>Reply</a><br/>");
                $("#card" + i).append("<small id='commentNbr" + i + "'>Comments : 0</small><hr/>");
                $(".modals").append("<div id='rep" + i + "' class='modal'><form id='response" + i + "'><label for='comment'>Comment from:</label><textarea name='comment' placeholder='Enter your comment!' cols='50' rows='7'></textarea><input class='button' id='submit" + i + "'type='button' name='submit' value='submit'></form><a href='#' rel='modal:close'>Close</a>");
                   
                $("#content" + i).text(obj["content"]);
                $("#small" + i).text("Article ajouté le " + obj["ecriture"] + "   " + "Catégorie: " + obj["categorie"]);
                $("#title" + i).text(obj["title"]);

                var commentArr = obj["comments"].length;
                
                if(commentArr > 0){
                    for(var j = 0; j < commentArr ; j++ ){
                        var author = obj["comments"][j]["author"];
                        var texte = obj["comments"][j]["text"];
                        console.log(commentArr);

                        $("#card" + i).append("<div class='oneComment'><p class='authorBold'>From: " + author + "</p><p class='oneText'>" + texte + "</p></div><hr/>");
                        $("#commentNbr" + i ).text("Comments: " + commentArr);
                    }                    

                }
                 
            }
         
        });    
    });

    





