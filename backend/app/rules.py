def get_recommendation(minat, nilai, skill, kepribadian):
    # Aturan berdasarkan minat
    
    try:
        nilai = int(nilai)
    except ValueError:
        return {"error": "Nilai harus berupa angka."}
    
    rules = {
        "kedokteran": {
            "nilai_min": 80,
            "skill": ["biologi", "kimia", "mata pelajaran sains lainnya"],
            "kepribadian": ["empati", "komunikatif", "teliti"],
            "fakultas": "Fakultas Kedokteran"
        },
        "teknik": {
            "nilai_min": 75,
            "skill": ["matematika", "fisika", "logika"],
            "kepribadian": ["analitis", "problem solving", "detil"],
            "fakultas": "Fakultas Teknik"
        },
        "ekonomi": {
            "nilai_min": 70,
            "skill": ["matematika", "ekonomi", "komunikasi"],
            "kepribadian": ["analitis", "strategis", "komunikatif"],
            "fakultas": "Fakultas Ekonomi dan Bisnis"
        },
        "hukum": {
            "nilai_min": 75,
            "skill": ["bahasa", "komunikasi", "logika"],
            "kepribadian": ["logis", "argumentatif", "persuasif"],
            "fakultas": "Fakultas Hukum"
        },
        # Tambahkan aturan lainnya untuk fakultas lainnya
    }

    # Evaluasi berdasarkan minat
    rule = rules.get(minat.lower())
    if rule:
        # Memeriksa apakah nilai cukup tinggi
        if nilai < rule["nilai_min"]:
            return {"error": "Nilai akhir Anda tidak mencukupi untuk fakultas ini."}
        
        # Memeriksa apakah skill sesuai
        if not all(skill_item in rule["skill"] for skill_item in skill):
            return {"error": "Keahlian Anda tidak sesuai dengan fakultas ini."}
        
        # Memeriksa apakah kepribadian cocok
        if not any(kepribadian_item in rule["kepribadian"] for kepribadian_item in kepribadian):
            return {"error": "Kepribadian Anda tidak cocok dengan fakultas ini."}
        
        # Jika semua cocok, rekomendasikan fakultas
        return {"fakultas": rule["fakultas"]}
    
    return {"error": "Minat yang dimasukkan tidak ditemukan."}
