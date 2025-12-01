<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Halaman utama (frontend)
     */
    public function index()
    {
        // Ambil semua data student dari database
        $students = Student::with('classroom')->get();

        // Kirim data ke view student.blade.php
        return view('student', [
            'title' => 'Student',
            'students' => $students
        ]);
    }

    /**
     * Halaman admin (backend)
     * (bisa diisi nanti kalau diperlukan)
     */
}
