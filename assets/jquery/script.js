function addReadMore(content){
    $.each(content,function(key,val) {
        var element = $(val);

        if(element.text().length > 70 && (element.attr("data-shortened") === "false" || element.attr("data-shortened") == null)){
            var short_content 	= element.text().substr(0,70);
            var long_content	= element.text().substr(70);

            element.html(short_content+'<a href="#" class="read_more"><br/>Read More</a>');
            element.find('a.read_more').click(function(event) {
                event.preventDefault(); /* prevent the a from changing the url */
                $(this).hide(); /* hide the read more button */
                // element.html(short_content+'<span class="more_text">'+long_content+'</span>'+'<a href="#" class="read_left"><br/>Read less</a>')
                element.html(short_content+'<span class="more_text">'+long_content+'</span>')
                $(this).parents('.item').find('.more_text').slideDown(200); /* show the .more_text span */
                element.attr("data-shortened","false");
            });
            element.attr("data-shortened","true");
        }

        // element.find('a.read_left').on("click", function(){
        // console.log("this is awesome");
        // event.preventDefault(); /* prevent the a from changing the url */
        // // $(this).hide(); /* hide the read more button */
        // // element.html(short_content+'<a href="#" class="read_more"><br/>Read More</a>');
        // // $(this).parents('.item').find('.more_text').slideUp(200); /* show the .more_text span */
        // // element.attr("data-shortened","true");
        // });
    });
}

$(document).ready(function(){
    var content = $(".tasks-overflow");
    addReadMore(content)
});
