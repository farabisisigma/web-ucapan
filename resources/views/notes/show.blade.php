<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web ucapan</title>
    <link rel="stylesheet" href="{{ asset ('css/style.css')}}">
</head>

<body>
    <button type="button" id="tombolTema">gelap/terang</button>
   
    <div class="kartu">
    <p class="pesan"> {{ $note->message}} </p>
    @if ($note->is_anonymous)
     <p class="pengirim">dari seseorang: (anonim)</p>
     @else ($note->sender_name)
     <p>{{$note->sender_name ?? 'pengirim tidak memberikan nama'}}</p>
     @endif
     </div>
       <script src="{{ asset('js/tema.js')}}"></script>
</body>
</html>