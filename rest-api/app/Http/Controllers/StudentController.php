<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
	{
        # menggunakan model Student untuk select data
		$students = Student::all();

		if ($students) {
			$response = [
				'message' => 'Menampilkan Data Semua Student',
				'data' => $students,
			];
			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Data tidak ada'
			];
			return response()->json($response, 400);
		}
	}

	public function show($id){
		$student = Student::find($id);

		if($student){
			$response = [
				'message' => 'detail student',
				'data' => $student,
			];

			return response()->json($response, 200);
		}
		else{
			$response = [
				'message' => 'Data student tidak ada'
			];
			return response()->json($response, 404);
		}

	}

	public function store(Request $request) 
	{

		$input = [
			'nama' => $request->nama,
			'nim' => $request->nim,
			'email' => $request->email,
			'jurusan' => $request->jurusan
		];

		$student = Student::create($request->all());

		$response = [
			'message' => 'Data Student Berhasil Dibuat',
			'data' => $student,
		];

		return response()->json($response, 201);
	}

	public function update(Request $request, $id)
    {
		$student = Student::find($id);
		if($student){
			
			$student->update($request->all());
			
			$response = [
				'message' => 'Data Student Berhasil diupdate',
				'data' => $student,
			];
			return response()->json($response, 200);
		}
		else{
			$response = [
				'message' => 'Data student tidak ada'
			];
			return response()->json($response, 404);
		}
		

    }

	public function destroy($id){
		$student = Student::find($id);
		if($student){
			$student->delete();
			$response = [
				'message' => 'Data student berhasil dihapus'
			];
			return response()->json($response, 200);
		}
		else{
			$response = [
				'message' => 'Data student tidak ada'
			];
			return response()->json($response, 404);
		}
	}
}