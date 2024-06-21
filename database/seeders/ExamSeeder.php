<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exams = [
            [
                'teacher_id' => 2,
                'title' => 'Exam title 1',
                'description' => 'Exam with description'
            ],
            [
                'teacher_id' => 2,
                'title' => 'Exam title 2',
                'description' => ''
            ],
            [
                'teacher_id' => 3,
                'title' => 'Exam title 3',
                'description' => ''
            ],
        ];

        DB::table('exams')->insert($exams);

        $examQuestions = [
            [
                'teacher_id' => 2,
                'exam_id' => 1,
                'question' => 'Question 1 for exam 1',
                'type' => 'Alternative Response',
                'data' => json_encode(['true', 'false'])
            ],
            [
                'teacher_id' => 2,
                'exam_id' => 1,
                'question' => 'Question 2 for exam 1',
                'type' => 'Alternative Response',
                'data' => json_encode(['true', 'false'])
            ],
            [
                'teacher_id' => 2,
                'exam_id' => 2,
                'question' => 'Question 1 for exam 2',
                'type' => 'Alternative Response',
                'data' => json_encode(['true', 'false'])
            ],
            [
                'teacher_id' => 3,
                'exam_id' => 3,
                'question' => 'Question 1 for exam 3',
                'type' => 'Alternative Response',
                'data' => json_encode(['yes', 'no'])
            ],
        ];

        DB::table('exam_questions')->insert($examQuestions);
    }
}
