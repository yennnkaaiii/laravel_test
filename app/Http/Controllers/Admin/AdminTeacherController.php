<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Http\Request;


class AdminTeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with('subject')->get();
        $subjects = Subject::all();

        return view('Admin.teacher.teacher', [
            'title' => 'Teacher List',
            'teachers' => $teachers,
            'subjects' => $subjects
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email',
            'subject_name' => 'required|string|max:255',
            'subject_description' => 'required|string',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
        ]);

        // Cek atau buat subject baru
        $subject = Subject::firstOrCreate(
            ['name' => $validated['subject_name']],
            ['description' => $validated['subject_description']]
        );

        // Buat teacher
        Teacher::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'address' => $validated['address'],
            'subject_id' => $subject->id,
        ]);

        return redirect()->route('admin.teacher.index')->with('success', 'Teacher berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email,' . $id,
            'subject_name' => 'required|string|max:255',
            'subject_description' => 'required|string',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
        ]);

        // Cari atau buat subject baru
        $subject = Subject::firstOrCreate(
            ['name' => $validated['subject_name']],
            ['description' => $validated['subject_description']]
        );

        // Jika subject sama tapi description berubah, update description
        if ($teacher->subject_id === $subject->id) {
            $subject->update(['description' => $validated['subject_description']]);
        }

        // Update teacher
        $teacher->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'address' => $validated['address'],
            'subject_id' => $subject->id,
        ]);

        return redirect()->route('admin.teacher.index')->with('success', 'Teacher berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $subjectId = $teacher->subject_id;
        
        $teacher->delete();

        // Hapus subject jika tidak ada teacher lain yang menggunakannya
        if ($subjectId) {
            $otherTeachers = Teacher::where('subject_id', $subjectId)->count();
            if ($otherTeachers === 0) {
                Subject::find($subjectId)?->delete();
            }
        }

        return redirect()->route('admin.teacher.index')->with('success', 'Teacher berhasil dihapus!');
    }
}
