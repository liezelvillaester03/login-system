<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Student;
use App\Models\Facilitator;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
{
    $request->validate([
        'username' => 'required|string',
        'password' => 'required'
    ]);

    $admin = Admin::where('username', $request->username)->first();

    if ($admin && $request->password === $admin->password) {
        session(['admin' => $admin->id]);
        return redirect()->route('admin.dashboard');
    } else {
        return redirect()->route('admin.login')->withErrors(['username' => 'Invalid credentials']);
    }
}


    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
        session()->forget('admin');
        return redirect()->route('admin.login');
    }

    public function showAddStudentForm()
    {
        return view('admin.add-student');
    }

    public function showAddFacilitatorForm()
    {
        return view('admin.add-facilitator');
    }

    public function storeStudent(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students',
            'password' => 'required|string|min:8|confirmed',
        ]);

        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Student added successfully');
    }

    public function storeFacilitator(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:facilitators',
            'password' => 'required|string|min:8|confirmed',
        ]);

        Facilitator::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Facilitator added successfully');
    }

    public function editStudent($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.edit-student', compact('student'));
    }

    public function updateStudent(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $student = Student::findOrFail($id);
        $student->name = $request->name;
        $student->email = $request->email;

        if ($request->filled('password')) {
            $student->password = Hash::make($request->password);
        }

        $student->save();

        return redirect()->route('admin.dashboard')->with('success', 'Student updated successfully');
    }

    public function deleteStudent($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Student deleted successfully');
    }
}
