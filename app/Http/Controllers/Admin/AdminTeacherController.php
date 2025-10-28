<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Http\Request;

class AdminTeacherController extends Controller
{
    /**
     * Halaman utama daftar teacher.
     */
    public function index()
    {
        $teacher = Teacher::with('subject')->get();
        $subjects = Subject::all();

        // ✅ Pastikan view-nya berada di resources/views/components/admin/teacher.blade.php
        return view('components.admin.teacher', [
            'title' => 'Teacher List',
            'teacher' => $teacher,
            'subjects' => $subjects,
        ]);
    }

    /**
     * Simpan teacher baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email', // ✅ tambahkan validasi email
            'subject_id' => 'required|exists:subjects,id',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);

        // ✅ Gunakan hanya field yang diizinkan (hindari mass assignment error)
        Teacher::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject_id' => $request->subject_id,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->route('admin.teacher.index')->with('success', 'Teacher added successfully!');
    }

    /**
     * Tampilan khusus untuk komponen admin (misalnya dashboard embed).
     */
    public function adminIndex()
    {
        $teacher = Teacher::with('subject')->get();

        return view('components.admin.teacher', [
            'title' => 'Data Teachers (Admin)',
            'teacher' => $teacher
        ]);
    }
}
