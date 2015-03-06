<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="$1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
@section ('navbar')
<nav>
    <ul>
        <div id="navlinks">
            <li><a href="/">Home</a></li>
            <li><a href="quizzes">Quizzes</a></li>
             <li><div id="search">
                 <input id="searchBar" type="text" placeholder="Search Quizzes">
                 <div id="tekst"></div></div>
             </li>
        </div>
    </ul>
</nav>
@show

<div id="contentArea">
    <div id="content">
    @yield ('content')
    </div>
</div>


</body>
</html>