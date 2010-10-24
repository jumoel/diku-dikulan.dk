<!DOCTYPE html>

<html>
<head>
  <title>{{ title }}</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  {{ insert: stylesheets }}
  
  {{ insert: javascript }}

</head>
<body>

    <header id="outer">
      <header id="inner">
        <img src="/images/logo_lowres.png">
        <h1>DIKULAN: The Challenge</h1>
        <button onclick="location.href='/billetter'">Billetinformation</button>
      </header>
    </header>

    <div id="container">
      <nav>
        {{ insert: navigation }}
      </nav>
  
      <div id="page">
        <div id="main-content">
          <div class="content">
            {{ content }}
          </div>
        </div>

        <div id="sidebar">
          <div class="content">
            {{ insert: sidebar }}
          </div>
        </div>
      </div>

      <footer>
        {{ insert: footer }}
      </footer>
    </div>

    {{ insert: endjavascript }}
</body>
</html>
