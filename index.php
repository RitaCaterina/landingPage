

<html>
<head>
 
    <link rel="stylesheet" href="styles.css">
    <title>Landing Page</title>
</head>
<body>
    <h1>Compila il modulo sottostante</h1>
    <form method="post" action="process_form.php">
        <div class="form-group">
            <label for="company_name">Nome azienda</label>
            <input type="text" id="company_name" name="company_name" required>
        </div>
        <div class="form-group">
            <label for="full_name">Nome completo</label>
            <input type="text" id="full_name" name="full_name" required>
        </div>
        <div class="form-group">
        <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
        <label for="phone">Telefono</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-group">
        <label   label for="service">Scegli servizio</label>
        <select id="service" name="service" required>
            <option value="">Seleziona un'opzione</option>
       
            </select>
            </div>

       
        <button type="submit">Invia richiesta</button>
    </form>
</body>
</html>
