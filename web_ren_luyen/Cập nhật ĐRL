<?php

namespace App\Http\Controllers;

use App\Models\Evidence;
use App\Models\TrainingScore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrainingScoreController extends Controller
{
    public function approveEvidence($evidenceId)
    {
        // 1. Lấy evidence
        $evidence = Evidence::findOrFail($evidenceId);

        // 2. Chỉ xử lý khi chưa approve
        if ($evidence->status !== 'approved') {

            DB::transaction(function () use ($evidence) {

                // 3. Update trạng thái evidence
                $evidence->update([
                    'status' => 'approved'
                ]);

                // 4. Cộng điểm rèn luyện
                TrainingScore::updateOrCreate(
                    [
                        'student_id' => $evidence->student_id,
                        'semester'   => '2024-2', // hoặc lấy động
                    ],
                    [
                        'total_score' => DB::raw(
                            'COALESCE(total_score, 0) + ' . $evidence->score
                        )
                    ]
                );
            });
        }

        return response()->json([
            'message' => 'Approve evidence & update training score successfully'
        ]);
    }
}
