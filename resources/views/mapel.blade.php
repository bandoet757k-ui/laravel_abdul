<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mata Pelajaran</title>
</head>
<body>
    <nav>
    <a href="/profil">Profil</a> | 
    <a href="/sapa/Ghoufur">Sapa</a> | 
    <a href="/mapel">Mapel</a>
</nav>
    <hr>

    <h1>Daftar Mata Pelajaran</h1>
    <ul>
        @foreach ($mapel as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</body>
</html>