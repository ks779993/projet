<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Le formulaire d'envoi du message</title>
</head>
<body style="background: #e5e5e5; padding: 30px;" >

<div style="max-width: 320px; margin: 0 auto; padding: 20px; background: #fff;">
    <h3>Message via le SMTP Google :</h3>
    <div>{{ session('message') }}</div>
</div>

@if (session()->has('success'))
    <p>{{ session('success') }}</p>
@endif

<form action="{{ route('send.message.google') }}" method="POST">
		<label for="message" >Message</label>
		{{ @csrf_field() }}
		<p>
			<textarea name="message" id="message" rows="4" placeholder="Message à envoyer ici" ></textarea>
			@error('message')
<p>{{ $message }}</p>
@enderror
		</p>
		<button type="submit" >Envoyer</button>
	</form>

</body>
</html>