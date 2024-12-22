<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Fakultas</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h1 class="logo">FacuMatch</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('landing') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('recommendation') }}">Rekomendasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <main>
            <h1 class="text-center">Rekomendasi Fakultas</h1>
            <form method="POST" action="{{ route('get-recommendation') }}">
                @csrf
                <div class="form-group">
                    <label for="minat">Minat:</label>
                    <select name="minat" id="minat" class="form-control">
                        <option value="kedokteran">Kedokteran</option>
                        <option value="teknik">Teknik</option>
                        <option value="ekonomi">Ekonomi</option>
                        <option value="hukum">Hukum</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nilai">Nilai Rata-Rata:</label>
                    <input type="number" name="nilai" id="nilai" class="form-control" min="0" max="100" required>
                </div>

                <div class="form-group">
                    <label>Skill:</label><br>
                    <div class="form-check">
                        <input type="checkbox" name="skill[]" value="biologi" class="form-check-input" id="skill-biologi">
                        <label class="form-check-label" for="skill-biologi">Biologi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="skill[]" value="kimia" class="form-check-input" id="skill-kimia">
                        <label class="form-check-label" for="skill-kimia">Kimia</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="skill[]" value="mata pelajaran sains lainnya" class="form-check-input" id="skill-sains-lainnya">
                        <label class="form-check-label" for="skill-sains-lainnya">Mata Pelajaran Sains Lainnya</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="skill[]" value="matematika" class="form-check-input" id="skill-matematika">
                        <label class="form-check-label" for="skill-matematika">Matematika</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="skill[]" value="fisika" class="form-check-input" id="skill-fisika">
                        <label class="form-check-label" for="skill-fisika">Fisika</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="skill[]" value="logika" class="form-check-input" id="skill-logika">
                        <label class="form-check-label" for="skill-logika">Logika</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="skill[]" value="ekonomi" class="form-check-input" id="skill-ekonomi">
                        <label class="form-check-label" for="skill-ekonomi">Ekonomi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="skill[]" value="komunikasi" class="form-check-input" id="skill-komunikasi">
                        <label class="form-check-label" for="skill-komunikasi">Komunikasi</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="skill[]" value="bahasa" class="form-check-input" id="skill-bahasa">
                        <label class="form-check-label" for="skill-bahasa">Bahasa</label>
                    </div>
                    <!-- <p><small>*Tekan <b>Ctrl</b> (Windows) atau <b>Command</b> (Mac) untuk memilih lebih dari satu.</small></p> -->
                </div>

                <div class="form-group">
                    <label>Kepribadian:</label><br>
                    <div class="form-check">
                        <input type="checkbox" name="kepribadian[]" value="empati" class="form-check-input" id="kepribadian-empati">
                        <label class="form-check-label" for="kepribadian-empati">Empati</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="kepribadian[]" value="komunikatif" class="form-check-input" id="kepribadian-komunikatif">
                        <label class="form-check-label" for="kepribadian-komunikatif">Komunikatif</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="kepribadian[]" value="teliti" class="form-check-input" id="kepribadian-teliti">
                        <label class="form-check-label" for="kepribadian-teliti">Teliti</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="kepribadian[]" value="analitis" class="form-check-input" id="kepribadian-analitis">
                        <label class="form-check-label" for="kepribadian-analitis">Analitis</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="kepribadian[]" value="problem solving" class="form-check-input" id="kepribadian-problem-solving">
                        <label class="form-check-label" for="kepribadian-problem-solving">Problem Solving</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="kepribadian[]" value="detil" class="form-check-input" id="kepribadian-detil">
                        <label class="form-check-label" for="kepribadian-detil">Detil</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="kepribadian[]" value="strategis" class="form-check-input" id="kepribadian-strategis">
                        <label class="form-check-label" for="kepribadian-strategis">Strategis</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="kepribadian[]" value="logis" class="form-check-input" id="kepribadian-logis">
                        <label class="form-check-label" for="kepribadian-logis">Logis</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="kepribadian[]" value="argumentatif" class="form-check-input" id="kepribadian-argumentatif">
                        <label class="form-check-label" for="kepribadian-argumentatif">Argumentatif</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="kepribadian[]" value="persuasif" class="form-check-input" id="kepribadian-persuasif">
                        <label class="form-check-label" for="kepribadian-persuasif">Persuasif</label>
                    </div>
                    <!-- <p><small>*Tekan <b>Ctrl</b> (Windows) atau <b>Command</b> (Mac) untuk memilih lebih dari satu.</small></p> -->
                </div>

                <button type="submit" class="btn btn-dark">Dapatkan Rekomendasi</button>
            </form>
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3">
            © 2023 FacuMatch. All rights reserved.
            <br>
            <a href="#" class="text-dark">Kebijakan Privasi</a> | <a href="#" class="text-dark">Syarat dan Ketentuan</a>
        </div>
    </footer>

    <!-- Bootstrap JS dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>