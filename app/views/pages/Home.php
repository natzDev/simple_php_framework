{% include 'templates/header.php' %}

<div class="container-fluid">
    <h1> {{ heading }}</h1>

    Hostname : {{ host_name }}<br>
    ip_address: {{ ip_address }} <br>

    Base url: {{ URL }}

</div>

{%  include 'templates/footer.php' %}
