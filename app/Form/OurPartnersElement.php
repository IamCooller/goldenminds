<?

namespace App\Form;

use SleepingOwl\Admin\Form\Element\Files;



class OurPartnersElement extends Files{

/*     protected $view = __DIR__ . '/../../resources/views/form/element/partners';
 */
    

     /**
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function render()
    {

        return view(
            $this->getView(),
            $this->toArray()
        );
    }
}