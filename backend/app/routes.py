from flask import jsonify, request
from .rules import get_recommendation

def configure_routes(app):
    @app.route('/rekomendasi', methods=['POST'])
    def rekomendasi():
        data = request.get_json()
        
        # Ambil data dari request
        minat = data.get('minat').lower()
        nilai = data.get('nilai')
        skill = data.get('skill')  # Misalnya: ['matematika', 'fisika']
        kepribadian = data.get('kepribadian')  # Misalnya: ['analitis', 'detil']

        # Memanggil fungsi untuk mendapatkan rekomendasi
        result = get_recommendation(minat, nilai, skill, kepribadian)
        return jsonify(result)
