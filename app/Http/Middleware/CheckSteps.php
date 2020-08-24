<?php

namespace App\Http\Middleware;

use App\Student_Basicinfo;
use App\Student_Programs;
use App\Student_Academics;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckSteps
{
    /**
     * Handle an incoming request.
     * Check enter step is completed
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $baseInfo = Student_Basicinfo::where('student_id', Auth::user()->id)->first();
        if ($baseInfo) {
            if ($baseInfo->programs()->count() == 0) {
                return redirect()->route('st_program');
            } else if ($baseInfo->academics()->count() == 0) {
                return redirect()->route('st_academics');
            }
            
        }
        return $next($request);
    }
}
