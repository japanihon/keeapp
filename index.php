<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Google+Sans:400,500&display=swap">
  </link>
  <link rel="stylesheet" href="style.css">
  </link>
</head>

<body>
  <div class="modal">
    <div class="modal-content">
      <input class="modal-title" placeholder="Title" type="text">
      <input class="modal-text" placeholder="Take a note..." type="text">
      <span class="modal-close-button">Close</span>
    </div>
  </div>
  <main>
    <header>
      <img class="header-logo" src="https://www.gstatic.com/images/branding/product/1x/keep_48dp.png">
      <h2 class="header-title"> Keep Your Memory Notes </h2>
    </header>
    <div id="form-container">
      <form id="form" autocomplete="off">
        <input id="note-title" placeholder="Title" type="text">
        <input id="note-text" placeholder="Take a note..." type="text">
        <div id="form-buttons">
          <button type="submit" id="submit-button">Submit</button>
          <button type="button" id="form-close-button">Close</button>
        </div>
      </form>
    </div>
    <div id="notes"></div>
    <div id="placeholder">
      <img id="placeholder-logo" src="https://icon.now.sh/lightbulb_outline">
      <p id="placeholder-text"> Notes you can add appear here</p>
    </div>
    <div id="color-tooltip">
      <div class="color-option" data-color="#fff" id="white"></div>
      <div class="color-option" data-color="#d7aefb" id="purple"></div>
      <div class="color-option" data-color="#fbbc04" id="orange"></div>
      <div class="color-option" data-color="#a7ffeb" id="teal"></div>
    </div>
  </main>
  <script src="app.js"></script>
</body>

</html>