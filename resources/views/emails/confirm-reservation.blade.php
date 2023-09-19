<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Confirmation de réservation</title>
</head>
<body style="background: #e5e5e5; padding: 30px;">

<div style="max-width: 600px; margin: 0 auto; padding: 20px; background: #fff;">
    <h2>Confirmation de réservation</h2>

    <p>Votre réservation a été confirmée avec succès. Voici les détails :</p>

    <ul>
        <li><strong>Numéro de réservation :</strong> {{ $reservation->reservation_number }}</li>
        <li><strong>Date de réservation :</strong> {{ $reservation->created_at->format('d/m/Y H:i') }}</li>
        <li><strong>Car :</strong> {{ $reservation->car->compagnie->name }}</li>
        <li><strong>Nombre de places réservées :</strong> {{ $reservation->number_of_seats }}</li>
        <!-- Ajoutez d'autres détails de réservation ici -->
    </ul>

    <p>Merci de nous avoir choisis pour votre voyage. Nous avons hâte de vous accueillir. en cas de contrainte veuillez signaler 30mn avant le depart. n'hésitez pas à nous contacter.</p>

    <p>Meilleures salutations,</p>
    <p>Votre équipe de réservation</p>
</div>

</body>
</html>
