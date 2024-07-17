<!DOCTYPE html>
@if(auth()->user()->hasRole('employe'))
<html>
  <head>
    <title>Consulter les jours de congé restants</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }
      .logo {
        text-align: center;
        padding-top: 20px;
      }
      .container {
        max-width: 500px;
        margin: 0 auto;
        background-color: #17a2b8;
        padding: 20px;
        margin-top: 50px;
        border-radius: 10px;
      }
      h1 {
        text-align: center;
        color: black;
        font-family: Helvetica Neue;
      }
      form {
        margin-top: 20px;
      }
      label {
        display: block;
        margin-bottom: 5px;
        color: black;
      }
      input[type="text"],
      input[type="number"] {
        border: none;
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        margin-bottom: 10px;
        border-radius: 5px;
      }
      button {
        background-color: #333;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      button:hover {
        background-color: #f8b500;
      }
      output {
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Consulter les jours de congé restants</h1>
      <form>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <br>
        <label for="jours-pris">Jours de congé pris :</label>
        <input type="number" id="jours-pris" name="jours-pris" required>
        <br>
        <label for="jours-restants" id="jours-restants-label" style="display: none;">Jours de congé restants :</label>
        <output id="jours-restants" style="display: none;"></output>
        <br>
        <button type="button" onclick="calculer()">Calculer</button>
        <button type="button" onclick="calculer()" class="an">Retour</button>
      </form>
    </div>

    <script>
      function calculer() {
        var joursPris = document.getElementById("jours-pris").value;
        var joursRestants = 25 - joursPris;
        document.getElementById("jours-restants").value = joursRestants;
        document.getElementById("jours-restants-label").style.display = "block";
        document.getElementById("jours-restants").style.display = "block";
      }
    </script>
  </body>
</html>
@endif

@if(auth()->user()->hasRole('admin'))
<html>
  <head>
    <title>Consulter les jours de congé restants</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }
      .logo {
        text-align: center;
        padding-top: 20px;
      }
      .container {
        max-width: 500px;
        margin: 0 auto;
        background-color: #17a2b8;
        padding: 20px;
        margin-top: 50px;
        border-radius: 10px;
      }
      h1 {
        text-align: center;
        color: black;
        font-family: Helvetica Neue;
      }
      form {
        margin-top: 20px;
      }
      label {
        display: block;
        margin-bottom: 5px;
        color: black;
      }
      input[type="text"],
      input[type="number"] {
        border: none;
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        margin-bottom: 10px;
        border-radius: 5px;
      }
      button {
        background-color: #333;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      button:hover {
        background-color: #f8b500;
      }
      output {
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Consulter les jours de congé restants</h1>
      <form>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <br>
        <label for="jours-pris">Jours de congé pris :</label>
        <input type="number" id="jours-pris" name="jours-pris" required>
        <br>
        <label for="jours-restants" id="jours-restants-label" style="display: none;">Jours de congé restants :</label>
        <output id="jours-restants" style="display: none;"></output>
        <br>
        <button type="button" onclick="calculer()">Calculer</button>
        <button type="button" onclick="calculer()" class="an">Retour</button>
      </form>
    </div>

    <script>
      function calculer() {
        var joursPris = document.getElementById("jours-pris").value;
        var joursRestants = 25 - joursPris;
        document.getElementById("jours-restants").value = joursRestants;
        document.getElementById("jours-restants-label").style.display = "block";
        document.getElementById("jours-restants").style.display = "block";
      }
    </script>
  </body>
</html>
@endif

@if(auth()->user()->hasRole('magasinier'))
<html>
  <head>
    <title>Consulter les jours de congé restants</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }
      .logo {
        text-align: center;
        padding-top: 20px;
      }
      .container {
        max-width: 500px;
        margin: 0 auto;
        background-color: #17a2b8;
        padding: 20px;
        margin-top: 50px;
        border-radius: 10px;
      }
      h1 {
        text-align: center;
        color: black;
        font-family: Helvetica Neue;
      }
      form {
        margin-top: 20px;
      }
      label {
        display: block;
        margin-bottom: 5px;
        color: black;
      }
      input[type="text"],
      input[type="number"] {
        border: none;
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        margin-bottom: 10px;
        border-radius: 5px;
      }
      button {
        background-color: #333;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      button:hover {
        background-color: #f8b500;
      }
      output {
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Consulter les jours de congé restants</h1>
      <form>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <br>
        <label for="jours-pris">Jours de congé pris :</label>
        <input type="number" id="jours-pris" name="jours-pris" required>
        <br>
        <label for="jours-restants" id="jours-restants-label" style="display: none;">Jours de congé restants :</label>
        <output id="jours-restants" style="display: none;"></output>
        <br>
        <button type="button" onclick="calculer()">Calculer</button>
        <button type="button" onclick="calculer()" class="an">Retour</button>
      </form>
    </div>

    <script>
      function calculer() {
        var joursPris = document.getElementById("jours-pris").value;
        var joursRestants = 25 - joursPris;
        document.getElementById("jours-restants").value = joursRestants;
        document.getElementById("jours-restants-label").style.display = "block";
        document.getElementById("jours-restants").style.display = "block";
      }
    </script>
  </body>
</html>
@endif
