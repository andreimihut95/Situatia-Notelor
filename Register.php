<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/style_register.css">
  </head>
  <body>
    <selection id="register">
    <div class="register-card">
    <h1>Sign-up</h1>
    <br>
    <form method="POST" action="inregistrare.php">
      <div class="Detalii">
          Nume:<input type="text" name="nume" placeholder="Introduceti numele" required pattern="[A-Z]{1}[a-z]{2,29}" title="Numele poate fi de minim 3 litere sau maxim 30 litere, se incepe cu litera mare si restul litere mici">
          Prenume:<input type="text" name="prenume" placeholder="Introduceti prenumele" required pattern="[A-Z]{1}[a-z]{2,29}" title="Prenumele poate fi de minim 3 litere sau maxim 30 litere, se incepe cu litera mare si restul litere mici">
          Adresa:<input type="text" name="adresa" placeholder="Jud. X, Oras/Sat, Str. Y, Nr. Z" required pattern="[J]{1}[u]{1}[d]{1}[.]{1}[ ]{1}[A-Z]{1}[a-z]{2,15}[,]{1}[ ]{1}[A-Z]{1}[a-z]{2,15}[,]{1}[ ]{1}[S]{1}[t]{1}[r]{1}[.]{1}[ ]{1}[A-Z]{1}[a-z]{2,15}[ ]{0,1}[A-Z]{0,1}[a-z]{2,15}[,]{1}[ ]{1}[N]{1}[r]{1}[.]{1}[ ]{1}[1-9]{1}[0-9]{0,6}[/]{0,1}[A-Z]{0,1}" title="Adresa sa fie de minim 10 caractere si cel mult 50 caractere. Trebuie sa fie respectat modelul: Jud. X, Oras/Sat, Str. Y, Nr. Z">
          Data Nasterii:<input type="date" name="bday" required>
          CNP:<input type="text" name="cnp" placeholder="Introduceti CNP" required maxlength=13 required pattern="[1-25-9]{1}[0-9]{12}" title="CNP-ul contine doar 13 cifre. Atentie sa inceapa cu cifrele 1,2,5,6,7,8 sau 9">
          Serie buletin:<input type="text" name="serie" placeholder="Introduceti serie buletin" required maxlength=8 pattern="[A-Z]{2}[0-9]{6}" title="Seria are 8 caractere(litere mari si cifre)">
          Email:<input type="email" name="email" placeholder="Introduceti mail-ul" required>
          Numar telefon:<input type="text" name="telefon" placeholder="Introduceti numar telefon" required maxlength=16 pattern="[0-9+() ]{10,15}" title="Minim 10 cifre, maxim 16 cifre inclusiv caracterele + , ( , )">
          Sectia:<input list="Sectia" name="sectia" placeholder="Ex: CTI, CTI(EN), IS" required pattern="[C]{1}[T]{1}[I]{1}|[C]{1}[T]{1}[I]{1}[(]{1}[E]{1}[N]{1}[)]{1}|[I]{1}[S]{1}" title="Sa fie din sectiile CTI, CTI(EN) sau IS">
            <datalist id = "Sectia">
                <option value="CTI">
                <option value="CTI(EN)">
                <option value="IS">
            </datalist>
          Anul:<input list="AN" name="an" placeholder="Ex: 1, 2, 3, 4" required pattern="[1-4]{1}" title="Introduceti doar din intervalul [1,4]">
            <datalist id = "AN">
                <option value="1">
                <option value="2">
                <option value="3">
                <option value="4">
              </datalist>
      </div>
      <input type="submit" name="submit" class="register register-submit" value="Register">
    </form>
    <div class="register-help">
       <a href="Situatia_Notelor">Home</a>
       <a href="Autentificare">Login</a>
    </div>
</div>

</body>
</html>
