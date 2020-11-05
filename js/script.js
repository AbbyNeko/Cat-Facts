$(document).ready(function() {
    
$("#catimg").html('');


		$.ajax({
    	type: "GET",
    	url: "cats.xml",
    	cache: false,
    	dataType: "xml",
    	success:function(xml) {


    	 var root = $(xml).find('image');
                    var found = root.find("url");
                        var url = found.text();
                        var img = $('<img id="cat">'); 
						img.attr('src', url);
						img.appendTo('.catimg');
        
                    var found2 = root.find("source_url")
                        var url2 = found2.text();
                        var contain = $("<figcaption id='source'>");
                        contain.text("Image Source: "+url2);
                        contain.appendTo(".catimg");                  
                    
    	}
    	});

        $.getJSON( "catfacts.txt",function(json) {
                   
                        var contain2 = $("<figcaption id='fact'>");
                        contain2.text("Random Cat Fact: "+json.facts);
                        contain2.appendTo("#fact");
                
         });

});