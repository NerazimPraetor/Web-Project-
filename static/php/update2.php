{% extends 'layout.html' %}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="{{ url_for('static', filename='js/articles.js') }}"></script>

{% block body %}

    <div class="jumbotron text-center">
        <h1>Welcome to WEB PROJECT</h1>
        <p class="lead">These are the articles</p>
    </div>

    <div id="formContainer">
        <form id="articlesForm" action="update.php">
            <button id="update" type="submit" class="btn btn-secondary my-2 my-sm-0" form="articlesForm">Update</button>
            <ul id="articlesList" class="list-group"></ul>
                {% for article in articles %}
                    <li class="list-group-item"> <a href="article/{{article.id}}"> {{article.title}} </a></a> </li>
                {% endfor %}
            </ul>
        </form>
    </div>
{% endblock %}