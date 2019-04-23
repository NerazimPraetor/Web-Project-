$(document).ready(function(){
    $("#update").on("submit", function(event){
		$("#articlesList").empty();
		
		$("#articlesList").append(`
			{% for article in articles %}
                <li class="list-group-item"> <a href="article/{{article.id}}"> {{article.title}} </a> </li>
            {% endfor %}
		`);
    });
});