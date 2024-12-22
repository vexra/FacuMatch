def get_recommendation(minat, nilai, skill, kepribadian):
    """
    Memberikan rekomendasi fakultas berdasarkan minat, nilai, skill, dan kepribadian.

    Args:
        minat (str): Minat pengguna (misalnya "kedokteran", "teknik").
        nilai (int): Nilai akademik pengguna.
        skill (list): Daftar keterampilan yang dimiliki pengguna.
        kepribadian (list): Daftar kepribadian pengguna.

    Returns:
        dict: Rekomendasi fakultas dengan nilai keyakinan atau pesan error.
    """
    try:
        nilai = int(nilai)
    except ValueError:
        return {"error": "Nilai harus berupa angka."}

    # Basis Pengetahuan (berdasarkan sumber seperti deskripsi fakultas umum)
    rules = {
        "kedokteran": {
            "nilai_min": 90,
            "skill": ["biologi", "kimia", "mata pelajaran sains lainnya"],
            "kepribadian": ["empati", "komunikatif", "teliti"],
            "fakultas": "Fakultas Kedokteran",
            "sumber": "https://www.example.com/kedokteran"
        },
        "teknik": {
            "nilai_min": 80,
            "skill": ["matematika", "fisika", "logika"],
            "kepribadian": ["analitis", "problem solving", "detil"],
            "fakultas": "Fakultas Teknik",
            "sumber": "https://www.example.com/teknik"
        },
        "ekonomi": {
            "nilai_min": 80,
            "skill": ["matematika", "ekonomi", "komunikasi"],
            "kepribadian": ["analitis", "strategis", "komunikatif"],
            "fakultas": "Fakultas Ekonomi dan Bisnis",
            "sumber": "https://www.example.com/ekonomi"
        },
        "hukum": {
            "nilai_min": 75,
            "skill": ["bahasa", "komunikasi", "logika"],
            "kepribadian": ["logis", "argumentatif", "persuasif"],
            "fakultas": "Fakultas Hukum",
            "sumber": "https://www.example.com/hukum"
        }
    }

    # Evaluasi berdasarkan minat
    rule = rules.get(minat.lower())
    if rule:
        # Hitung kecocokan nilai akademik
        nilai_cocok = min(1, nilai / rule["nilai_min"])

        # Hitung kecocokan skill (persentase keterampilan yang sesuai)
        skill_cocok = len([s for s in skill if s in rule["skill"]]) / len(rule["skill"])

        # Hitung kecocokan kepribadian (persentase kepribadian yang sesuai)
        kepribadian_cocok = len([k for k in kepribadian if k in rule["kepribadian"]]) / len(rule["kepribadian"])

        # Nilai keyakinan akhir sebagai rata-rata
        nilai_keyakinan = (nilai_cocok + skill_cocok + kepribadian_cocok) / 3

        if nilai_keyakinan > 0.5:  # Ambang batas untuk rekomendasi
            return {
                "fakultas": rule["fakultas"],
                "nilai_keyakinan": round(nilai_keyakinan * 100, 2),
                "sumber": rule["sumber"]
            }
        else:
            return {"error": "Profil Anda kurang cocok dengan fakultas ini."}

    return {"error": "Minat yang dimasukkan tidak ditemukan."}