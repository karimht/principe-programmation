from flask import Flask, jsonify, request
import repository

app = Flask(__name__)

@app.route('/')
def home():
    return "C'est cool REST !"

@app.route('/students', methods=['GET'])
def get_students():
    students = repository.get_all_students()
    return jsonify(students), 200

@app.route('/students/<int:student_id>', methods=['GET'])
def get_student(student_id):
    student = repository.get_student_by_id(student_id)
    if student is None:
        return jsonify({"error": "student not found"}), 404
    return jsonify(student), 200


@app.route('/students', methods=['POST'])
def add_student():
    student_data = request.get_json()

    # On ajoute l'étudiant dans la base de données
    result = repository.add_student(student_data)
    return jsonify(result), 201  # Retourne un code HTTP 201 (créé)


@app.route('/students/<int:student_id>', methods=['DELETE'])
def delete_student(student_id):
    result = repository.delete_student(student_id)
    return jsonify(result), 200  # Retourne un code HTTP 200 (OK)

if __name__ == '__main__':
    app.run(host="0.0.0.0", port=5001, debug=True)
