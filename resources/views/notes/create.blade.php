<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buat ucapan</title>
    <link rel="stylesheet" href="{{ asset ('css/style.css')}}">
</head>
<body>
    <h1>tulis ucapan kamu</h1>
    <form method="post" action="/simpan">
        @csrf
        <label for="message">tulis pesanmmu:</label>
        <textarea name="message" id="message"></textarea>
        <label for="sender_name">nama kamu(opsional):</label>
        <input type="text" name="sender_name" id="sender_name"></input>
        <input type="checkbox" name="is_anonymous" id="is_anonymous"></input>
        <label for="is_anonymous">kirim sebagai anonim</label>
        <button type="submit">kirim</button>
    </form>
</body>
</html>