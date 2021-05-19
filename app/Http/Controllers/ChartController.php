<?php
  
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Models\User;
use App\Charts\UserLineChart;
use App\Models\Form;
   
class ChartController extends Controller
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function chartLine()
    {
        $api = url('/chart-line-ajax');
   
        $chart = new UserLineChart;

        //Query para obtener las columnas de work enviroment            
        $col = Form::select(\DB::raw("workEnviroment as calificacion, COUNT(*) as count"))
                    ->groupBy('workEnviroment')
                    ->pluck('calificacion');

        //$chart->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'])->load($api);
        $chart->labels($col)->load($api);

        $chart2 = new UserLineChart;

        //Query para obtener las columnas de work enviroment            
        $col2 = Form::select(\DB::raw("workEnviroment as calificacion, COUNT(*) as count"))
                    ->groupBy('workEnviroment')
                    ->pluck('calificacion');

        //$chart->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'])->load($api);
        $chart2->labels($col)->load($api);
          
        return view('chartLine', compact('chart', 'chart2'));
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function chartLineAjax(Request $request)
    {
        
        $year = $request->has('year') ? $request->year : date('Y');
        /*$users = Form::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', $year)
                    ->groupBy(\DB::raw("MONTH(created_at)"))
                    ->pluck('count');*/

        $users = Form::select(\DB::raw("COUNT(*) as count, MONTH(created_at) as month"))
                    ->whereYear('created_at', $year)
                    ->groupBy('month')
                    ->pluck('count');
        
        //Query para obtener work enviroment            
        $we = Form::select(\DB::raw("workEnviroment as calificacion, COUNT(*) as count"))
                    ->groupBy('workEnviroment')
                    ->pluck('count');

        $chart = new UserLineChart;
  
        $chart->dataset('Percepcion del Ambiente de trabajo', 'bar', $we)->options([
                    'fill' => 'true',
                    'borderColor' => '#51C1C0'
                ]);

                $users2 = Form::select(\DB::raw("COUNT(*) as count, MONTH(created_at) as month"))
                ->whereYear('created_at', $year)
                ->groupBy('month')
                ->pluck('count');
    
    //Query para obtener work enviroment            
    $we2 = Form::select(\DB::raw("workEnviroment as calificacion, COUNT(*) as count"))
                ->groupBy('workEnviroment')
                ->pluck('count');

    $chart2 = new UserLineChart;

    $chart2->dataset('Percepcion del Ambiente de trabajo', 'bar', $we)->options([
                'fill' => 'true',
                'borderColor' => '#51C1C0'
            ]);
  
        return $chart->api();
    }

    
}