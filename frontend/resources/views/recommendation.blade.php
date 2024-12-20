<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Fakultas</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('landing') }}">Beranda</a></li>
            <li><a href="{{ route('recommendation') }}">Rekomendasi</a></li>
        </ul>
    </nav>
    <main>
        <h1>Rekomendasi Fakultas</h1>
        <form method="POST" action="{{ route('get-recommendation') }}">
            @csrf
            <label for="minat">Minat:</label>
            <select name="minat" id="minat">
                <option value="kedokteran">Kedokteran</option>
                <option value="teknik">Teknik</option>
                <option value="ekonomi">Ekonomi</option>
                <option value="hukum">Hukum</option>
            </select>

            <label for="nilai">Nilai:</label>
            <!-- Input numerik dengan batasan dari 0 hingga 100 -->
            <input type="number" name="nilai" id="nilai" min="0" max="100" required>

            <label for="skill">Skill:</label>
            <select name="skill[]" id="skill" multiple required>
                <option value="biologi">Biologi</option>
                <option value="kimia">Kimia</option>
                <option value="mata pelajaran sains lainnya">Mata Pelajaran Sains Lainnya</option>
                <option value="matematika">Matematika</option>
                <option value="fisika">Fisika</option>
                <option value="logika">Logika</option>
                <option value="ekonomi">Ekonomi</option>
                <option value="komunikasi">Komunikasi</option>
                <option value="bahasa">Bahasa</option>
            </select>
            <p><small>*Tekan <b>Ctrl</b> (Windows) atau <b>Command</b> (Mac) untuk memilih lebih dari satu.</small></p>

            <label for="kepribadian">Kepribadian:</label>
            <select name="kepribadian[]" id="kepribadian" multiple required>
                <option value="empati">Empati</option>
                <option value="komunikatif">Komunikatif</option>
                <option value="teliti">Teliti</option>
                <option value="analitis">Analitis</option>
                <option value="problem solving">Problem Solving</option>
                <option value="detil">Detil</option>
                <option value="strategis">Strategis</option>
                <option value="logis">Logis</option>
                <option value="argumentatif">Argumentatif</option>
                <option value="persuasif">Persuasif</option>
            </select>
            <p><small>*Tekan <b>Ctrl</b> (Windows) atau <b>Command</b> (Mac) untuk memilih lebih dari satu.</small></p>

            <button type="submit">Dapatkan Rekomendasi</button>
        </form>
    </main>
</body>
</html>
