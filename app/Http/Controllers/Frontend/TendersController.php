<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use App\Model\Tenders;
use Illuminate\Http\Request;
use App;
class TendersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($status='all')
    {
        $active ='';
        $locale = App::getLocale();
        $name = 'name_' . $locale;
        if($status == 'done')
        {
            $tenders = Tenders::latest('created_at')->where( 'open', 'Действующие')->where($name, '!=', NULL)->paginate(
                $perPage = 8, $columns = ['*'], $pageName = 'tenders', $onFirstPage = 0
            );
            $active='done';
            return view('frontend/tenders/index', compact('tenders','active'));
        }
        if($status == 'close')
        {
            $tenders = Tenders::latest('created_at')->where( 'open', 'Завершённые')->where($name, '!=', NULL)->paginate(
                $perPage = 8, $columns = ['*'], $pageName = 'tenders', $onFirstPage = 0
            );
            $active='close';
            return view('frontend/tenders/index', compact('tenders','active'));
        }
        $tenders = Tenders::latest('created_at')->where($name, '!=', NULL)->paginate(
            $perPage = 8, $columns = ['*'], $pageName = 'tenders', $onFirstPage = 0
        );
      
       
        return view('frontend/tenders/index', compact('tenders','active'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tenders = Tenders::findOrFail($id);
        $allTenders = Tenders::paginate(7);
        return view('frontend/tenders/single', compact('tenders','allTenders'));
    }

      /*  public function tenders_done()
    {
       
        $tenders = Tenders::where( 'open', NULL)->paginate(
            $perPage = 8, $columns = ['*'], $pageName = 'tenders', $onFirstPage = 0
        );
          Blade::directive('datetime', function ($expression) {
            return "<?php echo ($expression)->format('m/d/Y H:i'); ?>";
        });
        return view('frontend.tenders.tenders', ['tenders'=> $tenders]);
    }
    public function tenders_close()
    {
       
        $tenders = Tenders::where( 'open', 1)->paginate(
            $perPage = 8, $columns = ['*'], $pageName = 'tenders', $onFirstPage = 0
        );
          Blade::directive('datetime', function ($expression) {
            return "<?php echo ($expression)->format('m/d/Y H:i'); ?>";
        });
        return view('frontend.tenders.tenders', ['tenders'=> $tenders]);
    } */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
