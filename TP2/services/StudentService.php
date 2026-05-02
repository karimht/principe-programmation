<?php
class StudentService
{
    public static function getAllStudents()
    {
        $url = API_BASE_URL . '/students';
        $response = file_get_contents($url);

        return json_decode($response, true);
    }

    public static function get_student_by_id($id)
    {
        $url = API_BASE_URL . '/students/' . $id;
        $response = file_get_contents($url);

        return json_decode($response, true);
    }

    // AJOUTER CETTE FONCTION
    public static function addStudent($prenom, $age)
    {
        $url = API_BASE_URL . '/students';

        $data = json_encode([
            'prenom' => $prenom,
            'age' => $age
        ]);

        $options = [
            'http' => [
                'method' => 'POST',
                'header' => "Content-Type: application/json",
                'content' => $data
            ]
        ];

        $context = stream_context_create($options);
        file_get_contents($url, false, $context);
    }

    // AJOUTER CETTE FONCTION
    public static function deleteStudent($id)
    {
        $url = API_BASE_URL . '/students/' . $id;

        $options = [
            'http' => [
                'method' => 'DELETE'
            ]
        ];

        $context = stream_context_create($options);
        file_get_contents($url, false, $context);
    }
}